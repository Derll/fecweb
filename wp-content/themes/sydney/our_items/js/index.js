var touchMe = $(".menu-item");

touchMe.on("click", function() {
  audioElement.play();
});


var audioElement = document.createElement('audio');
  audioElement.setAttribute('src', 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/217538/bubble-2.mp3');

$.get();

audioElement.addEventListener("load", function() {
  audioElement.play();
}, true);