<?php
    $current_id = get_the_ID();

    // Initial values
    $search_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-magnifying-glass";
    $search_placeholder = acf_esc_html(get_field('search_placeholder', $current_id));
    $search_query = $_GET['query'] ?? '';
    $search_button_text = acf_esc_html(get_field('search_button_text', $current_id));
    $categories_select_placeholder = acf_esc_html(get_field('categories_select_placeholder', $current_id));
    $category_remove_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-close";

    $val = $_GET['categories'] ?? [];
    $initially_selected_categories = is_array($val) ? $val : [$val];

    // Retrieving all the existing categories
    $term_args = array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        'fields' => 'id=>name',
    );
    $term_query = new WP_Term_Query($term_args);
    $all_categories = $term_query->terms;
    // Leave the catogories, which are used
    $current_language = pll_current_language();
    $categories = array_filter($all_categories, function ($category, $category_id) use ($current_language) {
        // Check if there exists at least one post with this category
        $query = new WP_Query(array(
            'post_type' => array('event', 'post-types-one-news'),
            'lang' => $current_language,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category', 
                    'field' => 'term_id', 
                    'terms' => $category_id,
                )
            )
        ));

        return ($query->found_posts > 0);
    }, ARRAY_FILTER_USE_BOTH);
?>

<form class="actual-search-form" id="actualSearchForm">
    <div class="actual-search-container">
        <div class="actual-search-input-container">
            <svg class="actual-search-svg"><use xlink:href="<?= $search_icon_href ?>"></use></svg>
            <input class="actual-search-input" name="query" placeholder="<?= $search_placeholder ?>" value="<?= $search_query ?>">
        </div>
        <button class="actual-search-btn" type="submit"><?= $search_button_text ?></button>
    </div>
    <div class="actual-search-categories">
        <select 
            class="actual-search-narrow-select" 
            id="actualSearchNarrowSelect" 
            multiple="multiple" 
            name="categories[]"
            onchange="onSelectChange()"
        >
            <?php
                foreach ($categories as $category):
                    // Is category initially selected
                    $selected = array_search($category, $initially_selected_categories) !== false;
                    ?>
                        <option
                            <?= $selected ? "selected" : "" ?>
                        >
                            <?= $category?>
                        </option>
                    <?php
                endforeach
            ?>
        </select>
        <script>
            // Initialize select
            jQuery(document).ready(function() {
                jQuery('#actualSearchNarrowSelect').select2({
                    placeholder :"<?= $categories_select_placeholder ?>",
                });
            });
        </script>
        <div class="actual-search-wide-categories">
            <?php
                foreach ($categories as $category):
                    // Is category initially selected
                    $selected = array_search($category, $initially_selected_categories) !== false;
                    // If the category is selected then preparing the url without the category
                    // Otherwise it is needed to be added
                    $cts = $initially_selected_categories;
                    if ($selected) {
                        $index = array_search($category, $cts);
                        array_splice($cts, $index, 1);
                    } else {
                        $cts[] = $category;
                    }
                    $url = add_query_arg('categories', $cts);
                    ?>
                        <a
                            class="actual-category-btn<?= $selected ? " active" : "" ?>"
                            href="<?= $url ?>"
                        >
                            <?= $category?>
                            <svg 
                                class="actual-search-category-remove-svg<?= $selected ? " active" : "" ?>"
                            >
                                <use xlink:href="<?= $category_remove_icon_href ?>">
                                </use>
                            </svg>
                        </a>
                    <?php
                endforeach
            ?>
        </div>
    </div>
</form>