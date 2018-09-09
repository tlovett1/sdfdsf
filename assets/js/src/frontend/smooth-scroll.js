import gumshoe from 'gumshoejs';
import SmoothScroll from 'smooth-scroll';

export default () => {
  SmoothScroll('.menu-item a[href*="#"]', {
    header: 'header',
  });

  gumshoe.init({
    selector: '.menu-item a[href*="#"]',
    selectorHeader: 'header',
    offset: 50,
    activeClass: 'active',
    scrollDelay: false,
  });
};
