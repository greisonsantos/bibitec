<?php
	//Declaracao da classe
	//Nome da classe devera ser o nome da tabela respectiva no banco de dados
	class Emprestimos {
		
		//Variaveis da classe
		//Nome das variaveis devem ser de acordo com as colunas da tabela respectiva no bd
		private $id;
		private $data_emprestimo;
		private $fk_cliente;
		private $fk_livro;
		private $responsavel;
				

		//setters
		
		//Funcao que seta uma instancia da classe
		public function SetValues($id, $data_emprestimo, $fk_cliente, $fk_livro, $responsavel) { 
		    $this->id= $id;
			$this->data_emprestimo = $data_emprestimo;
			$this->fk_cliente = $fk_cliente;
			$this->fk_livro = $fk_livro;
			$this->responsavel = $responsavel;
						
		}
		
		
		//Methods
		
		//Funcao que salva a instancia no BD
		public function Create() {
			
			$sql = "
				INSERT INTO emprestimos 
						  (
				 
				 			data_emprestimo,
				 			fk_cliente,
				 			fk_livro,
				 			responsavel
						  )  
				VALUES 
					(
	
				 			'$this->data_emprestimo',
				 			'$this->fk_cliente',
				 			'$this->fk_livro',
				 			'$this->responsavel'
					);
			";
			
			$DB = new DB();
			$DB->open();
			$result = $DB->query($sql);
			$DB->close();
			return $result;
		}
		
		//Funcao que retorna uma Instancia especifica da classe no bd
		public function Read($id) {
			$sql = "
				SELECT
					 t1.id,
					 t1.data_emprestimo,
					 t1.fk_cliente,
					 t1.fk_livro,
					 t1.responsavel
				FROM
					emprestimos AS t1
				WHERE
					t1.id  = '$id'

			";
			
			
			$DB = new DB();
			$DB->open();
			$Data = $DB->fetchData($sql);
			
			$DB->close();
			return $Data[0]; 
		}


		
		
		//Funcao que retorna um vetor com todos as instancias da classe no BD
		public function ReadAll() {
			$sql = "
				SELECT
					 t1.id,
					 t1.data_emprestimo,
					 t1.fk_cliente,
					 t1.fk_livro,
					 t1.responsavel
				FROM
					emprestimos AS t1
				

			";
			
			
			$DB = new DB();
			$DB->open();
			$Data = $DB->fetchData($sql);
			$realData;
			if($Data ==NULL){
				$realData = $Data;
			}
			else{
				
				foreach($Data as $itemData){
					if(is_bool($itemData)) continue;
					else{
						$realData[] = $itemData;	
					}
				}
			}
			$DB->close();
			return $realData; 
		}
		
		
		
		
		//Funcao que retorna um vetor com todos as instancias da classe no BD com paginacao
		public function ReadAll_Paginacao($inicio, $registros) {
			$sql = "
				SELECT
					 t1.id,
					 t1.data_emprestimo,
					 t1.fk_cliente,
					 t1.fk_livro,
					 t1.responsavel
				FROM
					emprestimos AS t1
					
					
				LIMIT $inicio, $registros;
			";
			
			
			$DB = new DB();
			$DB->open();
			$Data = $DB->fetchData($sql);
			
			$DB->close();
			return $Data; 
		}
		
		//Funcao que atualiza uma instancia no BD
		public function Update() {
			$sql = "
				UPDATE emprestimos SET
				
				  data_emprestimo = '$this->data_emprestimo',
				  fk_cliente = '$this->fk_cliente',
				  fk_livro = '$this->fk_livro',
				  responsavel = '$this->responsavel'
				
				WHERE id = '$this->id';
				
			";
		
			
			$DB = new DB();
			$DB->open();
			$result =$DB->query($sql);
			$DB->close();
			return $result;
		}
		
		//Funcao que deleta uma instancia no BD
		public function Delete() {
			$sql = "
				DELETE FROM emprestimos
				WHERE id = '$this->id';
			";
			$DB = new DB();
			
			$DB->open();
			$result =$DB->query($sql);
			$DB->close();
			return $result;
		}
		
		
		/*
			--------------------------------------------------
			Viewer SPecific methods -- begin 
			--------------------------------------------------
		
		*/
		
		
		/*
			--------------------------------------------------
			Viewer SPecific methods -- end 
			--------------------------------------------------
		
		*/
		
		
		//constructor 
		
		function __construct() { 
			$this->id;
			$this->data_emprestimo;
			$this->fk_cliente;
			$this->fk_livro;
			$this->responsavel;
			
			
		}
		
		//destructor
		function __destruct() {
			$this->id;
			$this->data_emprestimo;
			$this->fk_cliente;
			$this->fk_livro;
			$this->responsavel;
			
			
		}
			
	};

?>
