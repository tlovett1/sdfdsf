export default () => {
  const siteMenu = document.getElementById('siteMenu');
  const menuButton = document.getElementById('menuButton');
  const html = document.documentElement;

  if (!siteMenu) {
    return false;
  }

  function closeMenu() {
    html.classList.remove('menu-open');
  }

  function openMenu() {
    html.classList.add('menu-open');
  }

  function Init() {
    menuButton.addEventListener('click', () => {
      if (html.classList.contains('menu-open')) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }

  return Init();
};
