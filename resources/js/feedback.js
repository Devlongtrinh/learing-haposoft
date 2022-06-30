$(document).ready(function () {
  $('.slide-show').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-circle-left slick-arrow' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-chevron-circle-right slick-arrow' aria-hidden='true'></i></button>",
    responsive: [{
      breakpoint: 990,
      settings: {
        slidesToShow: 1,
      }
    }]
  });
});
