<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" href="../../../bootstrap/font-awesome/css/font-awesome.min.css" />

 <link rel="stylesheet" href="../../../bootstrap/css/bootstrap-template.min.css" />


 <link rel="stylesheet" href="../../../css/system/template.css">
 <link rel="stylesheet" href="../../../css/system/system.css">

</head>
<body>
  <div id="throbber" style="display:none; min-height:120px;"></div>
  <div id="noty-holder"></div>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
          <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
        </a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
        <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
        </a>
      </li> 

      <li class="btn-group show-on-hover">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></b></a>

        <ul class="dropdown-menu">

          <li><a href="#"><i class=" dropdown-item fa fa-fw fa-user"></i> Editar Perfil</a></li>
          <li><a href="#"><i class="fa fa-fw fa-cog"></i> Esqueci Minha Senha</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
        </ul>
      </li>

    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">

        <li>
          <a href="../../index.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-home fa-5x"></i> Home<i class="pull-right"></i></a>
        </li>
        <li>
          <a href="../views/biblioteca/gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
        </li>
        <li>
          <a href="../users/gestao_usuario.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  User<i class="pull-right"></i></a>
        </li>
        <li>
          <a href="gestao_emprestimos.php"><i class="fa fa-fw fa-history fa-5x"></i>  Emprestimos</a>
        </li>
        <li>
          <a href="views/emprestimos/gestao_emprestimos.php"><i class="fa fa-fw fa-bars fa-5x"></i>  Relatórios</a>
        </li>
      </ul>
    </div>
        <!-- /.n
        <!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content">
              <h3>Bibitec</h3>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <section class="container-fluid text-center main-screen">    
        <div class="row">
          <div class="col-lg-5">   
            <div class="col-lg-12" style="margin-top: 20px;">
              <form style="text-align: right;" method="GET" id="pesqisa">
                <div class="input-group">
                  <input type="text" class="form-control" id="ValorPesquisa" name="ValorPesquisa" placeholder="Pesquisar por ..." style="border-radius: 5px;">
                  <div class="input-group-btn">
                    <select class="btn btn-default dropdown-toggle" name="tipo" id="tipo" style="font-family: Montserrat, Helvetica, Arial, sans-serif; font-weight: 600; border-radius: 5px; padding: 7px;">
                      <option value="cpf" selected>Cpf</option>
                      <option value="nome_usuario">Nome Usuario</option>
                    </select>
                  </div><!-- /btn-group -->
                  <div class="input-group-btn">
                    <button class="btn btn-success" type="button" id="buscar_cpf" style="border-radius: 20%;"><span class="glyphicon glyphicon-search"></span></button>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
              </form>
            </div><!-- /.col-lg-6 -->
          </div>

          <div class="col-md-1"></div>
          <div class="col-lg-5">   
            <div class="col-lg-12" style="margin-top: 20px;">
              <form style="text-align: right;" method="GET" id="pesqisa">
                <div class="input-group">
                  <input type="text" class="form-control" id="ValorPesquisa" name="ValorPesquisa" placeholder="Pesquisar por ..." style="border-radius: 5px;">
                  <div class="input-group-btn">
                    <select class="btn btn-default dropdown-toggle" name="tipo" id="tipo" style="font-family: Montserrat, Helvetica, Arial, sans-serif; font-weight: 600; border-radius: 5px; padding: 7px;">
                      <option value="titulo" selected>Titulo</option>
                      <option value="autor">Autor</option>
                    </select>
                  </div><!-- /btn-group -->
                  <div class="input-group-btn">
                    <button class="btn btn-success" type="button" id="buscar_cpf" style="border-radius: 20%;"><span class="glyphicon glyphicon-search"></span></button>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
              </form>
            </div><!-- /.col-lg-6 -->
          </div>

        </div>

        <section class="row">
          <section class="col-md-6">
            <br>
            <div class="input-group">
              <span class="input-group-addon">Nome do Contratante *</span>
              <input type="text" class="form-control" id="nome_contratante" disabled="true" required>
            </div>
        </section>  

        <section class="col-md-6">
            <br>
            <div class="input-group">
              <span class="input-group-addon">Nome do Contratante *</span>
              <input type="text" class="form-control" id="nome_contratante" disabled="true" required>
            </div>
          </section>    
        </section>


       <br>

        <div class="row">
          <div class="col-md-3"> </div>
          <div class="col-md-6">
            <br><br>
            <button type="button" id="cadastrar" class="btn btn-primary btn-block">Emprestar</button>
           </div>
         <div class="col-md-3"> </div>
        </div>
      
      </body>
      </html>