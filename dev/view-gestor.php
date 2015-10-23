<?php
  include 'head.php';
?>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">Seu navegador está <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para uma melhor navegação</p>
<![endif]-->

<?php
  include 'header.php';
?>


<main>

  <div class="container">
            <div id="viewlet-above-content">
              <div id="portal-breadcrumbs">
                <span id="breadcrumbs-you-are-here">Você está aqui:</span>
                <span id="breadcrumbs-home">
                    <a href="index.php">Página Inicial</a>
                </span>
                <span class="breadcrumbSeparator">
                    &gt;
                </span>
                <span dir="ltr" id="breadcrumbs-2">
                      <span id="breadcrumbs-current">Dashboard</span>
                </span>
              </div><!-- ./portal-breadcrumbs -->
            </div><!-- ./viewlet-above-content -->


            <div class="content remove-margin">

                      <div class="title-header">
                        <p>
                          ÁREA DO USUÁRIO
                        </p>
                        <ul class="menu-title-header">
                          <li>
                            <a href="#">
                              Alterar senha
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              Alterar dados
                            </a>
                          </li>
                          <li>
                            <a href="cadastro-contato.php">
                              Novo contato
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              Detalhar
                            </a>
                          </li>
                        </ul>
                      </div><!-- ./title-header -->

                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            Nullam in tortor quis felis vestibulum efficitur ut nec lectus. Praesent sed justo rhoncus, facilisis enim vitae, convallis sem. Morbi eros justo, sagittis ac ultrices vel, efficitur et magna. Donec sodales cursus ipsum. Pellentesque eu porttitor sapien. Praesent convallis auctor nisi, in volutpat eros condimentum ac. Nulla vitae lacus sed justo commodo blandit. Donec felis dui, sodales ut
            Donec auctor nulla ornare ante semper, sit amet mollis lectus gravida. Maecenas risus augue, placerat vitae sem at, vehicula vehicula felis.
                          </p>
                        </div>
                      </div>



                      <div class="row">

                        <div class="col-md-6 col-md-offset-3">

                              <div class="form-row">
                                <div class="form-group">
                                  <div class="center-block">
                                    <label for="">Município</label>
                                    <input type="text" class="form-control" name="municipio" placeholder="RN/Mossoró" disabled>
                                    <p class="help-block">
                                      <a href="#" data-toggle="modal" data-target="#exp-comite">
                                        <span class="glyphicon glyphicon-exclamation-sign pull-right">

                                        </span>
                                      </a>
                                    </p>
                                  </div>
                                </div>
                              </div>




                        </div>
                      </div>






            </div><!-- ./content -->






  </div><!-- ./container -->


</main>

<?php
  include 'modals.php';
?>

<?php
  include 'footer.php';
?>
