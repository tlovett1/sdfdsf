/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

import { bindCustomizerValue } from './helpers';

export default () => {
  bindCustomizerValue('footer_settings[subheading]', '#footerSubheading');
  bindCustomizerValue('footer_settings[heading]', '#footerHeading');
  bindCustomizerValue(
    'about_intro_settings[subheading]',
    '#aboutIntroSubHeading',
  );
  bindCustomizerValue('about_intro_settings[heading]', '#aboutIntroHeading');
  bindCustomizerValue('about_intro_settings[text]', '#aboutIntroText');
  bindCustomizerValue(
    'about_lists_settings[subheading]',
    '#aboutListsSubHeading',
  );
  bindCustomizerValue('about_lists_settings[heading]', '#aboutListsHeading');
  bindCustomizerValue(
    'events_intro_settings[subheading]',
    '#eventsIntroSubHeading',
  );
  bindCustomizerValue('events_intro_settings[text]', '#eventsIntroText');
};
