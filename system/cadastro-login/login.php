<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" href="../../css/font-awesome/css/font-awesome.min.css" />
	
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
     <link rel="stylesheet" href="../../css/system/meu_login.css"> 
</head>
</head>
<body>
<br><br><br><br><br>
    <div class="modal-dialog">
    <br><br><br><br><br>
    <div class="modal-content login-box ">
        <div class="modal-header">

          <h1 class="text-center">Bem Vindo...</h1>
        </div>
         <div class="modal-body">
             <div class="form-group">
                 <input type="text" id="email_login" class="form-control input-lg" placeholder="E-mail"/>
             </div>

             <div class="form-group">
                 <input type="password"  id="senha_login" class="form-control input-lg" placeholder="Password"/>
             </div>

             <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" id="logar" value="Login"/>

                <!--  <span class="pull-right"><a href="cadastro.php">Cadastrar</a></span><span><a href="#">Esqueci Minha Senha</a></span> -->
             </div>
         </div>
    </div>
 </div>
</body>
</html>

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/sweetalert.js"> </script>
<script type="text/javascript" src="../../js/toastr.min.js"> </script>

<script type="text/javascript">




$(document).ready(function(e) {
  $('#logar').click(function(e) {
    var email = $('#email_login').val();
    var senha = $('#senha_login').val();

      
    if( !email || !senha ) {
     swal("Atenção!", "Todos os campos devem ser preenchidos!", "info");
   } else {
     
      $.ajax({
        url: '../engine/controllers/login.php',
          data: {
             email : email,
             senha : senha
         },
         success: function(data) {
          console.log(data);
          if(data === 'true') {
            
            toastr.info('Redirecionando...<br>&nbsp', 'Login efetuado com sucesso!', {positionClass: 'toast-top-full-width',
                progressBar: true,
                timeOut: "2500",});

            setTimeout(function() {
              document.location.href = '../index.php';
          }, 2600);
        } else if(data === 'no_user_found') {
            swal("Atenção!", "Usuário não encontrado!", "error");
        } else if(data === 'wrong_password') {
            swal("Atenção!", "Senha incorreta", "error");
        } else {
            swal("Atenção!", "Erro ao conectar com banco de dados. Aguarde e tente novamente em alguns instantes!", "error");
        }
    },
    type: 'POST'
});     
   }
 });


});


</script>          