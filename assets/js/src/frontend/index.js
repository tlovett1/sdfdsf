import baseCSS from '../../../css/index.css'; // eslint-disable-line no-unused-vars
import registerMenu from './menu';
import registerSmoothScroll from './smooth-scroll';
import registerFooter from './footer-slider';
import registerEventsSlider from './events-slider';
import registerTestimonialsSlider from './testimonials-slider';
import registerHeader from './header';
import registerLoadMore from './load-more';
import registerVideoModal from './video-modal';
import registerHero from './hero';

document.addEventListener('DOMContentLoaded', () => {
  registerHeader();
  registerMenu();
  registerSmoothScroll();
  registerEventsSlider();
  registerTestimonialsSlider();
  registerLoadMore();
  registerVideoModal();
  registerFooter();
  registerHero();
});
