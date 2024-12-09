<?php
    $currend_id = get_the_ID();

    // Initial values
    $search_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-magnifying-glass";
    $search_placeholder = acf_esc_html(get_field('search_placeholder', $currend_id));
    $search_query = $_GET['query'] ?? '';
    $search_button_text = acf_esc_html(get_field('search_button_text', $currend_id));
    $category_remove_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-close";

    $val = $_GET['categories'] ?? [];
    $initially_selected_categories = is_array($val) ? $val : [$val];

    // Retrieving possible categories
    $term_args = array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        'fields' => 'names'
    );
    $term_query = new WP_Term_Query($term_args);
    $categories = $term_query->terms;
?>

<form class="news-search-form">
    <div class="news-search-container">
        <div class="news-search-input-container">
            <svg class="news-search-svg"><use xlink:href="<?= $search_icon_href ?>"></use></svg>
            <input class="news-search-input" name="query" placeholder="<?= $search_placeholder ?>" value="<?= $search_query ?>">
        </div>
        <button class="news-search-btn" type="submit"><?= $search_button_text ?></button>
    </div>
    <div class="news-search-categories">
        <select class="news-search-narrow-select" id="newsSearchNarrowSelect" multiple="multiple" name="categories[]">
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
        <div class="news-search-wide-categories">
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
                            class="news-category-btn<?= $selected ? " active" : "" ?>"
                            href="<?= $url ?>"
                        >
                            <?= $category?>
                            <svg 
                                class="news-search-category-remove-svg<?= $selected ? " active" : "" ?>"
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