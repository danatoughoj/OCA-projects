import ProfileOrdersCards from '../components/ProfileOrdersCards';
import React, { useEffect, useState } from 'react';
import { Container, Row, Col, Form, Button } from 'react-bootstrap';
import { useDispatch, useSelector } from 'react-redux';
import { USER_UPDATE_PROFILE_RESET } from '../constants/userConstants';
import { getUserDetails, updateUserProfile } from '../actions/userActions';
import ConfirmDelete from '../components/confirmDelete';
import { Avatar } from '@material-ui/core';

const alignment_style = {
  display: 'flex',
  justifyContent: 'center',
  alignItems: 'center',
};
const profile_page_font_size = {
  fontSize: '1.1rem',
};

const ProfilePage = ({ history }) => {
  const [editFormToggle, setEditFormToggle] = useState(false);
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [phoneNumber, setPhoneNumber] = useState('');
  const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');
  const [message, setMessage] = useState(null);
  const [isSubmit, setIsSubmit] = useState(false);
  const [userOrders, setUserOrders] = useState([]);

  let close = () => {
    setIsSubmit(false);
  };

  const dispatch = useDispatch();

  const userDetails = useSelector((state) => state.userDetails);
  const { loading, error, user } = userDetails;

  const userLogin = useSelector((state) => state.userLogin);
  const { userInfo } = userLogin;

  const userUpdateProfile = useSelector((state) => state.userUpdateProfile);
  const { success } = userUpdateProfile;

  console.log(userDetails);

  useEffect(() => {
    if (!userInfo) {
      history.push('/login');
    } else {
      if (!user || !user.name || success) {
        dispatch({ type: USER_UPDATE_PROFILE_RESET });
        dispatch(getUserDetails('profile'));
      } else {
        setName(userInfo.name);
        setPhoneNumber(user.phoneNumber);
        setEmail(user.email);
        setUserOrders(user.totalOrders);
      }
    }
  }, [dispatch, history, userInfo, user, success]);

  // console.log(userInfo.token);

  const data = {
    title: `Are you sure you want to delete your account ? Enter your password to confirm.`,
    subTitle: 'It is sad to see you go :(',
  };

  const editProfile = () => {
    setEditFormToggle(true);
  };

  const cancelEdits = (e) => {
    e.preventDefault();
    setEditFormToggle(false);
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    if (password !== confirmPassword) {
      setMessage('Password do not match');
    } else {
      dispatch(
        updateUserProfile({
          id: user._id,
          name,
          phoneNumber,
          email,
          password,
        })
      );

      setEditFormToggle(false);
    }
  };

  document.title = 'MadBurger | Profile';
  document.getElementsByTagName('META')[3].content =
    'MadBurger is the best burger resturant in town, we provide with a history list of all your pas orders to go easly go back to them ';

  return (
    <Container fluid className='mt-5'>
      <Row style={alignment_style}>
        <Col className='p-5' style={{ minWidth: '200px', maxWidth: '450px' }}>
          {/* <Avatar  src={name[0]} /> */}
          <div style={alignment_style}>
            <Avatar
              src={email}
              alt='user image photo'
              style={{
                width: '150px',
                height: '150px',
                border: '#333 solid 2px',
                borderRadius: '50%',
                fontSize: '4rem',
              }}
              className='sidebar__avatar'
            >
              {' '}
              {userInfo.name[0]}{' '}
            </Avatar>
          </div>
          <div className='jumbotron mt-3'>
            {!editFormToggle ? (
              <div>
                <h5 style={profile_page_font_size}>
                  <i className='fas fa-user mr-3'></i>
                  {name}
                </h5>
                <h5 style={profile_page_font_size}>
                  <i className='fas fa-phone mr-3'></i>
                  {phoneNumber}
                </h5>
                <h5 style={profile_page_font_size}>
                  <i className='fas fa-envelope mr-3'></i>
                  {email}
                </h5>
                <div style={alignment_style}>
                  <Button
                    className='mt-3'
                    variant='danger'
                    onClick={() => setIsSubmit(true)}
                  >
                    {' '}
                    Delete Account{' '}
                  </Button>
                  <ConfirmDelete show={isSubmit} onHide={close} data={data} />
                </div>
              </div>
            ) : (
              <Form onSubmit={handleSubmit}>
                <Form.Group controlId='Input1'>
                  <Row style={alignment_style}>
                    <Col sm={1}>
                      <i className='fas fa-user mr-3 profile_page_font_size'></i>
                    </Col>
                    <Col sm={10}>
                      <Form.Control
                        type='text'
                        name='name'
                        placeholder='Full Name'
                        defaultValue={name}
                        onChange={(e) => setName(e.target.value)}
                      />
                    </Col>
                  </Row>
                </Form.Group>
                <Form.Group controlId='Input2'>
                  <Row style={alignment_style}>
                    <Col sm={1}>
                      <i className='fas fa-phone mr-3 profile_page_font_size'></i>
                    </Col>
                    <Col sm={10}>
                      <Form.Control
                        type='text'
                        name='phoneNumber'
                        placeholder='Phone Number'
                        defaultValue={phoneNumber}
                        onChange={(e) => setPhoneNumber(e.target.value)}
                      />
                    </Col>
                  </Row>
                </Form.Group>
                <Form.Group controlId='Input3'>
                  <Row style={alignment_style}>
                    <Col sm={1}>
                      <i className='fas fa-unlock profile_page_font_size'></i>
                    </Col>
                    <Col sm={10}>
                      <Form.Control
                        type='password'
                        name='password'
                        placeholder='Password'
                        defaultValue={password}
                        onChange={(e) => setPassword(e.target.value)}
                      />
                    </Col>
                  </Row>
                </Form.Group>

                <Form.Group controlId='Input4'>
                  <Row style={alignment_style}>
                    <Col sm={1}>
                      <i className='fas fa-unlock profile_page_font_size'></i>
                    </Col>
                    <Col sm={10}>
                      <Form.Control
                        type='password'
                        name='confirmPassword'
                        placeholder='Confirm Password'
                        defaultValue={confirmPassword}
                        onChange={(e) => setConfirmPassword(e.target.value)}
                      />
                    </Col>
                  </Row>
                </Form.Group>
                <Row style={alignment_style}>
                  <Col>
                    <Button
                      block
                      variant='warning'
                      type='submit'
                      // style={{ width: '35%' }}
                      // onClick={saveEdits}
                    >
                      {' '}
                      Save{' '}
                    </Button>
                  </Col>
                  <Col>
                    <Button
                      block
                      variant='danger'
                      type='cancel'
                      // style={{ width: '35%' }}
                      onClick={cancelEdits}
                    >
                      {' '}
                      cancel{' '}
                    </Button>
                  </Col>
                </Row>
              </Form>
            )}
          </div>
          {!editFormToggle && (
            <div style={alignment_style}>
              <Button variant='warning' type='submit' onClick={editProfile}>
                Edit Profile
              </Button>
            </div>
          )}
        </Col>
        <Col sm={5} style={{ marginTop: '5rem' }}>
          <div>
            <h2 style={{ textAlign: 'center' }}>Orders History</h2>
          </div>
          <div
            style={{
              height: '60vh',
              overflowY: 'scroll',
              overflowX: 'hidden',
              padding: '0.5rem',
            }}
          >
            <div>
              <ProfileOrdersCards totalOrders={userOrders} />
            </div>
          </div>
        </Col>
      </Row>
    </Container>
  );
};

export default ProfilePage;
