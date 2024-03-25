<?php 

/** Logo function */
function persona_logo(){
    $default_logo_url = get_template_directory_uri().'/assets/img/logo/logo-black.svg';
    $persona_header_logo = get_theme_mod( 'personal_logo', $default_logo_url );

    if(!empty( $persona_header_logo)){ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $persona_header_logo ); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"></a>
    
    <?php 
    }
}

/** Menu function */
function persona_menu(){
    wp_nav_menu( 
        array(
            'theme_location'    => 'main-menu',
            // 'menu_class'        => '',
            // 'menu_id'           => '',
            'fallback_cb'       => 'Persona_Walker_Nav_Menu::fallcak',
            'walker'            => new Persona_Walker_Nav_Menu
        ) 
    );
}