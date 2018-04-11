<?php 

/***********************THEME Why Choose Us SECTION ********************/
/******************************************************/
$wp_customize->add_section('thecompany_whychooseus_section', array(
    'priority'      => 6,
    'title'         =>__('Why Choose Us Section', 'thecompany'),
    'panel'         => 'theme_option'
    ));

$wp_customize->add_setting( 'whychooseus_enable', array(
          'capability'        => 'edit_theme_options',
          'default'           => '1',
          'sanitize_callback' => 'thecompany_sanitize_select'
  ) );

  $wp_customize->add_control( 'whychooseus_enable', array(
          'settings' => 'whychooseus_enable',
          'label'    =>  __( 'Enable/Disable Why Choose Us Section', 'thecompany' ),
          'section'  => 'thecompany_whychooseus_section',
          'type'     => 'radio',
          'choices'  => array(
              '1' => __( 'Enable', 'thecompany' ),
              '2' => __( 'Disable', 'thecompany' ),
             
              ),
          'priority'              => 20
  ) );

$wp_customize->add_setting('whychooseus_title',array(
    'sanitize_callback' => 'thecompany_sanitize_text',
    'capability' => 'edit_theme_options',
    'default' => __('Why Choose Us ','thecompany'),
    'transport'=>'postMessage'
    ));

$wp_customize->add_control('whychooseus_title',array(
    'label'     =>__('Why Choose Us Title', 'thecompany'),
    'section'   => 'thecompany_whychooseus_section',
    'type'      => 'text',
    'capability' => 'edit_theme_options',
    'priority'              => 20
    ));



$wp_customize->add_setting( 'thecompany_whychooseus_section_icon1', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'fa fa-magic',
    'sanitize_callback' => 'thecompany_sanitize_text'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_icon1', array(
    'label'                 =>  __( 'Icon For Why Choose Us 1', 'thecompany' ),
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'thecompany' ), 'fa fa-magic','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings'          => 'thecompany_whychooseus_section_icon1',
) );

$wp_customize->add_setting( 'thecompany_whychooseus_section_icon2', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'fa fa-magic',
    'sanitize_callback' => 'thecompany_sanitize_text'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_icon2', array(
    'label'                 =>  __( 'Icon For Why Choose Us 2', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings'              => 'thecompany_whychooseus_section_icon2',
) );
$wp_customize->add_setting( 'thecompany_whychooseus_section_icon3', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'fa fa-magic',
    'sanitize_callback' => 'thecompany_sanitize_text'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_icon3', array(
    'label'                 =>  __( 'Icon For Why Choose Us 3', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings'              => 'thecompany_whychooseus_section_icon3',
) );

$wp_customize->add_setting( 'thecompany_whychooseus_section_icon4', array(
    'capability'        => 'edit_theme_options',
    'default'           => 'fa fa-magic',
    'sanitize_callback' => 'thecompany_sanitize_text'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_icon4', array(
    'label'                 =>  __( 'Icon For Why Choose Us 4', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'text',
    'priority'              => 20,
    'settings'               => 'thecompany_whychooseus_section_icon4',
) );
$wp_customize->add_setting( 'thecompany_whychooseus_section_page1', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );
$wp_customize->add_control( 'thecompany_whychooseus_section_page1', array(
    'label'                 =>  __( 'Select Page For Why Choose Us 1', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'thecompany_whychooseus_section_page1',
) );


$wp_customize->add_setting( 'thecompany_whychooseus_section_page2', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_page2', array(
    'label'                 =>  __( 'Select Page For Why Choose Us 2', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'thecompany_whychooseus_section_page2',
) );


$wp_customize->add_setting( 'thecompany_whychooseus_section_page3', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_page3', array(
    'label'                 =>  __( 'Select Page For Why Choose Us 3', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'               => 'thecompany_whychooseus_section_page3',
) );

$wp_customize->add_setting( 'thecompany_whychooseus_section_page4', array(
    'capability'        => 'edit_theme_options',
    'default'           => 0,
    'sanitize_callback' => 'thecompany_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'thecompany_whychooseus_section_page4', array(
    'label'                 =>  __( 'Select Page For Why Choose Us 4', 'thecompany' ),
    'section'               => 'thecompany_whychooseus_section',
    'type'                  => 'dropdown-pages',
    'priority'              => 20,
    'settings'              => 'thecompany_whychooseus_section_page4',
) );


