<?php 
 /***********************THEME SLIDER ********************/
 /******************************************************/
 $wp_customize->add_section('thecompany_slider_section', array(
    'priority'      => 6,
    'title'         =>__('Slider Section', 'thecompany'),
    'panel'         => 'theme_option'
    ));

 $wp_customize->add_setting( 'slider_enable', array(
			    'capability'        => 'edit_theme_options',
			    'default'           => '1',
			    'sanitize_callback' => 'thecompany_sanitize_select'
	) );

	$wp_customize->add_control( 'slider_enable', array(
			    'settings' => 'slider_enable',
			    'label'    =>  __( 'Enable/Disable Home Slider', 'thecompany' ),
			    'section'  => 'thecompany_slider_section',
			    'type'     => 'radio',
			    'choices'  => array(
			        '1' => __( 'Enable', 'thecompany' ),
			        '2' => __( 'Disable', 'thecompany' ),
			       
			        ),
			    'priority'              => 20
	) );

	//slider text align
		$wp_customize->add_setting( 'slider_text_align', array(
		    'capability'		=> 'edit_theme_options',
		    'default'			=> 'text-center',
		    'sanitize_callback' => 'thecompany_sanitize_select'
		) );

		$wp_customize->add_control( 'slider_text_align', array(
		    'label'                 =>  __( 'Select Slider Text Position', 'thecompany' ),
		    'section'               => 'thecompany_slider_section',
		    'type'                  => 'select',
		    'priority'              => 20,
		    'settings'			    => 'slider_text_align',
		     'choices'    			=> array(
		          'text-left'  	 => 'left',
		          'text-right'   => 'right',
		          'text-center'  => 'center',
		        ),
		) );

		$wp_customize->add_setting( 'home_slider_page_one', array(
		    'capability'		=> 'edit_theme_options',
		    'default'			=> 0,
		    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'home_slider_page_one', array(
		    'label'                 =>  __( 'Select Page For Slider 1', 'thecompany' ),
		    'section'               => 'thecompany_slider_section',
		    'type'                  => 'dropdown-pages',
		    'priority'              => 20,
		    'settings' => 'home_slider_page_one',
		) );


		$wp_customize->add_setting( 'home_slider_page_two', array(
		    'capability'		=> 'edit_theme_options',
		    'default'			=> 0,
		    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'home_slider_page_two', array(
		    'label'                 =>  __( 'Select Page For slider 2', 'thecompany' ),
		    'section'               => 'thecompany_slider_section',
		    'type'                  => 'dropdown-pages',
		    'priority'              => 20,
		    'settings' => 'home_slider_page_two',
		) );


		$wp_customize->add_setting( 'home_slider_page_three', array(
		    'capability'		=> 'edit_theme_options',
		    'default'			=> 0,
		    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'home_slider_page_three', array(
		    'label'                 =>  __( 'Select Page For slider 3', 'thecompany' ),
		    'section'               => 'thecompany_slider_section',
		    'type'                  => 'dropdown-pages',
		    'priority'              => 20,
		    'settings' => 'home_slider_page_three',
		) );



		 $wp_customize->add_setting('thecompany_slider_category_display',array(
		    'sanitize_callback' => 'thecompany_sanitize_category',
		    'capability' => 'edit_theme_options',
		    'default' => ''
		    ));

		$wp_customize->add_control(new Thecompany_theme_Customize_Dropdown_Taxonomies_Control($wp_customize,'thecompany_slider_category_display',array(
		    'label' => __('Category if no page is selected','thecompany'),
		    'section' => 'thecompany_slider_section',
		    'settings' => 'thecompany_slider_category_display',
		    'type'=> 'dropdown-taxonomies',
		    'priority'              => 20
		    )  

		));

	$wp_customize->add_setting( 'slider_no_of_posts', array(
			    'capability'        => 'edit_theme_options',
			    'default'           => '3',
			    'sanitize_callback' => 'thecompany_sanitize_select'
	) );

	$wp_customize->add_control( 'slider_no_of_posts', array(
			    'settings' => 'slider_no_of_posts',
			    'label'    =>  __( 'No Of Posts To Show On Home Slider', 'thecompany' ),
			    'section'  => 'thecompany_slider_section',
			    'type'     => 'select',
			    'choices'  => array(
			        '1' => __( '1', 'thecompany' ),
			        '2' => __( '2', 'thecompany' ),
			        '3' => __( '3', 'thecompany' ),

			       
			        ),
			    'priority'              => 20
	) );

		$wp_customize->add_setting('slider_read_more',array(
		    'sanitize_callback' => 'thecompany_sanitize_text',
		    'capability' => 'edit_theme_options',
		    'default' => __('Read More','thecompany')
		    ));

		$wp_customize->add_control('slider_read_more',array(
		    'label'     =>__('Read More Text', 'thecompany'),
		    'section'   => 'thecompany_slider_section',
		    'type'      => 'text',
		    'settings'	=> 'slider_read_more',
		    'capability' => 'edit_theme_options',
		    'priority'              => 20
		    ));
