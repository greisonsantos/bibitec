<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" href="../../../bootstrap/font-awesome/css/font-awesome.min.css" />
 <link rel="stylesheet" href="../../../bootstrap/css/bootstrap-template.min.css" />
 <link rel="stylesheet" href="../../../css/system/template.css">
 <link rel="stylesheet" href="../../../css/system/system.css">

<?php 
   require "../../engine/config.php";
?>

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
                    <a href="../biblioteca/gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
                </li>P
                <li>
                    <a href="gestao_usuario.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  User<i class="pull-right"></i></a>
                </li>
                <li>
                    <a href="investigaciones/favoritas"><i class="fa fa-fw fa-history fa-5x"></i>  Emprestimos</a>
                </li>
            </ul>
        </div>

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
        <div class="row row-list">
                <div class="col-lg-4">
                        <br>
                        <div class="input-group">
                            <input type="text" class="form-control" id="ValorPesquisa" placeholder="Pesquisar por Nome...">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" id="Pesqisar"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->  
        </div>
                 
    <hr>
    <?php 
        $user= new Funcionario();
        $user= $user->ReadAll();
 
    ?>
  

    <section class="container-fluid text-center main-screen">    
             <?php 
                   if(empty($user)) {
               ?>
                   <h4 class="well"> Nenhum Usuario encontrado. </h4>
                    <?php
                } else {
                    ?>

                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th class="text-center">Id </th>
                                                    <th class="text-center">Nome </th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Telefone </th>
                                                    <th class=" text-center">Info</th>
                                                    <!-- <th class=" text-center">Excluir</th> -->
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($user as $user){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $user['id'];?> </td>
                                                            <td><?php echo $user['nome'];?></td>
                                                            <td><?php echo $user['email']; ?></td>
                                                            <td><?php echo $user['telefone']; ?></td>

                                                            <td class="text-center DetalhesItem">
                                                                <a href="detalhes_funcionario.php?id=<?php echo 
                                                                $user['id'];?>" style="color: inherit;">
                                                                <div style="height:100%; width:100%;">
                                                                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <!-- <td class="text-center"> Excluir </td> -->

                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>            
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>       
             <?php  
              }
             ?>
    </section>

        <div class="col-md-4">
            <br><br>
             <button type="button" id="voltar" class="btn btn-info btn-block">Voltar</button>
        </div>

</body>
</html>

<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/sweetalert.js"> </script>
<script type="text/javascript">



$(document).ready(function(e) {
   $('#voltar').click(function(e) {
      e.preventDefault();
     window.location = "consultar_cli_func.php";
   });

   });

</script>