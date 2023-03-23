<?php get_header();?>
<section class="home" id="home">
  <div class="container">
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
    <div class="row">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/illustration-paper-plane.png"
        alt=""
        class="airplane"
      />
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud.png" alt="" class="cloud" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud-2.png" alt="" class="cloud2" />
      <div class="col">
        <h1 class="title-crown">
          <?php if(get_theme_mod('setting_home_title')){
            echo get_theme_mod('setting_home_title');
          }else{
            echo ('Tenha um momento de qualidade com seu filho');
          };?>
        </h1>
        <p>
        <?php if(get_theme_mod('setting_home_subtitle')){
          echo get_theme_mod('setting_home_subtitle');
        }else{
          echo (' <strong>Conte histórias personalizadas</strong> do jeito que ele
          gosta e estimule a imaginação e a criatividade.');
        };?>
        </p>
        <div class="box-buttons">
          <a href="#about-us" class="btn btn-pink">Conheça a Fabulos</a>
          <a href="#get-in-touch" class="btn btn-border-white">Fale com a gente</a>
        </div>
      </div>
      <div class="col">
        <img
          class="home-illustration"
          src="<?php echo get_template_directory_uri(); ?>/img/illustration-castle.png"
          alt=""
        />
      </div>
    </div>
  </div>
</section>
<section class="about-us" id="about-us">
  <div class="container">
    <div class="row row-about-us">
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud-2.png" alt="" class="cloud" />
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud.png" alt="" class="cloud2" /> -->
      <div class="col">
        <img
          class="about-us-illustration"
          src="<?php echo get_template_directory_uri(); ?>/img/illustration-king.png"
          alt=""
        />
      </div>
      <div class="col">
        <h2 class="title-crown">
          <?php if(get_theme_mod('setting_about_us_title')){
            echo get_theme_mod('setting_about_us_title');
          }else{
            echo ('Conheça a Fabulos');
          };?>
        </h2>
        <p>
          <?php if(get_theme_mod('setting_about_description')){
            echo get_theme_mod('setting_about_description');
          }else{
            echo('Com a Fabulos, seu filho terá histórias feitas especialmente para ele, 
            com personagens que ele adora e lições que você quer ensinar.');
          };?>
        </p>
        <br />
        <p>
        <?php if(get_theme_mod('setting_about_headline')){
            echo get_theme_mod('setting_about_headline');
          }else{
            echo('<strong>Faça o download agora</strong> e comece a crie histórias
            envolventes para seu filho!');
          };?>
        </p>
        <div class="box-buttons">
          <a href="<?php echo get_theme_mod('setting_android_store_link')?>" class="btn btn-play-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.svg" alt=""
          /></a>
          <a href="<?php echo get_theme_mod('setting_apple_store_link')?>" class="btn btn-apple-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/apple-store-badge.svg" alt=""
          /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row row-our-app">
      <div class="col">
        <h2 class="title-crown">
        <?php if(get_theme_mod('setting_about_app_title')){
            echo get_theme_mod('setting_about_app_title');
          }else{
            echo('Conheça nosso app');
          };?>
        </h2>
        <div class="caroucel caroucel-our-app">
          <div aria-label="Previous" class="controls btn btn-back">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-right-arrow.png" alt="" />
          </div>
          <div class="caroucel-content">
          <?php
            $args = array( 'post_type' => 'carouselnossoapp');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
            <div class="slide slide-<?php the_title();?>">
              <img src="<?php the_field( 'print' );?>" alt="" />
            </div>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>
          </div>
          <div aria-label="Next" class="controls btn btn-next">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-left-arrow.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="comments">
  <div class="container">
    <div class="row">
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud.png" alt="" class="cloud" />
      <div class="col">
        <h2 class="title-crown">
          <?php if(get_theme_mod('setting_comments_title')){
            echo get_theme_mod('setting_comments_title');
          }else{
            echo('Depoimentos de pais que já usaram o aplicativo:');
          };?>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="caroucel caroucel-comments">
          <div aria-label="Previous" class="controls btn btn-back">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-right-arrow-2.png" alt="" />
          </div>
          <div class="caroucel-content">
            <?php
              $args = array( 'post_type' => 'carouseldepoimentos');
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
              ?>
              <div class="slide <?php the_field('titulo');?>">
                <div class="comment-box">
                  <img
                    src="<?php the_field( 'imagem' );?>"
                    alt=""
                    class="icon"
                  />
                  <p>
                    <?php the_field('depoimento');?>
                  </p>
                  <div class="name-evaluation">
                    <p>
                      <?php the_field('autor');?>
                    </p>
                    <div class="evaluation">
                      <?php 
                      for($i = 1; $i <= get_field( 'classificacao' ); $i++){?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                      <?php };?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              endwhile;
              wp_reset_postdata();
              ?>
          </div>
          <div aria-label="Next" class="controls btn btn-next">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-left-arrow-2.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="text-after-caroucel-comments">
          <?php if(get_theme_mod('setting_comments_headline')){
            echo get_theme_mod('setting_comments_headline');
          }else{
            echo('<strong>Faça o download da Fabulos agora</strong> e comece a
            criar histórias personalizadas para seu filho! <br />
            Faça parte da nossa comunidade de pais que desejam estimular a
            criatividade e se conectar com seus filhos.');
          };?>
        </p>
        <div class="box-buttons">
          <a href="<?php echo get_theme_mod('setting_android_store_link')?>" class="btn btn-play-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.svg" alt=""
          /></a>
          <a href="<?php echo get_theme_mod('setting_apple_store_link')?>" class="btn btn-apple-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/apple-store-badge.svg" alt=""
          /></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="faq" id="faq">
  <div class="container">
    <div class="row">
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud-2.png" alt="" class="cloud" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud.png" alt="" class="cloud2" />
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/illustration-paper-plane-2.png"
        alt=""
        class="airplane"
      />
      <div class="col">
        <h2 class="title-crown"> 
          <?php if(get_theme_mod('setting_faq_title')){
            echo get_theme_mod('setting_faq_title');
          }else{
            echo('FAQ');
          };?>
        </h2>
        <?php
          $args = array( 'post_type' => 'faq');
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          ?>
          <div class="accordion">
            <div class="question">
              <p><?php the_title();?></p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
            </div>
            <div class="answer">
              <div class="content">
           
                  <?php the_content();?>
               
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
            </div>
          </div>
          <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
      <div class="col">
        <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-own.png" alt="" class="detail" />
      </div>
    </div>
  </div>
</section>
<section class="get-in-touch" id="get-in-touch">
  <div class="container">
    <div class="row">
      <img src="<?php echo get_template_directory_uri(); ?>/img/illustration-cloud.png" alt="" class="cloud" />
      <div class="col col-text">
        <h2>
          <?php if(get_theme_mod('setting_get_in_touch_title')){
            echo get_theme_mod('setting_get_in_touch_title');
          }else{
            echo('Ficou alguma dúvida?');
          };?>
        </h2>
        <p>
          <?php if(get_theme_mod('setting_get_in_touch_subtitle')){
            echo get_theme_mod('setting_get_in_touch_subtitle');
          }else{
            echo('Preencha o formulário e em breve entraremos em contato.');
          };?>
        </p>
      </div>
      <img
        class="detail-form"
        src="<?php echo get_template_directory_uri(); ?>/img/illustration-farmer.png"
        alt=""
      />
      <div class="col col-form">
        <form
          action="https://formsubmit.co/<?php
            if(get_theme_mod('setting_get_in_touch_email')){
              echo get_theme_mod('setting_get_in_touch_email');
            }else{
              echo ('oi@fabulos.com');
            };
          ?>"
          method="POST"
        >
          <input type="name" name="name" placeholder="Nome" />
          <input type="tel" name="telefone" placeholder="Telefone" />
          <input type="email" name="email" placeholder="Email" />
          <textarea name="message" placeholder="Mensagem"></textarea>
          <input
            type="hidden"
            name="_subject"
            value="Contato site Fabulos"
          />
          <input type="hidden" name="_captcha" value="false" />
          <button type="submit" class="btn btn-purple">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>