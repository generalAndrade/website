<?php 

/***********************THEME OFFER SECTION ********************/
/******************************************************/
$wp_customize->add_section('thecompany_offer_section', array(
    'priority'      => 6,
    'title'         =>__('Offer Section', 'thecompany'),
    'panel'         => 'theme_option'
    ));

$wp_customize->add_setting( 'offer_enable', array(
          'capability'        => 'edit_theme_options',
          'default'           => '1',
          'sanitize_callback' => 'thecompany_sanitize_select'
  ) );

  $wp_customize->add_control( 'offer_enable', array(
          'settings' => 'offer_enable',
          'label'    =>  __( 'Enable/Disable Offer Section', 'thecompany' ),
          'section'  => 'thecompany_offer_section',
          'type'     => 'radio',
          'choices'  => array(
              '1' => __( 'Enable', 'thecompany' ),
              '2' => __( 'Disable', 'thecompany' ),
             
              ),
          'priority'              => 20
  ) );

$wp_customize->add_setting('offer_title',array(
    'sanitize_callback' => 'thecompany_sanitize_text',
    'capability' => 'edit_theme_options',
    'default' => __('What We Offer ','thecompany'),
    'transport'=>'postMessage'
    ));

$wp_customize->add_control('offer_title',array(
    'label'     =>__('Offer Title', 'thecompany'),
    'section'   => 'thecompany_offer_section',
    'type'      => 'text',
    'capability' => 'edit_theme_options',
    'priority'              => 20
    ));

$wp_customize->add_setting( 'thecompany_offer_section_page1', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_offer_section_page1', array(
    'label'                 =>  __( 'Select Page For Offer 1', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings' => 'thecompany_offer_section_page1',
) );


$wp_customize->add_setting( 'thecompany_offer_section_page2', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_offer_section_page2', array(
    'label'                 =>  __( 'Select Page For Offer 2', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings' => 'thecompany_offer_section_page2',
) );


$wp_customize->add_setting( 'thecompany_offer_section_page3', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_offer_section_page3', array(
    'label'                 =>  __( 'Select Page For Offer 3', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings' => 'thecompany_offer_section_page3',
) );

$wp_customize->add_setting( 'thecompany_offer_section_page4', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_offer_section_page4', array(
    'label'                 =>  __( 'Select Page For Offer 4', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings' => 'thecompany_offer_section_page4',
) );
$wp_customize->add_setting( 'thecompany_offer_section_page5', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_offer_section_page 5', array(
    'label'                 =>  __( 'Select Page For Offer 5', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings' => 'thecompany_offer_section_page5',
) );
$wp_customize->add_setting( 'thecompany_offer_section_page6', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_offer_section_page6', array(
    'label'                 =>  __( 'Select Page For Offer 6', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings' => 'thecompany_offer_section_page6',
) );


  $wp_customize->add_setting('offer_category_display',array(
        
        'default' => '1',
        'sanitize_callback' => 'thecompany_sanitize_category',
      ));

    $wp_customize->add_control(new Thecompany_theme_Customize_Dropdown_Taxonomies_Control($wp_customize,'offer_category_display',array(
        'label' => __('Choose Category If No Page Is Selected','thecompany'),
        'section' => 'thecompany_offer_section',
        'settings' => 'offer_category_display',
        'type'=> 'dropdown-taxonomies',
         'priority'              => 20
        )  
      ));

    // no of posts to show on offer
    $wp_customize->add_setting( 'offer_no_of_posts', array(
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'thecompany_sanitize_select',
    'default'           => '3',
    ) );

    $wp_customize->add_control( 'offer_no_of_posts', array(
    'settings' => 'offer_no_of_posts',
    'label'                 =>  __( 'No Of Posts To Show On What We Offer', 'thecompany' ),
    'section'               => 'thecompany_offer_section',
    
    'type'                  => 'select',
    'choices'               => array(
         '3' => __( '3', 'thecompany' ),
         '6' => __( '6 ', 'thecompany' ),
         '9' => __( '9', 'thecompany' ),
         '12' => __( '12', 'thecompany' ),
        
                        ),
    'priority'              => 20
    ) ); 