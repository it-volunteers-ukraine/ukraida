<?php
if (!function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup()
  {
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'wp_it_volunteers_setup');
}


/** add fonts */
add_action('wp_enqueue_scripts', 'add_google_fonts');
function add_google_fonts()
{
  // wp_enqueue_style( 'google_web_fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap' , false);
  // wp_enqueue_style( 'google_web_fonts-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap' , false);
  wp_enqueue_style('google_web_fonts', 'https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap', false);
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'wp_it_volunteers_scripts');



function wp_it_volunteers_scripts()
{
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('wp-style', get_template_directory_uri() . '/assets/styles/main.css', array('main'));
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');
  wp_enqueue_script('wp-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true);
  wp_enqueue_style('modal-donate', get_template_directory_uri() . '/assets/styles/parts-styles/modal-donate.css', array());
  wp_enqueue_script('modal-donate-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/modal-donate.js', array(), false, true);

  if (is_page_template('templates/home.php')) {
    //   $front_scripts_args = [
    //     'ajaxUrl' => admin_url('admin-ajax.php'),
    // ];
    // wp_enqueue_style( 'gallery-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/gallery.css', array() );
    // wp_enqueue_script( 'gallery-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/gallery.js', array(), false, true );
    // wp_localize_script('events-parts-scripts', 'vars', $front_scripts_args);

    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
    wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);

    wp_enqueue_style('next-event-style', get_template_directory_uri() . '/assets/styles/parts-styles/next-event.css', array());
    wp_enqueue_script('next-event-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/next-event.js', array(), false, true);

    wp_enqueue_style('projects-style', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', array());
    wp_enqueue_style('projects-bundle-style', get_template_directory_uri() . '/assets/styles/vendors/swiper-bundle.css', array());
    wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/assets/scripts/vendors/swiper-bundle.min.js', array(), false, true);

    wp_enqueue_style('projects-swiper-style', get_template_directory_uri() . '/assets/styles/parts-styles/projects-swiper.css', array());
    wp_enqueue_script('projects-swiper-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/projects-swiper.js', array(), false, true);

    wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/styles/parts-styles/about.css', array());
    wp_enqueue_script('about-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/about.js', array(), false, true);

    wp_enqueue_style('posts-instagram-style', get_template_directory_uri() . '/assets/styles/parts-styles/posts-instagram.css', array());
    wp_enqueue_script('posts-instagram-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/posts-instagram.js', array(), false, true);

    wp_enqueue_style('event-map-style', get_template_directory_uri() . '/assets/styles/parts-styles/event-map.css', array());
    wp_enqueue_script('event-map-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/event-map.js', array(), false, true);

    // posts-instagram

  }

  if (is_page_template('404.php')) {
    wp_enqueue_style('error-style', get_stylesheet_directory_uri() . '/assets/styles/template-styles/404.css', array('main'));
  }

  if (is_page_template('templates/dev_page.php')) {
    wp_enqueue_style('dev_page-style', get_template_directory_uri() . '/assets/styles/template-styles/dev_page.css', array());
  }


  if (is_page_template('templates/news_page.php')) {
    wp_enqueue_style('news-style', get_template_directory_uri() . '/assets/styles/template-styles/news.css', array('main'));
    // wp_enqueue_script('news-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/news.js', array(), false, true);
  }

  if (is_page_template('templates/donates_page.php')) {
    wp_enqueue_style('donates-style', get_template_directory_uri() . '/assets/styles/template-styles/donates.css', array('main'));
    // wp_enqueue_script('news-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/news.js', array(), false, true);

    wp_enqueue_style('projects-bundle-style', get_template_directory_uri() . '/assets/styles/vendors/swiper-bundle.css', array());
    wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/assets/scripts/vendors/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_style('projects-style', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', array());

    wp_enqueue_style('projects-swiper-style', get_template_directory_uri() . '/assets/styles/parts-styles/donates2-swiper.css', array());
    wp_enqueue_script('donates2-swiper-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/donates2-swiper.js', array(), false, true);
  }

  if (is_page_template('templates/donates_money_page.php')) {
    // wp_enqueue_script('jquery'); // Enqueue the core jQuery UI library
    // wp_deregister_script('jquery');
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    // wp_enqueue_script('jquery-ui-core'); // Enqueue the core jQuery UI 
    // wp_enqueue_style("wp-jquery-ui-dialog");
    wp_enqueue_style('jquery-ui-style', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css');
    wp_enqueue_script('jquery-ui-accordion'); // Enqueue the core jQuery UI library
    wp_enqueue_style('donates-money-style', get_template_directory_uri() . '/assets/styles/template-styles/donates_money.css', array('main'));
    wp_enqueue_script('donates-money-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/accordion.js', array('jquery', 'jquery-ui-core', 'jquery-ui-accordion'),  true);
    // wp_enqueue_script('news-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/news.js', array(), false, true);
          $front_scripts_args = [
        'ajaxUrl' => admin_url('admin-ajax.php'),
    ];
    wp_localize_script('events-parts-scripts', 'vars', $front_scripts_args);


  }

  if (is_page_template('templates/donates_things_page.php')) {
    wp_enqueue_style('donates-things-style', get_template_directory_uri() . '/assets/styles/template-styles/donates_things.css', array('main'));
  }
  // function check_jquery()
  // {
  //   global $wp_scripts;
  //   echo '<script>console.log("jQuery: ", jQuery);</script>';
  // }
  // add_action('wp_footer', 'check_jquery');

  // function check_jquery_ui()
  // {
  //   echo '<script>console.log("jQuery UI: ", jQuery.ui);</script>';
  // }
  // add_action('wp_footer', 'check_jquery_ui');

  // function check_accordion_script()
  // {
  //   echo '<script>console.log("Accordion script: ", jQuery.fn.accordion);</script>';
  // }
  // add_action('wp_footer', 'check_accordion_script');


  if (is_page_template('templates/privacy.php')) {
    wp_enqueue_style('privacy-style', get_template_directory_uri() . '/assets/styles/template-styles/privacy.css', array('main'));
    // wp_enqueue_script('news-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/news.js', array(), false, true);
  }

  if (is_page_template('templates/projects.php')) {
    wp_enqueue_style('swiper-bundle-style', get_template_directory_uri() . '/assets/styles/vendors/swiper-bundle.css', array());
    wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/scripts/vendors/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', array());

    wp_enqueue_style('projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main'));
    wp_enqueue_script('projects-page-swiper-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/projects-page-swipers.js', array(), false, true);
  }

  // if (is_singular() && is_page_template('parts/gallery.php')) {
  //   wp_enqueue_style( 'gallery-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/gallery.css', array() );
  //   wp_enqueue_script( 'gallery-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/gallery.js', array(), false, true );
  // }

  // if (is_singular() && is_page_template('parts/events.php')) {
  //   wp_enqueue_style( 'events-parts-style', get_template_directory_uri() . '/assets/styles/parts-styles/events.css', array() );
  //   wp_enqueue_script( 'events-parts-scripts', get_template_directory_uri() . '/assets/scripts/parts-scripts/events.js', array(), false, true );
  // }
}




/** add swiper */
// function add_swiper() {
//   wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );
//   wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' );
// }


// add_action( 'wp_enqueue_scripts', 'add_swiper' );


/** Register menus */
function wp_it_volunteers_menus()
{
  $locations = array(
    'header' => __('Header Menu', 'wp-it-volunteers'),
    'footer' => __('Footer Menu', 'wp-it-volunteers'),
  );

  register_nav_menus($locations);
}

add_action('init', 'wp_it_volunteers_menus');


/** ACF add options page */
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'parent_slug'   => 'theme-general-settings',
  ));

  //   acf_add_options_sub_page(array(
  //         'page_title'    => 'Project Settings',
  //         'menu_title'    => 'Projects',
  //         'parent_slug'   => 'theme-general-settings',
  //     ));
}

