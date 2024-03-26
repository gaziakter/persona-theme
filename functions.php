<?php 

    /**
 * Essential theme supports
 * */
function persona_support(){

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

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption' 
        ) );

    /** Register Menus */
    register_nav_menus( array(
        'main-menu'     =>  __('Main Menu', 'persona'),
        'side-menu'     =>  __('Side Menu', 'persona')
    ) );

}

add_action( 'after_setup_theme', 'persona_support' );






/** Include file */
include_once('inc/common/scripts.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');

if(class_exists('kirki')){
    include_once('inc/persona-kirki.php');
}