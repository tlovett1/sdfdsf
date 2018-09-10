<?php
namespace ATU\Theme\Endpoints;

use ATU\Theme\Views;
use ATU\Theme\Cache;

function get_videos($request)
{
    $page     = $request->get_param('page');
    $per_page = $request->get_param('per_page');
    $html     = '';

    $posts = Cache\get_videos_query($per_page, '', $page);

    $videos = array_map(
        function ($video) {
            return Cache\get_videos_meta($video->ID);
        },
        $posts->posts
    );


    foreach ($videos as $post) :
        $html .= Views\build_video($post);
    endforeach;

    return [
        'post'        => $html,
        'posts-found' => $posts->found_posts,
        'more'        => $posts->max_num_pages,
    ];
}
