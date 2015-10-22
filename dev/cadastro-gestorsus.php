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
                                      <input type="text" class="form-control" name="instituicao" placeholder="Digite seu nome completo" required>
                                    </div>
                                    <div class="form-group col-md-5" style="padding-right:0px;">
                                      <label for="lb-area1">Email</label>
                                      <input type="text" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-area1">Telefone</label>
                                      <input type="text" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="lb-area1">CPF</label>
                                      <input type="text" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-area1">RG</label>
                                      <input type="text" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-7" style="padding-left:0px;">
                                      <label for="lb-area1">Município</label>
                                      <input type="text" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>

                                    <div class="form-group col-md-5" style="padding-right:0px;">
                                      <label for="lb-area1">Comprovante</label>
                                      <input type="file" class="file">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-area1">Nome de usuário</label>
                                      <input type="text" class="form-control" name="instituicao" placeholder="Digite seu nome completo" required>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-right:0px;">
                                      <label for="lb-nome-completo">Senha</label>
                                      <input type="text" class="form-control" name="instituicao" placeholder="Digite seu nome completo" required>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-right:0px;">
                                      <label for="lb-nome-completo">Confirmação de Senha</label>
                                      <input type="text" class="form-control" name="instituicao" placeholder="Digite seu nome completo" required>
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






            </div><!-- ./content -->






  </div><!-- ./container -->


</main>

<?php
  include 'modals.php';
?>

<?php
  include 'footer.php';
?>
