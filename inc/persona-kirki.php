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

    new \Kirki\Field\Select(
        [
            'settings'    => 'header_default_setting',
            'label'       => esc_html__( 'Header Select', 'persona' ),
            'section'     => 'persona_header_info',
            'default'     => 'header-style-1',
            'placeholder' => esc_html__( 'Choose default header', 'persona' ),
            'choices'     => [
                'header-style-1' => esc_html__( 'Header Style 01', 'persona' ),
                'header-style-2' => esc_html__( 'Header Style 02', 'persona' ),
                'header-style-3' => esc_html__( 'Header Style 03', 'persona' ),
                'header-style-4' => esc_html__( 'Header Style 04', 'persona' ),
                'header-style-5' => esc_html__( 'Header Style 05', 'persona' ),
            ],
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
}
persona_header_logo();


/** Header Side info section */
function persona_side_info(){
    new \Kirki\Section(
        'persona_side_info',
        [
            'title'       => esc_html__( 'Side Info', 'persona' ),
            'description' => esc_html__( 'Side info section.', 'persona' ),
            'panel'       => 'persona_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'personal_side_logo',
            'label'       => esc_html__( 'Side logo', 'persona' ),
            'description' => esc_html__( 'Please upload your logo here.', 'persona' ),
            'section'     => 'persona_side_info',
            'default'     => get_template_directory_uri().'/assets/img/logo/logo-black.svg'
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_side_email',
            'label'    => esc_html__( ' Side Email Address', 'persona' ),
            'section'  => 'persona_side_info',
            'default'  => esc_html__( 'info@example.com', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'personal_side_phone',
            'label'       => esc_html__( 'Side Phone Number', 'persona' ),
            'section'     => 'persona_side_info',
            'default'     => esc_html__( '+964 742 44 763', 'persona' ),
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_side_button',
            'label'    => esc_html__( ' Side Button', 'persona' ),
            'section'  => 'persona_side_info',
            'default'  => esc_html__( 'Getting Started', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_side_button_url',
            'label'    => esc_html__( ' Side Button URL', 'persona' ),
            'section'  => 'persona_side_info',
            'default'  => esc_html__( '#', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'logo_switch',
            'label'       => esc_html__( 'Logo Switch', 'persona' ),
            'description' => esc_html__( 'Logo on/off switch', 'persona' ),
            'section'     => 'persona_side_info',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'persona' ),
                'off' => esc_html__( 'Disable', 'persona' ),
            ],
        ]
    );
}
persona_side_info();


/** Header Social section */
function persona_social(){
    new \Kirki\Section(
        'persona_social',
        [
            'title'       => esc_html__( 'Social Info', 'persona' ),
            'description' => esc_html__( 'Social info section.', 'persona' ),
            'panel'       => 'persona_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_facebook',
            'label'    => esc_html__( 'Facebook URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '#', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_twitter',
            'label'    => esc_html__( 'Twitter URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '#', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_youtube',
            'label'    => esc_html__( 'Youtube URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '#', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_linkedin',
            'label'    => esc_html__( 'Linkedin URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '#', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_instagram',
            'label'    => esc_html__( 'Instagram URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_flickr',
            'label'    => esc_html__( 'Flickr URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_vimeo',
            'label'    => esc_html__( 'Vimeo URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '', 'persona' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_behance',
            'label'    => esc_html__( 'Behance URL', 'persona' ),
            'section'  => 'persona_social',
            'default'  => esc_html__( '', 'persona' ),
            'priority' => 10,
        ]
    );
}
persona_social();

/** Footer section */
function persona_footer_section(){
    new \Kirki\Section(
        'persona_footer_section',
        [
            'title'       => esc_html__( 'Footer Area', 'persona' ),
            'description' => esc_html__( 'Footer info section.', 'persona' ),
            'panel'       => 'persona_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'personal_footer_copyright',
            'label'    => esc_html__( 'Footer copyright', 'persona' ),
            'section'  => 'persona_footer_section',
            'default'  => esc_html__( '© 2024 Harry All Rights Reserved.', 'persona' ),
            'priority' => 10,
        ]
    );  
}
persona_footer_section();


/** Blog section */
function persona_blog_section(){
    new \Kirki\Section(
        'persona_blog_section',
        [
            'title'       => esc_html__( 'Blog', 'persona' ),
            'description' => esc_html__( 'Blog info section.', 'persona' ),
            'panel'       => 'persona_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'personal_blog_breadcrumb_bg',
            'label'       => esc_html__( 'Blog Breadcrumb Image', 'persona' ),
            'description' => esc_html__( 'Please upload blog Breadcrumb image here.', 'persona' ),
            'section'     => 'persona_blog_section',
        ]
    );  
}
persona_blog_section();
