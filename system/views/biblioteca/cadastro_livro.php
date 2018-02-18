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
    document.location.href = '../../cadastro-login/login.php';
  </script>
  <?php
}
 ?>


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

      <li class="btn-group show-on-hover">
        <a href="#" class="dropdown-toggle getout" data-toggle="dropdown"><h5>SAIR</h5> <b class="fa fa-angle-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></b></a>

      </li>
    </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <li>
                    <a href="../../index.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-home fa-5x"></i> Home<i class="pull-right"></i></a>
                </li>
                <li>
                    <a href="gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
                </li>
                <li>
                    <a href="../users/gestao_usuario.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  User<i class="pull-right"></i></a>
                </li>
                <li>
                    <a href="../emprestimos/gestao_emprestimos.php"><i class="fa fa-fw fa-history fa-5x"></i>  Emprestimos</a>
                </li>
                <li>
                    <a href="../relatorios/gestao_relatorios.php"><i class="fa fa-fw fa-bars fa-5x"></i>  Relatórios</a>
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
                    <h1>Bibitec</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <hr>
    <section class="container-fluid text-center main-screen">    
        <div class="row">

            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Titulo do Livro *</span>
                    <input type="text" class="form-control" id="titulo" placeholder="Titulo do livro" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Isbn *</span>
                    <input type="text" class="form-control" id="isbn" placeholder="Isbn" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Autor *</span>
                    <input type="text" class="form-control" id="autor" placeholder="Autor do Livro" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"  size="2" id="basic-addon1">Edição*</span>
                    <input type="text" class="form-control" id="edicao" name="edicao" placeholder="edição do livro" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"  size="2" id="basic-addon1">Editora*</span>
                    <input type="text" class="form-control" id="editora" name="editora" placeholder=" Nome da Editora" required aria-describedby="basic-addon1" value="">
                </div>
            </div>    

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Data Edição *</span>
                    <input type="date" class="form-control" id="data_edicao" placeholder="Data Edicao" aria-describedby="basic-addon1">
                </div>
            </div>

            <input type="hidden" name="status" id="status" value="0">

         <div class="col-md-6"> </div>
        </div>

        <div class="row">
          
          <div class="col-md-3">
          <br><br> 
            <button type="button" id="voltar" class="btn btn-info btn-block">Voltar</button>
          </div>
          <div class="col-md-6">
             <br><br>
             <button type="button" id="cadastrar" class="btn btn-success btn-block">Cadastrar</button>
           </div>
         <div class="col-md-3"> </div>
    </div>
</section>

</body>
</html>

<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/sweetalert.js"> </script>
<script type="text/javascript">

    $(document).ready(function(e) {
       
       $('#voltar').click(function(e) {
            e.preventDefault();
          window.location = "gestao_livro.php";
        });
   
       $('#cadastrar').click(function(e) {
          e.preventDefault();
          $(this).attr('disabled', true); 
         
          var isbn= $('#isbn').val();
          var autor=$('#autor').val();
          var titulo= $('#titulo').val();
          var editora= $('#editora').val();
          var edicao= $('#edicao').val();
          var data_edicao= $('#data_edicao').val();
          var status= $('#status').val();
               
            if(!isbn || !autor || !titulo || !editora || !edicao|| !data_edicao){
                    return swal("Atenção", "Todos os campos com * devem ser preenchidos!!", "error");
            }else {
                $.ajax({
                       url: '../../engine/controllers/livros.php',
                            data: {

                                isbn  : isbn,
                                autor : autor,
                                titulo : titulo,
                                editora : editora,
                                edicao : edicao,
                                data_edicao : data_edicao,
                                status : status,

                                action: 'create'
                            },

                            success: function(data) {
                                console.log(data);
                            
                                 if(data === 'true'){
                                    swal("Sucesso", "Livro  Cadastrado!", "success");
                                }else{
                                    swal("Atenção", "Erro ao conectar com banco de dados. Aguarde e tente novamente em alguns instantes.", "error");
                                }
                            },

                            type: 'POST'
 
                });                 
  
            } 
        });


  $('.getout').click(function(e) {
    e.preventDefault();
    $.ajax({
      url: '../../engine/controllers/logout.php',
      data: {
      },
      error: function() {
        swal("Atenção", "Erro na conexão com o servidor. Tente novamente em alguns segundos.", "error");
      },
      success: function(data) {
        if(data === 'kickme'){
          document.location.href = '../../cadastro-login/login.php';
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