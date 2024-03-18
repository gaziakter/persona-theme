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

add_action( 'after_setup_theme', 'persona_support' );

/**
 * Header function
 */
function persona_header(){
    get_template_part( 'template-parts/header/header-1' );
}

/**
 * Include file
 */
include_once('inc/common/scripts.php');
include_once('inc/persona-kirki.php');