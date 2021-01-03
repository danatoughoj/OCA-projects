import React from 'react';
import { Col, Row } from 'react-bootstrap';

import SideCards from './SideCards';
import BigCard from './BigCard';
import sweets from '../../../data/sweets';

const SweetClass = "sweetClass";


function Sweets() {

    return (

        <Row className="Trending">

            <Col className='MainCardDiv' >
                {sweets.slice(0, 1).map((sweets, index) => {
                    return <BigCard
                        key={index}
                        data={sweets}
                        sweetClass={SweetClass}
                    />
                })
                }
            </Col>

            <Col className='TrendingRight'>

                <Row className="rightRow">

                    {sweets.slice(1, 3).map((sweets, index) => {
                        return <Col className='rightCol'><SideCards
                            key={index}
                            data={sweets}
                            sweetClass={SweetClass}

                        />
                        </Col>
                    })
                    }
                </Row>
                <Row className="rightRow">

                    {sweets.slice(3, 5).map((sweets, index) => {
                        return <Col className='rightCol'> <SideCards
                            key={index}
                            data={sweets}
                            sweetClass={SweetClass}

                        />
                        </Col>

                    })
                    }
                </Row>

            </Col>

        </Row>


    )
}

export default Sweets;