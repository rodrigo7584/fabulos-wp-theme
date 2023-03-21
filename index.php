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
            <a target="_blank" href="#" class="btn btn-pink"
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
          <a href="#" class="btn btn-pink">Conheça a Fabulos</a>
          <a href="#" class="btn btn-border-white">Fale com a gente</a>
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
        <h2 class="title-crown">Conheça a Fabulos</h2>
        <p>
          Com a Fabulos, seu filho terá histórias feitas especialmente
          para ele, com personagens que ele adora e lições que você quer
          ensinar.
        </p>
        <br />
        <p>
          <strong>Faça o download agora</strong> e comece a crie histórias
          envolventes para seu filho!
        </p>
        <div class="box-buttons">
          <a href="#" class="btn btn-play-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.svg" alt=""
          /></a>
          <a href="#" class="btn btn-apple-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/apple-store-badge.svg" alt=""
          /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row row-our-app">
      <div class="col">
        <h2 class="title-crown">Conheça nosso app</h2>
        <div class="caroucel caroucel-our-app">
          <div aria-label="Previous" class="controls btn btn-back">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-right-arrow.png" alt="" />
          </div>
          <div class="caroucel-content">
            <div class="slide slide-1">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cellphone-1.png" alt="" />
            </div>
            <div class="slide slide-2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cellphone-2.png" alt="" />
            </div>
            <div class="slide slide-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cellphone-3.png" alt="" />
            </div>
            <div class="slide slide-4">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cellphone-4.png" alt="" />
            </div>
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
          Depoimentos de pais que já usaram o aplicativo:
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
            <div class="slide slide-1">
              <div class="comment-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/icon-commentary.png"
                  alt=""
                  class="icon"
                />
                <p>
                  “Meu filho adora as histórias personalizadas do Fabulos!
                  É uma maneira divertida de ensinar valores importantes."
                </p>
                <div class="name-evaluation">
                  <p>João S.</p>
                  <div class="evaluation">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="slide slide-2">
              <div class="comment-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/icon-commentary.png"
                  alt=""
                  class="icon"
                />
                <p>
                  “Meu filho adora as histórias personalizadas do Fabulos!
                  É uma maneira divertida de ensinar valores importantes."
                </p>
                <div class="name-evaluation">
                  <p>João S.</p>
                  <div class="evaluation">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="slide slide-3">
              <div class="comment-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/icon-commentary.png"
                  alt=""
                  class="icon"
                />
                <p>
                  “Meu filho adora as histórias personalizadas do Fabulos!
                  É uma maneira divertida de ensinar valores importantes."
                </p>
                <div class="name-evaluation">
                  <p>João S.</p>
                  <div class="evaluation">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="slide slide-4">
              <div class="comment-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/img/icon-commentary.png"
                  alt=""
                  class="icon"
                />
                <p>
                  “Meu filho adora as histórias personalizadas do Fabulos!
                  É uma maneira divertida de ensinar valores importantes."
                </p>
                <div class="name-evaluation">
                  <p>João S.</p>
                  <div class="evaluation">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-star.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
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
          <strong>Faça o download da Fabulos agora</strong> e comece a
          criar histórias personalizadas para seu filho! <br />
          Faça parte da nossa comunidade de pais que desejam estimular a
          criatividade e se conectar com seus filhos.
        </p>
        <div class="box-buttons">
          <a href="#" class="btn btn-play-store"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-badge.svg" alt=""
          /></a>
          <a href="#" class="btn btn-apple-store"
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
        <h2 class="title-crown">FAQ</h2>
        <div class="accordion">
          <div class="question">
            <p>O que é Fabulos?</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                Fabulos é um aplicativo que permite aos pais criarem
                histórias personalizadas para crianças de até 12 anos, com
                personagens, ensinamentos, tom e enredo.
              </p>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>
              Quais são os benefícios de utilizar a Fabulos para contar
              histórias personalizadas?
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <ul>
                <li>
                  1. Estimula a imaginação: as histórias personalizadas
                  estimulam a imaginação das crianças, ajudando-as a
                  visualizar as cenas e os personagens descritos.
                </li>
                <li>
                  2. Desenvolve a criatividade: ao criar histórias
                  personalizadas, os pais incentivam as crianças a serem
                  criativas, inventando personagens e enredos.
                </li>
                <li>
                  3. Melhora a linguagem: as histórias personalizadas
                  ajudam as crianças a melhorar sua linguagem e
                  vocabulário, aumentando sua capacidade de se expressar e
                  compreender o mundo ao seu redor.
                </li>
                <li>
                  4. Ensina valores: as histórias personalizadas podem
                  incluir ensinamentos e valores importantes para as
                  crianças, como a importância da amizade, do respeito e
                  da honestidade.
                </li>
                <li>
                  5. Fortalece os vínculos familiares: contar histórias
                  personalizadas para as crianças é uma forma de
                  fortalecer os vínculos familiares, criando momentos de
                  intimidade e cumplicidade entre pais e filhos.
                </li>
                <li>
                  6. Desenvolve habilidades sociais: as histórias
                  personalizadas podem ajudar as crianças a desenvolver
                  habilidades sociais, como empatia e respeito pelas
                  diferenças, por meio da identificação com os personagens
                  e situações narradas. 7. Estimula a leitura: ao se
                  envolverem com histórias personalizadas, as crianças são
                  incentivadas a ler e a se interessar por outros livros e
                  narrativas. 8. Alivia o estresse: contar histórias
                  personalizadas para as crianças pode ser uma forma
                  divertida de aliviar o estresse do dia a dia e criar um
                  ambiente agradável e acolhedor em casa.
                </li>
              </ul>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>Quanto custa o aplicativo Fabulos?</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                O aplicativo Fabulos é gratuíto para até 5 história. Já o
                pago, existe a opção do plano mensal que tem o valor de R$
                19,90 e o plano anual a R$ 199,00.
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>Qual a diferença entre o plano gratuito e o pago?</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                No plano gratuito, os pais podem criar até 5 histórias
                personalizadas e têm acesso às fábulas do dia. Já no plano
                pago, os pais podem criar até 90 histórias personalizadas
                por mês e têm acesso a atividades educacionais
                personalizadas.
              </p>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>O que é incluso no plano pago do Fabulos?</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                No plano pago do Fabulos, os pais têm acesso a atividades
                educacionais personalizadas e podem criar até 90 histórias
                personalizadas por mês.
              </p>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>O que são as fábulas do dia?</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                As fábulas do dia são histórias prontas disponíveis para
                leitura no aplicativo de forma gratuíta
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>O que são atividades educacionais personalizadas?</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                As atividades educacionais personalizadas são jogos e
                atividades pedagógicas que ajudam a criança a desenvolver
                habilidades de leitura, escrita e raciocínio lógico a
                partir das histórias contadas.
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>
              Quantas histórias personalizadas posso criar no plano
              gratuito?
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                No plano gratuito, os pais podem criar até 3 histórias
                personalizadas por mês.
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>
              Como posso entrar em contato com o suporte técnico da
              Fabulos?
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                Os usuários podem entrar em contato com o suporte técnico
                do Fabulos através do e-mail de suporte oi@fabulos.com.br
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
        <div class="accordion">
          <div class="question">
            <p>
              A Fabulos está disponível apenas para pais ou qualquer
              pessoa pode usar o aplicativo?
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question.png" alt="" />
          </div>
          <div class="answer">
            <div class="content">
              <p>
                A Fabulos é voltada para pais, mas qualquer pessoa pode
                usar o aplicativo para criar histórias personalizadas
              </p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-question-2.png" alt="" />
          </div>
        </div>
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
        <h2>Ficou alguma dúvida?</h2>
        <p>Preencha o formulário e em breve entraremos em contato.</p>
      </div>
      <img
        class="detail-form"
        src="<?php echo get_template_directory_uri(); ?>/img/illustration-farmer.png"
        alt=""
      />
      <div class="col col-form">
        <form
          action="https://formsubmit.co/rodrigo.gandhi.oliveira@gmail.com"
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