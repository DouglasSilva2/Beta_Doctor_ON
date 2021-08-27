<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuarios</title>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "******";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];
	
//passagem de paramtros para sql
	
$sql = mysql_query("INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha)
values('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");
	 
?>
<?php
	echo "<script>"
	.		"alert ('Parabéns: Seu cadatro foi realizado com sucesso!!');"
		.	"window.location='cadastros.php';"
		. "</script>";  
?>
</body>
</html>
