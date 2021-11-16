<?php 
	
	class Usuario{

		private $id_usuario;
		private $nome;
		private $email;
		private $senha;
		private $data_nascimento;
		private $sexo;
		private $telefone;
		private $celular;
		private $cpf;



		function getId(){

			return $this->id_usuario;
		}

		function setId($id){

			$this->id_usuario = $id;
		}

		function getNome(){

			return $this->nome;
		}

		function setNome($nome){

			$this->nome = $nome;
		}

		function getCpf(){

			return $this->cpf;
		}

		function setCpf($cpf){

			$this->cpf = $cpf;
		}

		function getEmail(){

			return $this->email;
		}

		function setEmail($email){

			$this->email = $email;
		}

		function getSenha(){

			return $this->senha;
		}

		function setSenha($nova_senha){

			$this->senha = $nova_senha;
		}

		function getData_Nascimento(){

			return $this->data_nascimento;
		}

		function setData_Nascimento($data){

			$this->data_nascimento = $data;
		}

		function getSexo(){

			return $this->sexo;
		}

		function setSexo($sexo){

			$this->sexo = $sexo;
		}

		function getTelefone(){

			return $this->telefone;
		}

		function setTelefone($telefone){

			$this->telefone = $telefone;
		}

		function getCelular(){

			return $this->celular;
		}

		function setCelular($celular){

			$this->celular = $celular;
		}
	}

	class Pessoa extends Usuario{

		
		
	
	}

	class Empresa extends Usuario{

		private $cnpj;
		private $razao_social;
		private $inscricao_estadual;

		function getCnpj(){

			return $this->cnpj;
		}

		function setCnpj($cnpj){

			$this->cnpj = $cnpj;
		}

		function getRazao_Social(){

			return $this->razao_social;
		}

		function setRazao_Social($razao_social){

			$this->razao_social = $razao_social;
		}

		function getInscricao_Estadual(){

			return $this->inscricao_estadual;
		}

		function setInscricao_Estadual($inscricao_estadual){

			$this->inscricao_estadual = $inscricao_estadual;
		}
	}



?>