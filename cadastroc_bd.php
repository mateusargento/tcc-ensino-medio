<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="estilo_cadastroc_bd.css"/>
	<link rel="shortcut icon" href="favicon.png"/>
<script>
	function falhacadastro()
	{
		setTimeout("window.location='cadastro_cliente.html'", 3000);
	}
	
	function login()
	{
		setTimeout("window.location='login.html'", 3000);
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
mysql_select_db('cadastro') or die(mysql_error());
?>
<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$endereco=$_POST['endereco'];
$numerodacasa=$_POST['numerodacasa'];
$complemento=$_POST['complemento'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
$cep=$_POST['cep'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$datadenascimento=$_POST['datadenascimento'];
$senha=$_POST['senha'];
$confirmesenha=$_POST['confirmesenha'];
$sexo=$_POST['sexo'];

$sql = mysql_query("SELECT email FROM cadastro_do_cliente WHERE email = '$email'");
$row = mysql_num_rows($sql);

if($senha != $confirmesenha) // Se a senha e confirmação de senha forem diferentes, não atualizar informações
{
	echo "<section id='login'>
			<h1><center>Cadastro de Clientes:</center></h1>
			<fieldset> <!-- Fieldset para criar a área -->
			<h1></h1>
			<h3>Senhas não são iguais.</h3>
		</section>";
	echo"<script>falhacadastro()</script>";
}

elseif ($row > 0)
{
	echo "<section id='login'>
			<h1><center>Cadastro de Clientes:</center></h1>
			<fieldset> <!-- Fieldset para criar a área -->
			<h1></h1>
			<h3>Este email ja foi cadastrado, tente outro.</h3>
		</section>";
	echo"<script>falhacadastro()</script>";
}

else // Se a senha e confirmação de senha forem não forem diferentes, atualizar informações
{
mysql_query("INSERT INTO cadastro_do_cliente(nome, sobrenome, email, cpf, rg, endereco, numerodacasa, complemento, bairro, cidade, uf, cep, telefone, celular, datadenascimento, senha, confirmesenha, sexo)
VALUES('$nome', '$sobrenome', '$email', '$cpf', '$rg', '$endereco', '$numerodacasa', '$complemento', '$bairro', '$cidade', '$uf', '$cep', '$telefone', '$celular', '$datadenascimento', MD5('$senha'), MD5('$confirmesenha'), '$sexo')");
	echo "<section id='login'>
			<h1><center>Cadastro de Clientes:</center></h1>
			<fieldset> <!-- Fieldset para criar a área -->
			<h1></h1>
			<h3>Cadastro efetuado com sucesso!</h3>
		</section>";
	echo"<script>login()</script>";
}
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
mysql_select_db('login') or die(mysql_error());
?>
<?php

if($senha != $confirmesenha) // Se a senha e confirmação de senha forem diferentes, não atualizar informações
{
	
}

else // Se a senha e confirmação de senha forem não forem diferentes, atualizar informações
{
$email=$_POST['email'];
$senha=$_POST['senha'];
$tipodelogin=$_POST['tipodelogin'];

mysql_query("INSERT INTO usuario(email, senha, tipodelogin)
VALUES('$email',MD5('$senha'),'$tipodelogin')");
}
?>
</body>
</html>
