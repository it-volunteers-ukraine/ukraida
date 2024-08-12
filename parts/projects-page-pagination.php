<?php
    // Returns button's code for the specific page with specific text
    function getPageButton($page_number, $page_text = null) {
        $page_url = get_pagenum_link($page_number);
        $text = $page_text ?? $page_number;
        
        return <<<BTN
            <a class="projects-pagination-btn inactive" href="$page_url">$text</a>
        BTN;
    }

    // Pagination params
    $current_page = $args['current_page'];
    $max_num_pages = $args['max_num_pages'];

    //
    $s = "";

    // Only if there are some pages
    if ($max_num_pages > 1) {
        $s = '<div class="projects-pagination">';

        // Previous button
        if ($current_page > 1) {
            $s .= getPageButton($current_page - 1, "&lt;");
        } else {
            $s .= <<<BTN
                <span class="projects-pagination-btn disabled">&lt;</span>
            BTN; 
        }

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
            <span class="projects-pagination-btn active">$current_page</span>
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

        // Next button
        if ($current_page < $max_num_pages) {
            $s .= getPageButton($current_page + 1, "&gt;");
        } else {
            $s .= <<<BTN
                <span class="projects-pagination-btn disabled">&gt;</span>
            BTN; 
        }

        $s .= '</div>';
    }

    echo $s;
