import React from 'react';
import './youtube.css';



const YoutubeVideo = ({ video }) => {
  const videoID = video.contentDetails.videoId;
  return (
    <div className="VideoContainerAll ">
      <div
        className="VideoContainer ">
        <iframe
          title='batata'
          className="VideoFrame"
          src={'https://www.youtube.com/embed/' + videoID}
          frameborder='0'
          allow='accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
          allowfullscreen
        ></iframe>
      </div>
    </div>
  );
};
export default YoutubeVideo;