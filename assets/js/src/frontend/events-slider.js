export default () => {
  const wrapper = document.getElementById('eventsSliderWrapper');
  const slider = document.getElementById('eventsSlider');

  if (!slider) {
    return false;
  }

  const rightArrow = wrapper.querySelector('.prev');
  const leftArrow = wrapper.querySelector('.next');

  jQuery(slider).slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: jQuery(leftArrow),
    nextArrow: jQuery(rightArrow),
    dots: true,
    centerMode: true,
  });
};
