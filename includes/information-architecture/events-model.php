<?php
namespace ATU\Theme\IA;

/**
 * Defines model data for the Events Post Type.
 *
 * @param boolean $key Allows you to pas a key name to get a specific model key.
 * @return mixed Return an array if no $key is passed, otherwise
 * it returns a model key string name
 */
function get_events_model_keys($key = false)
{
    $prefix = 'atu_events';
    $keys   = [
        'location'   => [
            'key'   => sprintf('%s_location', $prefix),
            'label' => esc_html__('Location', 'atu'),
        ],
        'date'   => [
            'key'   => sprintf('%s_date', $prefix),
            'label' => esc_html__('Date', 'atu'),
        ],
    ];

    return get_meta_key_value($keys, $key);
}
