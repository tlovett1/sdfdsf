export const launchModal = (body, modalContent, item) => {
  const video = item.querySelector('.video-modal');

  if (!video) {
    return false;
  }
  const videoEmbed = video.cloneNode(true);
  const iframe = videoEmbed.getElementsByTagName('iframe')[0];

  if (body[0].classList.contains('modal')) {
    body[0].classList.remove('modal-open');
    modalContent.innerHTML = '';
    iframe.src.replace('&autoplay=1', '');
  } else {
    body[0].classList.add('modal-open');
    modalContent.appendChild(videoEmbed);
    iframe.src += '&autoplay=1';
  }
};

export default () => {
  const videos = document.querySelectorAll('.video-item');
  const close = document.getElementById('modalClose');
  const body = document.getElementsByTagName('body');
  const modalContent = document.getElementById('modalContent');

  if (videos.length <= 0) {
    return false;
  }

  function Init() {
    [].forEach.call(videos, video => {
      video.addEventListener('click', event => {
        launchModal(body, modalContent, event.target.closest('li'));
      });
    });

    close.addEventListener('click', () => {
      body[0].classList.remove('modal-open');
      modalContent.innerHTML = '';
    });
  }

  return Init();
};
