import asyncHandler from 'express-async-handler';
import generateToken from '../utils/generateToken.js';
import User from '../models/UserModel.js';
import { json } from 'express';

// authinticate new user and getting there data from the database and generate token for the loged in user
const authUser = asyncHandler(async (req, res) => {
  const { email, password } = req.body;

  const user = await User.findOne({ email: email });

  if (user && (await user.matchPassword(password))) {
    res.json({
      _id: user._id,
      name: user.name,
      email: user.email,
      phoneNumber: user.phoneNumber,
      totalOrders: user.totalOrders,
      token: generateToken(user._id),
    });
  } else {
    res.status(401);
    throw new Error('Invalid email or password');
  }
});

//creating new user in the database and log them in by generating a new token for them
const registerUser = asyncHandler(async (req, res) => {
  const { name, email, phoneNumber, password } = req.body;

  const userExists = await User.findOne({ email: email });

  if (userExists) {
    res.status(400);
    throw new Error('user already exists');
  }

  const user = await User.create({
    name,
    email,
    password,
    phoneNumber,
  });

  if (user) {
    res.status(201).json({
      _id: user._id,
      name: user.name,
      email: user.email,
      phoneNumber: user.phoneNumber,
      totalOrders: user.totalOrders,
      token: generateToken(user._id),
    });
  } else {
    res.status(400);
    throw new Error('Invalid user data');
  }
});

const getUserProfile = asyncHandler(async (req, res) => {
  const user = await User.findById(req.user._id);

  if (user) {
    res.json({
      _id: user._id,
      name: user.name,
      email: user.email,
      phoneNumber: user.phoneNumber,
      totalOrders: user.totalOrders,
    });
  } else {
    res.status(404);
    throw new Error('user not found');
  }
});

const deleteUser = asyncHandler(async (req, res) => {
  const user = await User.findById(req.user._id);

  const userPass = req.headers.body;

  if (user && (await user.matchPassword(userPass))) {
    user.deleteOne();
    res.send('user deleted');
  } else {
    res.status(401);
    throw new Error('Invalid password');
  }
});

const updateUSerProfile = asyncHandler(async (req, res) => {
  const user = await User.findById(req.user._id);

  if (user) {
    user.name = req.body.name || user.name;
    user.email = req.body.email || user.email;
    user.phoneNumber = req.body.phoneNumber || user.phoneNumber;
    if (req.body.password) {
      user.password = req.body.password;
    }

    const updatedUser = await user.save();

    res.json({
      _id: updatedUser._id,
      name: updatedUser.name,
      email: updatedUser.email,
      phoneNumber: updatedUser.phoneNumber,
      token: generateToken(updatedUser._id),
    });
  } else {
    res.status(404);
    throw new Error('User not found');
  }
});

const addOrders = asyncHandler(async (req, res) => {
  const user = await User.findById(req.user._id);

  const newOrders = {
    orders: req.body.itemList,
    totalPrice: req.body.totalPrice,
  };

  user.totalOrders.push(newOrders);
  console.log(user);
  const updatedUser = await user.save();

  res.json({
    _id: updatedUser._id,
    name: updatedUser.name,
    email: updatedUser.email,
    phoneNumber: updatedUser.phoneNumber,
    totalOrders: updatedUser.totalOrders,
    totalPrice: updatedUser.totalPrice,
  });
});

export {
  authUser,
  registerUser,
  getUserProfile,
  updateUSerProfile,
  deleteUser,
  addOrders,
};
