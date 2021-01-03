import React, { useEffect, useState } from 'react';
import { Link, Redirect } from 'react-router-dom';
import {
  Row,
  Col,
  ListGroup,
  Image,
  Form,
  Button,
  Card,
  Container,
} from 'react-bootstrap';

import CounterInput from 'react-counter-input';

import Message from '../components/message';
import axios from 'axios';
import { useSelector } from 'react-redux';

const CartScreen = ({ match, location, history }) => {
  const cartItems = localStorage.getItem('cartItems')
    ? JSON.parse(localStorage.getItem('cartItems'))
    : [];

  const [itemsList, setItemsList] = useState(cartItems);

  const [logout, setLogout] = useState(false);

  const [userData, setUserData] = useState(
    JSON.parse(localStorage.getItem('userInfo'))
  );

  const removeFromCartHandler = (id) => {
    let offers = JSON.parse(localStorage.getItem('cartItems'));
    const removeId = id;
    let newOffers = offers.filter((x) => x.id !== removeId);
    let update = [...newOffers];

    localStorage.setItem('cartItems', JSON.stringify(update));
    setItemsList(update);
  };
  // const userInfo = ;
  const checkoutHandler = async () => {
    // console.log(userData);
    if (userData) {
      const totalPrice = itemsList
        .reduce((acc, item) => acc + item.quantity * item.itemPrice, 0)
        .toFixed(2);
      const config = {
        headers: {
          Authorization: `Bearer ${userData.token}`,
        },
      };
      console.log(totalPrice);
      const data = {
        totalPrice: totalPrice,
        itemList: itemsList,
      };

      console.log(data);

      await axios.put('http://localhost:8000/api/users/order', data, config);
      localStorage.removeItem('cartItems');
      setItemsList([]);
    } else {
      setLogout(true);
    }
  };

  // useEffect(() => {
  //   if(userInfo)

  // }, [input])

  const handleCount = (c, id) => {
    let offers = JSON.parse(localStorage.getItem('cartItems'));

    let adjustedId = id;
    let count = c;

    let index = offers.findIndex((x) => x.id === adjustedId);

    let adjustedItem = offers.find((i) => i.id === adjustedId);

    adjustedItem['quantity'] = count;

    offers.splice(index, 1, adjustedItem);

    localStorage.setItem('cartItems', JSON.stringify(offers));

    setItemsList(offers);
  };
  document.title = 'MadBurger | Cart';
  document.getElementsByTagName('META')[3].content =
    'MadBurger is the best burger resturant in town,you can easly add the items you desire to the cart';
  return (
    <Container fluid style={{ marginTop: '6rem', minHeight: '60.5vh' }}>
      {logout && <Redirect to='login' />}
      <Row>
        <Col md={8}>
          <h1>Shopping Cart</h1>
          {cartItems.length === 0 ? (
            <Container>
              <Message>
                <p style={{ fontSize: '1.5rem', textAlign: 'center' }}>
                  {' '}
                  Your cart is empty <Link to='/menu'>Go Back</Link>
                </p>
                <Row>
                  <Col style={{ width: '100%' }} md={12} md={12}>
                    <Image
                      style={{
                        width: '70%',
                        opacity: '0.5',
                        marginLeft: '12%',
                      }}
                      src='https://res.cloudinary.com/dcptkluic/image/upload/v1609588666/Restaurant/61615-_Converted_mqcjwi.png'
                      rounded
                    />
                  </Col>
                </Row>
              </Message>
            </Container>
          ) : (
            <ListGroup variant='flush'>
              {itemsList.map((item, orderId) => (
                <ListGroup.Item key={item.id}>
                  <Row>
                    <Col md={2}>
                      <Image
                        src={item.img}
                        alt={item.name}
                        fluid
                        rounded
                      ></Image>
                    </Col>
                    <Col md={3}>
                      <h3>{item.name}</h3>
                      <h5>{item.type}</h5>
                    </Col>
                    <Col md={2} style={{ letterSpacing: '2px' }}>
                      Item Price {item.itemPrice} {' JOD'}
                    </Col>

                    <Col md={2}>
                      <CounterInput
                        min={1}
                        max={10}
                        count={parseInt(item.quantity)}
                        onCountChange={(count) => {
                          handleCount(count, item.id);
                        }}
                      />
                    </Col>
                    <Col md={2}>Order NO. {orderId + 1}</Col>
                    <Col md={2}>
                      <Button
                        type='button'
                        variant='light'
                        onClick={() => removeFromCartHandler(item.id)}
                      >
                        <i className='fas fa-trash'></i>
                      </Button>
                    </Col>
                  </Row>
                </ListGroup.Item>
              ))}
            </ListGroup>
          )}
        </Col>
        <Col md={4}>
          <Card>
            <ListGroup variant='flush'>
              <ListGroup.Item>
                <h2>Total Price </h2>
                {itemsList
                  .reduce(
                    (acc, item) => acc + item.quantity * item.itemPrice,
                    0
                  )
                  .toFixed(2)}

                {'  JOD'}
              </ListGroup.Item>
              <ListGroup.Item>
                <Button
                  type='button'
                  variant='warning'
                  style={{ color: 'black' }}
                  block
                  disabled={itemsList.length === 0}
                  onClick={() => checkoutHandler()}
                >
                  Place Order
                </Button>
              </ListGroup.Item>
            </ListGroup>
          </Card>
          <Container style={{ marginTop: '2rem' }}>
            <Message variant='warning'>
              Maximum items are 10 for each otder
            </Message>
            {!userData && (
              <Message variant='warning'>
                please login to complete the process
              </Message>
            )}
          </Container>
        </Col>
      </Row>
    </Container>
  );
};

export default CartScreen;
