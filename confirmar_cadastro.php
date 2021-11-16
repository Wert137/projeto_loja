<?php
	
	$nome = $_POST["txtNome"];
	$sexo = $_POST["sexo"];
	$senha = md5($_POST["txtSenha"]);

	echo $senha;

?>