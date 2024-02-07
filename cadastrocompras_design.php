<html>

<head>
	<title>Cadastrando...</title>
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
$precisa=$_POST['precisa'];
$finalidade=$_POST['finalidade'];
$tipodeservico=$_POST['tipodeservico'];
$tempo=$_POST['tempo'];
$descricao=$_POST['descricao'];

echo $precisa;
echo $finalidade;
echo $basicoavancado;
echo $tempo;
echo $descricao


mysql_query("INSERT INTO cadastro_do_profissional(precisa, finalidade, tipodeservico, tempo, descricao)
VALUES('$precisa', '$finalidade', '$tipodeservico', '$tempo', '$descricao', ')");
?>
</body>
</html>

