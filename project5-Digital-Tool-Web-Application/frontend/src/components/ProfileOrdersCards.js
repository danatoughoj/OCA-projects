import React from 'react';
import { Row, Col, Button } from 'react-bootstrap';
import burger from '../assets/burger.png';

const Jumbotron_card_style = {
  backgroundColor: 'black',
  color: 'white',
  minWidth: '250px',
  position: 'relative',
};
const mini_jumbotron_card_style = {
  backgroundColor: '#E0A800',
};
const Jumbotron_card_info_style = {
  display: 'flex',
  flexWrap: 'wrap',
  alignItems: 'center',
};
const profile_delete_icon = {
  cursor: 'pointer',
  position: 'absolute',
  top: '6px',
  right: '5px',
  backgroundColor: 'transparent',
  border: 'none',
  zIndex: '20',
};

const alignment_style = {
  display: 'flex',
  justifyContent: 'center',
  alignItems: 'center',
};

class ProfileOrdersCards extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    const orders = this.props.totalOrders;
    return (
      <div>
        {orders.map((order, index) => {
          return (
            <div
              key={order._id}
              className='jumbotron p-0'
              style={Jumbotron_card_style}
            >
              {}
              {order.orders.map((singleOrder) => {
                return (
                  <ProfileOrdersCard
                    key={singleOrder._id}
                    singleOrderData={singleOrder}
                    returnPrice={this.calcTotalPrice}
                  />
                );
              })}
              <div
                className='jumbotron py-3 pr-8 mt-3 mb-0'
                style={mini_jumbotron_card_style}
              >
                <span className='mr-4'>Total Price</span>|
                <span className='ml-4'>{order.totalPrice}</span>
              </div>
            </div>
          );
        })}
      </div>
    );
  }
}
class ProfileOrdersCard extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
    const singleOrder = this.props.singleOrderData;
    return (
      <div className='mt-4 mx-4' style={{}}>
        {/* <Button  style={profile_delete_icon}>
          {' '}
          <i className='fas fa-trash'></i>{' '}
        </Button> */}
        <Row className='mt-3 alignment_style' style={Jumbotron_card_info_style}>
          <Col>
            <img
              style={{ margin: '0.5rem' }}
              src={singleOrder.img}
              alt={singleOrder.name}
              width='70vw'
            />
          </Col>
          <Col>{singleOrder.name}</Col>
          <Col>
            <h4 style={{ textAlign: 'right' }}>({singleOrder.quantity})</h4>
          </Col>
        </Row>
        <hr style={{ background: 'lightgray' }} />
      </div>
    );
  }
}
export default ProfileOrdersCards;
