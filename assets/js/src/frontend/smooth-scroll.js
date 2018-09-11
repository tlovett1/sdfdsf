document.addEventListener('DOMContentLoaded', () => {
  gumshoe.init({
    selector: '.menu-item a[href*="#"]',
    selectorHeader: 'header',
    offset: 80,
    activeClass: 'active',
    scrollDelay: false,
  });
});
