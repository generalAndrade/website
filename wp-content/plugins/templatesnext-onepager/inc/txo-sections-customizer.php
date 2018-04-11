<?php

/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'txo_home_add_panels_and_sections' ); 
function txo_home_add_panels_and_sections( $wp_customize ) {
	
    $wp_customize->add_section('sections', array(
        'title'    => __('Home Sections Activation/Order', 'txo'),
        'description' => '',
        'priority' => 150,
    ));
	
	$wp_customize->add_panel('aboutus', array(
        'title'    => __('About Us', 'txo'),
        'description' => '',
        'priority' => 160,
    ));
		$wp_customize->add_section('aboutus_options', array(
			'title'    => __('About US Options', 'txo'),
			'description' => '',
			'panel' => 'aboutus',		
			'priority' => 200,
		));
		$wp_customize->add_section('aboutus_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'aboutus',		
			'priority' => 200,
		));				
	$wp_customize->add_panel('services', array(
        'title'    => __('Services', 'txo'),
        'description' => '',
        'priority' => 161,
    ));	
		$wp_customize->add_section('services_options', array(
			'title'    => __('Services Options', 'txo'),
			'description' => '',
			'panel' => 'services',		
			'priority' => 200,
		));
		$wp_customize->add_section('services_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'services',		
			'priority' => 200,
		));			
		$wp_customize->add_section('services1', array(
			'title'    => __('Services 1', 'txo'),
			'description' => '',
			'panel' => 'services',		
			'priority' => 200,
		));	
		$wp_customize->add_section('services2', array(
			'title'    => __('Services 2', 'txo'),
			'description' => '',
			'panel' => 'services',		
			'priority' => 200,
		));
		$wp_customize->add_section('services3', array(
			'title'    => __('Services 3', 'txo'),
			'description' => '',
			'panel' => 'services',		
			'priority' => 200,
		));
		$wp_customize->add_section('services4', array(
			'title'    => __('Services 4', 'txo'),
			'description' => '',
			'panel' => 'services',		
			'priority' => 200,
		));
						
	$wp_customize->add_panel('portfolio', array(
        'title'    => __('Portfolio', 'txo'),
        'description' => '',
        'priority' => 162,
    ));	
		$wp_customize->add_section('portfolio_options', array(
			'title'    => __('Portfolio Options', 'txo'),
			'description' => '',
			'panel' => 'portfolio',		
			'priority' => 200,
		));	
		$wp_customize->add_section('portfolio_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'portfolio',		
			'priority' => 200,
		));				
		$wp_customize->add_section('portfolios', array(
			'title'    => __('Portfolios', 'txo'),
			'description' => '',
			'panel' => 'portfolio',		
			'priority' => 200,
		));	
					
	
	$wp_customize->add_panel('blog', array(
        'title'    => __('Blog', 'txo'),
        'description' => '',
        'priority' => 163,
    ));	
		$wp_customize->add_section('blog_options', array(
			'title'    => __('Blog Options', 'txo'),
			'description' => '',
			'panel' => 'blog',		
			'priority' => 200,
		));
		$wp_customize->add_section('blog_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'blog',		
			'priority' => 200,
		));	
	$wp_customize->add_section('video', array(
        'title'    => __('Video', 'txo'),
        'description' => '',
        'priority' => 164,
    ));	
	$wp_customize->add_panel('testimonials', array(
        'title'    => __('Testimonials', 'txo'),
        'description' => '',
        'priority' => 165,
    ));	
		$wp_customize->add_section('testimonials_options', array(
			'title'    => __('Testimonial Options', 'txo'),
			'description' => '',
			'panel' => 'testimonials',		
			'priority' => 200,
		));
		$wp_customize->add_section('testimonials_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'testimonials',		
			'priority' => 200,
		));		
		$wp_customize->add_section('testimonial', array(
			'title'    => __('Testimonials ', 'txo'),
			'description' => '',
			'panel' => 'testimonials',		
			'priority' => 200,
		));
	
			
	$wp_customize->add_section('calltoact', array(
        'title'    => __('Call To Act', 'txo'),
        'description' => '',
        'priority' => 166,
    ));	
	$wp_customize->add_panel('pricing', array(
        'title'    => __('Pricing', 'txo'),
        'description' => '',
        'priority' => 167,
    ));	
		$wp_customize->add_section('pricing_options', array(
			'title'    => __('Pricing Options', 'txo'),
			'description' => '',
			'panel' => 'pricing',		
			'priority' => 200,
		));
		$wp_customize->add_section('pricing_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'pricing',		
			'priority' => 200,
		));			
		$wp_customize->add_section('pricing1', array(
			'title'    => __('Pricing 1', 'txo'),
			'description' => '',
			'panel' => 'pricing',		
			'priority' => 200,
		));	
		$wp_customize->add_section('pricing2', array(
			'title'    => __('Pricing 2', 'txo'),
			'description' => '',
			'panel' => 'pricing',		
			'priority' => 200,
		));
		$wp_customize->add_section('pricing3', array(
			'title'    => __('Pricing 3', 'txo'),
			'description' => '',
			'panel' => 'pricing',		
			'priority' => 200,
		));		
			
	$wp_customize->add_panel('team', array(
        'title'    => __('Team', 'txo'),
        'description' => '',
        'priority' => 168,
    ));	
		$wp_customize->add_section('team_options', array(
			'title'    => __('Team Options', 'txo'),
			'description' => '',
			'panel' => 'team',		
			'priority' => 200,
		));
		$wp_customize->add_section('team_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'team',		
			'priority' => 200,
		));		
		$wp_customize->add_section('members', array(
			'title'    => __('Members', 'txo'),
			'description' => '',
			'panel' => 'team',		
			'priority' => 200,
		));			
		
			
	$wp_customize->add_section('contact', array(
        'title'    => __('Contact Us', 'txo'),
        'description' => '',
        'priority' => 169,
    ));		
	/* Parallax 1 */	
	$wp_customize->add_panel('parallax1', array(
        'title'    => __('Parallax Section 1', 'txo'),
        'description' => '',
        'priority' => 170,
    ));	
		$wp_customize->add_section('parallax1_options', array(
			'title'    => __('Parallax Section 1 Options', 'txo'),
			'description' => '',
			'panel' => 'parallax1',		
			'priority' => 200,
		));
		$wp_customize->add_section('parallax1_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'parallax1',		
			'priority' => 200,
		));
	/* Custom Page Section */	
	$wp_customize->add_panel('custompage1', array(
        'title'    => __('Custom Page Section 1', 'txo'),
        'description' => '',
        'priority' => 170,
    ));
		$wp_customize->add_section('custompage1_options', array(
			'title'    => __('Custom Page Section Options', 'txo'),
			'description' => '',
			'panel' => 'custompage1',		
			'priority' => 200,
		));
		$wp_customize->add_section('custompage1_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'custompage1',		
			'priority' => 200,
		));
		
	/* Pie Chart */	
	$wp_customize->add_panel('pie', array(
        'title'    => __('Pie Chart Section', 'txo'),
        'description' => '',
        'priority' => 170,
    ));	
		$wp_customize->add_section('pie_options', array(
			'title'    => __('Pie Chart Section Options', 'txo'),
			'description' => '',
			'panel' => 'pie',		
			'priority' => 200,
		));
		$wp_customize->add_section('pie_background', array(
			'title'    => __('Background Options', 'txo'),
			'description' => '',
			'panel' => 'pie',		
			'priority' => 200,
		));
		$wp_customize->add_section('piecharts', array(
			'title'    => __('Pie Charts', 'txo'),
			'description' => '',
			'panel' => 'pie',		
			'priority' => 200,
		));	
	/*									
    $wp_customize->add_section('typography', array(
        'title'    => __('Typography', 'txo'),
        'description' => '',
        'priority' => 250,
    ));
	*/			
				
	
}


