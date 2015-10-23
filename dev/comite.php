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
                      <span id="breadcrumbs-current">Comitê Nacional</span>
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
              <h2 class="title-header">
                Comite Nacional do COAPES

                <a href="#" data-toggle="modal" data-target="#exp-comite">
                  <span class="glyphicon glyphicon-exclamation-sign pull-right espace-right bt-explication">

                  </span>
                </a>
              </h2>


              <div>

                <p>
                  conteudo aqui
                </p>

              </div>
            </div><!-- ./col-two -->

        </div><!-- ./container -->


</main>

<?php
  include 'modals.php';
?>

<?php
  include 'footer.php';
?>
