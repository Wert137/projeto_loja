<?php 
	
	

	class Produto{

		private $id_produto;
		private  $nome;
		private  $descricao;
		private  $valor;
		private  $imagem_produto;
		private  $peso_produto;

		function getId(){

			return $this->id_produto;
		}

		function setId($id){

			$this->id_produto = $id;
		}

		function getNome(){

			return $this->nome;
		}

		function setNome($nome){

			$this->nome = $nome;
		}


		function getDescricao(){

			return $this->descricao;
		}

		function setDescricao($descricao){

			$this->descricao = $descricao;
		}

		function getValor(){

			return $this->valor;
		}

		function setValor($valor){

			$this->valor = $valor;
		}

		function getImagem(){

			return $this->imagem_produto;
		}

		function setImagem($imagem){

			$this->imagem_produto = $imagem;
		}

		function getPeso(){

			return $this->peso_produto;
		}

		function setPeso($peso){

			$this->peso_produto = $peso;
		}

	}


?>