function txo_home_custom_setting( $controls ) {
	
	$controls[] = array(
		'type'        => 'sortable',
		'settings'    => 'nx_sections',
		'label'       => __( 'Activate and sort your home page sections', 'txo' ),
		'section'     => 'sections',
		'default'     => array(
			'aboutus',
			'services',
			'portfolio',
			'blog',
			//'video',
			'testimonials',
			'calltoact',
			//'pricing',
			'team',
			'contact',			
			
		),
		'choices'     => array(
			'aboutus' => esc_attr__( 'About Us Section', 'txo' ),
			'services' => esc_attr__( 'Services Section', 'txo' ),
			'portfolio' => esc_attr__( 'Portfolio Section', 'txo' ),			
			'blog' => esc_attr__( 'Blog Section', 'txo' ),
			//'video' => esc_attr__( 'Video Section', 'txo' ),
			'team' => esc_attr__( 'Team Section', 'txo' ),			
			'calltoact' => esc_attr__( 'Call To Act', 'txo' ),
			//'pricing' => esc_attr__( 'Pricing Section', 'txo' ),
			'testimonials' => esc_attr__( 'Testimonials', 'txo' ),
			'contact' => esc_attr__( 'Contact Us Section', 'txo' ),
			'parallax-1' => esc_attr__( 'Parallax Section 1', 'txo' ),
			'custompage-1' => esc_attr__( 'Custom Page Section 1', 'txo' ),	
			'pie' => esc_attr__( 'Pie Chart Section', 'txo' ),									
		
		),
		'priority'    => 10,
		'description' => __( 'Click on the eye to turn ON/OFF the section, Drag the sections to sort.', 'txo' ),
	);	
	
	/**************************************/
	
	/* About Us */
	/* About Us Options */	
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'about_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'aboutus_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'about_menu_text',
        'label'    => __( 'About Us Menu Item', 'txo' ),
        'section'  => 'aboutus_options',
        'default'  => __( 'About Us', 'txo' ),
        'priority' => 1,
		'description' => __( 'About us section menu link text', 'txo' ),
    );	
	/*
	$controls[] = array(
		'type'        => 'dropdown-pages',
		'settings'    => 'about_page_id',
		'label'       => __( 'Select About Us Page', 'txo' ),
		'section'     => 'aboutus_options',
		'default'     => 2,
		'priority'    => 1,
	);
	*/
	$controls[] = array(
        'type'     => 'radio-buttonset',
        'settings'  => 'about_align',
        'label'    => __( 'Text Alignment', 'txo' ),
        'section'  => 'aboutus_options',
		'default'  => 'center',
		'priority' => 1,
		'choices'     => array(
			'' => __( 'Default', 'txo' ),
			'left' => __( 'Left', 'txo' ),
			'center' => __( 'Center', 'txo' ),
			'right' => __( 'Right', 'txo' ),
		),
	);			
	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'aboutus_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'aboutus_options',
        'default'  => __( 'About TemplatesNext OnePager', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'aboutus_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'aboutus_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'aboutus_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'aboutus_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'aboutus_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'aboutus_options',
		'default'     => '#595959',
		'priority'    => 1,
		//'alpha'       => true,
	);
	$controls[] = array(
        'type'     => 'editor',
        'settings'  => 'aboutus_desc',
        'label'    => __( 'Edit About Us Description', 'txo' ),
        'section'  => 'aboutus_options',
        'default'  => __( 'Phasellus gravida bibendum adipiscing. Cras id rhoncus diam. Praesent pharetra justo sed velit tempus, non pulvinar tortor tempor. Maecenas elementum consequat orci, eget fermentum erat adipiscing porta. Nunc et lorem eu metus', 'txo' ),
        'priority' => 1,
    );	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'aboutus_text_color',
        'label'    => __( 'Content Text Color', 'txo' ),
        'section'  => 'aboutus_options',
		'default'     => '#646464',
		'priority'    => 1,
		//'alpha'       => true,
	);
	
	/* abou Us Background Options */
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'about_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'aboutus_background',
		'default'  => '',		
        'priority' => 1,
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'about_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'aboutus_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'about_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),		
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'about_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'aboutus_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'about_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'about_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'aboutus_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'about_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'about_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'aboutus_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'about_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'about_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'aboutus_background',
		'default'     => 'rgb(255, 255, 255)',
		'priority'    => 1,
        'priority' => 1,
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'about_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'aboutus_background',
		'default'     => 'rgba(255, 255, 255, 0.0)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'about_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'aboutus_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		
		
		
	
	/* Services */
	/* Services Options */
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'services_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'services_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'services_menu_text',
        'label'    => __( 'Services Menu Item', 'txo' ),
        'section'  => 'services_options',
        'default'  => __( 'Services', 'txo' ),
        'priority' => 1,
		'description' => __( 'Services section menu link text', 'txo' ),
    );		
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'services_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'services_options',
        'default'  => __( 'Our Services', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'services_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'services_options',
		'default'     => '#FFFFFF',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'services_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'services_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'services_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'services_options',
		'default'     => '#FFFFFF',
		'priority'    => 1,
		//'alpha'       => true,
	);
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'services_text_color',
        'label'    => __( 'Content Text Color', 'txo' ),
        'section'  => 'services_options',
		'default'     => '#FFFFFF',
		'priority'    => 1,
		//'alpha'       => true,
	);
	$controls[] = array(
        'type'     => 'radio-buttonset',
        'settings'  => 'services_column',
        'label'    => __( 'Column', 'txo' ),
        'section'  => 'services_options',
		'default'  => '3',
		'priority' => 1,
		'choices'     => array(
			'2' => __( '2 Column', 'txo' ),
			'3' => __( '3 Column', 'txo' ),
			'4' => __( '4 Column', 'txo' ),
		),
	);	
	
	
	/* Services Background Options */
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'services_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'services_background',
		'default'  => TX_ONEPAGER_URL . 'images/bgs/laptop-1209008.jpg',		
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'services_parallax',
		'label'       => __( 'Backkground Image Parallax ON/OFF', 'txo' ),
		'section'     => 'services_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'services_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'services_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'services_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'services_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),		
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'services_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'services_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'services_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'services_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'services_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'services_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'services_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'services_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'services_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'services_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'services_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'services_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'services_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'services_background',
		'default'     => 'rgb(229, 126, 38)',
		'priority'    => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'services_parallax',
                'operator' => '==',
                'value'    => 0,
            ),			
        ),	
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'services_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'services_background',
		'default'     => 'rgba(229, 126, 38, 0.95)',
		'priority'    => 1,
		'required'  => array(
            array(
                'settings'  => 'services_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'services_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'services_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		
		
	
	/* Service 1 */
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'services1_title',
        'label'    => __( 'Service Name', 'txo' ),
        'section'  => 'services1',
        'default'  => __( 'Web Designing', 'txo' ),
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'services1_icon',
        'label'    => __( 'Service Icon', 'txo' ),
        'section'  => 'services1',
        'default'  => 'fa-star',
        'priority' => 1,
		'description' => __( 'Choose an icon from list bellow or copy/paste icon name from http://fontawesome.io/icons/', 'txo' ),
    );
	
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_icontray1',
		'label' 	  => __( 'Select Icon', 'txo' ),
        'section'  	  => 'services1',
		'default'	  => '<div class="icontray1">'.txo_font_awesome().'</div>',
		//'default'     => '<div class="font-awesome-list">list comes here</div>',
		'priority' => 1,
	);
	
	$controls[] = array(
        'type'     => 'textarea',
        'settings'  => 'services1_desc',
        'label'    => __( 'Service Details', 'txo' ),
        'section'  => 'services1',
        'default'  => __('Lorem ipsum dolor sit amet, consectetur vitae rhoncus adipiscing elit. Aenean elementum magna non orci rhoncus, et consequat quam porttitor.', 'txo' ),
        'priority' => 1,
		'description' => __( 'Service Details', 'txo' ),
    );	
	
	/* Service 2 */
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'services2_title',
        'label'    => __( 'Service Name', 'txo' ),
        'section'  => 'services2',
        'default'  => __( 'Web Development', 'txo' ),
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'services2_icon',
        'label'    => __( 'Service Icon', 'txo' ),
        'section'  => 'services2',
        'default'  => 'fa-user',
        'priority' => 1,
		'description' => __( 'Choose an icon from list bellow or copy/paste icon name from http://fontawesome.io/icons/', 'txo' ),
    );
	
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_icontray2',
		'label' 	  => __( 'Select Icon', 'txo' ),
        'section'  	  => 'services2',
		'default'	  => '<div class="icontray2">'.txo_font_awesome().'</div>',
		//'default'     => '<div class="font-awesome-list">list comes here</div>',
		'priority' => 1,
	);
	
	$controls[] = array(
        'type'     => 'textarea',
        'settings'  => 'services2_desc',
        'label'    => __( 'Service Details', 'txo' ),
        'section'  => 'services2',
        'default'  => __('Lorem ipsum dolor sit amet, consectetur accumsan id adipiscing elit. Nullam et dignissim ex, quis mollis lectus. Aenean eros nisl maximus.', 'txo' ),
        'priority' => 1,
		'description' => __( 'Service Details', 'txo' ),
    );
	
	/* Service 3 */
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'services3_title',
        'label'    => __( 'Service Name', 'txo' ),
        'section'  => 'services3',
        'default'  => __( 'App Development', 'txo' ),
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'services3_icon',
        'label'    => __( 'Service Icon', 'txo' ),
        'section'  => 'services3',
        'default'  => 'fa-power-off',
        'priority' => 1,
		'description' => __( 'Choose an icon from list bellow or copy/paste icon name from http://fontawesome.io/icons/', 'txo' ),
    );
	
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_icontray3',
		'label' 	  => __( 'Select Icon', 'txo' ),
        'section'  	  => 'services3',
		'default'	  => '<div class="icontray3">'.txo_font_awesome().'</div>',
		//'default'     => '<div class="font-awesome-list">list comes here</div>',
		'priority' => 1,
	);
	
	$controls[] = array(
        'type'     => 'textarea',
        'settings'  => 'services3_desc',
        'label'    => __( 'Service Details', 'txo' ),
        'section'  => 'services3',
        'default'  => __('Vestibulum urna quam, vulputate vitae placerat vel, quis mollis accumsan id elit. Mauris tellus magna, mollis vestibulum vitae rhoncus eget.', 'txo' ),
        'priority' => 1,
		'description' => __( 'Service Details', 'txo' ),
    );
	
	/* Service 4 */
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'services4_title',
        'label'    => __( 'Service Name', 'txo' ),
        'section'  => 'services4',
        'default'  => __( '', 'txo' ),
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'services4_icon',
        'label'    => __( 'Service Icon', 'txo' ),
        'section'  => 'services4',
        'default'  => '',
        'priority' => 1,
		'description' => __( 'Choose an icon from list bellow or copy/paste icon name from http://fontawesome.io/icons/', 'txo' ),
    );
	
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_icontray4',
		'label' 	  => __( 'Select Icon', 'txo' ),
        'section'  	  => 'services4',
		'default'	  => '<div class="icontray4">'.txo_font_awesome().'</div>',
		'priority' => 1,
	);
	
	$controls[] = array(
        'type'     => 'textarea',
        'settings'  => 'services4_desc',
        'label'    => __( 'Service Details', 'txo' ),
        'section'  => 'services4',
        'default'  => __('', 'txo' ),
        'priority' => 1,
		'description' => __( 'Service Details', 'txo' ),
    );	

	/* Portfolio */
	/* Portfolio Options */
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'portfolio_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'portfolio_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'portfolio_menu_text',
        'label'    => __( 'Portfolio Menu Item', 'txo' ),
        'section'  => 'portfolio_options',
        'default'  => __( 'Portfolio', 'txo' ),
        'priority' => 1,
		'description' => __( 'Portfolio section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'portfolios_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'portfolio_options',
        'default'  => __( 'Recent Works', 'txo' ),
        'priority' => 1,
		'description' => __( 'Portfolio section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'portfolio_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'portfolio_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'portfolio_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'portfolio_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		'description' => __( 'Portfolio section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'portfolio_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'portfolio_options',
		'default'     => '#595959',
		'priority'    => 1,
	);
	$controls[] = array(
		'type'        => 'radio-buttonset',
		'settings'    => 'portfolio_column',
		'label'       => __( 'Portfolio Column', 'my_textdomain' ),
        'section' 	  => 'portfolio_options',
		'default'     => '4',
		'priority'    => 1,
		'choices'     => array(
			'2'  	=> '2 Columns',
			'3' 	=> '3 Columns',
			'4' 	=> '4 Columns',
		),
	);			
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'portfolio_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'portfolio_background',
		'default'  => '',
        'priority' => 1,
		'description' => __( 'Portfolio section background image', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'portfolio_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'portfolio_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		'description' => '',
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'portfolio_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'portfolio_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		'description' => '',
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'portfolio_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'portfolio_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		'description' => '',
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'portfolio_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'portfolio_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'portfolio_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'portfolio_background',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'portfolio_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'portfolio_background',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'portfolio_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'portfolio_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		
		
	/* Portfolios */	
	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'portfolio', 'txo' ),
		'section'     => 'portfolios',
		'priority'    => 10,
		'settings'    => 'txo_portfolio',
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Portfolio ', 'txo' ),
		),
		'choices' 	  => array(
			'limit' => 8,
		),		
		'default'     => array(
			array(
				'portfolio_title' => __( 'Aquatic Infrastructure', 'txo' ),
				'portfolio_category' => __( 'Photoshop', 'txo' ),
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio1.png',										
			),
			array(
				'portfolio_title' => 'Templates Next Digital Media',
				'portfolio_category' => 'Illustrator',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio2.png',												
			),
			array(
				'portfolio_title' => 'Jhon & Jenny',
				'portfolio_category' => 'Web Development',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio3.png',												
			),
			array(
				'portfolio_title' => 'Go Media',
				'portfolio_category' => 'Web Design',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio4.png',											
			),
			array(
				'portfolio_title' => 'Austin West',
				'portfolio_category' => 'Illustrator',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio5.png',									
			),
			array(
				'portfolio_title' => 'Leo Burnett Ltd',
				'portfolio_category' => 'Web development',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio6.png',												
			),
			array(
				'portfolio_title' => 'Koncept Media',
				'portfolio_category' => 'Web Development',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio7.png',											
			),
			array(
				'portfolio_title' => 'The Craft House',
				'portfolio_category' => 'Web Design',
				'portfolio_url' => 'http://www.google.com',
				'portfolio_image' => TX_ONEPAGER_URL . 'images/portfolio/portfolio8.png',										
			),												
		),
		'fields' => array(
			'portfolio_title' => array(
				'type'     => 'text',
				'label'    => __( 'Title', 'txo' ),
				'default'  => '',
			),
			'portfolio_category' => array(
				'type'     => 'text',
				'label'    => __( 'Portfolio Category', 'txo' ),
				'default'  => '',
			),
			'portfolio_url' => array(
				'type'     => 'text',
				'label'    => __( 'Portfolio URL', 'txo' ),
				'default'  => '',
			),
			'portfolio_image' => array(
				'type'     => 'image',
				'label'    => __( 'Portfolio Image', 'txo' ),
				'default'  => '',
			),		
				
		)
	);			
	
	
	
	/* Blog */
	/* blog Options */
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'blog_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'blog_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'blog_menu_text',
        'label'    => __( 'Blog Menu Item', 'txo' ),
        'section'  => 'blog_options',
        'default'  => __( 'Blog', 'txo' ),
        'priority' => 1,
		'description' => __( 'Blog section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'blog_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'blog_options',
        'default'  => __( 'Recent Posts', 'txo' ),
        'priority' => 1,
		'description' => __( 'Blog section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'blog_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'blog_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'blog_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'blog_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'blog_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'blog_options',
		'default'     => '#595959',
		'priority'    => 1,
	);	
	$controls[] = array(
		'type'        => 'radio-buttonset',
		'settings'    => 'blog_column',
		'label'       => __( 'Blog Column', 'my_textdomain' ),
        'section' 	  => 'blog_options',
		'default'     => '4',
		'priority'    => 1,
		'choices'     => array(
			'2'  	=> '2 Columns',
			'3' 	=> '3 Columns',
			'4' 	=> '4 Columns',
		),
	);
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'blog_posts',
		'label'       => __( 'Number Of Posts', 'my_textdomain' ),
		'section'     => 'blog_options',
		'default'     => 4,
		'priority'    => 1,		
		'choices'     => array(
			'min'  => '1',
			'max'  => '20',
			'step' => '1',
		),
	);	
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'blog_pagination',
		'label'       => __( 'Turn ON/OFF Pagination', 'txo' ),
		'section'     => 'blog_options',
		'default'     => 0,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'blog_placeholder',
		'label'       => __( 'Turn ON/OFF Thumbnail Placeholder', 'txo' ),
		'section'     => 'blog_options',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		
	
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'blog_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'blog_background',
		'default'  => '',
        'priority' => 1,
		'description' => __( 'Blog section background image', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'blog_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'blog_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'blog_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'blog_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'blog_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'blog_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'blog_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'blog_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'blog_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'blog_background',
		'default'     => 'rgba(232, 232, 232, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/*
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'blog_overlay_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'blog_background',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	*/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'blog_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'blog_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		

	/**/
	/* Video */
	/* Video Section Options 	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'video_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'video',
        'default'  => __( 'Our Video', 'txo' ),
        'priority' => 1,
		'description' => __( 'Video section title', 'txo' ),
    );
	*/	
	
	/* Testimonial */
	/* Testimonial Section Options */
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'testimonials_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'testimonials_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'testimonials_menu_text',
        'label'    => __( 'Testimonial Menu Item', 'txo' ),
        'section'  => 'testimonials_options',
        'default'  => __( 'Testimonials', 'txo' ),
        'priority' => 1,
		'description' => __( 'Testimonial section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'testimonials_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'testimonials_options',
        'default'  => __( 'Our testimonials', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'testimonials_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'testimonials_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'testimonials_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'testimonials_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'testimonials_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'testimonials_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'testimonials_text_color',
        'label'    => __( 'Text Color', 'txo' ),
        'section'  => 'testimonials_options',
		'default'     => '#373737',
		'priority'    => 1,
		//'alpha'       => true,
	);		
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'testimonials_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'testimonials_background',
		'default'  => '',
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'testimonial_parallax',
		'label'       => __( 'Backkground Image Parallax ON/OFF', 'txo' ),
		'section'     => 'testimonial_background',
		'default'     => 0,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'testimonials_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'testimonials_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'testimonials_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'testimonials_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'testimonials_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'testimonials_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'testimonials_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'testimonials_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'testimonials_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'testimonials_background',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'testimonials_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'testimonials_background',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'testimonials_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'testimonials_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);			
	

	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'Testimonial', 'txo' ),
		'section'     => 'testimonial',
		'priority'    => 1,
		'settings'    => 'txo_testimonial',
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Testimonial ', 'txo' ),
		),
		'choices' 	  => array(
			'limit' => 3,
		),		
		'default'     => array(
			array(
				'testimonials_text'	=> __( 'Awesome theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!', 'txo' ),
				'testimonials_name' 	=> __( 'Charles Jhones', 'txo' ),
				'testimonials_desig' 	=> __( 'Marketing Manager', 'txo' ),
				'testimonials_org'  	=> __( 'Aster Media', 'txo' ), 
				'testimonials_image' 	=> '',										
			),
			array(
				'testimonials_text'	=> __( 'An easy to use and powerful theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!', 'txo' ),
				'testimonials_name' 	=> __( 'Joseph Martin', 'txo' ),
				'testimonials_desig' 	=> __( 'Marketing Executive', 'txo' ),
				'testimonials_org'  	=> __( 'East West Media', 'txo' ), 
				'testimonials_image' 	=> '',												
			),
			array(
				'testimonials_text'	=> __( 'A wordpress theme with great features! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!', 'txo' ),
				'testimonials_name' 	=> __( 'Richard Miller', 'txo' ),
				'testimonials_desig' 	=> __( 'Creative Director', 'txo' ),
				'testimonials_org'  	=> __( 'Leo Burnett Ltd', 'txo' ), 
				'testimonials_image' 	=> '',													
			),											
		),
		'fields' => array(
			'testimonials_text' => array(
				'type'     => 'textarea',
				'label'    => __( 'Testimonial Text', 'txo' ),
				'default'  => '',
			),
			'testimonials_name' => array(
				'type'     => 'text',
				'label'    => __( 'Name', 'txo' ),
				'default'  => '',
			),
			'testimonials_desig' => array(
				'type'     => 'text',
				'label'    => __( 'Designation', 'txo' ),
				'default'  => '',
			),
			'testimonials_org' => array(
				'type'     => 'text',
				'label'    => __( 'Organization', 'txo' ),
				'default'  => '',
			),			
			'testimonials_image' => array(
				'type'     => 'image',
				'label'    => __( 'Image', 'txo' ),
				'default'  => '',
			),		
				
		)
	);			
		

		
	/* Calltoact */
	/* calltoact Section Options */	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'calltoact_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'calltoact',
        'default'  => __( 'I-ONE, The OnePage Business WordPress Theme', 'txo' ),
        'priority' => 1,
		'description' => __( 'Call to act section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'calltoact_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'calltoact',
        'default'  => __( 'TemplatesNext, The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
				
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'calltoact_button',
        'label'    => __( 'Call To Act Button Text', 'txo' ),
        'section'  => 'calltoact',
        'default'  => __( 'Know More', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'calltoact_url',
        'label'    => __( 'Call To Act Link', 'txo' ),
        'section'  => 'calltoact',
        'default'  => __( 'http://www.google.com', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'calltoact_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'calltoact',
		'default'  => '',
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'calltoact_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'calltoact',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'calltoact_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'calltoact',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'calltoact_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'calltoact',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'calltoact_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'calltoact',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'calltoact_text_color',
        'label'    => __( 'Text Color', 'txo' ),
        'section'  => 'calltoact',
		'default'     => '#ffffff',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'calltoact_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'calltoact',
		'default'     => 'rgba(227, 119, 33, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/*
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'calltoact_overlay_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'calltoact',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	*/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'calltoact_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'calltoact',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		


	/*
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'pricing1_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'pricing1',
        'default'  => __( 'Our Pricing', 'txo' ),
        'priority' => 1,
		'description' => __( 'Pricing section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'pricing2_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'pricing2',
        'default'  => __( 'Our Pricing', 'txo' ),
        'priority' => 1,
		'description' => __( 'Pricing section title', 'txo' ),
    );	
	*/

	/* Team */
	/* Team Options */
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'team_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'team_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'team_menu_text',
        'label'    => __( 'Team Menu Item', 'txo' ),
        'section'  => 'team_options',
        'default'  => __( 'Team', 'txo' ),
        'priority' => 1,
		'description' => __( 'Team section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'team_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'team_options',
        'default'  => __( 'Our team', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'team_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'team_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);		
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'team_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'team_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'team_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'team_options',
		'default'     => '#595959',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'team_text_color',
        'label'    => __( 'Text Color', 'txo' ),
        'section'  => 'team_options',
		'default'     => '#373737',
		'priority'    => 1,
		//'alpha'       => true,
	);			
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'team_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'team_background',
		'default'  => '',
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'team_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'team_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'team_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'team_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'team_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'team_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'team_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'team_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );

	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'team_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'team_background',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'team_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'team_background',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'team_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'team_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);
	
	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'Team Members', 'txo' ),
		'section'     => 'members',
		'priority'    => 1,
		'settings'    => 'txo_team',
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Member ', 'txo' ),
		),
		'choices' 	  => array(
			'limit' => 4,
		),		
		'default'     => array(
			array(
				'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team1.jpg',
				'team_name' 	=> __( 'Patricia Johnson', 'txo' ),
				'team_desig' 	=> __( 'Director', 'txo' ),
				'team_twitter'  => 'https://twitter.com/templatesnext',
				'team_skype'	=> 'templatesnext',
				'team_facebook' => 'https://facebook.com/templatesnext',				
				'team_gplus' 	=> 'https://plus.google.com/collections/',
				'team_linkedin' => 'https://www.linkedin.com/in/',
			),
			array(
				'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team2.jpg',
				'team_name' 	=> __( 'Linda Brown', 'txo' ),
				'team_desig' 	=> __( 'CR Manager', 'txo' ),
				'team_twitter'  => 'https://twitter.com/templatesnext',
				'team_skype'	=> 'templatesnext',
				'team_facebook' => 'https://facebook.com/templatesnext',				
				'team_gplus' 	=> 'https://plus.google.com/collections/',
				'team_linkedin' => 'https://www.linkedin.com/in/',										
			),
			array(
				'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team3.jpg',
				'team_name' 	=> __( 'Jennifer Jones', 'txo' ),
				'team_desig' 	=> __( 'Lead Designer', 'txo' ),
				'team_twitter'  => 'https://twitter.com/templatesnext',
				'team_skype'	=> 'templatesnext',
				'team_facebook' => 'https://facebook.com/templatesnext',				
				'team_gplus' 	=> 'https://plus.google.com/collections/',
				'team_linkedin' => 'https://www.linkedin.com/in/',												
			),
			array(
				'team_image'	=>  TX_ONEPAGER_URL . 'images/team/team4.jpg',
				'team_name' 	=> __( 'Robert Wilson', 'txo' ),
				'team_desig' 	=> __( 'Lead Developer', 'txo' ),
				'team_twitter'  => 'https://twitter.com/templatesnext',
				'team_skype'	=> 'templatesnext',
				'team_facebook' => 'https://facebook.com/templatesnext',				
				'team_gplus' 	=> 'https://plus.google.com/collections/',
				'team_linkedin' => 'https://www.linkedin.com/in/',												
			),														
		),
		'fields' => array(
			'team_image' => array(
				'type'     => 'image',
				'label'    => __( 'Image', 'txo' ),
				'default'  => '',
			),				
			'team_name' => array(
				'type'     => 'text',
				'label'    => __( 'Name', 'txo' ),
				'default'  => '',
			),
			'team_desig' => array(
				'type'     => 'text',
				'label'    => __( 'Designamtion', 'txo' ),
				'default'  => '',
			),
			'team_twitter' => array(
				'type'     => 'text',
				'label'    => __( 'Twitter', 'txo' ),
				'default'  => '',
			),
			'team_skype' => array(
				'type'     => 'text',
				'label'    => __( 'Skype', 'txo' ),
				'default'  => '',
			),
			'team_facebook' => array(
				'type'     => 'text',
				'label'    => __( 'Facebook', 'txo' ),
				'default'  => '',
			),
			'team_gplus' => array(
				'type'     => 'text',
				'label'    => __( 'Google Plus', 'txo' ),
				'default'  => '',
			),
			'team_linkedin' => array(
				'type'     => 'text',
				'label'    => __( 'LinkedIn', 'txo' ),
				'default'  => '',
			),						
		)
	);		

	
	
	/* Contact */
	/* contact Options */
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'contact_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'contact',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'contact_menu_text',
        'label'    => __( 'Contact Menu Item', 'txo' ),
        'section'  => 'contact',
        'default'  => __( 'Contact Us', 'txo' ),
        'priority' => 1,
		'description' => __( 'Contact us section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'contact_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'contact',
        'default'  => __( 'Contact Us', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'contact_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'contact',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);			
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'contact_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'contact',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'contact_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'contact',
		'default'     => '#595959',
		'priority'    => 1,
		//'alpha'       => true,
	);
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'contact_text_color',
        'label'    => __( 'Text Color', 'txo' ),
        'section'  => 'contact',
		'default'     => '#373737',
		'priority'    => 1,
		//'alpha'       => true,
	);					
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'contact_email',
        'label'    => __( 'Contact Email', 'txo' ),
        'section'  => 'contact',
        'default'  => __( get_option('admin_email'), 'txo' ),
        'priority' => 1,
		'description' => __( 'Mail account to send the contact form details and message', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'textarea',
        'settings'  => 'contact_address',
        'label'    => __( 'Map Address', 'txo' ),
        'section'  => 'contact',
        'default'  => __( 'ISS Facility Services, E 18th St, Kansas City', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );			
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'contact_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'contact',
		'default'  => '',
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'contact_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'contact',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'contact_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'contact',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'contact_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'contact',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'contact_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'contact',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'contact_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'contact',
		'default'     => 'rgba(232, 232, 232, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/*
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'contact_overlay_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'contact',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'alpha'       => true,
	);
	*/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'contact_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'contact',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		


	/* parallax1 */
	/* parallax1 Options */
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'parallax1_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'parallax1_options',
        'default'  => __( 'Our parallax1', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'parallax1_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'parallax1_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'parallax1_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'parallax1_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'parallax1_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'parallax1_options',
		'default'     => '#595959',
		'priority'    => 1,
		//'alpha'       => true,
	);
    $controls[] = array(
        'type'     => 'textarea',
        'settings'  => 'parallax1_desc',
        'label'    => __( 'parallax1 Description', 'txo' ),
        'section'  => 'parallax1_options',
        'default'  => __( 'Phasellus gravida bibendum adipiscing. Cras id rhoncus diam. Praesent pharetra justo sed velit tempus, non pulvinar tortor tempor. Maecenas elementum consequat orci, eget fermentum erat adipiscing porta. Nunc et lorem eu metus', 'txo' ),
        'priority' => 1,
		'description' => __( 'parallax1 section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'parallax1_text_color',
        'label'    => __( 'Content Text Color', 'txo' ),
        'section'  => 'parallax1_options',
		'default'     => '#646464',
		'priority'    => 1,
		//'alpha'       => true,
	);
	
	
	/* parallax1 Background Options */
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'parallax1_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'parallax1_background',
		'default'  => '',		
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'parallax1_parallax',
		'label'       => __( 'Backkground Image Parallax ON/OFF', 'txo' ),
		'section'     => 'parallax1_background',
		'default'     => 0,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'parallax1_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'parallax1_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'parallax1_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'parallax1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),		
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'parallax1_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'parallax1_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'parallax1_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'parallax1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'parallax1_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'parallax1_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'parallax1_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'parallax1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'parallax1_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'parallax1_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'parallax1_parallax',
                'operator' => '==',
                'value'    => 0,
            ),
            array(
                'settings'  => 'parallax1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'parallax1_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'parallax1_background',
		'default'     => 'rgb(236, 236, 236)',
		'priority'    => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'parallax1_parallax',
                'operator' => '==',
                'value'    => 0,
            ),			
        ),	
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'parallax1_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'parallax1_background',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'required'  => array(
            array(
                'settings'  => 'parallax1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'parallax1_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'parallax1_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		

	/* Custom Page 1 */
	/* Custom Page 1 Options */	
	$controls[] = array(
        'type'     => 'checkbox',
        'settings'  => 'custompage1_menu',
        'label'    => __( 'Add To Menu', 'txo' ),
        'section'  => 'custompage1_options',
        'default'  => 1,
        'priority' => 1,
		'description' => __( 'Add menu item in main navigation', 'txo' ),
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'custompage1_menu_text',
        'label'    => __( 'Custom Page Menu Item', 'txo' ),
        'section'  => 'custompage1_options',
        'default'  => __( 'Custom Page', 'txo' ),
        'priority' => 1,
		'description' => __( 'Custom Page section menu link text', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'radio-buttonset',
        'settings'  => 'custompage1_align',
        'label'    => __( 'Text Alignment', 'txo' ),
        'section'  => 'custompage1_options',
		'default'  => 'center',
		'priority' => 1,
		'choices'     => array(
			'' => __( 'Default', 'txo' ),
			'left' => __( 'Left', 'txo' ),
			'center' => __( 'Center', 'txo' ),
			'right' => __( 'Right', 'txo' ),
		),
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'custompage1_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'custompage1_options',
        'default'  => __( 'custompage1 TemplatesNext OnePager', 'txo' ),
        'priority' => 1,
		'description' => __( 'Custom Page section title', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'custompage1_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'custompage1_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'custompage1_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'custompage1_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		'description' => __( 'Custom Page section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'custompage1_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'custompage1_options',
		'default'     => '#595959',
		'priority'    => 1,
		//'alpha'       => true,
	);
	
	$controls[] = array(
		'type'        => 'dropdown-pages',
		'settings'    => 'custompage1_page_id',
		'label'       => __( 'Select Custom Page', 'txo' ),
		'section'     => 'custompage1_options',
		'default'     => 2,
		'priority'    => 1,
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'custompage1_text_color',
        'label'    => __( 'Content Text Color', 'txo' ),
        'section'  => 'custompage1_options',
		'default'     => '#646464',
		'priority'    => 1,
		//'alpha'       => true,
	);
	
	/* Custom Page Background Options */
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'custompage1_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'custompage1_background',
		'default'  => '',		
        'priority' => 1,
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'custompage1_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'custompage1_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'custompage1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),		
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'custompage1_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'custompage1_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'custompage1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'custompage1_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'custompage1_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'custompage1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'custompage1_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'custompage1_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
        'priority' => 1,
		'required'  => array(
            array(
                'settings'  => 'custompage1_bg_image',
                'operator' => '!=',
                'value'    => '',
            ),				
        ),			
    );
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'custompage1_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'custompage1_background',
		'default'     => 'rgb(255, 255, 255)',
		'priority'    => 1,
        'priority' => 1,
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'custompage1_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'custompage1_background',
		'default'     => 'rgba(255, 255, 255, 0.0)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'custompage1_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'custompage1_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);		


	/* Pie Charts */
	/* Pie Charts Options */
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'pie_title',
        'label'    => __( 'Title', 'txo' ),
        'section'  => 'pie_options',
        'default'  => __( 'Our Pie', 'txo' ),
        'priority' => 1,
		'description' => __( 'About Us section title', 'txo' ),
    );
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'pie_title_color',
        'label'    => __( 'Title Text Color', 'txo' ),
        'section'  => 'pie_options',
		'default'     => '#484848',
		'priority'    => 1,
		//'alpha'       => true,
	);		
	$controls[] = array(
        'type'     => 'text',
        'settings'  => 'pie_subtitle',
        'label'    => __( 'Subtitle', 'txo' ),
        'section'  => 'pie_options',
        'default'  => __( 'The Next Generation Media Development Company', 'txo' ),
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'pie_subtitle_color',
        'label'    => __( 'Subtitle Text Color', 'txo' ),
        'section'  => 'pie_options',
		'default'     => '#595959',
		'priority'    => 1,
		//'alpha'       => true,
	);	
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'pie_text_color',
        'label'    => __( 'Text Color', 'txo' ),
        'section'  => 'pie_options',
		'default'     => '#373737',
		'priority'    => 1,
		//'alpha'       => true,
	);
	
	$controls[] = array(
        'type'     => 'radio-buttonset',
        'settings'  => 'pie_columns',
        'label'    => __( 'Columns', 'txo' ),
        'section'  => 'pie_options',
		'default'  => '4',
		'priority' => 1,
		'choices'     => array(
			'2' => __( '2 Column', 'txo' ),
			'3' => __( '3 Column', 'txo' ),
			'4' => __( '4 Column', 'txo' ),
		),
	);		
	
	/* pie Background Options */			
	$controls[] = array(
        'type'     => 'image',
        'settings'  => 'pie_bg_image',
        'label'    => __( 'Background Image', 'txo' ),
        'section'  => 'pie_background',
		'default'  => '',
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'pie_bg_repeat',
        'label'    => __( 'Background Repeat', 'txo' ),
        'section'  => 'pie_background',
		'default'  => 'repeat',
		'multiple'    => 0,
			'choices'     => array(
				'repeat' => esc_attr__( 'Repeat', 'txo' ),
				'no-repeat' => esc_attr__( 'No Repeat', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'pie_bg_attach',
        'label'    => __( 'Background Attachment', 'txo' ),
        'section'  => 'pie_background',
		'default'  => 'fixed',
		'multiple'    => 0,
			'choices'     => array(
				'fixed' => esc_attr__( 'Fixed', 'txo' ),
				'scroll' => esc_attr__( 'Scroll', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'pie_bg_size',
        'label'    => __( 'Background Size', 'txo' ),
        'section'  => 'pie_background',
		'default'  => 'auto',
		'multiple'    => 0,
			'choices'     => array(
				'auto' => esc_attr__( 'Auto', 'txo' ),
				'contain' => esc_attr__( 'Contain', 'txo' ),
				'cover' => esc_attr__( 'Cover', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );	
	$controls[] = array(
        'type'     => 'select',
        'settings'  => 'pie_bg_position',
        'label'    => __( 'Background Position', 'txo' ),
        'section'  => 'pie_background',
		'default'  => 'left top',
		'multiple'    => 0,
			'choices'     => array(
				'left top' => esc_attr__( 'left top', 'txo' ),
				'left center' => esc_attr__( 'left center', 'txo' ),
				'left bottom' => esc_attr__( 'left bottom', 'txo' ),
				'right top' => esc_attr__( 'right top', 'txo' ),
				'right center' => esc_attr__( 'right center', 'txo' ),
				'right bottom' => esc_attr__( 'right bottom', 'txo' ),
				'center top' => esc_attr__( 'center top', 'txo' ),
				'center center' => esc_attr__( 'center center', 'txo' ),
				'center bottom' => esc_attr__( 'center bottom', 'txo' ),
			),		
        'priority' => 1,
		//'description' => __( 'About Us section subtitle', 'txo' ),
    );

	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'pie_bg_color',
        'label'    => __( 'Background Color', 'txo' ),
        'section'  => 'pie_background',
		'default'     => 'rgba(255, 255, 255, 1)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	
	$controls[] = array(
        'type'     => 'color',
        'settings'  => 'pie_overlay_color',
        'label'    => __( 'Background Overlay Color', 'txo' ),
        'section'  => 'pie_background',
		'default'     => 'rgba(255, 255, 255, 0.5)',
		'priority'    => 1,
		'choices' => array(
        	'alpha' => true,
    	),
	);
	/**/			
	$controls[] = array(
		'type'        => 'switch',
		'settings'    => 'pie_fullwidth',
		'label'       => __( 'Force Fullwidth ON/OFF', 'txo' ),
		'section'     => 'pie_background',
		'default'     => 1,
		'priority'    => 1,
		'choices'     => array(
			1  => esc_attr__( 'ON', 'txo' ),
			0  => esc_attr__( 'OFF', 'txo' ),
		),
	);
	
	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'Pie Chart', 'txo' ),
		'section'     => 'piecharts',
		'priority'    => 1,
		'settings'    => 'txo_pie',
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Pie Chart ', 'txo' ),
		),
		'choices' 	  => array(
			'limit' => 4,
		),		
		'default'     => array(
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 72,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => '#d5d5d5',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 64,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => '#d5d5d5',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 88,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => '#d5d5d5',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),
			array(
				'pie_title'	=> __( 'Pie Chart Title', 'txo' ),
				'pie_percent' 	=> 56,
				'pie_color' 	=> '#dd9933',
				'pie_track_color'  => '#d5d5d5',
				'pie_width'	=> 7,
				'pie_size' => 120,				
				'pie_desc' 	=> __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'txo' ),
			),									
		),
		'fields' => array(
			'pie_title' => array(
				'type'     => 'text',
				'label'    => __( 'Title', 'txo' ),
				'default'  => '',
			),				
			'pie_percent' => array(
				'type'     => 'text',
				'label'    => __( 'Percent', 'txo' ),
				'default'  => 72,
				'description' => __( 'Value in %, 1 to 100', 'txo' ),
			),
			'pie_color' => array(
				'type'     => 'color',
				'label'    => __( 'Color', 'txo' ),
				'default'  => '#dd9933',
			),
			'pie_track_color' => array(
				'type'     => 'color',
				'label'    => __( 'Track Color', 'txo' ),
				'default'  => '#d5d5d5',
			),
			'pie_width' => array(
				'type'     => 'text',
				'label'    => __( 'Width', 'txo' ),
				'description' => __( 'Thickness, 1 - 14', 'txo' ),
			),
			'pie_size' => array(
				'type'     => 'text',
				'label'    => __( 'Size', 'txo' ),
				'description' => __( 'Size, 100 - 200', 'txo' ),
			),
			'pie_desc' => array(
				'type'     => 'textarea',
				'label'    => __( 'Description', 'txo' ),
				'default'  => '',
			),					
		)
	);		
								
    return $controls;
}
add_filter( 'kirki/controls', 'txo_home_custom_setting' );


