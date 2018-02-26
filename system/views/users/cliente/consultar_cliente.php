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
    document.location.href = '../../../cadastro-login/login.php';
  </script>
  <?php
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" href="../../../../bootstrap/font-awesome/css/font-awesome.min.css" />
 <link rel="stylesheet" href="../../../../bootstrap/css/bootstrap-template.min.css" />
 <link rel="stylesheet" href="../../../../css/system/template.css">
 <link rel="stylesheet" href="../../../../css/system/system.css">

<?php 
   require "../../../engine/config.php";
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

      <li class="btn-group show-on-hover">
        <a href="#" class="dropdown-toggle getout" data-toggle="dropdown"><h5>SAIR</h5> <b class="fa fa-angle-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></b></a>

      </li>
    </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <li>
                    <a href="../../../index.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-home fa-5x"></i> Home<i class="pull-right"></i></a>
                </li>
                <li>
                    <a href="../../biblioteca/gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
                </li>
                <li>
                    <a href="../gestao_usuario.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  User<i class="pull-right"></i></a>
                </li>
                <li>
                    <a href="../../emprestimos/gestao_emprestimos.php"><i class="fa fa-fw fa-history fa-5x"></i>  Emprestimos</a>
                </li>
                <li>
                    <a href="../../relatorios/gestao_relatorios.php"><i class="fa fa-fw fa-bars fa-5x"></i>  Relatórios</a>
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
                <h3>Consultar CLientes</h3>
            </div>
        </div>
        <div class="row row-list">
                <div class="col-lg-4">
                        <br>
                        <div class="input-group">
                            <input type="text" class="form-control" id="ValorPesquisa" placeholder="Pesquisar por Nome...">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" id="Pesquisar"><span class=" fa fa-search"></span></button>
                            </span>
                        </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->  
        </div>
                 
    <hr>
    <?php 
        $cli= new CLiente();
        $cli= $cli->ReadAll();
 
    ?>
  

    <section class="container-fluid text-center main-screen">    
             <?php 
                   if(empty($cli)) {
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
                                                    foreach($cli as $cli){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $cli['id'];?> </td>
                                                            <td><?php echo $cli['nome'];?></td>
                                                            <td><?php echo $cli['email']; ?></td>
                                                            <td><?php echo $cli['telefone']; ?></td>

                                                            <td class="text-center DetalhesItem">
                                                                <a href="detalhes_cliente.php?id=<?php echo 
                                                                $cli['id'];?>" style="color: inherit;">
                                                                <div style="height:100%; width:100%;">
                                                                    <span class="fa fa-plus-square" aria-hidden="true"></span>
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

<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/sweetalert.js"> </script>
<script type="text/javascript">



$(document).ready(function(e) {
   $('#voltar').click(function(e) {
      e.preventDefault();
     window.location = "../consultar_cli_func.php";
   });

   $('#Pesquisar').click(function(e) {
                e.preventDefault();
                var ValorPesquisa = $('#ValorPesquisa').val();
                
               
                if(ValorPesquisa === ""){
                    swal("Alerta","Digite o nome desejado...", "info");
                }else{ 
                    window.open('pesquisa.php?pesquisa='+ValorPesquisa);
                }
    });

  
   $('.getout').click(function(e) {
    e.preventDefault();
    $.ajax({
      url: '../../../engine/controllers/logout.php',
      data: {
      },
      error: function() {
        swal("Atenção", "Erro na conexão com o servidor. Tente novamente em alguns segundos.", "error");
      },
      success: function(data) {
        if(data === 'kickme'){
          document.location.href = '../../../cadastro-login/login.php';
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