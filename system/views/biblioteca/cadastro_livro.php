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
                    <a href="gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  User<i class="pull-right"></i></a>
                </li>
                <li>
                    <a href="investigaciones/favoritas"><i class="fa fa-fw fa-history fa-5x"></i>  Emprestimos</a>
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
         
          var isbn= $('#isbn').val();
          var autor=$('#autor').val();
          var titulo= $('#titulo').val();
          var editora= $('#editora').val();
          var edicao= $('#edicao').val();
          var data_edicao= $('#data_edicao').val();
               
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
    
    });
   
</script>