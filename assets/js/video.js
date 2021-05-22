<script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

 Pause and play the video, and change the button text
function myFunction() {
  /*if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }





  $( "single-cat" ).hover(function() {
    $( "cap-cat" ).show( "slow" );
  });

}*/



var video = document.querySelector('video')
   , container = document.querySelector('#container');
 var setVideoDimensions = function () {
   var w = video.videoWidth, h = video.videoHeight;
   var videoRatio = (w / h).toFixed(2);
   var containerStyles = window.getComputedStyle(container)
     , minW = parseInt( containerStyles.getPropertyValue('width') )
     , minH = parseInt( containerStyles.getPropertyValue('height') );
   var widthRatio = minW / w, heightRatio = minH / h;
   if (widthRatio > heightRatio) {
     var newWidth = minW;
     var newHeight = Math.ceil( newWidth / videoRatio );
   } else {
     var newHeight = minH;
     var newWidth = Math.ceil( newHeight * videoRatio );
   }
 video.style.width = newWidth + 'px';
   video.style.height = newHeight + 'px';
 };
 video.addEventListener('loadedmetadata', setVideoDimensions, false);
 window.addEventListener('resize', setVideoDimensions, false);
</script>