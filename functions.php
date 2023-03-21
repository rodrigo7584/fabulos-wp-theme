<?php
   function fabulos_customizer($wp_customize){
      //home section
      $wp_customize->add_section(
         'section_home',
         array(
            'title' => 'Section Home',
            'description' => 'Section Home'
         )
      );
      //home title
      $wp_customize->add_setting(
         'setting_home_title',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> 'sanitize_text_field'
         )
      );
      $wp_customize->add_control(
         'setting_home_title',
         array(
            'label' => 'Home Title',
            'description' => 'Please type the Home Title',
            'section' => 'section_home',
            'type' => 'textarea'
         )
      );
      //home subtitle
      $wp_customize->add_setting(
         'setting_home_subtitle',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_home_subtitle',
         array(
            'label' => 'Home Subtitle',
            'description' => 'Please type the Home Subtitle',
            'section' => 'section_home',
            'type' => 'textarea'
         )
      );
   };

   add_action('customize_register','fabulos_customizer');

   function fabulos_load_scripts(){
      // alterar o filemtime(get_template_directory() . '/style.css') para versao fo css -- '1.0'
      wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@700&display=swap', array(), null);
      wp_enqueue_style('glider-css', 'https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.css', array(), null);
      wp_enqueue_style('fabulos-main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

      wp_enqueue_script('glider-script','https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.js',array(), '', true);
      wp_enqueue_script('fabulos-main-script', get_template_directory_uri() . '/js/script.js',array(), '1.0', true);

   }
   add_action('wp_enqueue_scripts','fabulos_load_scripts');
   
   ?>
