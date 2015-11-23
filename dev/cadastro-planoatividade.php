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

  <div class="container" style="overflow:visible">
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
                           <i class="fa fa-stethoscope"></i> Novo plano de atividades entre FACITEN e APOIO TERAPIA DE FAMILIA E CASAL ASSESSORIA EM SOCIAL
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
                                    <div class="form-group col-md-6 remove-padding-left">
                                      <label for="lb-nome-completo">Título da disciplina/atividade *</label>
                                      <input type="text" class="form-control" name="nome" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 remove-padding-right">
                                      <label for="lb-email">Nome do Docente Responsável *</label>
                                      <input type="text" class="form-control" name="email" placeholder="">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-12 remove-padding-left remove-padding-right">
                                      <label for="lb-email">Campo de prática de graduação ou residência? *</label>
                                      <select class="form-control" id="type">
                                        <option>-----</option>
                                        <option value ="0">Graduação</option>
                                        <option value ="1">Residência médica</option>
                                        <option value ="2">Residência multiprofissional</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row hidden_div row-graduacao">
                                  <div class="row">
                                    <div class="form-group col-md-12 remove-padding-left remove-padding-right">
                                      <label for="lb-email">Qual o curso de graduação? *</label>
                                      <select class="form-control" id="type">
                                        <option>-----</option>
                                        <option >1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row hidden_div row-residencia">
                                  <div class="row">
                                    <div class="form-group col-md-12 remove-padding-left remove-padding-right">
                                      <label for="lb-email">Qual residência médica? *</label>
                                      <select class="form-control" id="type">
                                        <option>-----</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row hidden_div row-residencia-multi">
                                  <div class="row">
                                    <div class="form-group col-md-12 remove-padding-left remove-padding-right">
                                      <label for="lb-email">Quais formações presentes na residência multiprofissional? *</label>
                                      <br/>
                                      <select id="multiple-select" class="form-control" multiple="multiple" id="type">
                                          <option value="biomedicina">biomedicina</option>
                                          <option value="ciências biológicas">ciências biológicas</option>
                                          <option value="educação física">educação física</option>
                                          <option value="enfermagem">enfermagem</option>
                                          <option value="medicina">medicina</option>
                                          <option value="fonoaudiologia">fonoaudiologia</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="row">
                                    <div class="form-group col-md-12 remove-padding-left remove-padding-right">
                                      <label for="lb-email">Tipo de atividade *</label>
                                      <select class="form-control" id="type1">
                                        <option>-----</option>
                                        <option value="internato">Internato médico</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row hidden_div row-internato">
                                  <div class="row">
                                    <div class="form-group col-md-12 remove-padding-left remove-padding-right">
                                      <label for="lb-email">Área de Concentração do Internato *</label>
                                      <select class="form-control">
                                        <option>-----</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
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
