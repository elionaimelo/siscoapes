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


            <div class="content remove-margin">

                      <div class="title-header">
                        <p>
                          CADASTRAR REPRESENTANTE IFS
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
                                      <input type="email" class="form-control" name="email" placeholder="Informe um email válido">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="pb-telefone">Telefone</label>
                                      <input type="text" class="form-control" name="telefone" placeholder="Informe o telefone">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="pb-cpf">CPF</label>
                                      <input type="text" class="form-control" name="cpf" placeholder="Informe o CPF">
                                    </div>
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-rg">RG</label>
                                      <input type="text" class="form-control" name="rg" placeholder="Informe o RG">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-5" style="padding-left:0px;">
                                      <label for="lb-area1">UF</label>
                                      <input type="text" class="form-control" name="uf" placeholder="Informe o estado">
                                    </div>

                                    <div class="form-group col-md-7" style="padding-right:0px;">
                                      <label for="lb-instituicao">Instituição formadora</label>
                                      <input type="text" class="form-control" name="instituicao" placeholder="Informe a instituição formadora">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-4" style="padding-left:0px;">
                                      <label for="lb-nome">Nome de usuário</label>
                                      <input type="text" class="form-control" name="nome-user" placeholder="Informe o nome de usuário" required>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-right:0px;">
                                      <label for="lb-senha">Senha</label>
                                      <input type="password" class="form-control" name="senha" value="123456" required>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-right:0px;">
                                      <label for="lb-confirmaSenha">Confirmação de Senha</label>
                                      <input type="password" class="form-control" name="confirmaSenha" value="123456" required>
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
