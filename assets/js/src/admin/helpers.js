/* eslint-disable */

export function bindCustomizerValue(setting, element) {
  if (!wp.customize) {
    return false;
  }
  wp.customize(setting, value => {
    value.bind(newval => {
      jQuery(element, jQuery('iframe').contents()).html(newval);
    });
  });
}

export const bindBGCustomizerImage = (setting, element) => {
  if (!wp.customize) {
    return false;
  }
  wp.customize(setting, value => {
    value.bind(newval => {
      fetch(`${ATU.siteUrl}/wp-json/wp/v2/media/${newval}`)
        .then(response => response.json())
        .then(json => {
          jQuery(element, jQuery('iframe').contents()).css(
            'background-image',
            `url('${json.source_url}')`,
          );
        })
        .catch(e => {
          throw e;
        });
    });
  });
};
