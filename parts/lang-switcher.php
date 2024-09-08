<?php
    // Classes depending on switcher type
    $type = $args["type"];

    $item_class = $type ? "menu__$type-item" : "menu__item";
    $img_class = $type ? "menu__$type-img" : "menu__img";

    $langs_list = "";
    // Checking whether required Polylang function exists
    if (function_exists('pll_the_languages')) {
        $langs_list = 
            '<ul class="lang-list">' 
            . pll_the_languages(array(
                'dropdown' => 0, // Если 1, переключатель будет в виде выпадающего списка.
                'show_flags' => 0, // Если 1, будут показаны флаги.
                'show_names' => 1, // Если 1, будут показаны названия языков.
                'display_names_as' => 'slug', // Slug вместо полного имени языка
                'hide_if_no_translation' => 0, // Если 1, будет скрыт, если нет перевода на текущий язык.
                'hide_current' => 0, // Если 1, текущий язык не будет отображаться.
                'force_home' => 0, // Если 1, ссылка будет вести на главную страницу соответствующего языка.
                'echo' => 0, // Если 0, то вернуть строкой вместо вывода
            ))
            . '</ul>';
    } else {
        // In case if Polylang is not installed and activated add something to show
        $langs_list = <<<STR
            <a href="/" class="menu__itm-lang active">DE</a>
            &nbsp;/&nbsp;
            <span class="menu__itm-lang">UA</span>
        STR;
    }
?>
    <div href="#" class="<?= $item_class ?>">
        <svg class="<?= $img_class ?>">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/header/sprite.svg#language"></use>
        </svg>
        <?= $langs_list ?>
    </div>