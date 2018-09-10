export default () => {
  const wrapper = document.getElementById('testimonalsSliderWrapper');
  const slider = document.getElementById('testimonalsSlider');

  if (!slider && !wrapper) {
    return false;
  }

  const totalSlides = wrapper.querySelector('.total-slides');
  const slide = wrapper.querySelector('.current-slide');
  const rightArrow = wrapper.querySelector('.prev');
  const leftArrow = wrapper.querySelector('.next');

  function setSlideCount(slideCount) {
    totalSlides.innerHTML += slideCount;
  }

  function setCurrentSlideNumber(currentSlide) {
    slide.innerHTML = currentSlide + 1;
  }

  jQuery(slider).on('init', (event, slick) => {
    const { slideCount } = slick;
    setSlideCount(slideCount);
    setCurrentSlideNumber(slick.currentSlide);
  });

  jQuery(slider).slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: jQuery(leftArrow),
    nextArrow: jQuery(rightArrow),
    dots: true,
    fade: true,
  });

  jQuery(slider).on('beforeChange', (event, slick, currentSlide, nextSlide) => {
    setCurrentSlideNumber(nextSlide);
  });
};
