import React from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { LinkContainer } from 'react-router-bootstrap';
import { Navbar, Nav, Container, Image, NavDropdown } from 'react-bootstrap';
import logo from '../assets/logo.png';
import { logout } from '../actions/userActions';

const Header = () => {
  const dispatch = useDispatch();
  const userLogin = useSelector((state) => state.userLogin);
  const { userInfo } = userLogin;

  const logoutHandler = () => {
    dispatch(logout());
  };

  return (
    <header>
      <Navbar
        variant='dark'
        expand='lg'
        fixed='top'
        collapseOnSelect
        className='Mad-Navbar'
      >
        <Container>
          {/* <Image
            src={logo}
            style={{ width: '80px', height: '80px' }}
            roundedCircle
          /> */}
          <LinkContainer to='/'>
            <Nav.Link>
              <h2 style={{ color: 'white' }}>MadBurger</h2>
            </Nav.Link>
          </LinkContainer>
          <Navbar.Toggle aria-controls='basic-navbar-nav' />
          <Navbar.Collapse id='basic-navbar-nav'>
            <Nav className='ml-auto'>
              <LinkContainer to='/'>
                <Nav.Link>
                  <span className='navbar_font-color'>Home</span>
                </Nav.Link>
              </LinkContainer>
              <LinkContainer to='/menu'>
                <Nav.Link>
                  <span className='navbar_font-color'>Menu</span>
                </Nav.Link>
              </LinkContainer>

              <LinkContainer to='/aboutus'>
                <Nav.Link>
                  <span className='navbar_font-color'>About Us</span>
                </Nav.Link>
              </LinkContainer>

              <LinkContainer to='/contactus'>
                <Nav.Link>
                  <span className='navbar_font-color'>Contact Us</span>
                </Nav.Link>
              </LinkContainer>

              <LinkContainer to='/cart'>
                <Nav.Link>
                  <i className='fas fa-shopping-cart navbar_font-color'></i>{' '}
                  <span className='navbar_font-color'>Cart</span>
                </Nav.Link>
              </LinkContainer>
              {userInfo ? (
                <NavDropdown
                  style={{ color: 'white' }}
                  title={userInfo.name}
                  id='username'
                >
                  <LinkContainer to='/profile'>
                    <NavDropdown.Item style={{ color: 'white' }}>
                      Profile
                    </NavDropdown.Item>
                  </LinkContainer>
                  <NavDropdown.Item onClick={logoutHandler}>
                    Logout
                  </NavDropdown.Item>
                </NavDropdown>
              ) : (
                <LinkContainer to='/login'>
                  <Nav.Link>
                    <i className='fas fa-user navbar_font-color'></i>{' '}
                    <span className='navbar_font-color'>Sign In</span>
                  </Nav.Link>
                </LinkContainer>
              )}
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
    </header>
  );
};

export default Header;
