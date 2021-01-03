import React from 'react';
import { Container, Row, Col, Nav } from 'react-bootstrap';
import { LinkContainer } from 'react-router-bootstrap';

const Footer = () => {
  return (
    <footer style={{ marginTop: '2rem' }}>
      <Container fluid>
        <Row className='footer1'>
          <Col>
            <Row>
              <Col>
                <LinkContainer to='/'>
                  <Nav.Link>
                    <p className='navbar_font-color'>Home</p>
                  </Nav.Link>
                </LinkContainer>

                <LinkContainer to='/menu'>
                  <Nav.Link>
                    <p className='navbar_font-color'>Menu</p>
                  </Nav.Link>
                </LinkContainer>

                <LinkContainer to='/aboutus'>
                  <Nav.Link>
                    <p className='navbar_font-color'>About Us</p>
                  </Nav.Link>
                </LinkContainer>
              </Col>

              <Col>
                <LinkContainer to='/contactus'>
                  <Nav.Link>
                    <p className='navbar_font-color'>Contact Us</p>
                  </Nav.Link>
                </LinkContainer>
                <LinkContainer to='/profile'>
                  <Nav.Link>
                    <p className='navbar_font-color'>Profile</p>
                  </Nav.Link>
                </LinkContainer>

                <LinkContainer to='/cart'>
                  <Nav.Link>
                    <p className='navbar_font-color'>Cart</p>
                  </Nav.Link>
                </LinkContainer>
              </Col>
            </Row>
          </Col>

          <Col>
            <LinkContainer to='/'>
              <h2>MadBurger</h2>
            </LinkContainer>
          </Col>

          <Col>
            <span>info@madburger.com</span>
            <span>Amman, Jordan</span>
          </Col>
        </Row>

        <Row>
          <Col className='text-center py-3'>Copyright &copy; MadBurger</Col>
        </Row>
      </Container>
    </footer>
  );
};

export default Footer;
