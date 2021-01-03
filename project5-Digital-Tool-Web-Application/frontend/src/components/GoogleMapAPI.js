import React from 'react';
import { Map, InfoWindow, Marker, GoogleApiWrapper } from 'google-maps-react';

const map_style = {
  width: '100%',
  height: '40vh',
  position: 'relative',
};

class GoogleMap extends React.Component {
  render() {
    return (
      <section style={map_style}>
        <Map
          google={this.props.google}
          zoom={15}
          initialCenter={{
            lat: 31.9408,
            lng: 35.8845,
          }}
        >
          <Marker onClick={this.onMarkerClick} name={'Current location'} />
          <InfoWindow onClose={this.onInfoWindowClose}> </InfoWindow>
        </Map>
      </section>
    );
  }
}

export default GoogleApiWrapper({
  apiKey: 'AIzaSyCK4STg8fZOaPp53nJ8b6O_IM_ha3eR_1E',
})(GoogleMap);
