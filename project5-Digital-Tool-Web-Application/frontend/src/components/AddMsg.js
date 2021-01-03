import { useState } from 'react';

//bootstrap
import { Modal } from 'react-bootstrap';

import { Form, Card, ButtonGroup, Button } from 'react-bootstrap/';

// form validation library
import { useForm } from 'react-hook-form';

// id for each order
import { useId } from "react-id-generator";


export default function AddMsg(props) {
  const [htmlId] = useId();

  const [mainList, setMainList] = useState(props.data);

  const [showPrice, setShowPrice] = useState(false);

  const [itemPrice, setItemPrice] = useState(parseFloat(mainList.itemPrice));

  const { register, handleSubmit, errors, formState } = useForm();
  const [total, setTotal] = useState(itemPrice);
  
  const [count, setCount] = useState(1);
  //-----------------
  
  
  const [Meal_Sandwich, setMeal_Sandwich] = useState("Meal");
  // const [classic_spicy, setClassic_spicy] = useState("classic");

  const [cartItem, setCartItem] = useState({});
  



  //--------------//-------------
  const close = () => {
    setShowPrice(!showPrice);
    props.onHide();
    setTotal(parseFloat(parseFloat(itemPrice)));
    setCartItem({})
    setCount(1)
  };
 

  //--------submit

  const onSubmit = (data) => {
    console.log(data);

    setItemPrice(mainList.itemPrice);

    let mealOrSandwich = data.Meal_Sandwich;

    let defQuantity = parseFloat(data.Quantity);
    setCount(data.Quantity)

    if (mealOrSandwich == 'Sandwich') {
      setTotal(parseFloat((parseFloat(itemPrice) - 1.25) * defQuantity).toFixed(2));

    } else if (mealOrSandwich === 'Meal') {
      setTotal(parseFloat(parseFloat(itemPrice) * defQuantity).toFixed(2));
    }
    else{
    setTotal(parseFloat(parseFloat(itemPrice) * defQuantity).toFixed(2))
    }
    setCartItem(data)
    setShowPrice(true);
    console.log(total);
    console.log(mainList);
  };

  const addToCart =()=>{
    
    if ((!showPrice)&&Meal_Sandwich=="Sandwich"){
      let tempObj={
        id:htmlId,
        img:mainList.itemImage,
        itemPrice:parseFloat((total/count).toFixed(2))-1.25,
        totalPrice:parseFloat((total-count*1.25).toFixed(2)),
        name:mainList.itemTitle,
        quantity:count, 
        type:((!(mainList.special.length===0))?Meal_Sandwich:'sweets'),
      }
      addToLocalStorage(tempObj)
    }else{
      let tempObj={
        id:htmlId,
        img:mainList.itemImage,
        itemPrice:parseFloat((total/count).toFixed(2)),
        totalPrice:total,
        name:mainList.itemTitle,
        quantity:count, 
        type:((!(mainList.special.length===0))?Meal_Sandwich:'sweets'),
      }
      addToLocalStorage(tempObj)
    }
    close()
  }

  const addToLocalStorage=(tempObj)=>{
  
    let offers=JSON.parse(localStorage.getItem('cartItems'));
    
    if (!(offers)){
      // this first offer to add  in the cart
      localStorage.setItem("cartItems", JSON.stringify([tempObj]));      
    }else{
      // adjust the offer array to add new item 
      let update=[...offers]
      update.push(tempObj);
      localStorage.setItem("cartItems", JSON.stringify(update));
    }
  }
  return (
    <Modal
      {...props}
      size='md'
      aria-labelledby='contained-modal-title-vcenter'
      centered
    >
      <Modal.Body>
        <div className='Msg'>
          <Card.Img variant='top' alt={mainList.itemTitle} src={mainList.itemImage} />
          <Card.Body>
            <Card.Title>{mainList.itemTitle}</Card.Title>
          </Card.Body>
          <Card.Footer>
            <Form onSubmit={handleSubmit(onSubmit)}>

              {(!(mainList.special.length==0))&&mainList.special.slice(0,1).map((name) => (
                <div className='mb-3'>
                  <Form.Check
                    type='radio'
                    name={`${name[0]}_${name[1]}`}
                    id={`custom-${name[0]}`}
                    label={`${name[0]}`}
                    value={name[0]}
                    checked={Meal_Sandwich === "Meal"}
                    onChange={()=>{
                      setMeal_Sandwich('Meal');
                      
                    }}
                    ref={register({ required: true })}
                  />
                  <Form.Check
                    type='radio'
                    name={`${name[0]}_${name[1]}`}
                    id={`custom-${name[1]}`}
                    label={` ${name[1]}`}
                    value={name[1]}
                    checked={Meal_Sandwich === "Sandwich"}
                    onChange={()=>{
                      setMeal_Sandwich('Sandwich')
                    
                    }}
                    ref={register({ required: true })}
                  />
                </div>
              ))}
              <input
                type='number'
                placeholder='Quantity'
                name='Quantity'
                min='1'
                max='10'
                onChange={handleSubmit(onSubmit)}
                defaultValue={count}
                ref={register({
                  required: true,
                  max: 10,
                  min: 1,
                })}
              />

              {
                <Button className='Button-Submit' onClick={handleSubmit(onSubmit)}>
                  {' '}
                  Calculate Total{' '}
                </Button>
              }
              {showPrice&&<div className='text-muted'>
              <strong
                style={{
                  fontSize: '1.4rem',
                  color: '#000',
                  letterSpacing: '3px',
                }}
              >
                {parseFloat(total).toFixed(2)}
              </strong>
              {' JOD'}
            </div>}
            <Button

              variant='warning'
              onClick={addToCart}
      
              block
            >
              Add to Cart
            </Button>
            </Form>
          </Card.Footer>
        </div>
      </Modal.Body>
      <Modal.Footer>
        <ButtonGroup className='mr-2'>
          <Button class='text-center' variant='danger' onClick={close} block>
            Close
          </Button>
        </ButtonGroup>
      </Modal.Footer>
    </Modal>
  );
}
