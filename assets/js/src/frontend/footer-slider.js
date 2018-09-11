export default () => {
  const wrapper = document.getElementById('footerSliderWrapper');
  const slider = document.getElementById('footerSlider');

  if (!slider) {
    return false;
  }

  const rightArrow = wrapper.querySelector('.prev');
  const leftArrow = wrapper.querySelector('.next');

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
