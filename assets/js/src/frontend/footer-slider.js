export default () => {
  const slider = document.querySelectorAll('#footerSlider');
  if (!slider) {
    return false;
  }

  const rightArrow = document.querySelector('.prev');
  const leftArrow = document.querySelector('.next');

  jQuery(slider).slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: jQuery(leftArrow),
    nextArrow: jQuery(rightArrow),
    dots: true,
    responsive: [
      {
        breakpoint: 1150,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1080,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
};
