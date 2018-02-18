<?php

	require_once "../config.php";
	

	//parte1
	
    $id= $_POST['id'];
	$data_emprestimo = $_POST['data_emprestimo'];
	$fk_cliente = $_POST['fk_cliente'];
	$fk_livro = $_POST['fk_livro'];
	$responsavel = $_POST['responsavel'];
	
	
	//parte2
	$action = $_POST['action'];
	
	//parte3
	$Item = new Emprestimos();
	$Item->SetValues($id, $data_emprestimo, $fk_cliente, $fk_livro, $responsavel); 
	
	
		
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
   		
	 //     case 'buscar_cliente':

		// 	$cli= new Emprestimos();
  //           $cli= $cli->Read_cliente($cpf);

		// 	if (!$cli) {
		// 		$res['res'] = 'false';
		// 	} else {
		// 		$res['res'] = 'true';

		// 		//$res['nome_cli']= $cli['nome'];
		// 		//$res['id_cli']= $cli['id'];

				
		// 	}
		// 	echo json_encode($res);
		// break;	
		
	}
?>
