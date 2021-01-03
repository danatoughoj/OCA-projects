import React from 'react';
import { Card, ButtonToolbar, Button } from 'react-bootstrap';
import meals from '../../../data/meals';
import { LinkContainer } from 'react-router-bootstrap';

function Trending(props) {
  return (
    <div>
      <LinkContainer to='/menu'>
        <Card className='MainCard'>
          <Card.Img
            variant='top'
            className='Main-Trinding-Image'
            src={props.data.itemImage}
          />
          <Card.Body className='MainBody'>
            <Card.Text>{props.data.itemTitle}</Card.Text>
          </Card.Body>
          <p className='text-muted'>
            <strong style={{ fontSize: '1.5rem' }}>
              {props.data.itemPrice}
            </strong>
          </p>
          <Card.Footer className='CardFooter'>
            <ButtonToolbar className='btnBar'>
              <Button className='Button-Submit'>See more... </Button>
              {/*
                    <AddMsg 
                    show={this.state.isSubmit}
                    onHide = {Close} 
                    />
                */}
            </ButtonToolbar>
          </Card.Footer>
        </Card>
      </LinkContainer>
    </div>
  );
}

export default Trending;
