import { useState } from 'react';
import { Redirect } from 'react-router-dom';

//bootstrap
import { Modal, Row, Col } from 'react-bootstrap';

import { Form, Card, ButtonGroup, Button } from 'react-bootstrap/';

import axios from 'axios';

import { logout } from '../actions/userActions';
import { useDispatch, useSelector } from 'react-redux';
const stylesNode = {
  container: {
    width: '100%',
    margin: '0 auto',
  },
  input: {
    width: '30vw',
    height: '2rem',
    padding: '1rem',
  },
};

export default function AddMsg(props, { history }) {
  const [modalData, setModalData] = useState(props.data);
  const [password, setPassword] = useState('');
  const [id, setId] = useState('');
  const [logoutRe, setLogoutRe] = useState(false);

  const userLogin = useSelector((state) => state.userLogin);
  const { userInfo } = userLogin;

  const dispatch = useDispatch();

  //--------------//-------------
  const close = () => {
    props.onHide();
  };

  const confirmDelete = async () => {
    setId(userInfo._id);
    const config = {
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${userInfo.token}`,

        body: password,
      },
    };
    const userPassword = {
      password: password,
    };
    const newPass = { password: password };
    console.log(config);

    axios
      .delete(`http://localhost:8000/api/users/delete`, config)
      .then(() => {
        // localStorage.removeItem('userInfo');
        setLogoutRe(true);
        dispatch(logout());
      })
      .catch((err) => console.log(err));
  };

  //   const onSubmit = (data) => {};

  const handleSubmit = () => {
    // e.preventDefault();
  };

  return (
    <Modal
      {...props}
      size='md'
      aria-labelledby='contained-modal-title-vcenter'
      centered
    >
      {logoutRe && <Redirect to='/login' />}
      <Modal.Body>
        <div className='Msg'>
          <Card.Body>
            <Card.Title>{modalData.title}</Card.Title>
            <Card.Title>{modalData.subTitle}</Card.Title>
          </Card.Body>
          <Card.Footer>
            <Form onSubmit={handleSubmit()}>
              <Row>
                <Col sm={1}>
                  <i className='fas fa-unlock profile_page_font_size'></i>
                </Col>
                <Col sm={10}>
                  <Form.Control
                    type='password'
                    name='password'
                    defaultValue={password}
                    onChange={(e) => setPassword(e.target.value)}
                  />
                </Col>
              </Row>
            </Form>
          </Card.Footer>
        </div>
      </Modal.Body>
      <Modal.Footer>
        <Col>
          <Button block variant='warning' type='submit' onClick={confirmDelete}>
            {' '}
            Confirm{' '}
          </Button>
        </Col>
        <Col>
          <Button block variant='danger' type='cancel' onClick={close}>
            {' '}
            cancel{' '}
          </Button>
        </Col>
      </Modal.Footer>
    </Modal>
  );
}
