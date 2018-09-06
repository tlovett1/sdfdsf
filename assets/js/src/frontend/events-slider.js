export default () => {
  const slider = document.querySelectorAll('#eventsSlider');
  if (!slider) {
    return false;
  }

  const rightArrow = document.querySelector('.prev');
  const leftArrow = document.querySelector('.next');

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
