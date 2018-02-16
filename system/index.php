<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" href="../bootstrap/font-awesome/css/font-awesome.min.css" />

 <link rel="stylesheet" href="../bootstrap/css/bootstrap-template.min.css" />


 <link rel="stylesheet" href="../css/system/template.css">
 <link rel="stylesheet" href="../css/system/system.css">

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
 <script src="http://tumbletricks.webs.com/treme.js"></script>

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
          <a href="index.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-home fa-5x"></i> Home<i class="pull-right"></i></a>
        </li>
        <li>
          <a href="views/biblioteca/gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
        </li>
        <li>
          <a href="views/users/gestao_usuario.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  Users<i class="pull-right"></i></a>
        </li>
        <li>
          <a href="views/emprestimos/gestao_emprestimos.php"><i class="fa fa-fw fa-history fa-5x"></i>  Emprestimos</a>
        </li>

        <li>
          <a href="views/emprestimos/gestao_emprestimos.php"><i class="fa fa-fw fa-bars fa-5x"></i>  Relatórios</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row" id="main" >
        <div class="col-sm-12 col-md-12 well" id="content">
          <h1>Bibitec</h1>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
  <hr>
  <section class="container-fluid text-center main-screen">    
   <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <a href="views/biblioteca/gestao_livro.php">  
          <div class="col-md-8 col-xs-6  fundo treme">
           <i class="fa fa-book fa-5x"></i>
           <h4 class="text-center"> Biblioteca</h4>
         </div>
       </a>    
     </div>

     <div class="col-md-6" >
     <a href="views/users/gestao_usuario.php">  
        <div class="col-md-8 col-xs-6 fundo" >
          <i class="fa fa-users fa-5x"></i>
          <h4 class="text-center">Users</h4>
        </div>
      </a>    
    </div>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-md-12"> 
   <div class="col-md-6">
    <a href="views/emprestimos/gestao_emprestimos.php">  
      <div class="col-md-8 col-xs-6 fundo">
       <i class="fa fa-history fa-5x"></i>
       <h4 class="text-center">Emprestimos</h4>
     </div>
   </a>    
 </div>

 <div class="col-md-6">
  <a href="relatorio/" >  
    <div class="col-md-8 col-xs-6 fundo">
     <i class="fa fa-bars fa-5x"></i>
     <h4 class="text-center">Relatório </h4>
   </div>
 </a>    
</div>
</div>

</section>

</body>
</html>