<html>
<head>
	<title>Agendamento</title>
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "Hidan@dog";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$nSus=$_POST['nSus'];
$sql = mysql_query("INSERT INTO agendamento(nome, endereco, numero, bairro, sus)
values('$nome', '$endereco', '$numero', '$bairro', '$nSus')");
?>
<?php
	echo "<script>"
	.		"alert ('Parabéns: Seu cadastro foi realizado com sucesso!!');"
		.	"window.location='agendamento.php';"
		. "</script>";
?>
</body>
</html>