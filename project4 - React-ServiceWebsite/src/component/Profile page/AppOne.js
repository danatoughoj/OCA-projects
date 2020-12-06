import './Weather.css';
import "../../index.css"
import { WeatherData } from './WeatherData'
import {StatusData} from "./StatusData"
import CardGo from './CardGo';
import React, { Component, Profiler } from 'react';
const a = ['user' , ' offers','offers1' , 'date']
class AppOne extends Component{


  
  state = {
    user: JSON.parse(localStorage.getItem("userN")) ,
    date: JSON.parse(sessionStorage.getItem("date")), 
    offer: JSON.parse(sessionStorage.getItem("offers1")), 
  }



  render(){
    document.title ="DAMSA | Profile Page"; 
    document.getElementsByTagName("META")[2].content="Damsa is a website for booking photography sessions anywhere and anytime, we have a very precise and up to date waether section you will love";
    return (
      <div className="profile_page">
        <div className="profile_page_left_part">
          <div className="profile_page_user_info">
            <div><b><i className="fas fa-user"></i> User : {this.state.user.username} </b></div>
            <div><b><i className="fas fa-envelope"></i> Email : {this.state.user.email}</b></div>
            <hr />
          </div>
          <div className="profile_page_weather">
              <MyWeather/>
          </div>
        </div>
        <div className="profile_page_right_part">
          <div className="booked_photo_sessions">
            <div className='Booking'>
              BOOKED SESSIONS
            </div>
              
            
            {(this.state.offer && this.state.offer.map((x) =>
               < CardGo
                location={x.location} date={x.SessionDate} TimeOfSession={x.time} CameraMan={x.photography} price={x.price}
                duration={x.sessionHoures} theming={x.theming}
            />
              ))}
          </div>
        </div>
      </div>
    );   
  };
};
class MyWeather extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      status: 'init',
      isLoaded: false,
      weatherData: null
    }
  }
  abortController = new AbortController();
  controllerSignal = this.abortController.signal;
  weatherInit = () => {
    const success = (position) => {
      this.setState({status: 'fetching'});
      localStorage.setItem('location-allowed', true);
      this.getWeatherData(position.coords.latitude, position.coords.longitude);
    }
    const error = () => {
      this.setState({status: 'unable'});
      localStorage.removeItem('location-allowed');
      alert('Unable to retrieve location.');
    }
    if (navigator.geolocation) {
      this.setState({status: 'fetching'});
      navigator.geolocation.getCurrentPosition(success, error);
    } else {
      this.setState({status: 'unsupported'});
      alert('Your browser does not support location tracking, or permission is denied.');
    }
  }
  getWeatherData = (lat, lon) => {
    const weatherApi = `http://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&appid=31ed3ec2c5926cdafe59889e9b18386f`;
    fetch(weatherApi, { signal: this.controllerSignal })
    .then(response => response.json())
    .then(
      (result) => {
        console.log(result);
        const { name } = result;
        const { country } = result.sys;
        const { temp, temp_min, temp_max, feels_like, humidity } = result.main;
        const { description, icon } = result.weather[0];
        const { speed, deg } = result.wind;
        this.setState({
          status: 'success',
          isLoaded: true,
          weatherData: {
            name,
            country,
            description,
            icon,
            temp: temp.toFixed(1),
            feels_like: feels_like.toFixed(1),
            temp_min: temp_min.toFixed(1),
            temp_max: temp_max.toFixed(1),
            speed,
            deg,
            humidity
          }
        });
      },
      (error) => {
        this.setState({
          isLoaded: true,
          error
        });
      }
    );
  }
  returnActiveView = (status) => {
    switch(status) {
      case 'init':
        return(
          <button 
          className='btn-main' 
          onClick={this.onClick}
          >
            Get My Location
          </button>
        );
      case 'success':
        return <WeatherData data={this.state.weatherData} />;
      default:
        return <StatusData status={status} />;
    }
  }
  onClick = () => {
    this.weatherInit();
  }
  componentDidMount() {
    if(localStorage.getItem('location-allowed')) {
      this.weatherInit();
    } else {
      return;
    }
  }
  componentWillUnmount() {
    this.abortController.abort();
  }
  render() {
    return (
      <div className='weather_section'>
        <div className='weather_container'>
          {this.returnActiveView(this.state.status)}
        </div>
      </div>
    );
  }
}
export default AppOne;
 