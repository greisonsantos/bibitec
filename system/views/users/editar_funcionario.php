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
                    <h3>Bibitec</h3>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
                
    <hr>

        <?php 
        $func= new Funcionario();
        $func= $func->Read($_GET['id']);
      
    ?>
  

    <section class="container-fluid text-center main-screen">    
        <div class="row">

            <input type="hidden" name="id" id="id"  value="<?php echo $_GET['id'];?>"> 
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Nome do Funcionário *</span>
                    <input type="text" class="form-control" id="nome" aria-describedby="basic-addon1" value="<?php echo $func['nome']; ?>" >
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">E-mail *</span>
                    <input type="text" class="form-control" id="email" required aria-describedby="basic-addon1" value="<?php echo $func['email']; ?>" >
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Cpf *</span>
                    <input type="text" class="form-control" id="cpf"  required aria-describedby="basic-addon1" value="<?php echo $func['cpf']; ?>" >
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"  size="2" id="basic-addon1">Endereço*</span>
                    <input type="text" class="form-control" id="endereco" name="edicao"  required aria-describedby="basic-addon1" value="<?php echo $func['endereco']; ?>">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"  size="2" id="basic-addon1">Cidade*</span>
                    <input type="text" class="form-control" id="cidade" name="editora"  required aria-describedby="basic-addon1"  value="<?php echo $func['cidade']; ?>" >
                </div>
            </div>    

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Estado *</span>
                    <input type="text" class="form-control" id="estado" aria-describedby="basic-addon1" value="<?php echo $func['estado']; ?>" >
                </div>
            </div>

           <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Telefone *</span>
                    <input type="text" class="form-control" id="telefone" aria-describedby="basic-addon1" value="<?php echo $func['telefone']; ?>" >
                </div>
            </div>
        
        </div>

        <div class="row">
          
          <div class="col-md-3">
             <br><br>
             <button type="button" id="voltar" class="btn btn-info btn-block">Voltar</button>
          </div> 
           <div class="col-md-6">
             <br><br>
             <button type="button" id="salvar" class="btn btn-success btn-block">Salvar</button>
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
         window.location = "consultar_funcionario.php";
        });

       $('#salvar').click(function(e) {
          e.preventDefault(); 
          var id= $('#id').val()
          var nome= $('#nome').val();
          var email=$('#email').val();
          var cpf= $('#cpf').val();
          var endereco= $('#endereco').val();
          var cidade= $('#cidade').val();
          var estado= $('#estado').val();
          var telefone= $('#telefone').val();

            if(!nome || !email || !cpf || !endereco || !cidade || !estado || !telefone){
                    return swal("Atenção", "Todos os campos com * devem ser preenchidos!!", "error");
            }else {
                $.ajax({
                       url: '../../engine/controllers/funcionario.php',
                            data: {

                                id : id,
                                nome : nome,
                                email : email,
                                cpf : cpf,
                                endereco :endereco,
                                cidade : cidade,
                                estado : estado,
                                telefone :telefone,
                                
                                action: 'update'
                            },

                            success: function(data) {
                                console.log(data);
                            
                                 if(data === 'true'){
                                    swal("Sucesso", "Usuário  Editado!", "success");
                                    
                                    setTimeout(function(){
                                     window.location = 'consultar_funcionario.php';
                                    }, 2000);

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