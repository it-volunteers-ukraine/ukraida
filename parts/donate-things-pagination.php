<?php
    // Returns button's code for the specific page with specific text
    function getPageButton($page_number, $page_text = null, $with_border = false) {
        $page_url = get_pagenum_link($page_number);
        $text = $page_text ?? $page_number;
        $border_class = $with_border ? "donate-things-pagination-btn-with-border" : "";
        
        return <<<BTN
            <a class="donate-things-pagination-btn $border_class inactive" href="$page_url">$text</a>
        BTN;
    }

    // Returns code for SVG for previous button
    function getPrevSvg($is_enabled) {
        $class = "donate-things-pagination-btn-svg-" . ($is_enabled ? "enabled" : "disabled");
        $href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-arrow-left";

        return <<<BTN
            <svg class="donate-things-pagination-btn-svg $class">
                <use xlink:href="$href"></use>
            </svg>
        BTN;
    }

    // Returns code for SVG for previous button
    function getNextSvg($is_enabled) {
        $class = "donate-things-pagination-btn-svg-" . ($is_enabled ? "enabled" : "disabled");
        $href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-arrow-right";

        return <<<BTN
            <svg class="donate-things-pagination-btn-svg $class">
                <use xlink:href="$href"></use>
            </svg>
        BTN;
    }

    // Returns pagination for narrow screens (width < 320px)
    function getNarrowPagination($current_page, $max_num_pages) {
        //
        $s = "";

        // Only if there are some pages
        if ($max_num_pages > 1) {
            // Start of pagination
            $s = '<div class="donate-things-pagination donate-things-pagination-narrow">';

            // Previous button
            if ($current_page > 1) {
                $s .= getPageButton($current_page - 1, getPrevSvg(true), true);
            } else {
                $svg = getPrevSvg(false);
                $s .= <<<BTN
                    <span class="donate-things-pagination-btn donate-things-pagination-btn-with-border disabled">
                        $svg
                    </span>
                BTN; 
            }

            // Start of pages group
            $s .= '<div class="donate-things-pagination-pages">';

            // Second previous page
            if (($current_page == $max_num_pages) && ($current_page - 2 >= 1)) {
                $text = null;
                if ($current_page - 2 > 1) $text = "…";

                $s .= getPageButton($current_page - 2, $text);
            }

            // One previous pages
            if ($current_page - 1 > 0) {
                $text = null;
                if (($current_page - 1 > 1) && ($current_page < $max_num_pages)) $text = "…";

                $s .= getPageButton($current_page - 1, $text);
            }

            // Current page
            $s .= <<<BTN
                <span class="donate-things-pagination-btn active">$current_page</span>
            BTN;

            // One next page
            if ($current_page + 1 <= $max_num_pages) {
                $text = null;
                if (($current_page > 1) && ($current_page + 1 < $max_num_pages)) $text = "…";

                $s .= getPageButton($current_page + 1, $text);
            }
            
            // Second next page (only for current first page)
            if (($current_page == 1) && ($current_page + 2 <= $max_num_pages)) {
                $text = null;
                if ($current_page + 2 < $max_num_pages) $text = "…";

                $s .= getPageButton($current_page + 2, $text);
            }

            // End of pages group
            $s .= '</div>';

            // Next button
            if ($current_page < $max_num_pages) {
                $s .= getPageButton($current_page + 1, getNextSvg(true), true);
            } else {
                $svg = getNextSvg(false);
                $s .= <<<BTN
                    <span class="donate-things-pagination-btn donate-things-pagination-btn-with-border disabled">
                        $svg
                    </span>
                BTN; 
            }

            // End of pagination
            $s .= '</div>';
        }

        return $s;
    }

    // Returns pagination for regular screens (width >= 320 px)
    function getRegularPagination($current_page, $max_num_pages) {
        //
        $s = "";

        // Only if there are some pages
        if ($max_num_pages > 1) {
            // Start of pagination
            $s = '<div class="donate-things-pagination donate-things-pagination-regular">';

            // Previous button
            if ($current_page > 1) {
                $s .= getPageButton($current_page - 1, getPrevSvg(true), true);
            } else {
                $svg = getPrevSvg(false);
                $s .= <<<BTN
                    <span class="donate-things-pagination-btn donate-things-pagination-btn-with-border disabled">
                        $svg
                    </span>
                BTN; 
            }

            // Start of pages group
            $s .= '<div class="donate-things-pagination-pages">';

            // Third previous page
            if ($current_page - 3 >= 1) {
                $text = null;
                if ($current_page - 3 > 1) $text = "…";

                $s .= getPageButton($current_page - 3, $text);
            }

            // Two previous pages
            for ($page = $current_page - 2; $page < $current_page; $page++) {
                if ($page > 0) {
                    $s .= getPageButton($page);
                }
            }

            // Current page
            $s .= <<<BTN
                <span class="donate-things-pagination-btn active">$current_page</span>
            BTN;

            // Two next pages
            for ($page = $current_page + 1; $page <= $current_page + 2; $page++) {
                if ($page <= $max_num_pages) {
                    $s .= getPageButton($page);
                }
            }
            
            // Third next page
            if ($current_page + 3 <= $max_num_pages) {
                $text = null;
                if ($current_page + 3 < $max_num_pages) $text = "…";

                $s .= getPageButton($current_page + 3, $text);
            }

            // End of pages group
            $s .= '</div>';

            // Next button
            if ($current_page < $max_num_pages) {
                $s .= getPageButton($current_page + 1, getNextSvg(true), true);
            } else {
                $svg = getNextSvg(false);
                $s .= <<<BTN
                    <span class="donate-things-pagination-btn donate-things-pagination-btn-with-border disabled">
                        $svg
                    </span>
                BTN; 
            }

            // End of pagination
            $s .= '</div>';
        }

        return $s;
    }

    // Pagination params
    $current_page = $args['current_page'];
    $max_num_pages = $args['max_num_pages'];

    // Paginations for different screens
    $s = getNarrowPagination($current_page, $max_num_pages) . getRegularPagination($current_page, $max_num_pages);

    echo $s;
