import React from 'react';
import './Heading.scss';

//Images
const backfood =
  'https://res.cloudinary.com/dcptkluic/image/upload/v1609457161/Restaurant/DessertBack_dm090a.png';
const MainBurger =
  'https://res.cloudinary.com/dcptkluic/image/upload/v1609597240/Restaurant/sweet_b7vmwg.png';

function Dessert() {
  return (
    <section className='Dessert'>
      <div className='Jumbotron'>
        <img className='backfood' src={backfood} alt='background food' />
        <div className='img-Main-Landing'>
          <img src={MainBurger} alt='Main Burger' />
        </div>
        <div className='text'>
          <p>
            There is no better way to bring people together than with MadBurger
            desserts, Check our new collection of yummy desserts!
          </p>
          <h1>Sweet Desserts</h1>
        </div>
      </div>
    </section>
  );
}

export default Dessert;
