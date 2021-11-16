<?php 
	require_once("banco_pdo.php");
	require_once("classe_produto.php");


	$nome = $_POST["nome"];
	$imagem = $_FILES["imagem"];

	$ext = strtolower(substr($_FILES["imagem"]["name"], -4));
	$novo_nome = $nome . $ext;
	$dir = "img/";
	move_uploaded_file($_FILES["imagem"]["tmp_name"], $dir.$novo_nome);

	$imagem_dir = $dir.$novo_nome;

	
?>