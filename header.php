<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head();?>
    <link
      rel="icon"
      type="image/png"
      href="<?php echo get_template_directory_uri(); ?>/img/favicon-32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="<?php echo get_template_directory_uri(); ?>/img/favicon-16.png"
      sizes="16x16"
    />
  </head>
  <body <?php body_class(); ?>>
    <main>