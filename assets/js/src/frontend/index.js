import baseCSS from '../../../css/index.css'; // eslint-disable-line no-unused-vars
import registerMenu from './menu';
import registerSmoothScroll from './smooth-scroll';
import registerFooter from './footer-slider';

document.addEventListener('DOMContentLoaded', () => {
  registerMenu();
  registerSmoothScroll();
  registerFooter();
});
