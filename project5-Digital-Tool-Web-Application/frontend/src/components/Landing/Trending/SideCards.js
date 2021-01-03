import React from 'react';
import { Card, ButtonToolbar, Button } from 'react-bootstrap';
import { LinkContainer } from 'react-router-bootstrap';

function Trending(props) {
  return (
    <div>
      <LinkContainer to='/menu'>
        <Card className='TrendCards'>
          <Card.Img
            variant='top'
            className='CardImage '
            id={props.sweetClass}
            src={props.data.itemImage}
          />
          <Card.Body className='rightBody'>
            <Card.Text>{props.data.itemTitle}</Card.Text>
            <p className='text-muted'>
              <strong style={{ fontSize: '1.5rem' }}>
                {props.data.itemPrice}
              </strong>
            </p>
          </Card.Body>
          <Card.Footer className='CardFooter'>
            <ButtonToolbar className='btnBar'>
              <Button className='Button-Submit '>See more... </Button>
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
