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
	$status=$_POST['status'];
	
	
	//parte2
	$action = $_POST['action'];
	
	//parte3
	$Item = new Livros();
	$Item->SetValues($id, $isbn, $titulo, $autor, $edicao, $editora, $data_edicao, $status); 
	
	
		
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
		
		case 'buscar_livro':

			$liv= new Livros();
            $liv= $liv->Read_titulo($titulo);

			if (!$liv) {
				$res['res'] = 'false';
			} else {
				$res['res'] = 'true';
				$res['id_liv']= $liv['id'];
				$res['titulo']= $liv['titulo'];
				$res['status']= $liv['status'];
				$res['isbn']= $liv['isbn'];
				$res['autor']= $liv['autor'];
				$res['edicao']= $liv['edicao'];
				$res['editora']= $liv['editora'];
				$res['data_edicao']= $liv['data_edicao'];

				
			}
			echo json_encode($res);
		break;
		
		
	}
?>
