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


            <div class="row row-log">
                      <div class="col-md-6">
                          <div class="well margin-top">
                              <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                  <div class="form-group">
                                      <label for="username" class="control-label">Usuário</label>
                                      <input type="text" class="form-control" name="loginUsuario" value="" required>
                                      <span class="help-block"></span>
                                      <label for="senha" class="control-label">Senha</label>
                                      <input type="text" class="form-control" name="loginSenha" value="" required>
                                      <span class="help-block"></span>
                                      <p>
                                        <a href="#">
                                          Esqueci minha senha ou nome de usuário
                                        </a>
                                      </p>
                                  </div>


                                  <button type="submit" class="btn btn-primary">Entrar</button>

                              </form>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <h3>Instruções para acesso ao sistema</h3>
                          <hr>
                          <h4>
                            <span class="glyphicon glyphicon-chevron-right"></span> Acesso ao Sistema
                          </h4>
                          <p>
                            Esqueceu a senha: Clique em "Esqueceu sua senha" e informe seu CPF para receber uma nova senha de acesso ao sistema.
                          </p>
                          <h4><span class="glyphicon glyphicon-chevron-right"></span> Usuário que não possui acesso</h4>
                          <p>
                            Realize o cadastro clicando em "Ainda não está cadastrado?"
Após efetuar o cadastro, aguarde o recebimento do e-mail com a sua senha provisória para acesso ao SIGESP.
Recomendamos alterar a senha provisória em seu primeiro acesso, seja bem-vindo!
                          </p>
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
