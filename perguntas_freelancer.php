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
	<link rel="stylesheet" href="estilo_perguntas_freelancer.css"/>
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
		
		function voltar() // Fazer o link
		{
			window.location.href = "tela_do_freelancer.php";
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
<!----------------- INFORMAÇÕES DO SITE --------------------->
<!----------------------------------------------------------->
<section id="tela_do_usuario">

<h1><center>Perguntas</center></h1>
<fieldset> <!-- Fieldset para criar a área -->
<h1></h1>
<?php

	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	mysql_connect('localhost','root','');
	mysql_select_db('faleconosco');

	$email = $_SESSION['login'];

	$sql = mysql_query("SELECT * FROM perguntas WHERE email = '$email'"); // Verifica quantos regístros existem do usuário
	$row = mysql_num_rows($sql); // Conta quantos registros tem do usuário
	
	// -------------------------- Para pegar todas as perguntas --------------------------
	if($row == 0) // Se não tiver nenhum regístro de perguntas
	{
		echo "<h1 id='informacoes'>Você não tem perguntas ainda.</h1><hr>"; // Escreve o aviso
	}
	
	while($row > 0) // Se tiver registro de perguntas
	{
		$sql = "SELECT (descricao) FROM perguntas"; // Seleciona a pergunta
		$sql2 = "SELECT (solucao) FROM perguntas"; // Seleciona a solucao
		$sql3 = "SELECT (id) FROM perguntas"; // Seleciona o id da pergunta
		$resultado = mysql_query($sql);
		$resultado2 = mysql_query($sql2);
		$resultado3 = mysql_query($sql3);
		while($busca = mysql_fetch_row($resultado) and $busca2 = mysql_fetch_row($resultado2) and $busca3 = mysql_fetch_row($resultado3)) // Enquanto houver resultados
		{
			echo "<h1 id='informacoes'>Descricao: " . $busca[0] . "</h1>"; // Escreve a pergunta
			echo "<h1 id='informacoes'>Solução: " . $busca2[0] . "</h1>"; // Escreve a solução
			echo "<h1 id='informacoes'>Ticket da pergunta #" . $busca3[0] . "</h1><hr>"; // Escreve o id da pergunta
		}
		$row = $row - 1; // Conta a pergunta como mostrada
	}

?>
		<center><button class="button_voltar" onclick="voltar()">VOLTAR</button></center> <br><br><!-- Botão para voltar -->
</fieldset>

</section>
</body>
</html>