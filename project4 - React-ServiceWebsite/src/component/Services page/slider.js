
import { Carousel } from 'react-bootstrap'; 
import React ,{useState}from 'react'

import sa11 from '../images/11.jpg'
import sa13 from '../images/13.jpg'
import sa14 from '../images/14.jpg'

import "./slider.css"


function ControlledCarousel() {
    const [index, setIndex] = useState(0);
  
    const handleSelect = (selectedIndex, e) => {
      setIndex(selectedIndex);
    };
  
    return (

        <div>

      <Carousel  activeIndex={index} onSelect={handleSelect}>
        <Carousel.Item>
          <img
            className="d-block w-100"
            src={sa11}
            alt="First slide"
            height='100%'
            />
          <Carousel.Caption>
            {/* <h3>First slide label</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> */}
          </Carousel.Caption>
        </Carousel.Item>
        <Carousel.Item>
          <img
            className="d-block w-100"
            src={sa14}
            alt="Second slide"
            height="100%"
            />
  
          <Carousel.Caption>
            {/* <h3>Second slide label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> */}
          </Carousel.Caption>
        </Carousel.Item>
        <Carousel.Item>
          <img
            className="d-block w-100"
            src={sa13}
            alt="Third slide"
            height='100%'
            />
  
          <Carousel.Caption>
            {/* <h3>Third slide label</h3>
            <p>
              Praesent commodo cursus magna, vel scelerisque nisl consectetur.
            </p> */}
          </Carousel.Caption>
        </Carousel.Item>
      </Carousel>
      </div>
    );
  }
  export default ControlledCarousel 
//   render(<ControlledCarousel />);