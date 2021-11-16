<?php 

	require_once("banco_pdo.php");
	include("classe_cliente.php");

	$razao_social = $_POST["razao_social"];
	$inscricao_estadual = $_POST["inscricao_estadual"];
	$cnpj = $_POST["cnpj"];
	$nome = $_POST["nome"];
	$cpf =$_POST["cpf"];
	$data_nascimento = $_POST["data_nascimento"];
	$telefone = $_POST["telefone"];
	$celular = $_POST["celular"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];


	$empresa = new Empresa();
	$empresa->setRazao_Social($razao_social);
	$empresa->setInscricao_Estadual($inscricao_estadual);
	$empresa->setCnpj($cnpj);
	$empresa->setNome($nome);
	$empresa->setCpf($cpf);
	$empresa->setData_Nascimento($data_nascimento);
	$empresa->setTelefone($telefone);
	$empresa->setCelular($celular);
	$empresa->setEmail($email);
	$empresa->setSenha($senha);

	function inserir_dados($objeto){


	}

	$exec = $pdo->prepare("insert into empresa(razao_social, inscricao_estadual, cnpj, nome, cpf, data_nascimento, telefone, celular, email, senha) values(?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");
	
	$exec->execute(array($empresa->getRazao_Social(), $empresa->getInscricao_Estadual(), $empresa->getCnpj(), $empresa->getNome(), $empresa->getCpf(), $empresa->getData_Nascimento(), $empresa->getTelefone(), $empresa->getCelular(), $empresa->getEmail(), $empresa->getSenha()));
?>