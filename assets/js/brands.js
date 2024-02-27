(() => {
  document.addEventListener("DOMContentLoaded", () => {
    jQuery(".brands__slider").slick({
      infinite: true,
      slidesToShow: 7,
      slidesToScroll: 1,
      prevArrow: '.brands__arrow.prev-arrow ',
      nextArrow: '.brands__arrow.next-arrow ',
      swipeToSlide: true,
      centerPadding: '20px',
      centerMode: true,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 1,

            arrows: false,
            

          }
        },
      ]
    });
  });
})();
