<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="icon"
      type="image/png"
      href="./img/favicon-32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="./img/favicon-16.png"
      sizes="16x16"
    />
    <!-- glides js css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.css"
      integrity="sha512-rEnjEH5u8xKS8NLcXC4nuZwT89x+tMB19ddbolNGE7DTl6o3JEo11kHAwryLlALFnxdONjO4xVpjunLWdiZR1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body <?php body_class(); ?>>
    <main>
      <section class="home" id="home">
        <div class="container">
          <header class="menu" data-aos="fade-down">
            <a href="#home" class="logo">
              <img src="./img/logo.png" alt="" />
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
                  <a target="_blank" href="#" class="btn btn-pink"
                    >Conheça a Fabulos</a
                  >
                </li>
              </ul>
            </nav>
          </header>