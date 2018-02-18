<?php
	//Declaracao da classe
	//Nome da classe devera ser o nome da tabela respectiva no banco de dados
	class Livros {
		
		//Variaveis da classe
		//Nome das variaveis devem ser de acordo com as colunas da tabela respectiva no bd
		private $id;
		private $isbn;
		private $titulo;
		private $autor;
		private $edicao;
		private $editora;
		private $data_edicao;
		private $status;
				

		//setters
		
		//Funcao que seta uma instancia da classe
		public function SetValues($id, $isbn, $titulo, $autor, $edicao, $editora, $data_edicao, $status) { 
			$this->id = $id;
			$this->isbn = $isbn;
			$this->titulo = $titulo;
			$this->autor = $autor;
			$this->edicao = $edicao;
			$this->editora = $editora;
			$this->data_edicao = $data_edicao;
			$this->status= $status;
						
		}
		
		
		//Methods
		
		//Funcao que salva a instancia no BD
		public function Create() {
			
			$sql = "
				INSERT INTO livros 
						  (
				 			isbn,
				 			titulo,
				 			autor,
				 			edicao,
				 			editora,
				 			data_edicao,
				 			status
						  )  
				VALUES 
					(
				 			'$this->isbn',
				 			'$this->titulo',
				 			'$this->autor',
				 			'$this->edicao',
				 			'$this->editora',
				 			'$this->data_edicao',
				 			'$this->status'
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
					 t1.isbn,
					 t1.titulo,
					 t1.autor,
					 t1.edicao,
					 t1.editora,
					 t1.data_edicao,
					 t1.status
				FROM
					livros AS t1
				WHERE
					t1.id  = '$id'

			";
			
			
			$DB = new DB();
			$DB->open();
			$Data = $DB->fetchData($sql);
			
			$DB->close();
			return $Data[0]; 
		}
		
        public function Read_emprestados() {
			$sql = "
				SELECT
					 t1.id,
					 t1.isbn,
					 t1.titulo,
					 t1.autor,
					 t1.edicao,
					 t1.editora,
					 t1.data_edicao,
					 t1.status
				FROM
					livros AS t1
				WHERE
					t1.status  = '1'

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



		public function Read_titulo($titulo) {
			$sql = "
				SELECT
					 t1.id,
					 t1.isbn,
					 t1.titulo,
					 t1.autor,
					 t1.edicao,
					 t1.editora,
					 t1.data_edicao,
					 t1.status
				FROM
					livros AS t1
				WHERE
					t1.titulo like'%$titulo%'

			";
			
			
			$DB = new DB();
			$DB->open();
			$Data = $DB->fetchData($sql);
			
			$DB->close();
			return $Data[0]; 
		}


  //       public function Read_titulo($titulo) {
		// 	$sql = "
		// 		SELECT * FROM cliente
  //                INNER JOIN emprestimos ON cliente.id = emprestimos.fk_cliente
  //                   INNER JOIN  livros ON  livros.id = emprestimos.fk_livro
  //                      WHERE   livros.titulo like'%titulo%'

		// 	";
			
			
		// 	$DB = new DB();
		// 	$DB->open();
		// 	$Data = $DB->fetchData($sql);
			
		// 	$DB->close();
		// 	return $Data[0]; 
		// }
 



		//Funcao que retorna um vetor com todos as instancias da classe no BD
		public function ReadAll() {
			$sql = "
				SELECT
					 t1.id,
					 t1.isbn,
					 t1.titulo,
					 t1.autor,
					 t1.edicao,
					 t1.editora,
					 t1.data_edicao,
					 t1.status
				FROM
					livros AS t1
				

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
					 t1.isbn,
					 t1.titulo,
					 t1.autor,
					 t1.edicao,
					 t1.editora,
					 t1.data_edicao,
					 t1.status
				FROM
					livros AS t1
					
					
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
				UPDATE livros SET
				
				  isbn = '$this->isbn',
				  titulo = '$this->titulo',
				  autor = '$this->autor',
				  edicao = '$this->edicao',
				  editora = '$this->editora',
				  data_edicao = '$this->data_edicao',
				  status= '$this->status'
				
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
				DELETE FROM livros
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
			$this->isbn;
			$this->titulo;
			$this->autor;
			$this->edicao;
			$this->editora;
			$this->data_edicao;
			$this->status;
			
			
		}
		
		//destructor
		function __destruct() {
			$this->id;
			$this->isbn;
			$this->titulo;
			$this->autor;
			$this->edicao;
			$this->editora;
			$this->data_edicao;
			$this->status;
			
			
		}
			
	};

?>
