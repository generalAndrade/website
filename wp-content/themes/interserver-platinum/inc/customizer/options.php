<?php
/**
 * The header for our theme.
 *
 * Displays al the options in the customizer
 *
 * @package Interserver Platinum
 */
 

 global $wp_customize;

/*====================== Header Options ======================*/
   	$wp_customize->add_panel( 'header_options', array(
			'priority'       => 31,
			'capability'     => 'edit_theme_options',
			'title'          => esc_html__('Header Options', 'interserver-platinum'),
			'description'    => __('Several settings pertaining my theme', 'interserver-platinum'),
	 ) );
	
	/*--------------- Header Top Bar---------------*/
	$wp_customize->add_section( 'header_top_bar',
		array(
		'title'      => esc_html__( 'Header Top Bar', 'interserver-platinum' ),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'header_options',
		)
	);
	
	 $wp_customize->add_setting(
        'hide_header_topbar',
        array(
			'default'    => $ip_default['hide_header_topbar'],
            'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
        )       
    );
    $wp_customize->add_control(
        'hide_header_topbar',
        array(
            'type'      => 'checkbox',
            'label'     => __('Hide Header Top Bar?', 'interserver-platinum'),
            'section'   => 'header_top_bar',
        )
    );
		// Email
	$wp_customize->add_setting( 'contact_email',
		array(
		'default'    => $ip_default['contact_email'],
		'sanitize_callback' => 'interserver_platinum_sanitize_text',
		)
	);
	
	$wp_customize->add_control( 'contact_email',
		array(
		'label'  		=> __( 'Email Address', 'interserver-platinum'),
		'type' 			=> 'text',
		'section' 		=>'header_top_bar'
		)
	);
	
	
	// Phone No.
	$wp_customize->add_setting( 'contact_no',
		array(
		'default'    => $ip_default['contact_no'],
		'sanitize_callback' => 'interserver_platinum_sanitize_text',
		)
	);
	$wp_customize->add_control( 'contact_no',
		array(
		'label'  		=> __( 'Contact Number', 'interserver-platinum'),
		'type' 			=> 'text',
		'section' 		=>'header_top_bar'
		)
	);
	
	$wp_customize->add_setting('fb_link',array(
		'default'	=> $ip_default['null'],
		'sanitize_callback'	=> 'esc_url_raw'	
	));
	
	$wp_customize->add_control('fb_link',array(
		'label'	=> esc_html__('Add facebook link here','interserver-platinum'),
		'section'	=> 'header_top_bar',
		'setting'	=> 'fb_link'
	));	
	$wp_customize->add_setting('twit_link',array(
		'default'	=> $ip_default['null'],
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('twit_link',array(
		'label'	=> esc_html__('Add twitter link here','interserver-platinum'),
		'section'	=> 'header_top_bar',
		'setting'	=> 'twit_link'
	));
	$wp_customize->add_setting('gplus_link',array(
		'default'	=> $ip_default['null'],
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gplus_link',array(
		'label'	=> esc_html__('Add google plus link here','interserver-platinum'),
		'section'	=> 'header_top_bar',
		'setting'	=> 'gplus_link'
	));
	$wp_customize->add_setting('linkedin_link',array(
		'default'	=> $ip_default['null'],
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('linkedin_link',array(
		'label'	=> esc_html__('Add linkedin link here','interserver-platinum'),
		'section'	=> 'header_top_bar',
		'setting'	=> 'linkedin_link'
	));
		

/*--------------- Header Type ---------------*/
	$wp_customize->add_section( 'header_options_type',
		array(
		'title'      => esc_html__( 'Header Type', 'interserver-platinum' ),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'header_options',
		)
	);

 //Front page
    $wp_customize->add_setting(
        'front_header_type',
        array(
            'default'           => $ip_default['front_header_type'],
            'sanitize_callback' => 'interserver_platinum_sanitize_layout',
        )
    );
    $wp_customize->add_control(
        'front_header_type',
        array(
            'type'        => 'radio',
            'label'       => __('Front page header type', 'interserver-platinum'),
            'section'     => 'header_options_type',
            'description' => __('Select the header type for your front page', 'interserver-platinum'),
            'choices' => array(
                'slider'    => __('Full screen slider', 'interserver-platinum'),
                'image'     => __('Image', 'interserver-platinum'),
                'core-video'=> __('Video', 'interserver-platinum'),
                'default'   => __('Default header', 'interserver-platinum')
            ),
        )
    );
    //Site
    $wp_customize->add_setting(
        'site_header_type',
        array(
            'default'           => $ip_default['site_header_type'],
            'sanitize_callback' => 'interserver_platinum_sanitize_layout',
        )
    );
    $wp_customize->add_control(
        'site_header_type',
        array(
            'type'        => 'radio',
            'label'       => __('Site header type', 'interserver-platinum'),
            'section'     => 'header_options_type',
            'description' => __('Select the header type for all pages except the front page', 'interserver-platinum'),
            'choices' => array(
                'slider'    => __('Full screen slider', 'interserver-platinum'),
                'image'     => __('Image', 'interserver-platinum'),
                'core-video'=> __('Video', 'interserver-platinum'),
                'default'   => __('Default header', 'interserver-platinum')
            ),
        )
    );   
	
   /*----------------- Header Slider ------------------*/
    $wp_customize->add_section(
        'header_slider',
        array(
            'title'         => __('Header Slider', 'interserver-platinum'),
            'description'   => __('You can add up to 5 images in the slider. Make sure you select where to display your slider from the Header Type section found above. You can also add a Call to action button (scroll down to find the options)', 'interserver-platinum'),
            'priority'      => 11,
            'panel'         => 'header_options',
        )
    );
    
	//Slider Height
    $wp_customize->add_setting(
        'slider_height',
        array(
            'default' => $ip_default['slider_height'],
            'sanitize_callback' => 'interserver_platinum_sanitize_slider_height',
        )
    );
    $wp_customize->add_control(
        'slider_height',
          array(
            'type'        => 'radio',
            'label'       => __('Slider Height', 'interserver-platinum'),
            'section'     => 'header_slider',
            'choices' => array(
                'full'    => __('Full screen', 'interserver-platinum'),
        		'custom'    => __('Custom', 'interserver-platinum'),
            ),
        )
    );	
    
	//Slider Custom Height
    $wp_customize->add_setting(
        'slider_custom_height',
        array(
            'default' => $ip_default['slider_custom_height'],
            'sanitize_callback' => 'absint',
        )
    );
	
    $wp_customize->add_control(
        'slider_custom_height',
        array(
		'label' => __( 'Slider Custom Height', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'number',
            'description'   => __('Slider height in pixels(px)', 'interserver-platinum'),  
			'active_callback' => 'interserver_platinum_is_custom_slider_height',     
        )
    );
    $wp_customize->add_setting(
        'hide_slider_caption',
        array(
			'default' => $ip_default['hide_slider_caption'],
            'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
        )       
    );
    $wp_customize->add_control(
        'hide_slider_caption',
        array(
            'type'      => 'checkbox',
            'label'     => __('Check to hide Slider Caption', 'interserver-platinum'),
            'section'   => 'header_slider',
        )
    );
    //Image 1
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 's1', array(
        'label' => __('First slide', 'interserver-platinum'),
        'section' => 'header_slider',
        'settings' => 'interserver_platinum_options[info]',
        ) )
    );    
    $wp_customize->add_setting(
        'slider_image_1',
        array(
            'default' => $ip_default['slider_image_1'],
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider_image_1',
            array(
               'label'          => __( 'Upload image for Slide 1', 'interserver-platinum' ),
               'type'           => 'image',
               'section'        => 'header_slider',
               'settings'       => 'slider_image_1',
            )
        )
    );
    //Title 1
    $wp_customize->add_setting(
        'slider_title_1',
        array(
            'default' => $ip_default['slider_title_1'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_title_1',
        array(
            'label' => __( 'Title for the first slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );
    //Subtitle 1
    $wp_customize->add_setting(
        'slider_subtitle_1',
        array(
            'default' => $ip_default['slider_subtitle_1'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_subtitle_1',
        array(
            'label' => __( 'Subtitle for the first slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );           
	
	//Image 2
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 's2', array(
        'label' => __('Second slide', 'interserver-platinum'),
        'section' => 'header_slider',
        'settings' => 'interserver_platinum_options[info]',
        ) )
    );    
    $wp_customize->add_setting(
        'slider_image_2',
        array(
            'default' => $ip_default['slider_image_2'],
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider_image_2',
            array(
               'label'          => __( 'Upload image for Slide 2', 'interserver-platinum' ),
               'type'           => 'image',
               'section'        => 'header_slider',
               'settings'       => 'slider_image_2',
            )
        )
    );
    //Title 2
    $wp_customize->add_setting(
        'slider_title_2',
        array(
            'default' => $ip_default['slider_title_2'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_title_2',
        array(
            'label' => __( 'Title for the second slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );
    //Subtitle 2
    $wp_customize->add_setting(
        'slider_subtitle_2',
        array(
            'default' => $ip_default['slider_subtitle_2'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_subtitle_2',
        array(
            'label' => __( 'Subtitle for the second slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );           
	

	//Image 3
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 's3', array(
        'label' => __('Third slide', 'interserver-platinum'),
        'section' => 'header_slider',
        'settings' => 'interserver_platinum_options[info]',
        ) )
    );    
    $wp_customize->add_setting(
        'slider_image_3',
        array(
            'default' => $ip_default['slider_image_3'],
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider_image_3',
            array(
               'label'          => __( 'Upload image for Slide 3', 'interserver-platinum' ),
               'type'           => 'image',
               'section'        => 'header_slider',
               'settings'       => 'slider_image_3',
            )
        )
    );
    //Title 3
    $wp_customize->add_setting(
        'slider_title_3',
        array(
            'default' => $ip_default['slider_title_3'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_title_3',
        array(
            'label' => __( 'Title for the third slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );
    //Subtitle 3
    $wp_customize->add_setting(
        'slider_subtitle_3',
        array(
            'default' => $ip_default['slider_subtitle_3'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_subtitle_3',
        array(
            'label' => __( 'Subtitle for the third slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );           
	
	
	//Image 4
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 's4', array(
        'label' => __('Fourth slide', 'interserver-platinum'),
        'section' => 'header_slider',
        'settings' => 'interserver_platinum_options[info]',
        ) )
    );    
    $wp_customize->add_setting(
        'slider_image_4',
        array(
            'default' => $ip_default['slider_image_4'],
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'slider_image_4',
            array(
               'label'          => __( 'Upload image for Slide 4', 'interserver-platinum' ),
               'type'           => 'image',
               'section'        => 'header_slider',
               'settings'       => 'slider_image_4',
            )
        )
    );
    //Title 4
    $wp_customize->add_setting(
        'slider_title_4',
        array(
            'default' => $ip_default['slider_title_4'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_title_4',
        array(
            'label' => __( 'Title for the fourth slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );
    //Subtitle 4
    $wp_customize->add_setting(
        'slider_subtitle_4',
        array(
            'default' => $ip_default['slider_subtitle_4'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_subtitle_4',
        array(
            'label' => __( 'Subtitle for the fourth slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );           
	
	
	//Image 5
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 's5', array(
        'label' => __('Fifth slide', 'interserver-platinum'),
        'section' => 'header_slider',
        'settings' => 'interserver_platinum_options[info]',
        ) )
    );    
    $wp_customize->add_setting(
        'slider_image_5',
        array(
            'default' => $ip_default['slider_image_5'],
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(

            $wp_customize,
            'slider_image_5',
            array(
               'label'          => __( 'Upload image for Slide 5', 'interserver-platinum' ),
               'type'           => 'image',
               'section'        => 'header_slider',
               'settings'       => 'slider_image_5',
            )
        )
    );
    //Title 5
    $wp_customize->add_setting(
        'slider_title_5',
        array(
            'default' => $ip_default['slider_title_5'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_title_5',
        array(
            'label' => __( 'Title for the fifth slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );
    //Subtitle 5
    $wp_customize->add_setting(
        'slider_subtitle_5',
        array(
            'default' => $ip_default['slider_subtitle_5'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'slider_subtitle_5',
        array(
            'label' => __( 'Subtitle for the fifth slide', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );   
	
	// Slider Call to action button
	$wp_customize->add_setting(
        'cta_button_text',
        array(
            'default' => $ip_default['cta_button_text'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'cta_button_text',
        array(
            'label' => __( 'Call to action button text', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
        )
    );     
	 $wp_customize->add_setting(
        'cta_button_url',
        array(
            'default' => $ip_default['cta_button_url'],
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'cta_button_url',
        array(
            'label' => __( 'Call to action button URL', 'interserver-platinum' ),
            'section' => 'header_slider',
            'type' => 'text',
            'priority' => 31
        )
    );    
	

	/*----------------- Header Image ------------------*/ 
   
    //Header image size
    $wp_customize->add_setting(
        'header_bg_style',
        array(
            'default'           => $ip_default['header_bg_style'],
            'sanitize_callback' => 'interserver_platinum_sanitize_bg_size',
        )
    );
    $wp_customize->add_control(
        'header_bg_style',
        array(
            'type' => 'radio',
            'priority'    => 10,
            'label' => __('Header background Style', 'interserver-platinum'),
            'section' => 'header_image',
            'choices' => array(
                'cover'     => __('Cover', 'interserver-platinum'),
                'contain'   => __('Contain', 'interserver-platinum'),
            ),
        )
    );
    //Header height
    $wp_customize->add_setting(
        'header_height',
        array(
		 	'default'           => $ip_default['header_height'],
            'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'header_height', array(
        'type'        => 'number',
        'priority'    => 11,
        'section'     => 'header_image',
        'label'       => __('Header height [default: 300px]', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 250,
            'max'   => 600,
            'step'  => 5,
        ),
    ) );
	
    //Disable overlay
    $wp_customize->add_setting(
        'hide_overlay',
        array(
			'default' => $ip_default['hide_overlay'],
            'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
        )       
    );
    $wp_customize->add_control(
        'hide_overlay',
        array(
            'type'      => 'checkbox',
            'label'     => __('Check to disable the overlay', 'interserver-platinum'),
            'section'   => 'header_image',
            'priority'  => 12,
        )
    );      
	

	
	/*--------------Menu Style------------------*/
    $wp_customize->add_section(
        'interserver_platinum_header_style',
        array(
            'title'         => __('Header Style', 'interserver-platinum'),
            'priority'      => 15,
            'panel'         => 'header_options', 
        )
    );
    //Sticky menu
    $wp_customize->add_setting(
        'sticky_header',
        array(
            'default'           => $ip_default['sticky_header'],
            'sanitize_callback' => 'interserver_platinum_sanitize_sticky_header',
        )
    );
    $wp_customize->add_control(
        'sticky_header',
        array(
            'type' => 'radio',
            'priority'    => 10,
            'label' => __('Sticky Header', 'interserver-platinum'),
            'section' => 'interserver_platinum_header_style',
            'choices' => array(
                'sticky'   => __('Sticky', 'interserver-platinum'),
                'static'   => __('Static', 'interserver-platinum'),
            ),
        )
    );
    //Header Style
    $wp_customize->add_setting(
        'header_alignment',
        array(
            'default'           => $ip_default['header_alignment'],
            'sanitize_callback' => 'interserver_platinum_sanitize_header_alignment',
        )
    );
    $wp_customize->add_control(
        'header_alignment',
        array(
            'type'      => 'radio',
            'priority'  => 11,
            'label'     => __('Header Alignment', 'interserver-platinum'),
            'section'   => 'interserver_platinum_header_style',
            'choices'   => array(
                'inline'     => __('Inline', 'interserver-platinum'),
                'centered'   => __('Centered (menu and site logo)', 'interserver-platinum'),
            ),
        )
    );
	

	/*=================Blog Options===================*/
	$wp_customize->add_section( 'blog_options',
		array(
		'title'      => esc_html__( 'Blog Options', 'interserver-platinum' ),
		'priority'   => 32,
		'capability' => 'edit_theme_options',
		)
	);
	
	 // Blog layout
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'layout', array(
        'label' => __('Layout', 'interserver-platinum'),
        'section' => 'blog_options',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 10
        ) )
    );    
    $wp_customize->add_setting(
        'blog_layout',
        array(
            'default'           => $ip_default['blog_layout'],
            'sanitize_callback' => 'interserver_platinum_sanitize_blog',
        )
    );
    $wp_customize->add_control(
        'blog_layout',
        array(
            'type'      => 'radio',
            'label'     => __('Blog layout', 'interserver-platinum'),
            'section'   => 'blog_options',
            'priority'  => 11,
            'choices'   => array(
                'classic'           => __( 'Classic', 'interserver-platinum' ),
                'fullwidth'         => __( 'Full width (no sidebar)', 'interserver-platinum' ),
                'masonry-layout'    => __( 'Masonry (grid style)', 'interserver-platinum' )
            ),
        )
    ); 
    //Full width singles
    $wp_customize->add_setting(
        'fullwidth_single',
        array(
             'default' => $ip_default['fullwidth_single'],   
       		 'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',  
        )       
    );
    $wp_customize->add_control(
        'fullwidth_single',
        array(
            'type'      => 'checkbox',
            'label'     => __('Check to show Full width single posts', 'interserver-platinum'),
            'section'   => 'blog_options',
        )
    );
    //Content/excerpt
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'content', array(
        'label' => __('Content/Excerpt', 'interserver-platinum'),
        'section' => 'blog_options',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 13
        ) )
    );          
    //Full content on home page
    $wp_customize->add_setting(
      'full_content_home',
      array(
			'default' => $ip_default['full_content_home'],   
			'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',  
      )   
    );
    $wp_customize->add_control(
        'full_content_home',
        array(
            'type' => 'checkbox',
            'label' => __('Check this box to display the full content of your posts on the home page.', 'interserver-platinum'),
            'section' => 'blog_options',
            'priority' => 14,
        )
    );
	//Full content on archieves page
    $wp_customize->add_setting(
      'full_content_archives',
      array(
	  	'default' => $ip_default['full_content_archives'],     
        'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',    
      )   
    );
    $wp_customize->add_control(
        'full_content_archives',
        array(
            'type' => 'checkbox',
            'label' => __('Check this to display the full content of your posts on all archives.', 'interserver-platinum'),
            'section' => 'blog_options',
            'priority' => 15,
        )
    );    
    //Excerpt length
    $wp_customize->add_setting(
        'excerpt_length',
        array(
			'default'           => $ip_default['excerpt_length'],
            'sanitize_callback' => 'absint',
         )       
    );
    $wp_customize->add_control( 'excerpt_length', array(
        'type'        => 'number',
        'priority'    => 16,
        'section'     => 'blog_options',
        'label'       => __('Excerpt length', 'interserver-platinum'),
        'description' => __('Choose your excerpt length. Default: 44 words', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
        ),
    ) );
	
	//Featured images
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'images', array(
        'label' => __('Featured images', 'interserver-platinum'),
        'section' => 'blog_options',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 21
        ) )
    );     
    //Index featured images
    $wp_customize->add_setting(
        'index_feat_image',
        array(
            'default' => $ip_default['index_feat_image'],   
        	'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
        )       
    );
    $wp_customize->add_control(
        'index_feat_image',
        array(
            'type' => 'checkbox',
            'label' => __('Check this box to hide featured images on index, archives etc.', 'interserver-platinum'),
            'section' => 'blog_options',
            'priority' => 22,
        )
    );
    //Post featured images
    $wp_customize->add_setting(
        'post_feat_image',
        array(
            'default' => $ip_default['post_feat_image'],   
        	'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
        )       
    );
    $wp_customize->add_control(
        'post_feat_image',
        array(
            'type' => 'checkbox',
            'label' => __('Check to hide featured images on single posts', 'interserver-platinum'),
            'section' => 'blog_options',
            'priority' => 23,
        )
    );

    //Meta
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'meta', array(
        'label' => __('Meta', 'interserver-platinum'),
        'section' => 'blog_options',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 17
        ) )
    ); 
    //Hide meta index
    $wp_customize->add_setting(
      'hide_meta_index',
      array(
       	'default' => $ip_default['hide_meta_index'],   
        'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
      )   
    );
    $wp_customize->add_control(
      'hide_meta_index',
      array(
        'type' => 'checkbox',
        'label' => __('Check to hide post meta on index/archives', 'interserver-platinum'),
        'section' => 'blog_options',
        'priority' => 18,
      )
    );
    //Hide meta on single
    $wp_customize->add_setting(
      'hide_meta_single',
      array(
	  	'default' => $ip_default['hide_meta_single'],   
        'sanitize_callback' => 'interserver_platinum_sanitize_checkbox',
      )   
    );
    $wp_customize->add_control(
      'hide_meta_single',
      array(
        'type' => 'checkbox',
        'label' => __('Check to hide post meta on singles', 'interserver-platinum'),
        'section' => 'blog_options',
        'priority' => 19,
      )
    );
    
	/*===================== Fonts ===================*/
	$wp_customize->add_section(
        'interserver_platinum_fonts',
        array(
            'title' => __('Fonts', 'interserver-platinum'),
            'priority' => 33,
            'description' => __('Google Fonts can be found here: google.com/fonts.', 'interserver-platinum'),
        )
    );
    //Body fonts title
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'body_fonts', array(
        'label' => __('Body fonts', 'interserver-platinum'),
        'section' => 'interserver_platinum_fonts',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 10
        ) )
    );    
    //Body fonts
    $wp_customize->add_setting(
        'body_font_name',
        array(
            'default' => $ip_default['body_font_name'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'body_font_name',
        array(
            'label' => __( 'Font name/style', 'interserver-platinum' ),
            'section' => 'interserver_platinum_fonts',
            'type' => 'text',
            'priority' => 11
        )
    );
    //Body fonts family
    $wp_customize->add_setting(
        'body_font_family',
        array(
            'default' => $ip_default['body_font_family'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'body_font_family',
        array(
            'label' => __( 'Font family', 'interserver-platinum' ),
            'section' => 'interserver_platinum_fonts',
            'type' => 'text',
            'priority' => 12
        )
    );
    //Headings fonts title
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'headings_fonts', array(
        'label' => __('Headings fonts', 'interserver-platinum'),
        'section' => 'interserver_platinum_fonts',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 13
        ) )
    );      
    //Headings fonts 
    $wp_customize->add_setting(
        'headings_font_name',
        array(
            'default' => $ip_default['headings_font_name'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'headings_font_name',
        array(
            'label' => __( 'Font name/style', 'interserver-platinum' ),
            'section' => 'interserver_platinum_fonts',
            'type' => 'text',
            'priority' => 14
        )
    );
    //Headings fonts family
    $wp_customize->add_setting(
        'headings_font_family',
        array(
            'default' => $ip_default['headings_font_family'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
    $wp_customize->add_control(
        'headings_font_family',
        array(
            'label' => __( 'Font family', 'interserver-platinum' ),
            'section' => 'interserver_platinum_fonts',
            'type' => 'text',
            'priority' => 15
        )
    );
    //Font sizes title
    $wp_customize->add_setting('interserver_platinum_options[info]', array(
            'type'              => 'info_control',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'esc_attr',            
        )
    );
    $wp_customize->add_control( new Interserver_Platinum_Info( $wp_customize, 'font_sizes', array(
        'label' => __('Font sizes', 'interserver-platinum'),
        'section' => 'interserver_platinum_fonts',
        'settings' => 'interserver_platinum_options[info]',
        'priority' => 16
        ) )
    );
    // Site title
    $wp_customize->add_setting(
        'site_title_size',
        array(
            'default'           => $ip_default['site_title_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'site_title_size', array(
        'type'        => 'number',
        'priority'    => 17,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('Site title', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 90,
            'step'  => 1,
        ),
    ) ); 
    // Site description
    $wp_customize->add_setting(
        'site_desc_size',
        array(
            'default'           => $ip_default['site_desc_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'site_desc_size', array(
        'type'        => 'number',
        'priority'    => 17,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('Site description', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 50,
            'step'  => 1,
        ),
    ) );  
    // Menu Items size
    $wp_customize->add_setting(
        'menu_size',
        array(
            'default'           => $ip_default['menu_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'menu_size', array(
        'type'        => 'number',
        'priority'    => 17,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('Menu items', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 50,
            'step'  => 1,
        ),
    ) );           
    //H1 size
    $wp_customize->add_setting(
        'h1_size',
        array(
            'default'           => $ip_default['h1_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'h1_size', array(
        'type'        => 'number',
        'priority'    => 17,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('H1 font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 60,
            'step'  => 1,
        ),
    ) );
    //H2 size
    $wp_customize->add_setting(
        'h2_size',
        array(
           'default'           => $ip_default['h2_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'h2_size', array(
        'type'        => 'number',
        'priority'    => 18,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('H2 font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 60,
            'step'  => 1,
        ),
    ) );
    //H3 size
    $wp_customize->add_setting(
        'h3_size',
        array(
            'default'           => $ip_default['h3_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'h3_size', array(
        'type'        => 'number',
        'priority'    => 19,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('H3 font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 60,
            'step'  => 1,
        ),
    ) );
    //H4 size
    $wp_customize->add_setting(
        'h4_size',
        array(
            'default'           => $ip_default['h4_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'h4_size', array(
        'type'        => 'number',
        'priority'    => 20,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('H4 font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 60,
            'step'  => 1,
        ),
    ) );
    //H5 size
    $wp_customize->add_setting(
        'h5_size',
        array(
            'default'           => $ip_default['h5_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'h5_size', array(
        'type'        => 'number',
        'priority'    => 21,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('H5 font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 60,
            'step'  => 1,
        ),
    ) );
    //H6 size
    $wp_customize->add_setting(
        'h6_size',
        array(
            'default'           => $ip_default['h6_size'],
			'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'h6_size', array(
        'type'        => 'number',
        'priority'    => 22,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('H6 font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 60,
            'step'  => 1,
        ),
    ) );
    //Body
    $wp_customize->add_setting(
        'body_size',
        array(
			'default'           => $ip_default['body_size'],
            'sanitize_callback' => 'absint',
        )       
    );
    $wp_customize->add_control( 'body_size', array(
        'type'        => 'number',
        'priority'    => 23,
        'section'     => 'interserver_platinum_fonts',
        'label'       => __('Body font size', 'interserver-platinum'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 24,
            'step'  => 1,
        ),
    ) );
	
	/*==================== Footer ====================*/
	$wp_customize->add_section('interserver_platinum_footer',
        array(
            'title'         => __('Footer', 'interserver-platinum'),
            'priority'      => 34,
	   )
    );
	// Footer Widgets
    $wp_customize->add_setting(
        'footer_widgets',
        array(
            'default'           => $ip_default['footer_widgets'],
            'sanitize_callback' => 'interserver_platinum_sanitize_footer_widget',
        )
    );
    $wp_customize->add_control(
        'footer_widgets',
        array(
            'type'        => 'radio',
            'label'       => __('Footer Widgets', 'interserver-platinum'),
            'section'     => 'interserver_platinum_footer',
            'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'interserver-platinum'),
            'choices' => array(
                '1'     => __('One', 'interserver-platinum'),
                '2'     => __('Two', 'interserver-platinum'),
                '3'     => __('Three', 'interserver-platinum'),
                '4'     => __('Four', 'interserver-platinum')
            ),
        )
    );
	
	// Footer Copyright
	$wp_customize->add_setting(
        'footer_copyright',
        array(
            'default'           => $ip_default['footer_copyright'],
            'sanitize_callback' => 'interserver_platinum_sanitize_text',
        )
    );
	 $wp_customize->add_control(
        'footer_copyright',
		array(
		   'label' => __( 'Copyright Text', 'interserver-platinum' ),
           'section' => 'interserver_platinum_footer',
		   'type' => 'text'
		));


/*=================== Colors ====================*/
	$wp_customize->add_panel('interserver_platinum_color_panel',
        array(
		  'capability'     => 'edit_theme_options',
          'priority'       => 35,
		  'theme_supports' => '',
          'title'          => __('Colors', 'interserver-platinum'),
	   )
    );
	// Primary Color
	$wp_customize->add_setting(
        'primary_color',
        array(
            'default'           => $ip_default['primary_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
                'label'         => __('Primary color', 'interserver-platinum'),
                'section'       => 'colors',
                'settings'      => 'primary_color',
            )
        )
    );
	// Secondary Color
	$wp_customize->add_setting(
        'secondary_color',
        array(
            'default'           => $ip_default['secondary_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'secondary_color',
            array(
                'label'         => __('Secondary color', 'interserver-platinum'),
                'section'       => 'colors',
                'settings'      => 'secondary_color',
            )
        )
    );
	// Body Text Color
	$wp_customize->add_setting(
        'body_text_color',
        array(
            'default'     => $ip_default['body_text_color'],
			'sanitize_callback' => 'sanitize_hex_color',
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'body_text_color',
            array(
                'label'      => __( 'Body Text Color', 'interserver-platinum' ),
                'section'    => 'colors',
                'settings'   => 'body_text_color'
            )
        )
    );
	/*----------------- Header Color ------------------*/
	$wp_customize->add_section('header_colors', 
	array(
	 	'title'          => __('Header', 'interserver-platinum'),
        'panel'     => 'interserver_platinum_color_panel',
	));
	//Top Header background Color
    $wp_customize->add_setting(
        'header_top_bg',
        array(
            'default'           => $ip_default['header_top_bg'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_top_bg',
            array(
                'label' => __('Top Header background', 'interserver-platinum'),
                'section' => 'header_colors',
            )
        )
    );
	// Header background Color
	$wp_customize->add_setting(
        'header_bg_color',
        array(
            'default'           => $ip_default['header_bg_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color',
            array(
                'label' => __('Header background', 'interserver-platinum'),
                'section' => 'header_colors',
            )
        )
    );
	//Site Tilte Color
    $wp_customize->add_setting(
        'site_title_color',
        array(
            'default'           => $ip_default['site_title_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'site_title_color',
            array(
                'label' => __('Site title', 'interserver-platinum'),
                'section' => 'header_colors',
            )
        )
    );
	
	//Site Desc Color 
    $wp_customize->add_setting(
        'site_desc_color',
        array(
            'default'           => $ip_default['site_desc_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'site_desc_color',
            array(
                'label' => __('Site description', 'interserver-platinum'),
                'section' => 'header_colors',
            )
        )
    );
	
	// Menu color
	$wp_customize->add_setting(
        'menu_color',
        array(
			'default'           => $ip_default['menu_color'],
            'sanitize_callback' => 'sanitize_hex_color',       
        )
    );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color',
            array(
                'label'      => __( 'Menu Item', 'interserver-platinum' ),
                'section'    => 'header_colors',
                'settings'   => 'menu_color'
            )
        )
    );
	
	// Menu hover color
	$wp_customize->add_setting(
        'menu_hover_color',
        array(
            'default'           => $ip_default['menu_hover_color'],
            'sanitize_callback' => 'sanitize_hex_color',   
        )
    );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_color',
            array(
                'label'      => __( 'Menu Item Hover', 'interserver-platinum' ),
                'section'    => 'header_colors',
                'settings'   => 'menu_hover_color'
            )
        )
    );
	
	// Sub Menu color
	$wp_customize->add_setting(
        'submenu_color',
        array(
            'default'           => $ip_default['submenu_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
 
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'submenu_color',
            array(
                'label'      => __( 'Sub Menu Item', 'interserver-platinum' ),
                'section'    => 'header_colors',
                'settings'   => 'submenu_color'
            )
        )
    );
	
	// Mobile Menu color
	$wp_customize->add_setting(
        'mobile_menu_color',
        array(
            'default'           => $ip_default['mobile_menu_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'mobile_menu_color',
            array(
                'label'      => __( 'Mobile Menu Button', 'interserver-platinum' ),
                'section'    => 'header_colors',
                'settings'   => 'mobile_menu_color'
            )
        )
    );
	// Mobile Menu background
    $wp_customize->add_setting(
        'mobile_menu_bg',
        array(
            'default'           => $ip_default['mobile_menu_bg'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_menu_bg',
            array(
                'label' => __('Mobile menu background', 'interserver-platinum'),
                'section' => 'header_colors',
             )
        )
    );
	//Mobile Submenu background
    $wp_customize->add_setting(
        'mobile_submenu_bg',
        array(
            'default'           => $ip_default['mobile_submenu_bg'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_submenu_bg',
            array(
                'label' => __('Mobile Sub-menu background', 'interserver-platinum'),
                'section' => 'header_colors',
            )
        )
    );
	// Slider Text Color
    $wp_customize->add_setting(
        'slider_text_color',
        array(
            'default'           => $ip_default['slider_text_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_text_color',
            array(
                'label' => __('Slider Text Color', 'interserver-platinum'),
                'section' => 'header_colors',
            )
        )
    );
	
  /*----------------- Footer Color ------------------*/
	$wp_customize->add_section('footer_colors', 
	array(
	 	'title'          => __('Footer', 'interserver-platinum'),
        'panel'     => 'interserver_platinum_color_panel',
	));
	
	//Footer Widgets backgound
    $wp_customize->add_setting(
        'footer_widgets_background',
        array(
            'default'           => $ip_default['footer_widgets_background'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize,'footer_widgets_background',
            array(
                'label' => __('Footer Widgets Background', 'interserver-platinum'),
				'descripton' => __('Change the widgetized footer background from here ', 'interserver-platinum'),
                'section' => 'footer_colors',
            )
        )
    );
	
	//Fotter Widget Title
    $wp_customize->add_setting(
        'fw_title_color',
        array(
            'default'           => $ip_default['fw_title_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'fw_title_color',
            array(
                'label' => __('Footer Widget Title', 'interserver-platinum'),
                'section' => 'footer_colors',
            )
        )
    );
	
	//Footer backgound
    $wp_customize->add_setting(
        'footer_background',
        array(
            'default'           => $ip_default['footer_background'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize,'footer_background',
            array(
                'label' => __('Footer background', 'interserver-platinum'),
                'section' => 'footer_colors',
            )
        )
    );
	
	
	//Footer Text Color
    $wp_customize->add_setting(
        'footer_text_color',
        array(
            'default'           => $ip_default['footer_text_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'footer_text_color',
            array(
                'label' => __('Footer Text', 'interserver-platinum'),
                'section' => 'footer_colors',
            )
        )
    );
	//Footer hover color
    $wp_customize->add_setting(
        'footer_text_hover',
        array(
            'default'           => $ip_default['footer_text_hover'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'footer_text_hover',
            array(
                'label' => __('Footer Text Hover', 'interserver-platinum'),
                'section' => 'footer_colors',
            )
        )
    );
	
	/*----------------- Sidebar Color ------------------*/
	$wp_customize->add_section('sidebar_colors', 
	array(
	 	'title'     => __('Sidebar', 'interserver-platinum'),
        'panel'     => 'interserver_platinum_color_panel',
	));
	
	//Sidebar backgound
    $wp_customize->add_setting(
        'sidebar_background',
        array(
            'default'           => $ip_default['sidebar_background'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sidebar_background',
            array(
                'label' => __('Sidebar background', 'interserver-platinum'),
                'section' => 'sidebar_colors',
            )
        )
    );
	
	//Sidebar Heading color
    $wp_customize->add_setting(
        'sw_title_color',
        array(
            'default'           => $ip_default['sw_title_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sw_title_color',
            array(
                'label' => __('Sidebar Widget Title', 'interserver-platinum'),
                'section' => 'sidebar_colors',
            )
        )
    );
	
	//Sidebar Text Color
    $wp_customize->add_setting(
        'sidebar_text_color',
        array(
            'default'           => $ip_default['sidebar_text_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize,'sidebar_text_color',
            array(
                'label' => __('Sidebar color', 'interserver-platinum'),
                'section' => 'sidebar_colors',
            )
        )
    );
	
	
	
	