<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuarios </title>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../css/system/meu_login.css"> 
<!-- 	<link rel="stylesheet" href="../../css/system/cadastro-login.css"> -->

  <?php 
      require "../engine/config.php";
   ?>
   
</head>
<body>

	<div class="modal-dialog">
		<div class="modal-content cadastro-box ">
			<div class="modal-header">
				<h1 class="text-center">Bem Vindo!!!</h1>
			</div>
			<div class="modal-body">
				<div class="container">
					<form>
						<div class="form-group row">

							<div class="col-md-12">
								<div class="col-md-12">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="nome" placeholder="Name...">
									</div>
								</div>
							</div>

							<br><br>
							<div class="col-md-12">
								<div class="col-md-12">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Cpf</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="cpf" placeholder="Cpf...">
									</div>
								</div>
							</div>

							<br><br>
							<div class="col-md-12">
								<div class="col-md-12">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Endereço</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="address" placeholder="Endereço...">
									</div>
								</div>
							</div>

							<br><br>
							<div class="col-md-12">
								<div class="col-md-12">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Telefone</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="phone" placeholder="telefone...">
									</div>
								</div>
							</div>

                            <br><br>
							<div class="col-md-12">
								<div class="col-md-12">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" placeholder="Email...">
									</div>
								</div>
							</div>

							<br><br>
							<div class="col-md-12">
								<div class="col-md-12">

									<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="Password" placeholder="Password...">
									</div>

								</div>
							</div>
						</div>
					
					<div class="col-md-12">
						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" id="cadastrar" class="btn btn-primary btn-block">Cadastrar</button>
								<span class="pull-right"><a href="login.php">Login</a></span><span><a href="#">Esqueci minha Senha</a></span>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
	</html>

<script type="text/javascript" src="../../js/jquery.js"> </script>
<script type="text/javascript" src="../../js/sweetalert.js"> </script>
<script type="text/javascript" src="../../js/toastr.min.js"> </script>


<script type="text/javascript">

    $(document).ready(function(e) { 

     $("#cpf").mask("999.999.999.99");
     $("#telefone").mask("(99) 9-9999-9999");
    
     $('#cadastrar').click(function(e) {
      e.preventDefault(); 
      

      alert("cadastrar");
      
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
                       url: '../engine/controllers/cliente.php',
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

  });   
    

</script>