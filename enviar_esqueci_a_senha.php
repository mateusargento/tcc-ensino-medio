<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="estilo_enviar_esqueci_a_senha.css"/>
	<link rel="shortcut icon" href="favicon.png"/>
<script>
	function falhacadastro()
	{
		setTimeout("window.location='login.html'", 5000);
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
mysql_select_db('esqueciasenha') or die(mysql_error());
?>
<?php
$email=$_POST['email'];
$estado= "Nao resolvido";

mysql_query("INSERT INTO solicitacao(email, estado)
VALUES('$email', '$estado')");
	
echo "<section id='login'>
		<h1><center>Esqueci a senha:</center></h1>
		<fieldset> <!-- Fieldset para criar a área -->
		<h1></h1>
		<h3>Uma solicitação foi enviada para seu e-mail, utilize a senha enviada para entrar aqui no site.</h3>
	</section>";
echo"<script>falhacadastro()</script>";
?>
</body>
</html>
