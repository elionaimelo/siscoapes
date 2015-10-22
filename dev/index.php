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
                    <a href="#">Página Inicial</a>
                </span>
              </div><!-- ./portal-breadcrumbs -->
            </div><!-- ./viewlet-above-content -->


            <aside class="col-one espace-right">

              <dt class="portletHeader">
                <a role="button" data-toggle="collapse" href="#collapse" aria-expanded="false" aria-controls="collapse">
                SISCOAPES
                </a>
              </dt><!-- ./portletHeader -->



              <dd class="collapse in" id="collapse">
                  <ul class="navTree">
                    <li>
                      <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Área gestora do SUS
                      </a>
                      <div class="collapse" id="collapse1">
                        <ul class="sub-navTree">
                          <li><a href="cadastro-represetante.php">Cadastramento</a></li>
                          <li>
                            <a href="login.php">
                                Login
                            </a>
                          </li>
                        </ul>
                      </div><!-- ./#collapse1 -->
                    </li>
                    <li>
                      <a role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Área de Gestores de Instituições de Ensino
                      </a>
                      <div class="collapse" id="collapse2">
                        <ul class="sub-navTree">
                          <li><a href="cadastro-gestorsus.php">Cadastramento</a></li>
                          <li>
                            <a href="login.php">
                                Login
                            </a>
                          </li>
                        </ul>
                      </div><!-- ./#collapse1 -->
                    </li>
                    <li><a href="comite.php">Comitê Nacional</a></li>
                    <li>Comunidade de práticas</li>
                    <li>
                      <a href="#" data-toggle="modal" data-target="#myModal1">
                        Indicadores do COAPES
                      </a>
                    </li>
                    <li>Fale Conosco</li>
                  </ul>
              </dd><!-- ./#collapse -->



            </aside>

            <div class="col-two">

                    <div id="carousel-one" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-one" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-one" data-slide-to="1"></li>
                          <li data-target="#carousel-one" data-slide-to="2"></li>
                        </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="http://placehold.it/800x400" alt="...">
                          <div class="carousel-caption">
                            <h2>text 1</h2>
                          </div>
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/800x400" alt="...">
                          <div class="carousel-caption">
                            <h2>Texto 2</h2>
                          </div>
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/800x400" alt="...">
                          <div class="carousel-caption">
                            <h2>Texto 3</h2>
                          </div>
                        </div>
                      </div><!-- ./carousel-inner -->

                                <!-- Controls
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                                -->
                    </div><!-- ./#carousel-one -->

                    <div class="espace-top">
                      <h2 class="title-header">
                        Busca por COAPES

                        <a href="#" data-toggle="modal" data-target="#myModal">
                          <span class="glyphicon glyphicon-exclamation-sign pull-right espace-right bt-explication">

                          </span>
                        </a>
                      </h2>

                      <form class="busca-geral" action="busca.php" method="post">
                        <div class="form-group col-md-6">
                          <select class="form-control">
                            <option>Selecione um Estado</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>

                        <div class="form-group col-md-6">
                          <select class="form-control">
                            <option>Selecione o município</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary bt-search pull-right">Buscar</button>
                      </form>

                    </div>

              </div><!-- ./col-2 -->

        </div><!-- ./container -->


</main>

<?php
  include 'modals.php';
?>

<?php
  include 'footer.php';
?>
