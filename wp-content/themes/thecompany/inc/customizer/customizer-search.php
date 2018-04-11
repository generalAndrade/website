<?php


    // ---------------------search -----------------------------------------////
  $wp_customize->add_section('search_section',array(
        'priority' => 20,
        'title' => __('Search Section ','thecompany'),
        'description' => __('It shows Search Form On Your Home Page','thecompany'),
        'panel' => 'theme_option'
      ));

  // enable/disable search
      $wp_customize->add_setting( 'search_disable', array(
    'capability'    => 'edit_theme_options',
    'sanitize_callback' => 'thecompany_sanitize_select',
     'default'   =>'1',
    ) );
     $wp_customize->add_control( 'search_disable', array(
    'label'   => __( 'Check to disable Search', 'thecompany' ),
    'section'   => 'search_section',
    'settings'  => 'search_disable',
   
    'type'       => 'radio',
    'choices'    => array(
    '0'   => __('Disable','thecompany' ),
    '1'  => __('Enable','thecompany' ),
                  ),
    ) );
     // search title
       $wp_customize->add_setting('search_title',array(
        'sanitize_callback' => 'thecompany_sanitize_text',
        'default'           => __('Search','thecompany'),
        'transport'         =>'postMessage',
       
        
      ));
      
  
      $wp_customize->add_control('search_title',array(
        'label' => __('Search Title','thecompany'),
        'section' => 'search_section',
        
        'settings' => 'search_title',
        'type' => 'text'
      ));  
      // search placeholder
       $wp_customize->add_setting('search_placeholder',array(
        'sanitize_callback' => 'thecompany_sanitize_text',
        'default'=> __('Enter the keyword','thecompany'),
        
      ));
      
  
      $wp_customize->add_control('search_placeholder',array(
        'label' => __('Search Placeholder','thecompany'),
        'section' => 'search_section',
        
        'settings' => 'search_placeholder',
        'type' => 'text'
      ));     
