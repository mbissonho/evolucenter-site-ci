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

    <?php  $this->load->view('includes/services.php'); ?>

    <?php  $this->load->view('includes/our-space.php'); ?>

    <?php  $this->load->view('includes/map.php'); ?>
    
    <?php  $this->load->view('includes/footer.php'); ?>