ex<?php

    /***********************THEME LAYOUT SECTION ********************/
    /******************************************************/
      $wp_customize->add_section('sidebar' , array(
        'priority' => 20,
        'title' => __(' Sidebar','thecompany'),
        'panel' => 'theme_option'
      ));

      $wp_customize->add_setting('sidebar_position_archive', array(
        'sanitize_callback' => 'thecompany_sanitize_sidebar',
        'default' => 'right',
        ));

      $wp_customize->add_control('sidebar_position_archive', array(
        'label'      => __('Archive Sidebar position ', 'thecompany'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position_archive',
        
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('none','thecompany'),
          'left'   => __('left','thecompany'),
          'right'  => __('right','thecompany'),
        ),
      ));

     

      $wp_customize->add_setting('sidebar_position_category', array(
        'sanitize_callback' => 'thecompany_sanitize_sidebar',
        'default' => 'right',
        ));

      $wp_customize->add_control('sidebar_position_category', array(
        'label'      => __('Category Sidebar position', 'thecompany'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position_category',
        
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('none','thecompany'),
          'left'   => __('left','thecompany'),
          'right'  => __('right','thecompany'),
        ),
      ));

       $wp_customize->add_setting('sidebar_position_404', array(
        'sanitize_callback' => 'thecompany_sanitize_sidebar',
        'default' => 'right',
        ));

      $wp_customize->add_control('sidebar_position_404', array(
        'label'      => __('404 Error Sidebar position', 'thecompany'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position_404',
        
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('none','thecompany'),
          'left'   => __('left','thecompany'),
          'right'  => __('right','thecompany'),
        ),
      ));

       $wp_customize->add_setting('sidebar_position_page', array(
        'sanitize_callback' => 'thecompany_sanitize_sidebar',
        'default' => 'right',
        ));

      $wp_customize->add_control('sidebar_position_page', array(
        'label'      => __('Page Sidebar position', 'thecompany'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position_page',
        
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('none','thecompany'),
          'left'   => __('left','thecompany'),
          'right'  => __('right','thecompany'),
        ),
      ));

      $wp_customize->add_setting('sidebar_position_search', array(
        'sanitize_callback' => 'thecompany_sanitize_sidebar',
        'default' => 'right',
        ));

      $wp_customize->add_control('sidebar_position_search', array(
        'label'      => __('Search Page Sidebar position', 'thecompany'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position_search',
        
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('none','thecompany'),
          'left'   => __('left','thecompany'),
          'right'  => __('right','thecompany'),
        ),
      ));

       $wp_customize->add_setting('sidebar_position_single', array(
        'sanitize_callback' => 'thecompany_sanitize_sidebar',
        'default' => 'right',
        ));

      $wp_customize->add_control('sidebar_position_single', array(
        'label'      => __('Single Post Sidebar position', 'thecompany'),
        'section'    => 'sidebar',
        'settings'   => 'sidebar_position_single',
        
        'type'       => 'radio',
        'choices'    => array(
          'none'   => __('none','thecompany'),
          'left'   => __('left','thecompany'),
          'right'  => __('right','thecompany'),
        ),
      ));
   
       $wp_customize->add_section( 'thecompany_other', array(
        'description' =>__( 'Other Options', 'thecompany' ),

          'capability' => 'edit_theme_options',
          'priority'       => 20,
          'title'          => __( 'Other Option', 'thecompany' ),
          'panel'          => 'theme_option',

          ) );
        $wp_customize->add_setting( 'thecompany_scrollup_setting', array(
          'capability'    => 'edit_theme_options',
              'default'     => '',
          'sanitize_callback' => 'thecompany_sanitize_checkbox',
        ) );

        $wp_customize->add_control( 'thecompany_scrollup_setting', array(
          'label'   => __( 'Check to disable Scroll Up', 'thecompany' ),
          'section'   => 'thecompany_other',
          'settings'  => 'thecompany_scrollup_setting',
          'type'    => 'checkbox',
        ) );

        $wp_customize->add_setting( 'thecompany_copyright_setting', array(
          'capability'        => 'edit_theme_options',
          'default'           => '',
          'sanitize_callback' => 'thecompany_sanitize_text',
          'transport'=>'postMessage'
          ) );

      $wp_customize->add_control( 'thecompany_copyright_setting', array(
          'settings' => 'thecompany_copyright_setting',
          'label'                 =>  __( 'Write Copyright Text', 'thecompany' ),
          'section'               => 'thecompany_other',
          'type'                  => 'text',
          
          'priority'              => 20
          ) );
      /// -------------------FOOTER SOCIAL ICONS---//
       $wp_customize->add_section( 'thecompany_footer_social', array(
        'description' =>__( 'Paste Your Social Media Links', 'thecompany' ),

          'capability' => 'edit_theme_options',
          'priority'       => 20,
          'title'          => __( 'Footer Social Media Options', 'thecompany' ),
          'panel'          => 'theme_option',

          ) );
        $wp_customize->add_setting(
        'facebook_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'facebook_textbox',
          array(
            'label' => __('Facebook','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'facebook_textbox',
            'type' => 'text',
          )
      );
       $wp_customize->add_setting(
        'twitter_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'twitter_textbox',
          array(
            'label' => __('Twitter','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'twitter_textbox',
            'type' => 'text',
          )
      );

       $wp_customize->add_setting(
        'google_plus_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'google_plus_textbox',
          array(
            'label' => __('Google Plus','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'google_plus_textbox',
            'type' => 'text',
          )
      );

       $wp_customize->add_setting(
        'linkedin_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'linkedin_textbox',
          array(
            'label' => __('Linkedin','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'linkedin_textbox',
            'type' => 'text',
          )
      );
      $wp_customize->add_setting(
        'youtube_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'youtube_textbox',
          array(
            'label' => __('Youtube','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'youtube_textbox',
            'type' => 'text',
          )
      );
       $wp_customize->add_setting(
        'skype_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'skype_textbox',
          array(
            'label' => __('Skype','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'skype_textbox',
            'type' => 'text',
          )
      );

      $wp_customize->add_setting(
        'pinterest_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'pinterest_textbox',
          array(
            'label' => __('Pinterest','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'pinterest_textbox',
            'type' => 'text',
          )
      );

       $wp_customize->add_setting(
        'instagram_textbox',
          array(
            'sanitize_callback' => 'esc_url_raw',
            
          )
      );

      $wp_customize->add_control(
        'instagram_textbox',
          array(
            'label' => __('Instagram','thecompany'),
            'section' => 'thecompany_footer_social',
            'settings' => 'instagram_textbox',
            'type' => 'text',
          )
      );
