/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

import { bindCustomizerValue } from './helpers';

export default () => {
  bindCustomizerValue('hero_settings_slide1[subheading]', '#slide1SubHeading');
  bindCustomizerValue('hero_settings_slide1[heading]', '#slide1Heading');
  bindCustomizerValue('hero_settings_slide2[subheading]', '#slide2SubHeading');
  bindCustomizerValue('hero_settings_slide2[heading]', '#slide2Heading');

  bindCustomizerValue(
    'about_intro_settings[subheading]',
    '#aboutIntroSubHeading',
  );
  bindCustomizerValue('about_intro_settings[heading]', '#aboutIntroHeading');
  bindCustomizerValue('about_intro_settings[text]', '#aboutIntroText');

  bindCustomizerValue('about_stats[stat1][heading]', '#aboutStatsHeading');
  bindCustomizerValue('about_stats[stat1][number]', '#aboutStatsNumber');
  bindCustomizerValue('about_stats[stat1][label]', '#aboutStatsLabel');

  bindCustomizerValue('about_stats[stat2][heading]', '#aboutStats2Heading');
  bindCustomizerValue('about_stats[stat2][number]', '#aboutStats2Number');
  bindCustomizerValue('about_stats[stat2][label]', '#aboutStats2Label');

  bindCustomizerValue('about_stats[stat3][heading]', '#aboutStats3Heading');
  bindCustomizerValue('about_stats[stat3][number]', '#aboutStats3Number');
  bindCustomizerValue('about_stats[stat3][label]', '#aboutStats3Label');

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

  bindCustomizerValue(
    'events_list_settings[subheading]',
    '#eventsListSubHeading',
  );
  bindCustomizerValue('events_list_settings[heading]', '#eventsListHeading');

  bindCustomizerValue(
    'testimonials_settings[subheading]',
    '#testimonialsSubHeading',
  );
  bindCustomizerValue('testimonials_settings[heading]', '#testimonialsHeading');

  bindCustomizerValue('media_settings[subheading]', '#mediaSubHeading');
  bindCustomizerValue('media_settings[heading]', '#mediaHeading');
};
bindCustomizerValue('footer_settings[subheading]', '#footerSubheading');
bindCustomizerValue('footer_settings[heading]', '#footerHeading');
