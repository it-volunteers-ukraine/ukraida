<?php
    // Classes depending on switcher type
    $type = $args["type"];

    $item_class = $type ? "menu__$type-item" : "menu__item";
    $img_class = $type ? "menu__$type-img" : "menu__img";

    // Preparing list with languages
    $langs = [];
    // Checking whether required Polylang function exists
    if (function_exists('pll_the_languages')) {
        // Retrieving translations
        $translations = pll_the_languages(array('raw' => 1));

        // For each translation adding element to switcher
        foreach ($translations as $lang_code => $t) {
            $is_active = $t["current_lang"];
            
            // Class for the element
            $class = "menu__itm-lang";
            if ($is_active) $class .= " active";
            // Code for the element
            $code = $lang_code;
            // For Ukrainian emit UA code instead of UK
            if ($lang_code == "UK") $code = "UA";

            // Preparing element depending on whether it is active translation or not
            $element = "";
            if ($is_active) {
                // Span for active translation
                $element = <<<ELEM
                    <span class="$class">$code</span>
                ELEM;
            } else {
                // Anchor link for inactive translation
                $href = $t["url"];

                $element = <<<ELEM
                    <a class="$class" href="$href">$code</a>
                ELEM;
            }
            // Adding prepared element to the switcher
            $langs[] = $element;
        }
    }
    // Imploding all elements with separator " / "
    $langs_str = implode("&nbsp;/&nbsp;", $langs);
?>

<div href="#" class="<?= $item_class ?>">
    <svg class="<?= $img_class ?>">
        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#language"></use>
    </svg>
    <?= $langs_str ?>
</div>