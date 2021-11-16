<?php 
	/*class Banco{
		
		private $host="localhost";
		private $user = "root";
		private $senha = "";
		private $database = "loja";
		
		public function conectar_banco(){
			
			$con = mysqli_connect($this->host, $this->user, $this->senha, $this->database);
		//	mysqli_select_db($this->database, $con);
			
			return $con;
		}

		public function fechar_banco($con){

			mysqli_close($con);
		}
	}*/
	class Banco{
		$pdo = new PDO("mysql:host=localhost;dbname=loja", "root", "");

		public function acessar_banco(){

			return $pdo;
		}
	}
?>