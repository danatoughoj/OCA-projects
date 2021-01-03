import React from 'react';
import { Container, Row, Col, Form, Button } from 'react-bootstrap';
import GoogleMap from '../components/GoogleMapAPI.js';
// import axios from "axios";

class contactPage extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      email: '',
      message: '',
    };
  }
  onInputChange = (e) => {
    this.setState({ [e.target.name]: e.target.value });
  };
  handleSubmit = (e) => {
    e.preventDefault();
  };

  render() {
    document.title = 'MadBurger | About Us';
    document.getElementsByTagName('META')[3].content =
      'MadBurger is the best burger resturant in town, we would love to here from you and provide you with a variety of methods like contact form or social media or come mmet us at our location provided';
    return (
      <section>
        <Container fluid='md' className='mt-5'>
          <Row style={{ display: 'flex', flexWrap: 'wrap' }}>
            <Col>
              <h1 className='mt-5 mb-3' style={{ color: '#E0A800' }}>
                {' '}
                Contact Us
              </h1>
              <div>
                <i className='fas fa-map-marker-alt'></i> Amman-Abdoun
              </div>
              <div>
                <i className='fas fa-phone'></i> +9620 786 426 862
              </div>
              <div>
                <i className='fas fa-envelope'></i> info@MadBurger.com
              </div>
              <div className='mt-4' style={{ fontSize: '2rem' }}>
                <h2 style={{ fontSize: '2.5rem', color: '#E0A800' }}>
                  {' '}
                  Social Media links
                </h2>
                <i className='fab fa-instagram mr-3 '></i>
                <i className='fab fa-facebook  mr-3'></i>
                <i className='fab fa-twitter  mr-3'></i>
                <i className='fab fa-snapchat-ghost  mr-3'></i>
              </div>
            </Col>
            <Col>
              <div
                className='mt-5 jumbotron'
                style={{
                  backgroundColor: 'black',
                  color: 'white',
                  minWidth: '250px',
                }}
              >
                <h4 className=' mb-2'>
                  {' '}
                  We are Happy to answer your questions and we are glad to take
                  your feedback under consideration
                </h4>
                <Form onSubmit={this.handleSubmit} method='POST'>
                  <Form.Group controlId='exampleForm.ControlInput1'>
                    <Form.Control
                      type='email'
                      name='email'
                      placeholder='name@example.com'
                      onChange={this.onInputChange}
                    />
                  </Form.Group>
                  <Form.Group controlId='exampleForm.ControlTextarea1'>
                    <Form.Control
                      as='textarea'
                      name='message'
                      rows={3}
                      placeholder='Enter your message here'
                      onChange={this.onInputChange}
                    />
                  </Form.Group>
                  <Button
                    variant='warning'
                    type='submit'
                    style={{ width: '35%' }}
                  >
                    {' '}
                    Submit{' '}
                  </Button>
                </Form>
              </div>
            </Col>
          </Row>
        </Container>
        <div className='mt-4'>
          <GoogleMap />
        </div>
      </section>
    );
  }
}

export default contactPage;
