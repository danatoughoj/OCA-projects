import jwt from 'jsonwebtoken';
import asyncHandler from 'express-async-handler';
import User from '../models/UserModel.js';

const protect = asyncHandler(async (req, res, next) => {
  let token;

  if (
    req.headers.authorization &&
    req.headers.authorization.startsWith('Bearer')
  ) {
    try {
      token = req.headers.authorization.split(' ')[1];
      const decod = jwt.verify(token, process.env.JWT_SECRET);
      req.user = await User.findById(decod.id).select('-password');
      next();
    } catch (error) {
      console.log(error);
      res.status(401);
      throw new Error('Not authorized, token failed');
    }
  }
  console.log(token);

  if (!token) {
    res.status(401);
    throw new Error('not authorized, no token');
  }
});

export { protect };
