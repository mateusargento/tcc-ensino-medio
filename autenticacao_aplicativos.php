﻿<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('login');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logando</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="estilo_autenticacao_aplicativos.css"/>
	<link rel="shortcut icon" href="favicon.png"/>
<script>
	function loginsuccessfullyfreelancer()
	{
		setTimeout("window.location='tela_do_freelancer.php'", 3000);
	}
	
	function loginsuccessfullyuser()
	{
		setTimeout("window.location='selecionar_quiz_programacao_e_outros_aplicativos.php'", 3000);
	}
	
	function loginfailed()
	{
		setTimeout("window.location='login_selecionar_quiz_programacao_e_outros_aplicativos.html'", 3000);
	}
</script>
</head>
<body>
<?php
$login=$_POST['login'];
$senha=$_POST['senha'];

// Verificação no banco de dados para saber quantas combinações existem de login e senha
$sql = mysql_query("SELECT * FROM usuario WHERE email = '$login' and senha = MD5('$senha')");

// Contador para ver quantas linhas tem de resultado na consulta sql
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED & ~ E_WARNING);
$row = mysql_num_rows($sql);

if($row > 0) // Se tiver mais de 0 combinações, logar
{
	$tipo = "SELECT (tipodelogin) FROM usuario WHERE email = '$login' and senha = MD5('$senha')";
	mysql_query($tipo);
	$resultado = mysql_query($tipo);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$tipodelogin = $dados['tipodelogin'];
	
	session_start();
	$_SESSION['login']=$_POST['login'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<section id='login'>
			<h1><center>Login</center></h1>
			<fieldset> <!-- Fieldset para criar a área -->
			<h1></h1>
			<h3>Logado(a) com sucesso.</h3>
		</section>";
	echo"<script>loginsuccessfullyuser()</script>";
}
else // Se não tiver mais de 0 combinações, não logar
{
	echo "<section id='login'>

			<h1><center>Login</center></h1>
			<fieldset> <!-- Fieldset para criar a área -->
			<h1></h1>
			<h3>Email ou senha errado, tente novamente!</h3>
		</section>";
	echo "<script>loginfailed()</script>";
}
?>
</body>
</html>