export default () => {
  const siteMenu = document.getElementById('siteMenu');

  if (!siteMenu) {
    return false;
  }

  const menuButton = document.getElementById('menuButton');
  const menuItems = siteMenu.querySelectorAll('.menu-item');
  const html = document.documentElement;

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

    [].forEach.call(menuItems, menuItem => {
      const link = menuItem.querySelector('a');

      link.addEventListener('click', event => {
        event.preventDefault();
        closeMenu();
      });
    });
  }

  return Init();
};
