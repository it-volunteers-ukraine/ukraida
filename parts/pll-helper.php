<?php

// Helper class to work with the Polylang
class PllHelper {
    // Returns the url of the translated page from the provided post url
    public static function get_current_translation($url) {
        // Checking whether the required Polylang function exists
        if (function_exists('pll_get_post')) {
            // Get the post id from the url
            $post_id = url_to_postid($url);
            // Get the post id of the translated to the current language post
            $translated_post_id = pll_get_post($post_id);
            // Get the url of the translated post
            $result_url = esc_url(get_the_permalink($translated_post_id));
        } else {
            // No translations are available - return the provided url
            $result_url = $url;
        }

        return $result_url;
    }
}