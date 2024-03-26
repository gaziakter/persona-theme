<?php

new \Kirki\Panel(
	'persona_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Persona Options', 'persona' ),
		'description' => esc_html__( 'My Panel Description.', 'persona' ),
	]
);

/** Header info section */
function persona_header_info(){
    new \Kirki\Section(
        'persona_header_info',
        [
            'title'       => esc_html__( 'Header info', 'persona' ),
            'description' => esc_html__( 'Header Section option.', 'persona' ),
            'panel'       => 'persona_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'persona_email',
            'label'    => esc_html__( 'Email Address', 'persona' ),
            'section'  => 'persona_header_info',
            'default'  => esc_html__( 'info@example.com', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'persona_phone',
            'label'       => esc_html__( 'Phone Number', 'persona' ),
            'section'     => 'persona_header_info',
            'default'     => esc_html__( '+964 742 44 763', 'persona' ),
        ]
    );
    
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'persona_time',
            'label'       => esc_html__( 'Open Hour', 'persona' ),
            'section'     => 'persona_header_info',
            'default'     => esc_html__( 'Sunday-Thures 10am-07pm', 'persona' ),
        ]
    );
}
persona_header_info();


/** Header logo section */
function persona_header_logo(){
    new \Kirki\Section(
        'persona_header_logo',
        [
            'title'       => esc_html__( 'Header Logo', 'persona' ),
            'description' => esc_html__( 'Header logo section.', 'persona' ),
            'panel'       => 'persona_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'personal_logo',
            'label'       => esc_html__( 'Logo', 'persona' ),
            'description' => esc_html__( 'Please upload your logo here.', 'persona' ),
            'section'     => 'persona_header_logo',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo-black.svg'
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'personal_search_logo',
            'label'       => esc_html__( 'Search Logo', 'persona' ),
            'description' => esc_html__( 'Please upload your logo here.', 'persona' ),
            'section'     => 'persona_header_logo',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo.svg'
        ]
    );
}
persona_header_logo();

