import React from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import { Container } from 'react-bootstrap';
import Header from './components/Header';
import Footer from './components/Footer';
import LoginScreen from './screens/loginScreen';
import RegisterScreen from './screens/RegisterScreen';
import ProfileScreen from './screens/profilePage';
import ContactUsScreen from './screens/contactPage';
import CartScreen from './screens/cartScreen';
import LandingScreen from './screens/LandingPage';
import AboutUsScreen from './screens/AboutUsPage/AboutUs';
import MenuScreen from './screens/Menu';

const App = () => {
  return (
    <Router>
      <Header />
      <main className='py-3'>
        <Container fluid className='p-0'>
          <Route path='/' component={LandingScreen} exact />
          <Route path='/login' component={LoginScreen} />
          <Route path='/menu' component={MenuScreen} />
          <Route path='/aboutus' component={AboutUsScreen} />
          <Route path='/cart' component={CartScreen} />
          <Route path='/register' component={RegisterScreen} />
          <Route path='/profile' component={ProfileScreen} />
          <Route path='/contactus' component={ContactUsScreen} />
        </Container>
        <Footer />
      </main>
    </Router>
  );
};

export default App;
