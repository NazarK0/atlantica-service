jQuery(document).ready(function ($) {
  $('.hero').slick({
    dots: false,
    infinite: true,
    speed: 800,
    fade: false,
    cssEase: 'ease',
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 8000,
    draggable: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          draggable: true,
          slidesToShow:3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          draggable: true,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          draggable: true,
          slidesToScroll: 1,
        },
      },
    ],
  })
})
