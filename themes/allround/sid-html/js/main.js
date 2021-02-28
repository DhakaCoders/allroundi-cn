(function($) {

/**
Responsive on 767px
*/
var windowWidth = $(window).width();
 // if (windowWidth <= 767) {


  $('.nav-opener').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.main-nav-inner').slideToggle(500);
  });


 // }

$('.banner-sologan .banner-sologan-ract, .footer-border-ract, .footer-border-ract-border').css('border-left-width', windowWidth);
$(window).resize(function(){
  var windowWidth = $(window).width();
  $('.banner-sologan .banner-sologan-ract, .footer-border-ract, .footer-border-ract-border').css('border-left-width', windowWidth);
});


/**
Nivo slider
*/
if($('#slider').length){
    $('#slider').nivoSlider({
        controlNavThumbs: true
    });
}

/**
Owl carouserl 1 slider
*/
if($('#slider').length){
   $('#slider').owlCarousel({
    singleItem : true,
    pagination: true,
    autoPlay : false,//8000,
    addClassActive: true,
    stopOnHover : true,   
    afterMove: function(el){
        $('.owl-item.active .slide-heading-caption').addClass('animated animated-d15 fadeInDown');

 
    },
    beforeMove : function (el) {
        $('.owl-item.active .slide-heading-caption').removeClass('animated animated-d15 fadeInDown ');
 
    },
    afterAction : function (el){
        $('.owl-item.active .slide-heading-caption').addClass('animated animated-d15 fadeInDown');
    },

    });
}

/**
Slick slider
*/
if( $('responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

    new WOW().init();

})(jQuery);