// function register_custom_post_type() {
//     $labels = array(
//         'name'               => _x( 'Успішні проекти', 'post type general name', 'textdomain' ),
//         'singular_name'      => _x( 'Проект', 'post type singular name', 'textdomain' ),
//         'menu_name'          => _x( 'Проекти', 'admin menu', 'textdomain' ),
//         'name_admin_bar'     => _x( 'Проект', 'add new on admin bar', 'textdomain' ),
//         'add_new'            => _x( 'Додати новий', 'Проект', 'textdomain' ),
//         'add_new_item'       => __( 'Додати новий проект', 'textdomain' ),
//         'new_item'           => __( 'Новий проект', 'textdomain' ),
//         'edit_item'          => __( 'Редагувати проект', 'textdomain' ),
//         'view_item'          => __( 'Переглянути проект', 'textdomain' ),
//         'all_items'          => __( 'Всі проекти', 'textdomain' ),
//         'search_items'       => __( 'Шукати проекти', 'textdomain' ),
//         'not_found'          => __( 'Проекти не знайдено', 'textdomain' ),
//         'not_found_in_trash' => __( 'Проекти не знайдено в кошику', 'textdomain' ),
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => false,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'projects' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => null,
//         'supports'           => array( 'title'),
//     );

//     register_post_type( 'project', $args );
// }

