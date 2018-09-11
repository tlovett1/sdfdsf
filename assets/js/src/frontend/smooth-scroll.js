document.addEventListener('DOMContentLoaded', () => {
  const headerHeight = document
    .getElementById('siteHeader')
    .getBoundingClientRect().height;

  gumshoe.init({
    selector: '.menu-item a[href*="#"]',
    selectorHeader: 'header',
    offset: headerHeight,
    activeClass: 'active',
    scrollDelay: false,
  });
});
