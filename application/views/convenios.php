<?php  $this->load->view('includes/header'); ?> 

  <title>Evolucenter | Convênios</title>
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
            <h1>Convênios</h1>
            <p>
              Conheça nossos parceiros e conveniados
            </p>
          </div>
        </div>
      </div>
    </header>

  <?php 
  
    $brand_image_list = array(

      'abes' => array(
        'image_file' => 'ABES.png',
        'alt' => ''
      ),
      'ams' => array(
        'image_file' => 'AMS.png',
        'alt' => ''
      ),
      'arcelor' => array(
        'image_file' => 'ArcelorMital.png',
        'alt' => ''
      ),
      'aspbes' => array(
        'image_file' => 'ASPBES.png',
        'alt' => ''
      ),
      'assefaz' => array(
        'image_file' => 'ASSEFAZ.png',
        'alt' => ''
      ),
      'bb' => array(
        'image_file' => 'Banco_do_Brasil.png',
        'alt' => ''
      ),
      'banes' => array(
        'image_file' => 'Banescaixa.png',
        'alt' => ''
      ),
      'bradesco' => array(
        'image_file' => 'Bradesco_saude.png',
        'alt' => ''
      ),
      'capesaude' => array(
        'image_file' => 'Capesaude.png',
        'alt' => ''
      ),
      'cesan' => array(
        'image_file' => 'Cesan.png',
        'alt' => ''
      ),
      
    )

  ?>

    <section class="py-5">
      <div class="container">
        <div class="row">

          <?php foreach($brand_image_list as $key => $value): ?>

          <div class="col-lg-3 col-md-6 col-sm-12 col-convenio-image">
            <a href="#">
              <img src="<?= base_url('assets/images/convenios/'.$value['image_file']); ?>" class="convenio-image square m-auto" alt="" />
            </a>
          </div>
          
          <?php endforeach; ?>
        
        </div>

      </div>
    </section>
  
    <?php $this->load->view('includes/call-to-action.php'); ?>

    <?php $this->load->view('includes/map.php'); ?>

    <?php $this->load->view('includes/footer.php'); ?>