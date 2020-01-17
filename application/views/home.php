<?php  
    $this->load->view('includes/header'); 
?>
  <title>Evolucenter | Home</title>
</head>

<body>
  <div class="super-container">
        
  <?php $this->load->view('includes/topbar.php'); ?>

    <!-- HEADER -->

    <header id="header">
        <?php $this->load->view('includes/nav.php'); ?>
    </header>

    <!-- SLIDE SHOW -->

    <section id="showcase">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item carousel-image carousel-image-1 center-center active">
            <div class="shadow-overlay">
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="display-3">Responsabilidade</h1>
                  <p class="lead text-center">
                    Pensando em nossos pacientes, a seleção de nossos profissionais é precisa para garantir o melhor atentimento.
                  </p>
                  <a href="#" class="btn btn-success btn-lg btn-agendar">Agendar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item carousel-image carousel-image-2 center-center">
            <div class="shadow-overlay">
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="display-3">Comprometimento</h1>
                  <p class="lead text-center">
                   A prontidão de nossos profissionais expressa o nosso compromisso com a saúde e o bem estar de cada cliente.
                  </p>
                  <a href="#" class="btn btn-success btn-lg btn-agendar">Agendar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item carousel-image carousel-image-3 center-bottom">
            <div class="shadow-overlay">
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="display-3">Qualidade</h1>
                  <p class="lead text-center">
                  O planejmanto e gestão da nossa equipe visam garantir e otimizar a qualidade dos nossos serviços.
                  </p>
                  <a href="#" class="btn btn-success btn-lg btn-agendar">Agendar</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
          <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>

    <section id="services" class="py-5">
      <div class="container">
        <header class="section-header">
          <h3>Serviços</h3>
          <p>
            Com serviços de Fisioterapia, somos uma clinica com parcerias médicas e uma central para evolução física,
            mental e social.
          </p>
        </header>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/fisioterapeuta.png'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Fisioterapia</h5>
                <p class="card-text">
                  A partir do diagnóstico, o fisioterapeuta prescreve o tratamento a ser realizado. O tipo varia de
                  acordo com a condição do paciente e a lesão a ser tratada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/psicologia.jpg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Psicologia</h5>
                <p class="card-text">
                  O psicólogo atua no estudo da mente humana, identificando os problemas relacionados ao comportamento.
                  Desta forma, visa resolver estes problemas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/massoterapia.jpg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Massoterapia</h5>
                <p class="card-text">
                  Objetivo é reduzir e controlar dores diversas, melhorar a flexibilidade do corpo, fortalecer o sistema
                  imunológico, beneficiar a circulação sanguínea e eliminação de toxinas.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/nutricionista.jpg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Nutricionista</h5>
                <p class="card-text">
                  Profissional calcula a quantidade dos nutrientes necessários para suprir as demandas do organismo e
                  elabora um cardápio balanceado e individualizado, orientando o paciente.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/clinico.jpeg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Clínico Geral</h5>
                <p class="card-text">
                  O Clínico Geral é o profissional responsável por servir à comunidade, auxiliar na prevenção, cura de
                  doenças e redirecionamento para as demais especialidades.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/ortopedista.jpg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Ortopedista</h5>
                <p class="card-text">
                  Profissional da medicina especializado no diagnóstico e tratamento de lesões e disfunções no sistema
                  locomotor, ou seja, nos músculos e ossos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/pilates.jpg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Pilates</h5>
                <p class="card-text">
                  Ênfatiza o desenvolvimento equilibrado do corpo através dos núcleos força, flexibilidade e
                  consciência, a fim de apoiar movimentos graciosos e eficientes.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 col-service">
            <div class="card service-card">
              <img class="card-img-top service-card-image" src="<?= base_url('assets/images/servicos/fonoaudiologia.jpg'); ?>" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Fonoaudiologia</h5>
                <p class="card-text">
                  Prevenção, avaliação e reabilitação das desordens da comunicação. Adequação da comunicação oral e
                  escrita, voz e audição e funções de mastigação, deglutição e respiração.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="our-space">
      <div class="container">
        <header class="section-header">
          <h3>Nosso Espaço</h3>
          <p>
            Com o planejamento de nossa arquiteta Rayssa Lomar, conseguimos unir conforto e acessibilidade, buscando um
            visual aconchegante para toda a clinica.
          </p>
        </header>
        <div class="container-fluid">
          <div id="itemContainer" class="row no-gutters">
            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/1.jpg" class="our-space-popup" title="Portfolio Item 1">
                  <img class="x" src="<?= base_url('assets/images/our-space/1.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 1</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/2.jpg" class="our-space-popup" title="Portfolio Item 2">
                  <img class="x" src="<?= base_url('assets/images/our-space/2.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 2</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/3.jpg" class="our-space-popup" title="Portfolio Item 3">
                  <img class="x" src="<?= base_url('assets/images/our-space/3.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 3</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/4.jpg" class="our-space-popup" title="Portfolio Item 4">
                  <img class="x" src="<?= base_url('assets/images/our-space/4.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 4</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/5.jpg" class="our-space-popup" title="Portfolio Item 5">
                  <img class="x" src="<?= base_url('assets/images/our-space/5.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 5</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/6.jpg" class="our-space-popup" title="Portfolio Item 6">
                  <img class="x" src="<?= base_url('assets/images/our-space/6.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 6</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/7.jpg" class="our-space-popup" title="Portfolio Item 7">
                  <img class="x" src="<?= base_url('assets/images/our-space/7.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 7</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="images/our-space/8.jpg" class="our-space-popup" title="Portfolio Item 8">
                  <img class="x" src="<?= base_url('assets/images/our-space/8.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    <div class="our-space-info">
                      <h2 class="">Portfolio Item 8</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="holder"></div>
      </div>
    </section>

    <?php  $this->load->view('includes/map.php'); ?>
    
    <?php  $this->load->view('includes/footer.php'); ?>