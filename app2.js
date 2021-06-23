(function () {

    var bv = new Bideo();
    bv.init({
      // Video element
      videoEl: document.querySelector('#background_video'),
  
      // Container element
      container: document.querySelector('body'),
  
      // Resize
      resize: true,
  
      // autoplay: false,
  
      // Array of objects containing the src and type
      // of different video formats to add
      src: [
        {
          src: 'https://vjs.zencdn.net/v/oceans.mp4',
          type: 'video/mp4'
        },
        {
          src: 'https://vjs.zencdn.net/v/oceans.webm',
          type: 'video/webm;codecs="vp8, vorbis"'
        }
      ],
  
      // What to do once video loads (initial frame)
      onLoad: function () {
        document.querySelector('#video_cover').style.display = 'none';
      }
    });
  }());