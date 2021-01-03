import express from 'express';
import {
  authUser,
  getUserProfile,
  registerUser,
  updateUSerProfile,
  deleteUser,
  addOrders,
} from '../controllers/usercontroller.js';
import { protect } from '../middleware/authMiddleware.js';
const router = express.Router();

router.route('/').post(registerUser);
router.post('/login', authUser);
router
  .route('/profile')
  .get(protect, getUserProfile)
  .put(protect, updateUSerProfile);

// .delete(protect, deleteUser);

router.route('/delete/').delete(protect, deleteUser);
router.route('/order').put(protect, addOrders);

export default router;
