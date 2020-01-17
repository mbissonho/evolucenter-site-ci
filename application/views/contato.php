<?php  $this->load->view('includes/header'); ?> 

  <title>Evolucenter | Contato</title>
</head>

<body>
  <div class="super-container">
  
  <?php $this->load->view('includes/topbar.php'); ?>
    <?php $this->load->view('includes/nav.php'); ?>

    <header class="page-header">
      <div class="page-header-image"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto text-center">
            <br /><br />
            <h1>Contato</h1>
            <p>
              Entre em contato para marcar uma consulta, saber valores ou
              deixar seu feedback!
            </p>
          </div>
        </div>
      </div>
    </header>

    <div id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-info clearfix">
            <div class="info clearfix">
              <div>
                <i class="fa fa-map-marker fa-4x"></i>
                <p>Av. Fernando Ferrari, 3357<br />
                  Jabour, Vitória – 29072-253<br /></p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <p>contato@evolucenter.com.br</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+55 22 99999.9999</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-8 col-md-12">
            <div class="form">
              <div id="sendmessage">
                Your message has been sent. Thank you!
              </div>
              <div id="errormessage"></div>
              <form action="" method="post" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu email"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="8" data-rule="required"
                    data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="clearfix">
                  <!-- Div do ReCaptcha foi adicionado no final do formulário -->
                  <div class="g-recaptcha float-left" data-sitekey="6LeTc5sUAAAAACsHOpRS9-oNYVbM19NEW2sdg_lq"></div>
                  <button class="float-right" type="submit">
                    Enviar Mensagem
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <?php $this->load->view('includes/call-to-action.php'); ?>

    <?php $this->load->view('includes/map.php'); ?>

    <?php $this->load->view('includes/footer.php'); ?>