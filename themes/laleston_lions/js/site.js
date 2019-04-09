// @codekit-append "vendor/slick.js";
// @codekit-append "vendor/masonry.js";
// @codekit-append "vendor/scrollreveal.js";
// @codekit-append "vendor/imagesloaded.js";
// @codekit-append "vendor/easydropdown.js";

function init(){
  $("body").addClass('loaded'); // fade in after init
}

$(document).ready(function () {

  $( ".scrollLink" ).click(function( event ) {
    event.preventDefault();
    $("html, body").an
    imate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
  });

  var $grid = $('.grid').imagesLoaded( function() {
      $grid.masonry({
        itemSelector: '.grid-item',
      });
  });
  
  $('#toggle').click(function () {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
  });

  $("a[href='#top']").click(function () {

    $("html, body").animate({
      scrollTop: 0
    }, "slow");
    return false;

  });


  $(function () {
    $('a[href*=#]').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500, 'linear');
    });
  });
  
});

// ready
$(document).ready(function() {
    $(window).resize();
});

init();