<?php

	require_once "../config.php";
	

	//parte1
	$id= $_POST['id'];
	$isbn = $_POST['isbn'];
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$edicao = $_POST['edicao'];
	$editora = $_POST['editora'];
	$data_edicao = $_POST['data_edicao'];
	
	
	//parte2
	$action = $_POST['action'];
	
	//parte3
	$Item = new Livros();
	$Item->SetValues($id, $isbn, $titulo, $autor, $edicao, $editora, $data_edicao); 
	
	
		
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
