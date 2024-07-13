<?php

/**
 * Essential theme supports
 * */
function persona_support() {

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = [
        'aside',
        'image',
        'gallery',
        'video',
        'audio',
        'link',
        'quote',
        'status',
    ];
    add_theme_support( 'post-formats', $post_formats );

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** WooCommerce support */
    add_theme_support( 'woocommerce' );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** HTML5 support **/
    add_theme_support( 'html5', [
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ] );

    /** Register Menus */
    register_nav_menus( [
        'main-menu'   => __( 'Main Menu', 'persona' ),
        'side-menu'   => __( 'Side Menu', 'persona' ),
        'footer-menu' => __( 'Footer Menu', 'persona' ),
    ] );

    /** Remove blog editior */
    remove_theme_support( 'widgets-block-editor' );

    /** Remove woocommerce default style */
    add_filter( 'woocommerce_enqueue_styles', '__return_false');

}

add_action( 'after_setup_theme', 'persona_support' );

/** Resister sidebar */
function persona_widgets() {

    /** Blog sidebar */
    register_sidebar( [
        'name'          => __( 'Blog Sidebar', 'persona' ),
        'id'            => 'blog-sidebar',
        'description'   =>
        __( 'Widgets in this area will be shown on blog sidebar.', 'persona' ),
        'before_widget' =>
        '<div id="%1$s" class="sidebar__widget mb-40 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar__widget-title">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 01', 'persona' ),
        'id'            => 'footer-widget-01',
        'description'   => __( 'Widgets in this area will be shown on footer.',
            'persona' ),
        'before_widget' =>
        '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 02', 'persona' ),
        'id'            => 'footer-widget-02',
        'description'   => __( 'Widgets in this area will be shown on footer.',
            'persona' ),
        'before_widget' =>
        '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 03', 'persona' ),
        'id'            => 'footer-widget-03',
        'description'   => __( 'Widgets in this area will be shown on footer.',
            'persona' ),
        'before_widget' =>
        '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Footer Widget 04', 'persona' ),
        'id'            => 'footer-widget-04',
        'description'   => __( 'Widgets in this area will be shown on footer.',
            'persona' ),
        'before_widget' =>
        '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ] );
}
add_action( 'widgets_init', 'persona_widgets' );

/** Include files */
include_once 'inc/common/scripts.php';
include_once 'inc/template-function.php';
include_once 'inc/nav-walker.php';
include_once 'inc/sidebar-rc-post-widget.php';
include_once 'inc/breadcorumb.php';

if ( class_exists( 'kirki' ) ) {
    include_once 'inc/persona-kirki.php';
}