// add_action( 'init', 'register_custom_post_type' );

// add_action('wp_ajax_events_more', 'events_more_ajax');
// add_action('wp_ajax_nopriv_events_more', 'events_more_ajax');

// if (! function_exists('events_more_ajax')) {
//     /**
//      * @return void
//      */
//     function events_more_ajax()
//     {
//       $category_name = 'event';
//       $category_id =  get_cat_ID($category_name);
//       $page_events_id = get_page_by_path('events')->ID;


//       $loop_args = [
//           'post_type'      => 'post',
//           'cat'            => $category_id,
//           'posts_per_page' => get_field('events_count', $page_events_id),
//           'meta_query' => array(
//             array(
//               'key' => 'event_date',
//               'type' => 'DATE',
//             )
//           ),
//           'meta_key' => 'event_date',
//           'orderby' => 'meta_value_num',
//           'order'   => $_POST['sort'],
//           'offset'  => $_POST['offset'],
//           'post_status'   => 'publish',
//         ];

//       $loop        = new WP_Query($loop_args);
//       $events       = $loop->get_posts();
//       $html_string = '';

//       foreach ($events as $event) {
//           ob_start();
//           get_template_part('parts/event-item', null, $event);
//           $html_string .= ob_get_contents();
//           ob_end_clean();
//       }

//       $res = [
//           'status'  => true,
//           'post'    => $_POST,
//           'html'    => $html_string,
//           'posts_count' => count($events),
//           'loop_args'   => $loop_args,
//           'max_page'  => $loop->max_num_pages,
//           'total_posts' => $loop->found_posts,
//       ];

//       wp_send_json($res);
//     }
// }

add_theme_support( 'post-thumbnails', array( 'post' ) );



function true_breadcrumbs()
{

  // получаем номер текущей страницы
  $page_num = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $separator = ' / '; //  разделяем обычным слэшем, но можете чем угодно другим

  // если главная страница сайта
  if (is_front_page()) {

    if ($page_num > 1) {
      echo '<a href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
    } else {
      echo 'Вы находитесь на главной странице';
    }
  } else { // не главная

    echo '<a href="' . site_url() . '">Главная</a>' . $separator;


    if (is_single()) { // записи

      the_category(', ');
      echo $separator;
      the_title();
    } elseif (is_page()) { // страницы WordPress 

      the_title();
    } elseif (is_category()) {

      single_cat_title();
    } elseif (is_tag()) {

      single_tag_title();
    } elseif (is_day()) { // архивы (по дням)

      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
      echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
      echo get_the_time('d');
    } elseif (is_month()) { // архивы (по месяцам)

      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
      echo get_the_time('F');
    } elseif (is_year()) { // архивы (по годам)

      echo get_the_time('Y');
    } elseif (is_author()) { // архивы по авторам

      global $author;
      $userdata = get_userdata($author);
      echo 'Опубликовал(а) ' . $userdata->display_name;
    } elseif (is_404()) { // если страницы не существует

      echo 'Ошибка 404';
    }

    if ($page_num > 1) { // номер текущей страницы
      echo ' (' . $page_num . '-я страница)';
    }
  }
}

