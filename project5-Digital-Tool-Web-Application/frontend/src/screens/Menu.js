import { Card, CardGroup, Container } from 'react-bootstrap';
import React, { useState, useEffect, Component } from 'react';

import MealCard from '../components/MealCard';

import meals from '../data/meals';

import sweets from '../data/sweets';

const Menu = () => {
  document.title = 'MadBurger | Menu';
  document.getElementsByTagName('META')[3].content =
    'MadBurger is the best burger resturant in town,here you can our menu which contains the two categories we offer(burgers and desserts)';

  return (
    <Container style={{ marginTop: '6rem' }} className='Main_Menu'>
      <div className='Chicken Burgers Menu'>
        <h2> Chicken Burgers</h2>
        <CardGroup>
          {meals.chicken.map((meal, index) => {
            return <MealCard key={index} data={meal} />;
          })}
        </CardGroup>
      </div>
      <div className='Beef Burgers Menu'>
        <h2> Beef Burgers</h2>
        <CardGroup>
          {meals.beef.map((meal, index) => {
            return <MealCard key={index} data={meal} />;
          })}
        </CardGroup>
      </div>
      <div className='Sweets Menu'>
        <h3>Sweets Menu</h3>
        <CardGroup>
          {sweets.slice(1).map((sweet, index) => {
            return <MealCard key={index} data={sweet} />;
          })}
        </CardGroup>
      </div>
    </Container>
  );
};
export default Menu;
