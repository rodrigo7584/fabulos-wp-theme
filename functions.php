<?php

   function fabulos_load_scripts(){
      wp_enqueue_style('fabulos-main-style', get_template_directory_uri().'/css/style.css');
   }
   add_action('wp_enqueue_scripts','fabulos_load_scripts');
   
   ?>
