import React from 'react';
import { Card, Row, Col, Container, Figure } from 'react-bootstrap';
import Chefs from '../../data/chefs';
import Carousel from 'react-bootstrap/Carousel';
import './AboutUs.css';

class AboutUs extends React.Component {
  render() {
    document.title = 'MadBurger | About Us';
    document.getElementsByTagName('META')[3].content =
      "MadBurger is the best burger resturant in town, we offer you a variety of delesious burgers and desserts, don't hesitate to visit our website and place your orders";
    return (
      <div>
        <Container>
          <About />
          <MealsCarousel />
          <ChefsCards chefs={Chefs} />
          <Testimonials />
        </Container>
      </div>
    );
  }
}
//==================About Us Section================================
class About extends React.Component {
  render() {
    return (
      <div className='about_section'>
        <div className='title'>
          <h1>About Us</h1>
        </div>
        <Row>
          <div className='about_content'>
            <p>
              Welcome to The Mad Burger Restaurant! We’ve got everything you’re
              looking for, from the Classic, to fusion flavors like the Kimchi,
              to the Veggie, for our vegetarian friends. We’re committed to
              serving delicious, fresh fare that will make you re-think how
              burgers should taste. Check out our menu for our variety of
              hand-crafted burgers and see why people come to us for the Best
              Burger in Jordan.
            </p>
            <p>
              Here at Mad Burger, we know what goes into our food. From our
              house mayo and special dipping sauces, to our hand-cut, twice
              fried french fries, we’re all about quality ingredients. Our
              patties are no exception. Freshly ground Angus beef, made from a
              proprietary blend of cuts. We tested numerous versions to bring
              you flavorful, juicy meat that is sure to satisfy.
            </p>
          </div>
        </Row>
      </div>
    );
  }
}
//===================Meals Carousel===================================
class MealsCarousel extends React.Component {
  render() {
    return (
      <div className='Carousel-container'>
        <Carousel>
          <Carousel.Item interval={3000}>
            <img
              className='d-block w-100 Carousel-img'
              src='https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80'
              alt='Italian burger'
            />
          </Carousel.Item>
          <Carousel.Item interval={3000}>
            <img
              className='d-block w-100 Carousel-img'
              src='https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80/400x200?text=Second slide&bg=282c34'
              alt='American Burger'
            />
          </Carousel.Item>
          <Carousel.Item interval={3000}>
            <img
              className='d-block w-100 Carousel-img'
              src='https://images.unsplash.com/photo-1550674640-edeb406d94bc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'
              alt='French Burger'
            />
          </Carousel.Item>
        </Carousel>
      </div>
    );
  }
}

//=================Chef Cards=======================================
class ChefsCards extends React.Component {
  render() {
    return (
      <div className='chefs_section mt-5'>
        <div className='Sub-title'>
          <h2>Our Chefs</h2>
        </div>
        <Row>
          {this.props.chefs.map((chef) => (
            <ChefsCard key={chef.id} chef={chef} />
          ))}
        </Row>
      </div>
    );
  }
}
class ChefsCard extends React.Component {
  render() {
    return (
      <Col>
        <div>
          <Card className='chef_card mt-3' border='primary'>
            <Card.Img
              className='card-img'
              variant='top'
              src={this.props.chef.picture}
              alt={this.props.chef.name + ' user picture'}
            />
            <Card.Body>
              <Card.Title className='card-title'>
                <h4>{this.props.chef.name}</h4>
              </Card.Title>
              <h5>{this.props.chef.major}</h5>
              <Card.Text className='card-text'>
                {this.props.chef.description}
              </Card.Text>
            </Card.Body>
          </Card>
        </div>
      </Col>
    );
  }
}
//==================Testimonials================
class Testimonials extends React.Component {
  render() {
    return (
      <div className='Testimonials-carousel'>
        <h2>What Our Customers Say</h2>
        <Carousel>
          <Carousel.Item interval={5000}>
            <div className='Testimonial'>
              <Figure className='figure mb-5'>
                <Figure.Image
                  width={150}
                  height={150}
                  roundedCircle
                  alt='Michael Perry testimonial'
                  src='https://avatars1.githubusercontent.com/u/67992414?s=460&u=c503c163561fb011dcfeac3d7b475735582b35c8&v=4'
                />
                <h4>Michael Perry</h4>
                <Figure.Caption className='Testimoinal-caption'>
                  AWESOME burgers, Their burgers are juicy and flavorful with
                  soft and sweet buns. I also love the fried chicken--exhibited
                  beautifully in the Nashville Hot Chicken Sandwich.{' '}
                </Figure.Caption>
              </Figure>
            </div>
          </Carousel.Item>
          <Carousel.Item interval={5000}>
            <div className='Testimonial'>
              <Figure className='figure mb-5'>
                <Figure.Image
                  width={150}
                  height={150}
                  roundedCircle
                  alt='Thomas Keller testimonial'
                  src='https://avatars2.githubusercontent.com/u/71584000?s=460&u=4ee019affa6883c074003bb0bd7ddba2ce8e1021&v=4'
                />
                <h4>Thomas Keller</h4>
                <Figure.Caption className='Testimoinal-caption'>
                  What I like most is that they wear gloves and hygiene is of
                  pivotal importance. For now their food portions are good.
                  There was a place for halal burgers and wings, also this
                  restaurant amazing.
                </Figure.Caption>
              </Figure>
            </div>
          </Carousel.Item>
          <Carousel.Item interval={5000}>
            <div className='Testimonial'>
              <Figure className='figure mb-5'>
                <Figure.Image
                  width={150}
                  height={150}
                  roundedCircle
                  alt='Paul Bauder testimonial'
                  src='https://avatars0.githubusercontent.com/u/71770261?s=460&u=0a269e020a0af1045c8ce24ab773a2c886eaf871&v=4'
                />
                <h4>Paul Bauder</h4>
                <Figure.Caption className='Testimoinal-caption'>
                  Just had the cheeseburger and philly cheese steak poutine,
                  both were amazing!! The burger was huge and delicious, crispy
                  bacon on it. Strongly Recommend it!
                </Figure.Caption>
              </Figure>
            </div>
          </Carousel.Item>
        </Carousel>
      </div>
    );
  }
}

export default AboutUs;
