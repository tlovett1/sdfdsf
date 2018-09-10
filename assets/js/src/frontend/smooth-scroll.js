import gumshoe from 'gumshoejs';
import SmoothScroll from 'smooth-scroll';

export default () => {
  const headerHeight = document
    .getElementById('siteHeader')
    .getBoundingClientRect().height;

  SmoothScroll('.menu-item a[href*="#"]', {
    header: 'header',
  });

  gumshoe.init({
    selector: '.menu-item a[href*="#"]',
    selectorHeader: 'header',
    offset: headerHeight,
    activeClass: 'active',
    scrollDelay: false,
  });
};
