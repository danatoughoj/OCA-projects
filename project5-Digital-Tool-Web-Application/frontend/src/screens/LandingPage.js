import React from 'react';
import '../components/Landing/Heading.scss';

import Heading from '../components/Landing/Headline';
import Burgers from '../components/Landing/Trending/Burgers';
import Dessert from '../components/Landing/Dessert';
import Sweets from '../components/Landing/Trending/Sweets';
import YoutubeAPI from '../components/Landing/YouTube/youtube';

function Landing() {
  document.title = 'MadBurger | Landing Page';
  document.getElementsByTagName('META')[3].content =
    "MadBurger is the best burger resturant in town, we offer you a variety of delesious burgers and desserts, don't hesitate to visit our website and place your orders";
  return (
    <div className='Landing'>
      <Heading />
      <Burgers />
      <Dessert />
      <Sweets />
      <YoutubeAPI />
    </div>
  );
}

export default Landing;
