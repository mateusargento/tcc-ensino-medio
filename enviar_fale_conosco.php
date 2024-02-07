<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="estilo_enviar_fale_conosco.css"/>
	<link rel="shortcut icon" href="favicon.png"/>
<script>
	function login()
	{
		setTimeout("window.location='fale_conosco.html'", 3000);
	}
</script>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
mysql_select_db('faleconosco') or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$descricao=$_POST['descricao'];

mysql_query("INSERT INTO perguntas(nome, email, assunto, descricao)
VALUES('$nome', '$email', '$assunto', '$descricao')");
echo "<section id='login'>
		<h1><center>Fale Conosco:</center></h1>
		<fieldset> <!-- Fieldset para criar a área -->
		<h1></h1>
		<h3>Pergunta efetuada com sucesso, aguarde resposta no seu email ou em sua tela do usuário!</h3>
	</section>";
	echo"<script>login()</script>";
?>
</body>
</html>
