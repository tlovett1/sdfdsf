import ImageComparison from 'image-comparison';

export default () => {
  const hero = document.querySelectorAll('.hero');

  if (!hero) {
    return false;
  }
  const sliderContainer = document.querySelectorAll(
    '.hero-slider-container',
  )[0];
  const images = document.querySelectorAll('.comparison-image');

  function Init() {
    const slider = new ImageComparison({
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

    slider();
  }

  return Init();
};
