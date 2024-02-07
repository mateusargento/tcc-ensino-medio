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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> </title>
	<link rel="stylesheet" href="estilo_tela_do_freelancer.css"/>
	<link rel="shortcut icon" href="favicon.png"/>
	<script>
		function login() // Fazer o link
		{
			window.location.href = "login.html";
		}
		
		function faleconosco() // Fazer o link
		{
			window.location.href = "fale_conosco.html";
		}
		
		function loja() // Fazer o link
		{
			window.location.href = "loja.html";
		}
		
		function sair()
		{
			window.location.href = "logout.php";
		}
	</script>
</head>
<body>

<!----------------------------------------------------------->
<!----------------------- MENU ------------------------------>
<!----------------------------------------------------------->
<header id="menu">

<a href="pagina_inicial.html"><img src="imagens/logo_pagina.png" id="logo" title="NW Freela's"></a> <!-- Logo -->

<section id="menu_loja_especifico"> <!-- As partes do menu ficam dentro -->
	<button class="button-menu" onclick="loja()">LOJA</button> <!-- Botão FALE CONOSCO -->
</section>

<section id="menu"> <!-- As partes do menu ficam dentro -->
	<button class="button-menu">SERVIÇOS</button> <!-- Botão SERVIÇOS -->
	<section id="sub_menu"> <!-- Sub menu (escondido) de SERVIÇOS -->
		<a href="selecao_de_servicos_programacao_e_outros.html"><center>Programação e outros</center></a>
		<a href="selecao_de_servicos_design.html"><center>Design</center></a>
	</section>
</section>

<section id="menu"> <!-- As partes do menu ficam dentro -->
	<button class="button-menu">CADASTRE-SE</button> <!-- Botão CADASTRE-SE -->
	<section id="sub_menu"> <!-- Sub menu (escondido) de SERVIÇOS -->
		<a href="cadastro_cliente.html"><center>Clientes</center></a>
		<a href="cadastro_profissional.html"><center>Profissionais</center></a>
	</section>
</section>

<section id="menu"> <!-- As partes do menu ficam dentro -->
	<button class="button-menu" onclick="faleconosco()">FALE CONOSCO</button> <!-- Botão FALE CONOSCO -->
</section>

<section id="menu"> <!-- As partes do menu ficam dentro -->
	<button class="button-menu" onclick="sair()">SAIR </button> <!-- Botão LOGIN -->
</section>

</header>
<!----------------------------------------------------------->
<!-------------------- FIM DO MENU -------------------------->
<!----------------------------------------------------------->

<!----------------------------------------------------------->
<!------------------- MENU MOBILE --------------------------->
<!----------------------------------------------------------->

<section id="menu_mobile_mobile">

<a href="pagina_inicial.html"><img src="imagens/logo_pagina.png" id="logo_mobile" title="NW Freela's"></a> <!-- Logo -->

<section id="menu_mobile"> <!-- As partes do menu ficam dentro -->
	<button class="button-menu-mobile"><img src="imagens/menu_mobile.png" width="200px"></button> <!-- Botão SERVIÇOS -->
	<section id="sub_menu_mobile"> <!-- Sub menu (escondido) de SERVIÇOS -->
		<a href="selecao_de_servicos_programacao_e_outros.html"><center>SERVIÇOS: Programação e outros</center></a><br>
		<a href="selecao_de_servicos_design.html"><center>SERVIÇOS: Design</center></a><br>
		<a href="loja.html"><center>LOJA</center></a><br>
		<a href="cadastro_cliente.html"><center>CADASTRE - SE: Clientes</center></a><br>
		<a href="cadastro_profissional.html"><center>CADASTRE - SE: Profissionais</center></a><br>
		<a href="fale_conosco.html"><center>FALE CONOSCO</center></a><br>
		<a href="logout.php"><center>SAIR</center></a>
	</section>
</section>

</section>

<!----------------------------------------------------------->
<!---------------- FIM DO MENU MOBILE ----------------------->
<!----------------------------------------------------------->

<!----------------------------------------------------------->
<!----------------- INFORMAÇÕES DO SITE --------------------->
<!----------------------------------------------------------->
<section id="tela_do_usuario">

<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('cadastro');

$tipodelogin = $_SESSION['tipodelogin'];
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];

if ($tipodelogin == "usuario")
{
	$tipo = "SELECT (nome) FROM cadastro_do_cliente WHERE email = '$login'";
	mysql_query($tipo);
	$resultado = mysql_query($tipo);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$nome = $dados['nome'];
}

else
{
	$tipo = "SELECT (nome) FROM cadastro_do_profissional WHERE email = '$login'";
	mysql_query($tipo);
	$resultado = mysql_query($tipo);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$nome = $dados['nome'];
}
?>

<h1><center>Olá <?php echo $nome; ?>, o que deseja gerenciar?</center></h1>
<fieldset> <!-- Fieldset para criar a área -->
<h1></h1>
		<a href="servicos.php"><img src="imagens/servicos_logo.png" id="servicos_logo"></a>
		<a href="perguntas_freelancer.php"><img src="imagens/perguntas_logo.png" id="perguntas_logo"></a>
		<a href="dados_da_conta_freelancer.php"><img src="imagens/dados_da_conta_logo.png" id="dados_da_conta_logo"></a>
		<a href="compras_freelancer.php"><img src="imagens/compras_logo.png" id="compras_logo"></a> 
</fieldset>

</section>
</body>
</html>