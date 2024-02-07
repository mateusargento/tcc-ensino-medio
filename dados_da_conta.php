<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('cadastro');
?>

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

	$email = $_SESSION['login'];

	// Nome
	$sql = "SELECT nome FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$nome = $dados['nome'];
	
	// Sobrenome
	$sql = "SELECT sobrenome FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$sobrenome = $dados['sobrenome'];
	
	// CPF
	$sql = "SELECT cpf FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$cpf = $dados['cpf'];
	
	// RG
	$sql = "SELECT rg FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$rg = $dados['rg'];
	
	// Endereço
	$sql = "SELECT endereco FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$endereco = $dados['endereco'];
	
	// Número da casa
	$sql = "SELECT numerodacasa FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$numerodacasa = $dados['numerodacasa'];
	
	// Complemento
	$sql = "SELECT complemento FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$complemento = $dados['complemento'];
	
	// Bairro
	$sql = "SELECT bairro FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$bairro = $dados['bairro'];
	
	// Cidade
	$sql = "SELECT cidade FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$cidade = $dados['cidade'];
	
	// UF
	$sql = "SELECT uf FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$uf = $dados['uf'];
	
	// CEP
	$sql = "SELECT cep FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$cep = $dados['cep'];
	
	// Telefone
	$sql = "SELECT telefone FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$telefone = $dados['telefone'];
	
	// Celular
	$sql = "SELECT celular FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$celular = $dados['celular'];
	
	// Data de Nascimento
	$sql = "SELECT datadenascimento FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$datadenascimento = $dados['datadenascimento'];
	
	// Sexo
	$sql = "SELECT sexo FROM cadastro_do_cliente WHERE email = '$email' ";
	mysql_query($sql);
	$resultado = mysql_query($sql);
	$dados = mysql_fetch_array($resultado);
	/* Nome da Tabela */
	$sexo = $dados['sexo'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> </title>
	<link rel="stylesheet" href="estilo_dados_da_conta.css"/>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="jquery.maskedinput.js" ></script>
	<script type="text/javascript" src="javascript.js"></script>
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
			window.location.href = "tela_do_usuario.php";
		}
		
		function sair()
		{
			window.location.href = "logout.php";
		}
		
		jQuery(function($){ // Máscara
			$("#cpf").mask("333.333.333-33"); // Facilita preenchendo os espaços do CPF
			$("#rg").mask("33.333.333-3"); // Facilita preenchendo os espaços do RG
			$("#cep").mask("33333-333"); // Facilita preenchendo os espaços do CEP
			$("#telefone").mask("(33) 3333-3333"); // Facilita preenchendo os espaços do Telefone
			$("#celular").mask("(33) 33333-3333"); // Facilita preenchendo os espaços do Celular
			$("#datadenascimento").mask("33/33/3333"); // Facilita preenchendo os espaços da Data de Nascimento
		});
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
<section id="cadastro_cliente">

<h1><center>Dados da conta:</center></h1>
<fieldset> <!-- Fieldset para criar a área -->
<h1></h1>

<fieldset><legend id="sexo">Aqui você pode alterar seus dados:</legend>
<form method="post" action="alteracoes_cadastroc_bd.php">
	<input type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome" maxlength="255" required /> <br> <!-- Campo para informar o nome com no máximo 255 caracteres obrigatório -->
	<input type="text" name="sobrenome" value="<?php echo $sobrenome; ?>" placeholder="Sobrenome" maxlength="255" required /> <br> <!-- Campo para informar sobrenome com no máximo 255 caracteres obrigatório -->
	<input type="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail" required /> <br> <!-- Campo para informar email obrigatório -->
	<input type="text" name="cpf" value="<?php echo $cpf; ?>" placeholder="CPF" maxlength="11" required id="cpf"/> <!-- Campo para informar CPF obrigatório -->
	<input type="text" name="rg" value="<?php echo $rg; ?>" placeholder="RG" maxlength="9" required id="rg" /> <!-- Campo para informar RG obrigatório -->
	<input type="text" name="endereco" value="<?php echo $endereco; ?>" placeholder="Endereço" maxlength="255" required /> <!-- Campo para informar endereço com no máximo 255 caracteres obrigatório-->
	<input type="text" name="numerodacasa" value="<?php echo $numerodacasa; ?>" placeholder="Número da Casa" id="numerodacasa" maxlength="255" required /> <!-- Campo para informar número da casa com no máximo 255 caracteres obrigatório -->
	<input type="text" name="complemento" value="<?php echo $complemento; ?>" placeholder="Complemento" id="complemento" maxlength="255" required /> <!-- Campo para informar complemento com no máximo 255 caracteres obrigatório -->
	<input type="text" name="bairro" value="<?php echo $bairro; ?>" placeholder="Bairro" maxlength="255" required /> <!-- Campo para informar Bairro com no máximo 255 caracteres obrigatório -->
	<input type="text" name="cidade" value="<?php echo $cidade; ?>" placeholder="Cidade" id="cidade" maxlength="255" required /> <!-- Campo para informar Cidade com no máximo 255 caracteres obrigatório -->
	<input type="text" name="uf" value="<?php echo $uf; ?>" placeholder="UF" id="uf" maxlength="2" required /> <!-- Campo para informar UF como no máximo 2 caracteres obrigatório -->
	<input type="text" name="cep" value="<?php echo $cep; ?>" placeholder="CEP" maxlength="9" required id="cep"/> <!-- Campo para informar CEP como no máximo 8 caracteres obrigatório -->
	<input type="text" name="telefone" value="<?php echo $telefone; ?>" placeholder="Telefone" maxlength="10" id="telefone" required /> <!-- Campo para informar telefone com no máximo 10 números obrigatório -->
	<input type="text" name="celular" value="<?php echo $celular; ?>" placeholder="Celular" maxlength="11" id="celular" required /> <!-- Campo para informar celular com no máximo 11 números obrigatório -->
	<input type="text" name="datadenascimento" value="<?php echo $datadenascimento; ?>" placeholder="Data de Nascimento" maxlength="10" required id="datadenascimento" /> <br> <!-- Campo para informar data de nascimento com no máximo 8 dígitos obrigatório -->
	<input type="password" name="senha" placeholder="Trocar a senha" maxlength="255" required /> <br> <!-- Campo para informar senha com no máximo 255 caracteres obrigatório -->
	<input type="password" name="confirmesenha" placeholder="Confirme sua senha" maxlength="255" required /> <br><br><br> <!-- Campo para informar o confirme sua senha com no máximo 255 caracteres obrigatório -->
</fieldset> <br>

<?php
	if($sexo == "Masculino")
	{
		$masculino = "selected";
	}
	else
	{
		$feminino = "selected";
	}
	
?>

<fieldset><legend id="sexo">Sexo:</legend>
	<select name="sexo" required> <!-- Selecionar opções -->
		<option <?php echo $masculino ?>>Masculino</option> <!-- Opção -->
	  	<option <?php echo $feminino ?>>Feminino</option> <!-- Opção -->
	</select>
</fieldset> <br>

	<input type="submit" value="Salvar alterações" id="submit"/> <br><br> <!-- Botão de Enviar -->
</form>

<center><button class="button_voltar" onclick="voltar()">VOLTAR</button></center> <br><br><!-- Botão para voltar -->

</section>
</body>
</html>