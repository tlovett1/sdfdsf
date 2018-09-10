export default () => {
  const modal = document.getElementById('modal');
  const buttons = document.querySelectorAll('.form-button');
  const close = modal.querySelector('.modal-close');
  const body = document.getElementsByTagName('body')[0];

  if (buttons.length <= 0) {
    return false;
  }

  function Init() {
    [].forEach.call(buttons, button => {
      button.addEventListener('click', () => {
        body.classList.toggle('modal-open');
      });
    });

    close.addEventListener('click', () => {
      body.classList.remove('modal-open');
    });
  }

  return Init();
};
