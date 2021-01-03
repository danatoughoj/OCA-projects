import React from 'react';
import { Col, Row } from 'react-bootstrap';

import SideCards from './SideCards';
import BigCard from './BigCard';
import meals from '../../../data/meals';



function Trending() {

    return (

        <Row className="Trending">

            <Col className='MainCardDiv' >
                {meals.chicken.slice(2, 3).map((meal, index) => {
                    return <BigCard
                        key={index}
                        data={meal}
                    />
                })
                }
            </Col>

            <Col className='TrendingRight'>

                <Row className="rightRow">

                    {meals.beef.slice(1, 3).map((meal, index) => {
                        return <Col className='rightCol'><SideCards
                            key={index}
                            data={meal}
                        />
                        </Col>
                    })
                    }
                </Row>
                <Row className="rightRow">

                    {meals.chicken.slice(0, 2).map((meal, index) => {
                        return <Col className='rightCol'> <SideCards
                            key={index}
                            data={meal}
                        />
                        </Col>

                    })
                    }
                </Row>

            </Col>

        </Row>


    )
}

export default Trending;