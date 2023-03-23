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
    <div class="container ">
      <header class="menu" data-aos="fade-down">
        <a href="#home" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" />
        </a>
        <nav>
          <button class="btn btn-mobile-menu">
            <div></div>
            <div></div>
            <div></div>
          </button>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about-us">Sobre Nós</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#get-in-touch">Contato</a></li>
            <li>
              <a href="#about-us" class="btn btn-pink"
                >Conheça a Fabulos</a
              >
            </li>
          </ul>
        </nav>
      </header>
    </div>