import React from 'react';
import './Heading.scss';

//Images
import MainBurger from '../../assets/Main.png';
import backfood from '../../assets/backfood.png';

function Landing() {
  return (
    <header className='Heading'>
      <div className='Jumbotron'>
        <img className='backfood' src={backfood} alt='background food' />
        <div className='img-Main-Landing'>
          <img src={MainBurger} alt='Main Burger' />
        </div>
        <div className='text'>
          <p>Life is too short to miss out on the new MadBurger</p>
          <h1>Crispy Burger</h1>
        </div>
      </div>
    </header>
  );
}

export default Landing;
