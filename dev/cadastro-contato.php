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
                <span class="breadcrumbSeparator">
                    &gt;
                </span>
                <span dir="ltr" id="breadcrumbs-2">
                      <span id="breadcrumbs-current">Cadastro</span>
                </span>
              </div><!-- ./portal-breadcrumbs -->
            </div><!-- ./viewlet-above-content -->


            <div class="content remove-margin">

                      <div class="title-header">
                        <p>
                          CADASTRO DE MUNICÍPIOS PARTICIPANTES E INSTITUIÇÕES DE ENSINO
                          <a href="#" data-toggle="modal" data-target="#myModal2">
                            <span class="glyphicon glyphicon-exclamation-sign pull-right espace-right bt-explication">

                            </span>
                          </a>
                        </p>

                        <ul class="menu-title-header">
                          <li>
                            <a href="#">
                              Voltar
                            </a>
                          </li>
                        </ul>
                      </div><!-- ./title-header -->

                      </div><!-- ./title-header -->

                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            Selecione os municípios e instituições formadoras que farão parte do contrato.
                          </p>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-12">
                          <form role="form" action="" class="ds-dados" method="post" >
                                <div class="form-row">
                                  <div class="form-group">
                                    <label for="lb-municipio">Município</label>
                                    <input type="text" class="form-control" name="municipio" placeholder="Informe o nome do município ou código do IBGE" required>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group">
                                    <label for="lb-instituicao">Instituição formadora</label>
                                    <input type="text" class="form-control" name="instituicao" placeholder="Informe o nome ou sigla da instituição" required>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Avançar</button>
                                  </div>
                                </div>

                            </form>
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
