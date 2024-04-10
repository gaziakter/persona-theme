<?php

/** Header function */
function persona_header()
{
    $header_default_style = get_theme_mod('header_default_setting', 'header-style-1');

    if ($header_default_style == 'header-style-1') {
        get_template_part('template-parts/header/header-1');
    } elseif ($header_default_style == 'header-style-2') {
        get_template_part('template-parts/header/header-2');
    } elseif ($header_default_style == 'header-style-3') {
        get_template_part('template-parts/header/header-3');
    } elseif ($header_default_style == 'header-style-4') {
        get_template_part('template-parts/header/header-4');
    } elseif ($header_default_style == 'header-style-5') {
        get_template_part('template-parts/header/header-5');
    }
}

/** Footer function */
function persona_footer()
{
    get_template_part('template-parts/footer/footer-1');
}


/** Footer copyright */
function personal_footer_copyright()
{
    $persona_copyright_text = get_theme_mod('personal_footer_copyright', __('© 2024 Harry All Rights Reserved.', 'persona'));
?>
    <p><?php echo wp_kses_post($persona_copyright_text); ?></p>
    <?php
}


/** Logo function */
function persona_logo()
{
    $default_logo_url = get_template_directory_uri() . '/assets/img/logo/logo-black.svg';
    $persona_header_logo = get_theme_mod('personal_logo', $default_logo_url);

    if (!empty($persona_header_logo)) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($persona_header_logo); ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>

    <?php
    }
}

/** Search Logo function */
function persona_search_logo()
{
    $default_logo_url = get_template_directory_uri() . '/assets/img/logo/logo.svg';
    $persona_search_logo = get_theme_mod('personal_search_logo', $default_logo_url);

    if (!empty($persona_search_logo)) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($persona_search_logo); ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>

    <?php
    }
}

/** Side Logo function */
function persona_side_logo()
{
    $default_logo_url = get_template_directory_uri() . '/assets/img/logo/logo-black.svg';
    $persona_side_logo = get_theme_mod('personal_side_logo', $default_logo_url);

    if (!empty($persona_side_logo)) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($persona_side_logo); ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>

    <?php
    }
}

/** Main function */
function persona_menu()
{
    wp_nav_menu(
        array(
            'theme_location'    => 'main-menu',
            'fallback_cb'       => 'Persona_Walker_Nav_Menu::fallcak',
            'walker'            => new Persona_Walker_Nav_Menu
        )
    );
}

/** Side function */
function persona_side_menu()
{
    wp_nav_menu(
        array(
            'theme_location'    => 'side-menu',
            'fallback_cb'       => 'Persona_Walker_Nav_Menu::fallcak',
            'walker'            => new Persona_Walker_Nav_Menu
        )
    );
}

/** Footer function */
function persona_footer_menu()
{
    wp_nav_menu(
        array(
            'theme_location'    => 'footer-menu',
            'fallback_cb'       => 'Persona_Walker_Nav_Menu::fallcak',
            'walker'            => new Persona_Walker_Nav_Menu
        )
    );
}

/** Social function */
function persona_social_icon()
{
    $personal_facebook = get_theme_mod('personal_facebook', __('#', 'persona'));
    $personal_twitter = get_theme_mod('personal_twitter', __('#', 'persona'));
    $personal_youtube = get_theme_mod('personal_youtube', __('#', 'persona'));
    $personal_linkedin = get_theme_mod('personal_linkedin', __('#', 'persona'));
    $personal_instagram = get_theme_mod('personal_instagram', __('', 'persona'));
    $personal_flickr = get_theme_mod('personal_flickr', __('', 'persona'));
    $personal_vimeo = get_theme_mod('personal_vimeo', __('', 'persona'));
    $personal_behance = get_theme_mod('personal_behance', __('', 'persona'));
    ?>

    <?php if (!empty($personal_facebook)) : ?>
        <a href="<?php echo esc_url($personal_facebook); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_twitter)) : ?>
        <a href="<?php echo esc_url($personal_twitter); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_youtube)) : ?>
        <a href="<?php echo esc_url($personal_youtube); ?>"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_linkedin)) : ?>
        <a href="<?php echo esc_url($personal_linkedin); ?>"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_instagram)) : ?>
        <a href="<?php echo esc_url($personal_instagram); ?>"><i class="fab fa-instagram"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_flickr)) : ?>
        <a href="<?php echo esc_url($personal_flickr); ?>"><i class="fab fa-flickr"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_vimeo)) : ?>
        <a href="<?php echo esc_url($personal_vimeo); ?>"><i class="fab fa-vimeo-v"></i></a>
    <?php endif; ?>
    <?php if (!empty($personal_behance)) : ?>
        <a href="<?php echo esc_url($personal_behance); ?>"><i class="fab fa-behance"></i></a>
    <?php endif; ?>


<?php
}

//persona pagination
function persona_navigation(){
    $pages = paginate_links(array(
        'type' => 'array',
        'prev_text' => __('<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
     </svg>
     Prev'),
        'next_text' => __('Next
        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
           <path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>'),
    ));

    if($pages){
        echo '<nav><ul>';
        foreach($pages as $page){
            echo '<li>'.$page.'</li>';
        }
        echo '</ul></nav>';
    }
}
