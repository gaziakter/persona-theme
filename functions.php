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

/** Header function */
function persona_header(){
    get_template_part( 'template-parts/header/header-1' );
}

/** Logo function */
function persona_logo(){
    $default_logo_url = get_template_directory_uri().'/assets/img/logo/logo-black.svg';
    $persona_header_logo = get_theme_mod( 'personal_logo', $default_logo_url );

    if(!empty( $persona_header_logo)){ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $persona_header_logo ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"></a>
    
    <?php 
    }
}


/** Include file */
include_once('inc/common/scripts.php');
include_once('inc/persona-kirki.php');