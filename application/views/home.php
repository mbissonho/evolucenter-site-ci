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

    <?php $this->load->view('includes/slide-show.php'); ?>

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
            Com o planejamento de nossa arquiteta, conseguimos unir conforto e acessibilidade, buscando um
            visual aconchegante para toda a clinica.
          </p>
        </header>
        <div class="container-fluid">
          <div id="itemContainer" class="row no-gutters">

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="<?= base_url('assets/images/our-space/01.jpg'); ?>" class="our-space-popup" title="">
                  <img class="x" src="<?= base_url('assets/images/our-space/01.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="<?= base_url('assets/images/our-space/02.jpg'); ?>" class="our-space-popup" title="">
                  <img class="x" src="<?= base_url('assets/images/our-space/02.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    
                  </div>
                </a>
              </div>
            </div>



            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="<?= base_url('assets/images/our-space/03.jpg'); ?>" class="our-space-popup" title="">
                  <img class="x" src="<?= base_url('assets/images/our-space/03.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                   
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="<?= base_url('assets/images/our-space/04.jpg'); ?>" class="our-space-popup" title="">
                  <img class="x" src="<?= base_url('assets/images/our-space/04.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
                    
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="our-space-item">
                <a href="<?= base_url('assets/images/our-space/05.jpg'); ?>" class="our-space-popup" title="">
                  <img class="x" src="<?= base_url('assets/images/our-space/05.jpg'); ?>" alt="x" />
                  <div class="our-space-overlay">
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