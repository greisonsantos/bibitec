<?php

	require_once "../config.php";
	

	//parte1
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];
	
	
	//parte2
	$action = $_POST['action'];
	
	//parte3
	$Item = new Cliente();
	$Item->SetValues( $id, $nome, $email, $cpf, $endereco, $cidade, $estado, $telefone, password_hash($senha,PASSWORD_DEFAULT)); 
	
	
		
	//parte4
	switch($action) {
		case 'create':
			
			
			$res = $Item->Create();
			if ($res === NULL) {
				$res = "true";
			}
			else {
				$res = "false";	
			}			

			echo $res;
			
		
		break;	
		
		case 'update':
		
			
			
			$res = $Item->Update();
			
			if ($res === NULL) {
				$res= 'true';	
			}
			else {
				$res = 'false';	
			}
			echo $res;
			
		
		break;	
		
		case 'delete':
		
			
			
			$res = $Item->Delete();
			if ($res === NULL) {
				$res= 'true';	
			}
			else {
				$res = 'false';	
			}
			echo $res;
			
		
		break;	


    case 'buscar_cliente':

			$cli= new Cliente();
            $cli= $cli->Read_cpf($cpf);

			if (!$cli) {
				$res['res'] = 'false';
			} else {
				$res['res'] = 'true';
				$res['nome_cli']= $cli['nome'];
				$res['id_cli']= $cli['id'];

				
			}
			echo json_encode($res);
		break;


	}
?>


