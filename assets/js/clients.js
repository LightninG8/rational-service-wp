(() => {
  document.addEventListener("DOMContentLoaded", () => {
    jQuery(".clients__slider").slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      prevArrow: '<div class="clients__arrow prev-arrow"></div>',
      nextArrow: '<div class="clients__arrow next-arrow"></div>',
      swipeToSlide: true,
      centerPadding: '40px',
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,

          }
        },
        {
          breakpoint: 560,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,

          }
        }
      ]
    });
  });
})();
