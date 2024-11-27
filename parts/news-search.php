<?php
    $currend_id = get_the_ID();

    // Initial values
    $search_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-magnifying-glass";
    $search_placeholder = get_field('search_placeholder', $currend_id);
    $search_query = $_GET['query'] ?? '';
    $search_button_text = get_field('search_button_text', $currend_id);
    $category_remove_icon_href = get_bloginfo('template_url') . "/assets/images/symbol-defs.svg#icon-close";

    // Retrieving possible categories
    $categories = [];
    while (have_rows('categories')) {
        the_row();
        $categories[] = get_sub_field('name');
    }
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
                foreach ($categories as $index => $category):
                    // Is category initially selected
                    $selected = array_search($category, $_GET['categories']) !== false;
                    ?>
                        <option
                            id="categoryOption<?= $index ?>"
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
                foreach ($categories as $index => $category):
                    // Is category initially selected
                    $selected = array_search($category, $_GET['categories']) !== false;
                    ?>
                        <div
                            class="news-category-btn<?= $selected ? " active" : "" ?>"
                            id="categoryButton<?= $index ?>"
                            onClick="onCategoryClick(<?= $index ?>)"
                        >
                            <?= $category?>
                            <svg 
                                class="news-search-category-remove-svg<?= $selected ? " active" : "" ?>"
                                id="categoryRemoveSvg<?= $index ?>"
                            >
                                <use xlink:href="<?= $category_remove_icon_href ?>">
                                </use>
                            </svg>
                        </div>
                    <?php
                endforeach
            ?>
        </div>
    </div>
</form>