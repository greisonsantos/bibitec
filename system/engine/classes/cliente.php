<?php
	//Declaracao da classe
	//Nome da classe devera ser o nome da tabela respectiva no banco de dados
	class Cliente {
		
		//Variaveis da classe
		//Nome das variaveis devem ser de acordo com as colunas da tabela respectiva no bd
		private $id;
		private $nome;
		private $email;
		private $cpf;
		private $endereco;
		private $cidade;
		private $estado;
		private $telefone;
		private $senha;
				

		//setters
		
		//Funcao que seta uma instancia da classe
		public function SetValues($id, $nome, $email, $cpf, $endereco, $cidade, $estado, $telefone, $senha) { 
			$this->id = $id;
			$this->nome = $nome;
			$this->email = $email;
			$this->cpf = $cpf;
			$this->endereco = $endereco;
			$this->cidade = $cidade;
			$this->estado = $estado;
			$this->telefone = $telefone;
			$this->senha = $senha;
						
		}
		
		
		//Methods
		
		//Funcao que salva a instancia no BD
		public function Create() {
			
			$sql = "
				INSERT INTO cliente 
						  (
				 		
				 			nome,
				 			email,
				 			cpf,
				 			endereco,
				 			cidade,
				 			estado,
				 			telefone,
				 			senha
						  )  
				VALUES 
					(

				 			'$this->nome',
				 			'$this->email',
				 			'$this->cpf',
				 			'$this->endereco',
				 			'$this->cidade',
				 			'$this->estado',
				 			'$this->telefone',
				 			'$this->senha'
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
					 t1.nome,
					 t1.email,
					 t1.cpf,
					 t1.endereco,
					 t1.cidade,
					 t1.estado,
					 t1.telefone,
					 t1.senha
				FROM
					cliente AS t1
				WHERE
					t1.id  = '$id'

			";
			
			
			$DB = new DB();
			$DB->open();
			$Data = $DB->fetchData($sql);
			
			$DB->close();
			return $Data[0]; 
		}

      


		public function Read_cpf($cpf){
		 $sql = "
		 SELECT
					 t1.id,
					 t1.nome,
					 t1.email,
					 t1.cpf,
					 t1.endereco,
					 t1.cidade,
					 t1.estado,
					 t1.telefone,
					 t1.senha
				FROM
					cliente AS t1
		        WHERE t1.cpf='$cpf'
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
					 t1.nome,
					 t1.email,
					 t1.cpf,
					 t1.endereco,
					 t1.cidade,
					 t1.estado,
					 t1.telefone,
					 t1.senha
				FROM
					cliente AS t1
				

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
					 t1.nome,
					 t1.email,
					 t1.cpf,
					 t1.endereco,
					 t1.cidade,
					 t1.estado,
					 t1.telefone,
					 t1.senha
				FROM
					cliente AS t1
					
					
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
				UPDATE cliente SET
				
				  nome = '$this->nome',
				  email = '$this->email',
				  cpf = '$this->cpf',
				  endereco = '$this->endereco',
				  cidade = '$this->cidade',
				  estado = '$this->estado',
				  telefone = '$this->telefone',
				  senha = '$this->senha'
				
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
				DELETE FROM cliente
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
			$this->nome;
			$this->email;
			$this->cpf;
			$this->endereco;
			$this->cidade;
			$this->estado;
			$this->telefone;
			$this->senha;
			
			
		}
		
		//destructor
		function __destruct() {
			$this->id;
			$this->nome;
			$this->email;
			$this->cpf;
			$this->endereco;
			$this->cidade;
			$this->estado;
			$this->telefone;
			$this->senha;
			
			
		}
			
	};

?>
