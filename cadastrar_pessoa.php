<?php
	
	require_once("banco_pdo.php");
	require_once("classe_cliente.php");

	$nome = isset($_POST["nome"]) ? $_POST["nome"] : "0";
	$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "0";
	$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "0";
	$data_nascimento = isset($_POST["data_nascimento"]) ? $_POST["data_nascimento"] : "0";
	$telefone = isset($_POST["telefone"]) ? $_POST["telefone"]: "0";
	$celular = isset($_POST["celular"]) ? $_POST["celular"] : "0";
	$email = isset($_POST["email"]) ? $_POST["email"] : "0";
	$senha = isset($_POST["senha"]) ? md5($_POST["senha"]) : "0";
	$senha_confirmacao = isset($_POST["confirmar_senha"]) ? $_POST["confirmar_senha"] : "0";

	//$bd = new Banco();

	//$con = $bd->acessar_banco();

	$cliente = new Pessoa();
	$cliente->setNome($nome);
	$cliente->setSexo($sexo);
	$cliente->setCpf($cpf);
	$cliente->setData_Nascimento($data_nascimento);
	$cliente->setTelefone($telefone);
	$cliente->setCelular($celular);
	$cliente->setEmail($email);
	$cliente->setSenha($senha);

	$sql ="insert into pessoa_fisica(nome, sexo, cpf, data_nascimento, telefone, celular, email, senha)values('$nome', '$sexo', '$cpf', '$data_nascimento', '$telefone', '$celular', '$email', md5('$senha)'))";


	//inserir_dados($cliente);

	
		$exec = $pdo->prepare("insert into pessoa_fisica(nome, sexo, cpf, data_nascimento, telefone, celular, email, senha) values(?, ?, ?, ?, ?, ?, ?, ?)");
	
	$exec->execute(array($cliente->getNome(), $cliente->getSexo(), $cliente->getCpf(), $cliente->getData_Nascimento(), $cliente->getTelefone(), $cliente->getCelular(), $cliente->getEmail(), $cliente->getSenha()));
	
	
	

	

	//$bd->fechar_banco($con);
	

?>