/**
 * Font awesome
 */


if( ! function_exists('txo_font_awesome') ){
	function txo_font_awesome(){
		
		$txo_font_icons = '<ul class="nx-falist">';
		
			$txo_font_icons .= '<li type="fa" data-value="fa-glass"  class="fa fa-glass"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-music"  class="fa fa-music"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-search"  class="fa fa-search"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-envelope-o"  class="fa fa-envelope-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-heart"  class="fa fa-heart"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-star"  class="fa fa-star"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-star-o"  class="fa fa-star-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-user"  class="fa fa-user"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-film"  class="fa fa-film"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-th-large"  class="fa fa-th-large"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-th"  class="fa fa-th"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-th-list"  class="fa fa-th-list"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-check"  class="fa fa-check"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-times"  class="fa fa-times"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-search-plus"  class="fa fa-search-plus"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-search-minus"  class="fa fa-search-minus"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-power-off"  class="fa fa-power-off"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-signal"  class="fa fa-signal"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gear"  class="fa fa-gear"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cog"  class="fa fa-cog"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-trash-o"  class="fa fa-trash-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-home"  class="fa fa-home"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-o"  class="fa fa-file-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-clock-o"  class="fa fa-clock-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-road"  class="fa fa-road"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-download"  class="fa fa-download"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-down"  class="fa fa-arrow-circle-o-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-up"  class="fa fa-arrow-circle-o-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-inbox"  class="fa fa-inbox"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-play-circle-o"  class="fa fa-play-circle-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rotate-right"  class="fa fa-rotate-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-repeat"  class="fa fa-repeat"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-refresh"  class="fa fa-refresh"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-list-alt"  class="fa fa-list-alt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-lock"  class="fa fa-lock"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-flag"  class="fa fa-flag"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-headphones"  class="fa fa-headphones"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-volume-off"  class="fa fa-volume-off"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-volume-down"  class="fa fa-volume-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-volume-up"  class="fa fa-volume-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-qrcode"  class="fa fa-qrcode"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-barcode"  class="fa fa-barcode"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tag"  class="fa fa-tag"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tags"  class="fa fa-tags"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-book"  class="fa fa-book"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bookmark"  class="fa fa-bookmark"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-print"  class="fa fa-print"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-camera"  class="fa fa-camera"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-font"  class="fa fa-font"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bold"  class="fa fa-bold"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-italic"  class="fa fa-italic"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-text-height"  class="fa fa-text-height"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-text-width"  class="fa fa-text-width"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-align-left"  class="fa fa-align-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-align-center"  class="fa fa-align-center"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-align-right"  class="fa fa-align-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-align-justify"  class="fa fa-align-justify"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-list"  class="fa fa-list"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-dedent"  class="fa fa-dedent"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-outdent"  class="fa fa-outdent"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-indent"  class="fa fa-indent"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-video-camera"  class="fa fa-video-camera"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-photo"  class="fa fa-photo"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-image"  class="fa fa-image"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-picture-o"  class="fa fa-picture-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pencil"  class="fa fa-pencil"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-map-marker"  class="fa fa-map-marker"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-adjust"  class="fa fa-adjust"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tint"  class="fa fa-tint"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-edit"  class="fa fa-edit"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pencil-square-o"  class="fa fa-pencil-square-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-share-square-o"  class="fa fa-share-square-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-check-square-o"  class="fa fa-check-square-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrows"  class="fa fa-arrows"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-step-backward"  class="fa fa-step-backward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-fast-backward"  class="fa fa-fast-backward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-backward"  class="fa fa-backward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-play"  class="fa fa-play"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pause"  class="fa fa-pause"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-stop"  class="fa fa-stop"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-forward"  class="fa fa-forward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-fast-forward"  class="fa fa-fast-forward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-step-forward"  class="fa fa-step-forward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-eject"  class="fa fa-eject"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-left"  class="fa fa-chevron-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-right"  class="fa fa-chevron-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-plus-circle"  class="fa fa-plus-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-minus-circle"  class="fa fa-minus-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-times-circle"  class="fa fa-times-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-check-circle"  class="fa fa-check-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-question-circle"  class="fa fa-question-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-info-circle"  class="fa fa-info-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-crosshairs"  class="fa fa-crosshairs"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-times-circle-o"  class="fa fa-times-circle-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-check-circle-o"  class="fa fa-check-circle-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ban"  class="fa fa-ban"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-left"  class="fa fa-arrow-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-right"  class="fa fa-arrow-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-up"  class="fa fa-arrow-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-down"  class="fa fa-arrow-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-mail-forward"  class="fa fa-mail-forward"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-share"  class="fa fa-share"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-expand"  class="fa fa-expand"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-compress"  class="fa fa-compress"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-plus"  class="fa fa-plus"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-minus"  class="fa fa-minus"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-asterisk"  class="fa fa-asterisk"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-exclamation-circle"  class="fa fa-exclamation-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gift"  class="fa fa-gift"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-leaf"  class="fa fa-leaf"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-fire"  class="fa fa-fire"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-eye"  class="fa fa-eye"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-eye-slash"  class="fa fa-eye-slash"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-warning"  class="fa fa-warning"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-exclamation-triangle"  class="fa fa-exclamation-triangle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-plane"  class="fa fa-plane"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-calendar"  class="fa fa-calendar"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-random"  class="fa fa-random"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-comment"  class="fa fa-comment"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-magnet"  class="fa fa-magnet"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-up"  class="fa fa-chevron-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-down"  class="fa fa-chevron-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-retweet"  class="fa fa-retweet"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-shopping-cart"  class="fa fa-shopping-cart"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-folder"  class="fa fa-folder"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-folder-open"  class="fa fa-folder-open"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrows-v"  class="fa fa-arrows-v"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrows-h"  class="fa fa-arrows-h"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-twitter-square"  class="fa fa-twitter-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-facebook-square"  class="fa fa-facebook-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-camera-retro"  class="fa fa-camera-retro"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-key"  class="fa fa-key"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gears"  class="fa fa-gears"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cogs"  class="fa fa-cogs"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-comments"  class="fa fa-comments"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-thumbs-o-up"  class="fa fa-thumbs-o-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-thumbs-o-down"  class="fa fa-thumbs-o-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-star-half"  class="fa fa-star-half"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-heart-o"  class="fa fa-heart-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sign-out"  class="fa fa-sign-out"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-linkedin-square"  class="fa fa-linkedin-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-thumb-tack"  class="fa fa-thumb-tack"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-external-link"  class="fa fa-external-link"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sign-in"  class="fa fa-sign-in"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-trophy"  class="fa fa-trophy"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-github-square"  class="fa fa-github-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-upload"  class="fa fa-upload"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-lemon-o"  class="fa fa-lemon-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-phone"  class="fa fa-phone"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-square-o"  class="fa fa-square-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bookmark-o"  class="fa fa-bookmark-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-phone-square"  class="fa fa-phone-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-twitter"  class="fa fa-twitter"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-facebook"  class="fa fa-facebook"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-github"  class="fa fa-github"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-unlock"  class="fa fa-unlock"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-credit-card"  class="fa fa-credit-card"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rss"  class="fa fa-rss"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hdd-o"  class="fa fa-hdd-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bullhorn"  class="fa fa-bullhorn"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bell"  class="fa fa-bell"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-certificate"  class="fa fa-certificate"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hand-o-right"  class="fa fa-hand-o-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hand-o-left"  class="fa fa-hand-o-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hand-o-up"  class="fa fa-hand-o-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hand-o-down"  class="fa fa-hand-o-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-left"  class="fa fa-arrow-circle-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-right"  class="fa fa-arrow-circle-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-up"  class="fa fa-arrow-circle-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-down"  class="fa fa-arrow-circle-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-globe"  class="fa fa-globe"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-wrench"  class="fa fa-wrench"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tasks"  class="fa fa-tasks"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-filter"  class="fa fa-filter"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-briefcase"  class="fa fa-briefcase"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrows-alt"  class="fa fa-arrows-alt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-group"  class="fa fa-group"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-users"  class="fa fa-users"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chain"  class="fa fa-chain"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-link"  class="fa fa-link"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cloud"  class="fa fa-cloud"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-flask"  class="fa fa-flask"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cut"  class="fa fa-cut"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-scissors"  class="fa fa-scissors"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-copy"  class="fa fa-copy"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-files-o"  class="fa fa-files-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-paperclip"  class="fa fa-paperclip"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-save"  class="fa fa-save"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-floppy-o"  class="fa fa-floppy-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-square"  class="fa fa-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-navicon"  class="fa fa-navicon"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-reorder"  class="fa fa-reorder"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bars"  class="fa fa-bars"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-list-ul"  class="fa fa-list-ul"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-list-ol"  class="fa fa-list-ol"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-strikethrough"  class="fa fa-strikethrough"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-underline"  class="fa fa-underline"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-table"  class="fa fa-table"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-magic"  class="fa fa-magic"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-truck"  class="fa fa-truck"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pinterest"  class="fa fa-pinterest"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pinterest-square"  class="fa fa-pinterest-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-google-plus-square"  class="fa fa-google-plus-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-google-plus"  class="fa fa-google-plus"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-money"  class="fa fa-money"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-down"  class="fa fa-caret-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-up"  class="fa fa-caret-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-left"  class="fa fa-caret-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-right"  class="fa fa-caret-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-columns"  class="fa fa-columns"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-unsorted"  class="fa fa-unsorted"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort"  class="fa fa-sort"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-down"  class="fa fa-sort-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-desc"  class="fa fa-sort-desc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-up"  class="fa fa-sort-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-asc"  class="fa fa-sort-asc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-envelope"  class="fa fa-envelope"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-linkedin"  class="fa fa-linkedin"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rotate-left"  class="fa fa-rotate-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-undo"  class="fa fa-undo"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-legal"  class="fa fa-legal"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gavel"  class="fa fa-gavel"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-dashboard"  class="fa fa-dashboard"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tachometer"  class="fa fa-tachometer"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-comment-o"  class="fa fa-comment-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-comments-o"  class="fa fa-comments-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-flash"  class="fa fa-flash"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bolt"  class="fa fa-bolt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sitemap"  class="fa fa-sitemap"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-umbrella"  class="fa fa-umbrella"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-paste"  class="fa fa-paste"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-clipboard"  class="fa fa-clipboard"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-lightbulb-o"  class="fa fa-lightbulb-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-exchange"  class="fa fa-exchange"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cloud-download"  class="fa fa-cloud-download"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cloud-upload"  class="fa fa-cloud-upload"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-user-md"  class="fa fa-user-md"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-stethoscope"  class="fa fa-stethoscope"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-suitcase"  class="fa fa-suitcase"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bell-o"  class="fa fa-bell-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-coffee"  class="fa fa-coffee"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cutlery"  class="fa fa-cutlery"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-text-o"  class="fa fa-file-text-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-building-o"  class="fa fa-building-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hospital-o"  class="fa fa-hospital-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ambulance"  class="fa fa-ambulance"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-medkit"  class="fa fa-medkit"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-fighter-jet"  class="fa fa-fighter-jet"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-beer"  class="fa fa-beer"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-h-square"  class="fa fa-h-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-plus-square"  class="fa fa-plus-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-double-left"  class="fa fa-angle-double-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-double-right"  class="fa fa-angle-double-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-double-up"  class="fa fa-angle-double-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-double-down"  class="fa fa-angle-double-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-left"  class="fa fa-angle-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-right"  class="fa fa-angle-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-up"  class="fa fa-angle-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-angle-down"  class="fa fa-angle-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-desktop"  class="fa fa-desktop"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-laptop"  class="fa fa-laptop"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tablet"  class="fa fa-tablet"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-mobile-phone"  class="fa fa-mobile-phone"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-mobile"  class="fa fa-mobile"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-circle-o"  class="fa fa-circle-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-quote-left"  class="fa fa-quote-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-quote-right"  class="fa fa-quote-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-spinner"  class="fa fa-spinner"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-circle"  class="fa fa-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-mail-reply"  class="fa fa-mail-reply"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-reply"  class="fa fa-reply"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-github-alt"  class="fa fa-github-alt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-folder-o"  class="fa fa-folder-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-folder-open-o"  class="fa fa-folder-open-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-smile-o"  class="fa fa-smile-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-frown-o"  class="fa fa-frown-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-meh-o"  class="fa fa-meh-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gamepad"  class="fa fa-gamepad"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-keyboard-o"  class="fa fa-keyboard-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-flag-o"  class="fa fa-flag-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-flag-checkered"  class="fa fa-flag-checkered"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-terminal"  class="fa fa-terminal"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-code"  class="fa fa-code"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-mail-reply-all"  class="fa fa-mail-reply-all"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-reply-all"  class="fa fa-reply-all"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-star-half-empty"  class="fa fa-star-half-empty"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-star-half-full"  class="fa fa-star-half-full"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-star-half-o"  class="fa fa-star-half-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-location-arrow"  class="fa fa-location-arrow"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-crop"  class="fa fa-crop"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-code-fork"  class="fa fa-code-fork"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-unlink"  class="fa fa-unlink"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chain-broken"  class="fa fa-chain-broken"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-question"  class="fa fa-question"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-info"  class="fa fa-info"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-exclamation"  class="fa fa-exclamation"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-superscript"  class="fa fa-superscript"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-subscript"  class="fa fa-subscript"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-eraser"  class="fa fa-eraser"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-puzzle-piece"  class="fa fa-puzzle-piece"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-microphone"  class="fa fa-microphone"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-microphone-slash"  class="fa fa-microphone-slash"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-shield"  class="fa fa-shield"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-calendar-o"  class="fa fa-calendar-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-fire-extinguisher"  class="fa fa-fire-extinguisher"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rocket"  class="fa fa-rocket"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-maxcdn"  class="fa fa-maxcdn"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-circle-left"  class="fa fa-chevron-circle-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-circle-right"  class="fa fa-chevron-circle-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-circle-up"  class="fa fa-chevron-circle-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-chevron-circle-down"  class="fa fa-chevron-circle-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-anchor"  class="fa fa-anchor"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-unlock-alt"  class="fa fa-unlock-alt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bullseye"  class="fa fa-bullseye"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ellipsis-h"  class="fa fa-ellipsis-h"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ellipsis-v"  class="fa fa-ellipsis-v"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rss-square"  class="fa fa-rss-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-play-circle"  class="fa fa-play-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ticket"  class="fa fa-ticket"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-minus-square"  class="fa fa-minus-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-minus-square-o"  class="fa fa-minus-square-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-level-up"  class="fa fa-level-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-level-down"  class="fa fa-level-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-check-square"  class="fa fa-check-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pencil-square"  class="fa fa-pencil-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-external-link-square"  class="fa fa-external-link-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-share-square"  class="fa fa-share-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-compass"  class="fa fa-compass"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-toggle-down"  class="fa fa-toggle-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-square-o-down"  class="fa fa-caret-square-o-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-toggle-up"  class="fa fa-toggle-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-square-o-up"  class="fa fa-caret-square-o-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-toggle-right"  class="fa fa-toggle-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-square-o-right"  class="fa fa-caret-square-o-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-euro"  class="fa fa-euro"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-eur"  class="fa fa-eur"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gbp"  class="fa fa-gbp"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-dollar"  class="fa fa-dollar"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-usd"  class="fa fa-usd"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rupee"  class="fa fa-rupee"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-inr"  class="fa fa-inr"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cny"  class="fa fa-cny"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rmb"  class="fa fa-rmb"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-yen"  class="fa fa-yen"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-jpy"  class="fa fa-jpy"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ruble"  class="fa fa-ruble"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rouble"  class="fa fa-rouble"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rub"  class="fa fa-rub"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-won"  class="fa fa-won"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-krw"  class="fa fa-krw"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bitcoin"  class="fa fa-bitcoin"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-btc"  class="fa fa-btc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file"  class="fa fa-file"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-text"  class="fa fa-file-text"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-alpha-asc"  class="fa fa-sort-alpha-asc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-alpha-desc"  class="fa fa-sort-alpha-desc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-amount-asc"  class="fa fa-sort-amount-asc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-amount-desc"  class="fa fa-sort-amount-desc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-numeric-asc"  class="fa fa-sort-numeric-asc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sort-numeric-desc"  class="fa fa-sort-numeric-desc"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-thumbs-up"  class="fa fa-thumbs-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-thumbs-down"  class="fa fa-thumbs-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-youtube-square"  class="fa fa-youtube-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-youtube"  class="fa fa-youtube"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-xing"  class="fa fa-xing"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-xing-square"  class="fa fa-xing-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-youtube-play"  class="fa fa-youtube-play"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-dropbox"  class="fa fa-dropbox"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-stack-overflow"  class="fa fa-stack-overflow"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-instagram"  class="fa fa-instagram"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-flickr"  class="fa fa-flickr"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-adn"  class="fa fa-adn"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bitbucket"  class="fa fa-bitbucket"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bitbucket-square"  class="fa fa-bitbucket-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tumblr"  class="fa fa-tumblr"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tumblr-square"  class="fa fa-tumblr-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-long-arrow-down"  class="fa fa-long-arrow-down"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-long-arrow-up"  class="fa fa-long-arrow-up"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-long-arrow-left"  class="fa fa-long-arrow-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-long-arrow-right"  class="fa fa-long-arrow-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-apple"  class="fa fa-apple"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-windows"  class="fa fa-windows"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-android"  class="fa fa-android"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-linux"  class="fa fa-linux"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-dribbble"  class="fa fa-dribbble"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-skype"  class="fa fa-skype"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-foursquare"  class="fa fa-foursquare"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-trello"  class="fa fa-trello"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-female"  class="fa fa-female"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-male"  class="fa fa-male"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-gittip"  class="fa fa-gittip"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sun-o"  class="fa fa-sun-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-moon-o"  class="fa fa-moon-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-archive"  class="fa fa-archive"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bug"  class="fa fa-bug"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-vk"  class="fa fa-vk"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-weibo"  class="fa fa-weibo"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-renren"  class="fa fa-renren"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pagelines"  class="fa fa-pagelines"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-stack-exchange"  class="fa fa-stack-exchange"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-right"  class="fa fa-arrow-circle-o-right"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-arrow-circle-o-left"  class="fa fa-arrow-circle-o-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-toggle-left"  class="fa fa-toggle-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-caret-square-o-left"  class="fa fa-caret-square-o-left"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-dot-circle-o"  class="fa fa-dot-circle-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-wheelchair"  class="fa fa-wheelchair"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-vimeo-square"  class="fa fa-vimeo-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-turkish-lira"  class="fa fa-turkish-lira"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-try"  class="fa fa-try"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-plus-square-o"  class="fa fa-plus-square-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-space-shuttle"  class="fa fa-space-shuttle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-slack"  class="fa fa-slack"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-envelope-square"  class="fa fa-envelope-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-wordpress"  class="fa fa-wordpress"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-openid"  class="fa fa-openid"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-institution"  class="fa fa-institution"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bank"  class="fa fa-bank"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-university"  class="fa fa-university"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-mortar-board"  class="fa fa-mortar-board"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-graduation-cap"  class="fa fa-graduation-cap"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-yahoo"  class="fa fa-yahoo"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-google"  class="fa fa-google"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-reddit"  class="fa fa-reddit"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-reddit-square"  class="fa fa-reddit-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-stumbleupon-circle"  class="fa fa-stumbleupon-circle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-stumbleupon"  class="fa fa-stumbleupon"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-delicious"  class="fa fa-delicious"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-digg"  class="fa fa-digg"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pied-piper"  class="fa fa-pied-piper"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-pied-piper-alt"  class="fa fa-pied-piper-alt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-drupal"  class="fa fa-drupal"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-joomla"  class="fa fa-joomla"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-language"  class="fa fa-language"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-fax"  class="fa fa-fax"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-building"  class="fa fa-building"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-child"  class="fa fa-child"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-paw"  class="fa fa-paw"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-spoon"  class="fa fa-spoon"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cube"  class="fa fa-cube"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cubes"  class="fa fa-cubes"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-behance"  class="fa fa-behance"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-behance-square"  class="fa fa-behance-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-steam"  class="fa fa-steam"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-steam-square"  class="fa fa-steam-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-recycle"  class="fa fa-recycle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-automobile"  class="fa fa-automobile"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-car"  class="fa fa-car"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-cab"  class="fa fa-cab"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-taxi"  class="fa fa-taxi"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tree"  class="fa fa-tree"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-spotify"  class="fa fa-spotify"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-deviantart"  class="fa fa-deviantart"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-soundcloud"  class="fa fa-soundcloud"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-database"  class="fa fa-database"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-pdf-o"  class="fa fa-file-pdf-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-word-o"  class="fa fa-file-word-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-excel-o"  class="fa fa-file-excel-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-powerpoint-o"  class="fa fa-file-powerpoint-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-photo-o"  class="fa fa-file-photo-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-picture-o"  class="fa fa-file-picture-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-image-o"  class="fa fa-file-image-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-zip-o"  class="fa fa-file-zip-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-archive-o"  class="fa fa-file-archive-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-sound-o"  class="fa fa-file-sound-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-audio-o"  class="fa fa-file-audio-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-movie-o"  class="fa fa-file-movie-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-video-o"  class="fa fa-file-video-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-file-code-o"  class="fa fa-file-code-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-vine"  class="fa fa-vine"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-codepen"  class="fa fa-codepen"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-jsfiddle"  class="fa fa-jsfiddle"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-life-bouy"  class="fa fa-life-bouy"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-life-saver"  class="fa fa-life-saver"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-support"  class="fa fa-support"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-life-ring"  class="fa fa-life-ring"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-circle-o-notch"  class="fa fa-circle-o-notch"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ra"  class="fa fa-ra"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-rebel"  class="fa fa-rebel"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-ge"  class="fa fa-ge"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-empire"  class="fa fa-empire"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-git-square"  class="fa fa-git-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-git"  class="fa fa-git"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-hacker-news"  class="fa fa-hacker-news"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-tencent-weibo"  class="fa fa-tencent-weibo"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-qq"  class="fa fa-qq"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-wechat"  class="fa fa-wechat"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-weixin"  class="fa fa-weixin"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-send"  class="fa fa-send"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-paper-plane"  class="fa fa-paper-plane"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-send-o"  class="fa fa-send-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-paper-plane-o"  class="fa fa-paper-plane-o"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-history"  class="fa fa-history"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-circle-thin"  class="fa fa-circle-thin"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-header"  class="fa fa-header"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-paragraph"  class="fa fa-paragraph"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-sliders"  class="fa fa-sliders"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-share-alt"  class="fa fa-share-alt"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-share-alt-square"  class="fa fa-share-alt-square"> </li>';
			$txo_font_icons .= '<li type="fa" data-value="fa-bomb"  class="fa fa-bomb"> </li>';
				
		$txo_font_icons .= '</ul>';	
		
		return $txo_font_icons;
	}
}


