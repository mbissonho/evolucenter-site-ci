<?php  $this->load->view('includes/header'); ?> 
    
    <title>Evolucenter | Sobre</title>
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
                        <h1>Sobre</h1>
                        <p>
                            Conheça os fatores que guiam a qualidade dos nossos serviços
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center col-start-text">
                        <p>A busca por melhorias na saúde é uma constante que na Evolucenter, é uma preocupação.
                            Observamos o déficit na área para atendimentos de planos de saúde ou com preços acessíveis.
                            Temos como meta abranger alguns pilares, tais como, Responsabilidade, Comprometimento e
                            Qualidade.</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="pb-5 mb-5 pt-3">
            <div class="container">
                <header class="section-header pb-5">
                    <h3>Missão</h3>
                </header>
                <div class="row">
                    <div class="col-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button">
                                            <strong>Responsabilidade</strong>
                                        </a>
                                    </h4>
                                </div>

                                <div class="panel-body">
                                    <p>Enfatizamos sempre o atendimento a nossos pacientes como máxima prioridade: com
                                        o cumprimento de horários na busca do seu objetivo para maior saúde e qualidade
                                        de vida. </p>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button">
                                            <strong>Comprometimento</strong>
                                        </a>
                                    </h4>
                                </div>

                                <div class="panel-body">
                                    <p>Trabalharemos diariamente com supervisão de equipe
                                        e treinamentos semanais de técnicas, atendimento e investimento pessoal
                                        individual
                                        em toda equipe para melhor atendê-los.</p>
                                </div>

                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button">
                                            <strong>Qualidade</strong>
                                        </a>
                                    </h4>
                                </div>

                                <div class="panel-body">
                                    <p>Contaremos com uma equipe altamente qualificada e
                                        preparada, com um planejamento para aumento de qualidade de vida, abordando
                                        o
                                        aspecto físico, psicológico e social.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $this->load->view('includes/call-to-action.php'); ?>

<?php $this->load->view('includes/map.php'); ?>

<?php $this->load->view('includes/footer.php'); ?>