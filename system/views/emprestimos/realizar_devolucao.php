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
          <a href="../biblioteca/gestao_livro.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-book fa-5x"></i> Biblioteca <i class=" pull-right"></i></a>
        </li>
        <li>
          <a href="gestao_usuario.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-users fa-5x"></i>  User<i class="pull-right"></i></a>
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
              <h3>Bibitec</h3>
            </div>
            <h3>Devolução de Livros</h3>
          </div>
        </div>
      </div>

      <hr>
      <section class="container-fluid text-center main-screen">    
  
          <div class="col-md-3"></div>
          <div class="col-lg-6">   
            <div class="col-lg-12" style="margin-top: 20px;">
              <form style="text-align: right;" method="GET" id="pesqisa">
                <div class="input-group">
                  <input type="text" class="form-control" id="ValorPesquisaLiv" name="ValorPesquisa" placeholder="Pesquisar por ..." style="border-radius: 5px;">
                  <div class="input-group-btn">
                    <select class="btn btn-default dropdown-toggle" name="tipoliv" id="tipoliv" style="font-family: Montserrat, Helvetica, Arial, sans-serif; font-weight: 600; border-radius: 5px; padding: 7px;">
                      <option value="titulo" selected>Titulo</option>
                      <!-- <option value="autor">Autor</option> -->
                    </select>
                  </div><!-- /btn-group -->
                  <div class="input-group-btn">
                    <button class="btn btn-success" type="button" id="buscar_livro" style="border-radius: 20%;"><span class="glyphicon glyphicon-search"></span></button>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
              </form>
            </div><!-- /.col-lg-6 -->
          </div>
          <div class="col-md-3"></div>
      </section>

      

      <section class="container-fluid text-center main-screen">    
          <div class="col-md-3"></div>
          <div class="col-lg-6">   
            <div class="col-lg-12" style="margin-top: 20px;">
              <form style="text-align: right;" method="GET" id="pesqisa">
                <div class="input-group">
                  <span class="input-group-addon">Titulo do Livro *</span>
                  <input type="text" class="form-control" id="titulo" disabled="true" required>
                </div>
              </form>
            </div><!-- /.col-lg-6 -->
          </div>
          <div class="col-md-3"></div>
      </section>


      <section class="container-fluid text-center main-screen">    
          <div class="col-md-3"></div>
          <div class="col-lg-6">   
            <div class="col-lg-12" style="margin-top: 20px;">
              <form style="text-align: right;" method="GET" id="pesqisa">
                <div class="input-group">
                  <span class="input-group-addon">Responsável *</span>
                  <input type="text" class="form-control" id="nome_cli" disabled="true" required>
                </div>
              </form>
            </div><!-- /.col-lg-6 -->
          </div>
          <div class="col-md-3"></div>
      </section>



            <input type="hidden" name="id_cli" id="id_cli">
            <input type="hidden" name="id_liv" id="id_liv">
            <input type="hidden" name="status" id="status">
            <input type="hidden" name="isbn" id="isbn">
            <input type="hidden" name="autor" id="autor">
            <input type="hidden" name="edicao" id="edicao">
            <input type="hidden" name="editora" id="editora">
            <input type="hidden" name="data_edicao" id="data_edicao">
            <input type="hidden" name="data_devolucao" id="data_devolucao" value="<?php echo date('Y/m/d')?>">

            <input type="hidden" name="responsavel" id="responsavel" value="<?php echo $_SESSION['nome']; ?>">


        <div class="row">
          <div class="col-md-3"> </div>
          <div class="col-md-6">
            <br><br>
            <button type="button" id="devolver" class="btn btn-primary btn-block">Devolver</button>
          </div>
          <div class="col-md-3"> </div>
        </div>

      </body>
      </html>

      <script type="text/javascript" src="../../../js/jquery.js"></script>
      <script type="text/javascript" src="../../../js/sweetalert.js"> </script>
      <script type="text/javascript" src="../../../js/jquerymask.min.js"> </script>
      <script type="text/javascript">

        $(document).ready(function(e) { 
          
        $("#ValorPesquisaCli").mask("999.999.999.99");
        

        $('#buscar_livro').click(function(e) {
          e.preventDefault();    

          var valorpesquisaliv= $('#ValorPesquisaLiv').val();
          
         

          if (!valorpesquisaliv) {
               return swal("Atenção", "Insira o titulo no campo de pesquisa !", "error");
          
          } else {
            $.ajax({
              url : '../../engine/controllers/livros.php',

              data: {
                titulo : valorpesquisaliv,

                action : 'buscar_livro'
              },
              success : function(data){
                obj = JSON.parse(data);
                if (obj.res == 'true') {

                     document.getElementById("id_liv").value = obj.id_liv;
                     document.getElementById("titulo").value = obj.titulo;
                     document.getElementById("status").value = obj.status;
                     document.getElementById("isbn").value = obj.isbn;
                     document.getElementById("autor").value = obj.autor;
                     document.getElementById("edicao").value = obj.edicao;
                     document.getElementById("editora").value = obj.editora;
                     document.getElementById("data_edicao").value = obj.data_edicao;
                    

                  swal("Sucesso", "Livro Encontrado!", "success");
                } else {
                  swal("Atenção", "Livro não encontrado! Tente novamente.", "error");
                }
              },
              type : 'POST'
            });
          }
        });

    $('#devolver').click(function(e) {
          e.preventDefault();
       

 

            var cpf= $('#ValorPesquisaCli').val();
            var titulo= $('#titulo').val();

            var id_cli= $('#id_cli').val();
            var id_liv= $('#id_liv').val();
            var data_emprestimo= $('#data_emprestimo').val();
            var responsavel= $('#responsavel').val();
 
            var status = $('#status').val();
            var isbn = $('#isbn').val();
            var autor = $('#autor').val();
            var edicao = $('#edicao').val();
            var editora = $('#editora').val();
            var data_edicao = $('#data_edicao').val();
   
            var data_devolucao= $('#data_devolucao').val();
    
      
            
         alert(responsavel);
         alert(data_devolucao);
         alert("id do cliente e "+id_cli);
         alert(id_liv);

           if  (!titulo){
                 swal("Atenção", "O  Titulo devem ser informado.", "error");
        
           }else {
                  $.ajax({
                       url: '../../engine/controllers/devolucao.php',
                            data: {

                                data_devolucao : data_devolucao,
                                fk_cliente : id_cli,
                                fk_livro : id_liv,
                                responsavel : responsavel, 

                                action: 'create'
                            },

                            success: function(data) {
                                console.log(data);
                            },

                            type: 'POST'
                  });


                  $.ajax({
                       url: '../../engine/controllers/livros.php',
                            data: {

                                titulo : titulo,
                                id : id_liv,
                                status : '0',
                                isbn : isbn,
                                autor : autor,
                                edicao : edicao,
                                editora : editora,
                                data_edicao : data_edicao,

                                action: 'update'
                            },

                            success: function(data) {
                                console.log(data);
                            
                                 if(data === 'true'){
                                    swal("Sucesso", "Livro  Devolvido!", "success");

                                    setTimeout(function(){
                                     window.location = 'gestao_emprestimos.php';
                                    }, 2000);
                                    
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