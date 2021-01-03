
// bootstrap import 
import {Card} from 'react-bootstrap'
import {Button, ButtonToolbar} from 'react-bootstrap';
import AddMsg from './AddMsg';

// hooks import 
import {useState} from 'react'



export default function MealCard (props) {
    const data= props.data;

    const [isSubmit, setIsSubmit] = useState(false);

    let close =() =>{
        setIsSubmit(false);
    }
   

    return ( 
        <Card>
        <Card.Img variant="top" alt={data.itemTitle} src={data.itemImage} />
            <Card.Body>
                <Card.Title>{ data.itemTitle}</Card.Title>
                <Card.Text>
                {data.itemDetail}
                </Card.Text>
                </Card.Body>
            <Card.Footer style={{
                background:"black"
            }}>
                <p className="text-muted">
                <strong style={{fontSize:"1.5rem",
                color:"#fff",
                letterSpacing: "3px"

                
            }}>
                {data.itemPrice}
                </strong>
                </p>

                <ButtonToolbar>
                <Button
                block
                variant="warning"
                className="Button-Submit" 
                onClick={()=>setIsSubmit(true)}
                >Order </Button>
                
                <AddMsg 
                show={isSubmit}
                onHide = {close} 
                data={data}
                />
            </ButtonToolbar>
            </Card.Footer>
        </Card>
    );
}
