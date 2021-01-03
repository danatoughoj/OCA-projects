import React from 'react';
import YoutubeVideo from './youtubeAPI'


const backfood = 'https://res.cloudinary.com/dcptkluic/image/upload/v1609457161/Restaurant/DessertBack_dm090a.png';



class YoutubeAPI extends React.Component {
  constructor() {
    super();
    this.state = {
      loading: true,
      videos: [],
    };
  }
  async componentDidMount() {
    const url = 'https://youtube.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=4&playlistId=PLopY4n17t8RBE4hjXHUYrCh6HnMeHkDY9&key=AIzaSyB67B_szVr6uSIUounQ8IR2xsErKFv1pBU';
    const response = await fetch(url);
    const data = await response.json();
    this.setState({ videos: data.items });
  }
  render() {
    const { videos } = this.state;
    const renderedVideos = videos.map((video, index) => {
      return <YoutubeVideo key={video.id} video={video} />;
    });
    return (
      <div className='YouTubeFullDiv'>
        <h3 style={{ textAlign: 'center', paddingTop: '3rem' }}>
          How we work...
        </h3>
        <div className='YouAPI'>
          <img className="backfood" src={backfood} alt="background food" />

          {renderedVideos}

        </div>

      </div>
    );
  }
}
export default YoutubeAPI;