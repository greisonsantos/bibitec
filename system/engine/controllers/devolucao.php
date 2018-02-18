<?php

	require_once "../config.php";
	

	//parte1
	
	$id = $_POST['id'];
	$data_devolucao = $_POST['data_devolucao'];
	$fk_cliente = $_POST['fk_cliente'];
	$fk_livro = $_POST['fk_livro'];
	$responsavel = $_POST['responsavel'];
	
	
	//parte2
	$action = $_POST['action'];
	
	//parte3
	$Item = new Devolucao();
	$Item->SetValues($id, $data_devolucao, $fk_cliente, $fk_livro, $responsavel); 
	
	
		
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
		
		
		
	}
?>
