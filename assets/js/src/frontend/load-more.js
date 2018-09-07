/* eslint-disable */
import 'whatwg-fetch';
import { launchModal } from './video-modal';

export default () => {
  const container = document.querySelectorAll('.video-lists');
  const loadMoreButton = document.getElementById('loadmore');
  const body = document.getElementsByTagName('body');
  const modalContent = document.getElementById('modalContent');

  let page = 2;

  if (!container || !loadMoreButton) {
    return false;
  }

  function Init() {
    loadMoreButton.addEventListener('click', () => {
      const endpoint = `${
        ATU.siteUrl
      }/wp-json/atu/v1/more?per_page=3&page=${page}`;

      fetch(endpoint)
        .then(response => response.json())
        .then(data => {
          const videoHtml = data.post;
          const videoItem = document
            .createRange()
            .createContextualFragment(videoHtml);
          const videoItems = videoItem.children;

          [].forEach.call(videoItems, item => {
            item.style.opacity = 0;
            item.style.transition = 'all 0.3s ease-in-out';

            setTimeout(() => {
              item.style.opacity = 1;
            }, 100);

            item.addEventListener('click', event => {
              launchModal(body, modalContent, event.target.closest('li'));
            });
          });

          container[0].appendChild(videoItem);

          if (page === parseInt(data.more, 10)) {
            loadMoreButton.style.display = 'none';
          }

          page += 1;
        });
    });
  }

  return Init();
};
