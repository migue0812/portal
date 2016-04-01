$(function () {
  $(".slides").slidesjs({
    play: {
      active: true,
      // [boolean] Generate the play and stop buttons.
      // You cannot use your own buttons. Sorry.
      effect: "fade",
      // [string] Can be either "slide" or "fade".
      interval: 2000,
      // [number] Time spent on each slide in milliseconds.
      auto: true,
      // [boolean] Start playing the slideshow on load.
      swap: true,
      // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
      // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
              // [number] restart delay on inactive slideshow
    }

  });

});

$(document).ready(function () {
  $('a.mobile').click(function () {
    $('.sidebar-panel').slideToggle('fast');
    window.onresize = function (event){
     if($(window).width() > 320) {
      $('.sidebar-panel').show();
     }
    };
    
    
  });
});

   