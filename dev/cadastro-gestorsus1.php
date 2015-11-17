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
                      <span id="breadcrumbs-current">Cadastro</span>
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
                          <li><a href="cadastro-representante.php">Cadastramento</a></li>
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

                      <div class="title-header">
                        <p>
                          CADASTRAR GESTOR SUS
                          <a href="#" data-toggle="modal" data-target="#myModal3">
                            <span class="glyphicon glyphicon-exclamation-sign pull-right espace-right bt-explication">

                            </span>
                          </a>
                        </p>

                      </div><!-- ./title-header -->


                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pulvinar bibendum purus et hendrerit. Curabitur id pretium diam. Aliquam convallis tincidunt lectus ut tempor. Nam dignissim est justo, vel volutpat orci auctor vel. Integer quis enim eleifend ante sodales pretium. Sed sit amet tempus ante.
                          </p>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-12">
                          <form role="form" action="" class="ds-dados" method="post" >

                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-7" style="padding-left:0px;">
                                      <label for="lb-nome-completo">Nome completo</label>
                                      <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" required>
                                    </div>
                                    <div class="form-group col-md-5" style="padding-right:0px;">
                                      <label for="lb-email">Email</label>
                                      <input type="text" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-telefone">Telefone</label>
                                      <input type="text" class="form-control" name="telefone" placeholder="Informe o telefone">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="lb-cpf">CPF</label>
                                      <input type="text" class="form-control" name="cpf" placeholder="Informe o CPF">
                                    </div>
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-rg">RG</label>
                                      <input type="text" class="form-control" name="rg" placeholder="Informe o rg">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-7" style="padding-left:0px;">
                                      <label for="lb-municipio">Município</label>
                                      <input type="text" class="form-control" name="municipio" placeholder="Informe o municipio">
                                    </div>

                                    <div class="form-group col-md-5" style="padding-right:0px;">
                                      <label for="lb-area1">Comprovante</label>
                                      <input type="file" class="file" name="comprovante">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-user">Nome de usuário</label>
                                      <input type="text" class="form-control" name="usuario" placeholder="Informe o usuário" required>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-right:0px;">
                                      <label for="lb-senha">Senha</label>
                                      <input type="text" class="form-control" name="senha" value="123456" required>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-right:0px;">
                                      <label for="lb-confirmSenha">Confirmação de Senha</label>
                                      <input type="text" class="form-control" name="confirmSenha" placeholder="123456" required>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Concluir</button>
                                  </div>
                                </div>

                            </form>
                        </div>
                      </div>

            </div>






  </div><!-- ./container -->


</main>

<?php
  include 'modals.php';
?>

<?php
  include 'footer.php';
?>
