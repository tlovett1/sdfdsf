import ImageComparison from 'image-comparison';

export default () => {
  const hero = document.querySelectorAll('.hero');

  if (!hero) {
    return false;
  }
  const sliderContainer = document.querySelector('.hero-slider-container');
  const images = document.querySelectorAll('.comparison-image');

  function Init() {
    new ImageComparison({
      container: sliderContainer,
      startPosition: 50,
      data: [
        {
          image: images[0],
        },
        {
          image: images[1],
        },
      ],
    });
  }

  return Init();
};
