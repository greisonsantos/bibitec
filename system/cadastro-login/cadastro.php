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
	<br>
	<div class="modal-dialog">

		<div class="modal-content cadastro-box ">
			<div class="modal-header">

				<h1 class="text-center">Bem Vindo...</h1>
			</div>
			<div class="modal-body ">

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
								<input type="text" class="form-control" id="endereco" placeholder="Endereço...">
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-12">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Cidade</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="cidade" placeholder="Cidade">
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-12">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Estado</label>
							<div class="col-sm-10">
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
					</div>


					<br><br>
					<div class="col-md-12">
						<div class="col-md-12">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Telefone</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="telefone" placeholder="telefone...">
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
								<input type="password" class="form-control" id="senha" placeholder="Password...">
							</div>

						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" id="cadastrar" value="Cadastrar"/>
                 <br>
					<span class="pull-right"><a href="login.php">Login</a></span> <span><a href="../../index.html">Voltar ao Site</a></span> 
				</div>

			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/sweetalert.js"> </script>
<script type="text/javascript" src="../../js/toastr.min.js"> </script>
<script type="text/javascript" src="../../js/jquerymask.min.js"> </script>

<script type="text/javascript">




	$(document).ready(function(e) {

    $("#cpf").mask("999.999.999.99");
     $("#telefone").mask("(99) 9-9999-9999");

		$('#cadastrar').click(function(e) {

       
			var nome = $('#nome').val();
			var email= $('#email').val();
			var cpf= $('#cpf').val();
			var endereco= $('#endereco').val();
			var cidade= $('#cidade').val();
			var estado= $('#estado').val();
			var telefone= $('#telefone').val();
			var senha= $('#senha').val();


			if( !nome || !email || !cpf || !endereco || !cidade || !estado || !telefone || !senha) {
				swal("Atenção!", "Todos os campos devem ser preenchidos!", "info");
			} else {

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
				// swal("Atenção", "Erro ao conectar com banco de dados. Aguarde e tente novamente em alguns instantes.", "error");

							setTimeout(function(){
								window.location = 'login.php';
							}, 2000);
						}
					},

					type: 'POST'

				});      
			}
		});


	});


</script>          