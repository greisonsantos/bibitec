<?php
$showerros = true;
if($showerros) {
  ini_set("display_errors", $showerros);
  error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);
}

session_start();
// Inicia a sessão

session_name(sha1($_SERVER['HTTP_USER_AGENT'].$_SESSION['email']));
// Sempre usará nome de sessão diferente
// Estou concatenando informações sobre o local de onde o acesso está sendo feito + email do user
// e criptografando com sha1

if(empty($_SESSION)){
  ?>
  <script>
    document.location.href = 'cadastro-login/login.php';
  </script>
  <?php
}
 

require_once "engine/config.php";
?>




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

      <li class="btn-group show-on-hover">
        <a href="#" class="dropdown-toggle getout" data-toggle="dropdown"><h5>SAIR</h5> <b class="fa fa-angle-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></b></a>

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
          <a href="views/relatorios/gestao_relatorios.php"><i class="fa fa-fw fa-bars fa-5x"></i>  Relatórios</a>s
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
          <h1>BibiTec</h1>
        </div>
        <h1 class="text-center">Gestão de Biblioteca</h1>
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
  <a href="views/relatorios/gestao_relatorios.php" >  
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

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/sweetalert.js"> </script>
<script type="text/javascript" src="../js/toastr.min.js"> </script>

<script type="text/javascript">

$(document).ready(function(e) { 
  $('.getout').click(function(e) {
    e.preventDefault();
    $.ajax({
      url: 'engine/controllers/logout.php',
      data: {
      },
      error: function() {
        swal("Atenção", "Erro na conexão com o servidor. Tente novamente em alguns segundos.", "error");
      },
      success: function(data) {
        if(data === 'kickme'){
          document.location.href = 'cadastro-login/login.php';
        }
        else{
          swal("Atenção", "Erro ao conectar com banco de dados. Aguarde e tente novamente em alguns instantes.", "error");
        }
      },

      type: 'POST'
    });

  });
});

</script>