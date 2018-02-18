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
                <h3> Cadastro de clientes</h3>
            </div>
           
        </div>
        <!-- /.container-fluid -->
    </div>

    <hr>
    <section class="container-fluid text-center main-screen">    
        <div class="row">

            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Nome *</span>
                    <input type="text" class="form-control" id="nome" placeholder="Nome cliente" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Email *</span>
                    <input type="text" class="form-control" id="email" placeholder="exemplo@gmail.com" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Cpf *</span>
                    <input type="text" class="form-control" id="cpf" placeholder="000.000.000.00" required aria-describedby="basic-addon1" value="">
                </div>
            </div>

            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"  size="2" id="basic-addon1">Endereço *</span>
                    <input type="text" class="form-control" id="endereco" name="edenreco" placeholder="endereço.." required aria-describedby="basic-addon1" value="">
                </div>
            </div>



            <div class="col-md-6">
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Cidade *</span>
                    <input type="text" class="form-control" id="cidade" placeholder="Nome cidade" aria-describedby="basic-addon1">
                </div>

            </div>

            <div class="col-md-6">
                <br>
                
                <div class="input-group">
                    <label  class="input-group-addon" for=""> Estado<span class="req">* </span> </label>
                    <select class="form-control" id="estado">
                        <option value="" selected disabled>Selecione...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
             <br>
             <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Telefone *</span>
                <input type="text" class="form-control" id="telefone" placeholder="(00)0000-0000" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Senha *</span>
                <input type="password" class="form-control" id="senha" aria-describedby="basic-addon1">
            </div>

        </div>       
     </div>    
    </div>


        <div class="row">
          <div class="col-md-4"> </div>
          <div class="col-md-6">
            <br><br>
            <button type="button" id="cadastrar" class="btn btn-primary btn-block">Cadastrar</button>
        </div>
        <div class="col-md-3"> </div>
        </div>
        </section>

</body>
</html>

<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/sweetalert.js"> </script>
 <script type="text/javascript" src="../../../../js/jquerymask.min.js"> </script>

<script type="text/javascript">

    $(document).ready(function(e) { 

     $("#cpf").mask("999.999.999.99");
     $("#telefone").mask("(99) 9-9999-9999");
    
     $('#cadastrar').click(function(e) {
      e.preventDefault(); 
      
      var nome = $('#nome').val();
      var email= $('#email').val();
      var cpf= $('#cpf').val();
      var endereco= $('#endereco').val();
      var cidade= $('#cidade').val();
      var estado= $('#estado').val();
      var telefone= $('#telefone').val();
      var senha= $('#senha').val();

      if( !nome){
                    return swal("Atenção", "Todos os campos com * devem ser preenchidos!!", "error");
            }else {
                $.ajax({
                       url: '../../../engine/controllers/cliente.php',
                            data: {

                                nome: nome,
                                email : email,
                                cpf : cpf,
                                endereco : endereco,
                                cidade : cidade,
                                estado : estado,
                                telefone :telefone,
                                senha : senha,

                                action: 'create'
                            },

                            success: function(data) {
                                console.log(data);
                            
                                 if(data === 'true'){
                                    swal("Sucesso", "cliente  Cadastrado!", "success");

                                    setTimeout(function(){
                                     window.location = '../cadastro_cli_func.php';
                                    }, 2000);
                                }else{
                                     swal("Sucesso", "cliente  Cadastrado!", "success");

                                     setTimeout(function(){
                                     window.location = '../cadastro_cli_func.php';
                                    }, 2000);
                                }
                            },

                            type: 'POST'
 
                });                 
  
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