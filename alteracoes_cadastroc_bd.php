<html>

<head>
	<title>Cadastrando...</title>
</head>

<body>

<?php
session_start();
// Se não estiver logado
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]))
{
	header("Location: login.html"); // Redirecionar para a pagina de login
	exit; // Fechar qualquer sessão
}
// Se estiver logado
else
{

}

?>

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

if($senha != $confirmesenha) // Se a senha e confirmação de senha forem diferentes, não atualizar informações
{
	echo "<h1>Senhas não são iguais</h1>";
	echo "<h2><a href='dados_da_conta.php'>Voltar</a></h2>";
}

else // Se a senha e confirmação de senha forem não forem diferentes, atualizar informações
{

$emaill = $_SESSION['login'];

/* Para atualizar os dados */
mysql_query("UPDATE cadastro_do_cliente SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', cpf = '$cpf', rg = '$rg', endereco = '$endereco', numerodacasa = '$numerodacasa', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', uf = '$uf', cep = '$cep', telefone = '$telefone', celular = '$celular', datadenascimento = '$datadenascimento', senha = MD5('$senha'), confirmesenha = MD5('$confirmesenha'), sexo = '$sexo' WHERE email = '$email' ");

echo "<h1>Cadastro efetuado com sucesso!</h1>";
echo "<h2><a href='dados_da_conta.php'>Voltar</a></h2>";

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
mysql_select_db('login') or die(mysql_error());
}
?>
<?php

if($senha != $confirmesenha) // Se a senha e confirmação de senha forem diferentes, não atualizar informações
{
	echo "<h1>Tente Novamente</h1>";
}

else // Se a senha e confirmação de senha forem não forem diferentes, atualizar informações
{

$email=$_POST['email'];
$senha=$_POST['senha'];


mysql_query("UPDATE usuario SET email = '$email', senha = MD5('$senha') WHERE email = '$emaill' ");
echo "<h1>Dados alterados!</h1>";
}
?>
</body>
</html>
