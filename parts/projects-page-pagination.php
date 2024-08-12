<?php
    // Returns button's code for the specific page with specific text
    function getPageButton($page_number, $page_text = null) {
        $page_url = get_pagenum_link($page_number);
        $text = $page_text ?? $page_number;
        
        return <<<BTN
            <a class="projects-pagination-btn inactive" href="$page_url">$text</a>
        BTN;
    }

    // Returns code for SVG for previous button
    function getPrevSvg($is_enabled) {
        $color = $is_enabled ? "#221F25" : "#CCCCCC";

        return <<<BTN
            <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.9444 2.77525L11.9444 14.0019C11.9451 14.4451 11.8202 14.8795 11.5842 15.2547C11.3483 15.6298 11.0109 15.9305 10.6111 16.1219C10.1368 16.346 9.60906 16.4322 9.08807 16.371C8.56709 16.3097 8.07381 16.1033 7.66443 15.7752L0.864431 10.1619C0.610257 9.94162 0.406409 9.66927 0.2667 9.36331C0.126992 9.05735 0.0546872 8.72493 0.0546872 8.38858C0.0546871 8.05223 0.126992 7.71981 0.2667 7.41385C0.406409 7.10789 0.610257 6.83553 0.86443 6.61525L7.66443 1.00191C8.07381 0.673903 8.56709 0.467492 9.08807 0.4062C9.60905 0.344907 10.1368 0.431202 10.6111 0.655246C11.0109 0.846635 11.3483 1.14732 11.5842 1.52251C11.8202 1.89769 11.9451 2.33203 11.9444 2.77525Z" fill="$color"/>
            </svg>
        BTN;
    }

    // Returns code for SVG for previous button
    function getNextSvg($is_enabled) {
        $color = $is_enabled ? "#221F25" : "#CCCCCC";

        return <<<BTN
            <svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.0545925 14.0019L0.054593 2.77519C0.0539512 2.33197 0.17884 1.89763 0.414804 1.52245C0.650769 1.14726 0.988161 0.846575 1.38793 0.655186C1.86225 0.431143 2.38997 0.344851 2.91095 0.406142C3.43193 0.467434 3.92522 0.673845 4.33459 1.00185L11.1346 6.61519C11.3888 6.83548 11.5926 7.10783 11.7323 7.41379C11.872 7.71975 11.9443 8.05217 11.9443 8.38852C11.9443 8.72487 11.872 9.05729 11.7323 9.36325C11.5926 9.66921 11.3888 9.94157 11.1346 10.1619L4.33459 15.7752C3.92522 16.1032 3.43193 16.3096 2.91095 16.3709C2.38997 16.4322 1.86225 16.3459 1.38793 16.1219C0.98816 15.9305 0.650769 15.6298 0.414804 15.2546C0.178839 14.8794 0.0539506 14.4451 0.0545925 14.0019Z" fill="$color"/>
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
            $s = '<div class="projects-pagination projects-pagination-narrow">';

            // Previous button
            if ($current_page > 1) {
                $s .= getPageButton($current_page - 1, getPrevSvg(true));
            } else {
                $svg = getPrevSvg(false);
                $s .= <<<BTN
                    <span class="projects-pagination-btn disabled">$svg</span>
                BTN; 
            }

            // Start of pages group
            $s .= '<div class="projects-pagination-pages">';

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
                <span class="projects-pagination-btn active">$current_page</span>
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
                $s .= getPageButton($current_page + 1, getNextSvg(true));
            } else {
                $svg = getNextSvg(false);
                $s .= <<<BTN
                    <span class="projects-pagination-btn disabled">$svg</span>
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
            $s = '<div class="projects-pagination projects-pagination-regular">';

            // Previous button
            if ($current_page > 1) {
                $s .= getPageButton($current_page - 1, getPrevSvg(true));
            } else {
                $svg = getPrevSvg(false);
                $s .= <<<BTN
                    <span class="projects-pagination-btn disabled">$svg</span>
                BTN; 
            }

            // Start of pages group
            $s .= '<div class="projects-pagination-pages">';

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

            // End of pages group
            $s .= '</div>';

            // Next button
            if ($current_page < $max_num_pages) {
                $s .= getPageButton($current_page + 1, getNextSvg(true));
            } else {
                $svg = getNextSvg(false);
                $s .= <<<BTN
                    <span class="projects-pagination-btn disabled">$svg</span>
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
