<?php
   function fabulos_customizer($wp_customize){
      //section home
      $wp_customize->add_section(
         'section_home',
         array(
            'title' => 'Sessão Home',
            'description' => 'Sessão Home'
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
            'label' => 'Título Home',
            'description' => 'Digite um título',
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
            'label' => 'Subtítulo Home',
            'description' => 'Digite um subtítulo.',
            'section' => 'section_home',
            'type' => 'textarea'
         )
      );
      //end section home

      
      //section about
      $wp_customize->add_section(
         'section_about',
         array(
            'title' => 'Sessão Sobre',
            'description' => 'Sessão Sobre'
         )
      );
      //about title
      $wp_customize->add_setting(
         'setting_about_us_title',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> 'sanitize_text_field'
         )
      );
      $wp_customize->add_control(
         'setting_about_us_title',
         array(
            'label' => 'Título sobre nós',
            'description' => 'Digite um título na sessão',
            'section' => 'section_about',
            'type' => 'textarea'
         )
      );
      //about description
      $wp_customize->add_setting(
         'setting_about_description',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_about_description',
         array(
            'label' => 'Descrição sobre a empresa',
            'description' => 'Digite uma descrição sobre a empresa.',
            'section' => 'section_about',
            'type' => 'textarea'
         )
      );
      //about description
      $wp_customize->add_setting(
         'setting_about_headline',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_about_headline',
         array(
            'label' => 'Chamada do link',
            'description' => 'Digite uma chamada para o link',
            'section' => 'section_about',
            'type' => 'textarea'
         )
      );
       //about app title
       $wp_customize->add_setting(
         'setting_about_app_title',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_about_app_title',
         array(
            'label' => 'Título para carousel sobre app',
            'description' => 'Digite uma título para o carousel',
            'section' => 'section_about',
            'type' => 'textarea'
         )
      );
      //end section about   


      //section comments 
      $wp_customize->add_section(
         'section_comments',
         array(
            'title' => 'Sessão depoimentos',
            'description' => 'Sessão depoimentos'
         )
      );
      //comments title
      $wp_customize->add_setting(
         'setting_comments_title',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_comments_title',
         array(
            'label' => 'Título para carousel de depoimentos',
            'description' => 'Digite uma título para o carousel',
            'section' => 'section_comments',
            'type' => 'text'
         )
      );
      //comments headline 
      $wp_customize->add_setting(
         'setting_comments_headline',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_comments_headline',
         array(
            'label' => 'Chamada do link ',
            'description' => 'Digite uma chamada para o link',
            'section' => 'section_comments',
            'type' => 'textarea'
         )
      );
      //end section comments
      
      //section FAQ
      $wp_customize->add_section(
         'section_faq',
         array(
            'title' => 'Sessão FAQ',
            'description' => 'Sessão FAQ'
         )
      );
      //faq title
      $wp_customize->add_setting(
         'setting_faq_title',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_faq_title',
         array(
            'label' => 'Título FAQ',
            'description' => 'Digite uma título',
            'section' => 'section_faq',
            'type' => 'text'
         )
      );
      //end section FAQ

      //section get in touch
      $wp_customize->add_section(
         'section_get_in_touch',
         array(
            'title' => 'Sessão Contato',
            'description' => 'Sessão Contato'
         )
      );
      //get in touch title
      $wp_customize->add_setting(
         'setting_get_in_touch_title',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_get_in_touch_title',
         array(
            'label' => 'Título Contato',
            'description' => 'Digite uma título',
            'section' => 'section_get_in_touch',
            'type' => 'text'
         )
      );
      //get in touch subtitle
      $wp_customize->add_setting(
         'setting_get_in_touch_subtitle',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_get_in_touch_subtitle',
         array(
            'label' => 'Subtítulo Contato',
            'description' => 'Digite uma subtítulo',
            'section' => 'section_get_in_touch',
            'type' => 'text'
         )
      );
       //get in touch subtitle
       $wp_customize->add_setting(
         'setting_get_in_touch_email',
         array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=> ''
         )
      );
      $wp_customize->add_control(
         'setting_get_in_touch_email',
         array(
            'label' => 'Email Contato',
            'description' => 'Digite o e-mail de contato',
            'section' => 'section_get_in_touch',
            'type' => 'text'
         )
      );
      //end section get in touch
   };

   add_action('customize_register','fabulos_customizer');

   function fabulos_load_scripts(){
      // alterar o filemtime(get_template_directory() . '/style.css') para versao fo css -- '1.0'
      wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@700&display=swap', array(), null);
      wp_enqueue_style('glider-css', 'https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.css', array(), null);
      wp_enqueue_style('fabulos-main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

      wp_enqueue_script('glider-script','https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.js',array(), '', true);
      wp_enqueue_script('fabulos-main-script', get_template_directory_uri() . '/js/script.js',array(), '1.0', true);

   };
   add_action('wp_enqueue_scripts','fabulos_load_scripts');
   
   add_theme_support( 'post-thumbnails' );

   //custom post type 
   function caroucel_our_app(){
      register_post_type('Carousel nosso APP',array(
         'labels'=>array(
            'name' => 'Prints',
            'singular_name' => 'Print',
         ),
         'description' => 'Adicione prints da aplicação',
         'public' => true,
         'menu_position' => 20,
         'has_archive' => true,
         'supports' => array('title'),
               
      ));
    }
   add_action('init', 'caroucel_our_app');
   function caroucel_comments(){
      register_post_type('Carousel depoimentos',array(
         'labels'=>array(
            'name' => 'Depoimentos',
            'singular_name' => 'Depoimento',
         ),
         'description' => 'Adicione os depoimentos',
         'public' => true,
         'menu_position' => 21,
         'has_archive' => true,
         'supports' => array('title'),
               
      ));
    }
   add_action('init', 'caroucel_comments');

   function duvidas(){
      register_post_type('FAQ',array(
         'labels'=>array(
            'name' => 'Dúvidas',
            'singular_name' => 'Dúvida',
         ),
         'description' => 'Adicione uma dúvida',
         'public' => true,
         'menu_position' => 21,
         'has_archive' => true,
         'supports' => array('title','editor'),
               
      ));
    }
   add_action('init', 'duvidas');
   ?>
