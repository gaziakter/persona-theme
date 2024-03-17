<?php 

    /**
 * Essential theme supports
 * */
function persona_theme_support(){

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array(
        'aside',
        'image',
        'gallery',
        'video',
        'audio',
        'link',
        'quote',
        'status'
    );
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption' 
        ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action( 'after_setup_theme', 'persona_theme_support' );


/**
 * enqueue scripts and styles.
 */
function persona_theme_style_scripts() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.1.3', 'all' );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '2.0.7', 'all'  );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), ' 6.5.0', 'all'  );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/css/nouislider.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'backtotop', get_template_directory_uri() . '/assets/css/backtotop.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all'  );
    wp_enqueue_style( 'elegant-icon', get_template_directory_uri() . '/assets/css/elegant-icon.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'hover-reveal', get_template_directory_uri() . '/assets/css/hover-reveal.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'main-without-rtl', get_template_directory_uri() . '/assets/css/main-without-rtl.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all'  );
    wp_enqueue_style( 'persona-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1.0', 'all'  );
    wp_enqueue_style( 'persona-style', get_stylesheet_uri() );

    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '4.0.0', true );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array(), '5.1.3', true );
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '2.0.8', true );

    wp_enqueue_script( 'charming', get_template_directory_uri() . '/assets/js/charming.js', array(), '2.0.8', true );
    wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), '2.0.8', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.js', array(), '2.0.8', true );
    wp_enqueue_script( 'hover-reveal', get_template_directory_uri() . '/assets/js/hover-reveal.js', array(), '2.0.8', true );
    wp_enqueue_script( 'imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array(), '2.0.8', true );
    wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/jarallax.js', array(), '2.0.8', true );
    wp_enqueue_script( 'parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array(), '2.0.8', true );
    wp_enqueue_script( 'tween-max', get_template_directory_uri() . '/assets/js/tween-max.js', array(), '2.0.8', true );
    wp_enqueue_script( 'vanilla-tilt', get_template_directory_uri() . '/assets/js/vanilla-tilt.js', array(), '2.0.8', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), '6.5.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0.0', true );
    wp_enqueue_script( 'nouislider', get_template_directory_uri() . '/assets/js/nouislider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(), '1.1.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), '1.0.0', true );
    wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/assets/js/backtotop.js', array(), '1.0.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array(), '1.0.0', true );
    wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), '1.5.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '1.1.3', true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array('imagesloaded'), '3.0.5', true );
    wp_enqueue_script( 'persona-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

    if (is_singular(  ) && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'persona_theme_style_scripts' );