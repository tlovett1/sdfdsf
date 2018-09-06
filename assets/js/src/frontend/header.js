export default () => {
  const siteHeader = document.getElementById('siteHeader');

  if (!siteHeader) {
    return false;
  }

  const siteHeaderHeight = siteHeader.offsetHeight;

  function onScrollAddClass() {
    siteHeader.classList.add('header-dark');
  }

  function onScrollRemoveClass() {
    siteHeader.classList.remove('header-dark');
  }

  function Init() {
    window.addEventListener('scroll', () => {
      if (window.scrollY > siteHeaderHeight) {
        onScrollAddClass();
      } else {
        onScrollRemoveClass();
      }
    });
  }

  return Init();
};
