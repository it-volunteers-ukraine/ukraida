<?php

// Helper class to work with Wordpress images
class ImageHelper {
    // Returns image src from image array
    protected static function get_image_src($image) {
        return esc_url($image['sizes']['thumbnail']);
    }

    // Returns image srcset from image array
    protected static function get_image_srcset($image) {
        $s = esc_url($image['sizes']['thumbnail']) . ' ' . $image['sizes']['thumbnail-width'] . 'w, ' . 
            esc_url($image['sizes']['medium']) . ' ' . $image['sizes']['medium-width'] . 'w, ' . 
            esc_url($image['sizes']['large']) . ' ' . $image['sizes']['large-width'] . 'w, ' . 
            esc_url($image['url']) . ' ' . $image['width'] . 'w';
        return $s;
    }

    // Returns image tag for provided Wordpress image array and image class
    public static function get_image_tag($image, $class, $sizes = "(max-width: 600px) 100vw, (max-width: 1024px) 50vw, 1024px") {
        //
        $image_src = ImageHelper::get_image_src($image);
        $image_srcset = ImageHelper::get_image_srcset($image);
        $image_alt = esc_attr($image['alt']);

        //
        $s = <<<BLOCK
            <img
                class="$class"
                src="$image_src" 
                srcset="$image_srcset" 
                sizes="$sizes" 
                alt="$image_alt"
            >
        BLOCK;

        return $s;
    }
}