<?php
session_start();
// Se não estiver logado
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]))
{
	header("Location: login_selecionar_quiz_programacao_e_outros_sites.html"); // Redirecionar para a pagina de login
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
	<link rel="stylesheet" href="estilo_selecionar_quiz_programacao_e_outros_sites.css"/>
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
		
		function sair()
		{
			window.location.href= "logout.php";
		}
		
		var par = 150;
		var resp_a1 = 0;
		var resp_a2 = 0;
		var resp_a3 = 0;
		var resp_a4 = 0;
		var a = 0;
		var b = 0;
		var c = 0;
		var valtotal = 0;
		var valparc2 = 0;
		var valparc3 = 0;
		
		// -------------------------------------------- Pergunta 1 ----------------------------------------------------------
		
		function a1() /* Quando clicado nas opções acima */
		{
			if (document.getElementById("outro").style.display == "block") /* Se o style="display: " for igual a block */	
			{
				document.getElementById("outro").style.display = "none"; /* Some o campo */
				resp_a1 = parseInt(par) + parseInt(180); /* Acrescenta o valor da resposta a variável da opção*/
				a = a - a; // Coloca a variável da pergunta em 0
				a = parseInt(a) + parseInt(resp_a1); // Acrescenta o valor da resposta a variável da pergunta
				valtotal = parseInt(a) + parseInt(b) + parseInt(c); // Soma o valor de todas as variáveis
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00"; // Escreve na tela a soma de todas as variáveis
				valparc2 = parseInt(valtotal) / 2; // Pega o valor total e divide por 2 vezes
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00"; // Escreve na tela a divisão de todas as variáveis
				valparc3 = parseInt(valtotal) / 3; //Pega o valor total e divide por 3 vezes
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2); // Escreve na tela a divisão de todas as variáveis
			}
			else  
			{		  
				resp_a1 = parseInt(par) + parseInt(180);
				a = a - a;
				a = parseInt(a) + parseInt(resp_a1);
				valtotal = parseInt(a) + parseInt(b) + parseInt(c);
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
				valparc2 = parseInt(valtotal) / 2;
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
				valparc3 = parseInt(valtotal) / 3;
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
			}
		}
		
		function a2() /* Quando clicado nas opções acima */
		{
			if (document.getElementById("outro").style.display == "block") /* Se o style="display: " for igual a bock */	
			{
				document.getElementById("outro").style.display = "none"; /* Some o campo */
				resp_a2 = parseInt(par) + parseInt(150);
				a = a - a;
				a = parseInt(a) + parseInt(resp_a2);
				valtotal = parseInt(a) + parseInt(b) + parseInt(c);
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
				valparc2 = parseInt(valtotal) / 2;
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
				valparc3 = parseInt(valtotal) / 3;
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
			}
			else  
			{		  
				resp_a2 = parseInt(par) + parseInt(150);
				a = a - a;
				a = parseInt(a) + parseInt(resp_a2);
				valtotal = parseInt(a) + parseInt(b) + parseInt(c);
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
				valparc2 = parseInt(valtotal) / 2;
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
				valparc3 = parseInt(valtotal) / 3;
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
			} 
		}
		
		function a3() /* Quando clicado nas opções acima */
		{
			if (document.getElementById("outro").style.display == "block") /* Se o style="display: " for igual a bock */	
			{
				document.getElementById("outro").style.display = "none"; /* Some o campo */
				resp_a3 = parseInt(par) + parseInt(110);
				a = a - a;
				a = parseInt(a) + parseInt(resp_a3);
				valtotal = parseInt(a) + parseInt(b) + parseInt(c);
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
				valparc2 = parseInt(valtotal) / 2;
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
				valparc3 = parseInt(valtotal) / 3;
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
			}
			else  
			{		  
				resp_a3 = parseInt(par) + parseInt(110);
				a = a - a;
				a = parseInt(a) + parseInt(resp_a3);
				valtotal = parseInt(a) + parseInt(b) + parseInt(c);
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
				valparc2 = parseInt(valtotal) / 2;
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
				valparc3 = parseInt(valtotal) / 3;
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
			} 
		}
		
		function a4() /* Quando clicado na opção Outro */
		{	
			if (document.getElementById("outro").style.display == "none") /* Se o style="display: " for igual a none */	  
			{ 		  
				document.getElementById("outro").style.display = "block"; /* Aparece o campo */
				resp_a4 = parseInt(par) + parseInt(120);
				a = a - a;
				a = parseInt(a) + parseInt(resp_a4);
				valtotal = parseInt(a) + parseInt(b) + parseInt(c);
				document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
				valparc2 = parseInt(valtotal) / 2;
				document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
				valparc3 = parseInt(valtotal) / 3;
				document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
			}
			else  
			{		  
			
			}  
		}
		
		// -------------------------------------------- Pergunta 2 ----------------------------------------------------------
		
		function b1() /* Quando clicado nas opções acima */
		{
			b = b - b;
			b = parseInt(b) + parseInt(70);
			valtotal = parseInt(a) + parseInt(b) + parseInt(c);
			document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
			valparc2 = parseInt(valtotal) / 2;
			document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
			valparc3 = parseInt(valtotal) / 3;
			document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
		}
		
		function b2() /* Quando clicado nas opções acima */
		{
			b = b - b;
			b = parseInt(b) + parseInt(130);
			valtotal = parseInt(a) + parseInt(b) + parseInt(c);
			document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
			valparc2 = parseInt(valtotal) / 2;
			document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
			valparc3 = parseInt(valtotal) / 3;
			document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
		}
		
		// -------------------------------------------- Pergunta 3 ----------------------------------------------------------
		
		function c1() /* Quando clicado nas opções acima */
		{
			c = c - c;
			c = parseInt(c) + parseInt(100);
			valtotal = parseInt(a) + parseInt(b) + parseInt(c);
			document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
			valparc2 = parseInt(valtotal) / 2;
			document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
			valparc3 = parseInt(valtotal) / 3;
			document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
		}
		
		function c2() /* Quando clicado nas opções acima */
		{
			c = c - c;
			c = parseInt(c) + parseInt(80);
			valtotal = parseInt(a) + parseInt(b) + parseInt(c);
			document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
			valparc2 = parseInt(valtotal) / 2;
			document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
			valparc3 = parseInt(valtotal) / 3;
			document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
		}
		
		function c3() /* Quando clicado nas opções acima */
		{
			c = c - c;
			c = parseInt(c) + parseInt(60);
			valtotal = parseInt(a) + parseInt(b) + parseInt(c);
			document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
			valparc2 = parseInt(valtotal) / 2;
			document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
			valparc3 = parseInt(valtotal) / 3;
			document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
		}
		
		function c4() /* Quando clicado nas opções acima */
		{
			c = c - c;
			c = parseInt(c) + parseInt(40);
			valtotal = parseInt(a) + parseInt(b) + parseInt(c);
			document.getElementById("total").innerHTML = "R$: " + valtotal + ",00";
			valparc2 = parseInt(valtotal) / 2;
			document.getElementById("valorparcelado2").innerHTML = "2x sem juros de R$: " + valparc2 + ",00";
			valparc3 = parseInt(valtotal) / 3;
			document.getElementById("valorparcelado3").innerHTML = "3x sem juros de R$: " + valparc3.toFixed(2);
		}
		
		jQuery(function($){ // Máscara
		$("#numerodocartao").mask("3333-3333-3333-3333"); // Facilita preenchendo os espaços do CPF
		$("#datadevalidade").mask("33/33"); // Facilita preenchendo os espaços do RG
		});
	</script>

<head>
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

<section id="menu">
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
		<a href="login.html"><center>LOGIN</center></a>
	</section>
</section>

</section>

<!----------------------------------------------------------->
<!---------------- FIM DO MENU MOBILE ----------------------->
<!----------------------------------------------------------->

<!----------------------------------------------------------->
<!----------------- INFORMAÇÕES DO SITE --------------------->
<!----------------------------------------------------------->
<section id="selecao_de_servicos">

<h1><center>Sites:</center></h1>
<section id="fieldset">
<h1></h1>

<img src="imagens/sites_loja.png" id="design_loja">

	
	<?php
		$usuario = $_SESSION["login"];
	?>

<h2>Preço do serviço:</h2>
<h3 id="total">R$: 150,00</h3>
<h4 id="valorparcelado2"></h4>
<h4 id="valorparcelado3"></h4>

<form method="post" action="compras_sites.php">
	<fieldset id="tiposdeservico"><legend id="tiposdeservico">Sobre o que seria?</legend>
		<input type="radio" name="sobre" value="Noticias" id="radio" onclick="a1()" required> Notícias <br>
		<input type="radio" name="sobre" value="Humor" id="radio" onclick="a2()" required> Humor <br>
		<input type="radio" name="sobre" value="Loja Virtual " id="radio" onclick="a3()" required> Loja Virtual  <br>
		<input type="radio" name="sobre" value="Outro" id="radio1" onclick="a4()" required> Outro <br>
		<input type="text" name="sobre_outro" id="outro" placeholder="Descreva aqui." style="display: none">
	</fieldset> <br>
	
	<fieldset id="tiposdeservico"><legend id="tiposdeservico">Seria:</legend>
		<input type="radio" name="seria" value="Basico (algo simples)" id="radio" onclick="b1()" required> Básico (algo simples) <br>
		<input type="radio" name="seria" value="Avançado (algo mais desenvolvido)" id="radio" onclick="b2()" required> Avançado (algo mais desenvolvido) <br>
	</fieldset> <br>
	
	<fieldset id="tiposdeservico"><legend id="tiposdeservico">Tempo de entrega:</legend>
		<input type="radio" name="tempo" value="3 a 15 dias" id="radio" onclick="c1()" required> 3 a 15 dias <br>
		<input type="radio" name="tempo" value="15 a 30 dias" id="radio" onclick="c2()" required> 15 a 30 dias <br>
		<input type="radio" name="tempo" value="30 a 40 dias" id="radio" onclick="c3()" required> 30 a 40 dias <br>
		<input type="radio" name="tempo" value="45 dias" id="radio" onclick="c4()" required> 45 dias <br>
	</fieldset> <br>
	
	<fieldset id="tiposdeservico"><legend id="o_que_deseja_falar">Informações extras:</legend>
	<textarea name="informacoes" cols="45" rows="5" placeholder="Descreva aqui detalhes que deseja citar." required /></textarea> <br> <!-- Campo para descrever conhecimento profissional -->
	</fieldset> <br>

<fieldset id="tiposdeservico"><legend>Dados para finalização da compra</legend>
	<input type="text" name="nome" placeholder="Nome completo conforme no cartão de crédito" maxlength="255" required /> <br> <!-- Campo para informar o nome com no máximo 255 caracteres obrigatório -->
	<input type="text" name="numero_do_cartao" placeholder="Número do cartão" maxlength="255" required id="numerodocartao" /> <br> <!-- Campo para informar o nome com no máximo 255 caracteres obrigatório -->
	<input type="text" name="bandeira_do_cartao" placeholder="Bandeira do cartão" maxlength="255" required /> <br> <!-- Campo para informar o nome com no máximo 255 caracteres obrigatório -->
	<input type="text" name="data_de_validade" placeholder="Data de Validade" maxlength="7" required id="datadevalidade" /> <br> <!-- Campo para informar data de validade com no máximo 7 dígitos obrigatório -->
	<input type="text" name="codigo_de_seguranca" placeholder="Codigo de Segurança" maxlength="255" required /> <br><br> <!-- Campo para informar o Código de Segurança como no máximo 255 caracteres obrigatório -->
</fieldset> <br>

<fieldset id="tiposdeservico"><legend>Número de parcelas:</legend>
	  <select name="parcelas"> <!-- Selecionar opções -->
		<option>1x sem juros</option> <!-- Opção -->
	  	<option>2x sem juros</option> <!-- Opção -->
		<option>3x sem juros</option> <!-- Opção -->
	  </select>	
</fieldset>

<input type="text" name="email" placeholder="email" value="<?php echo $usuario ?>" maxlength="255" style="display: none" required /> <br><br> <!-- Campo para informar o Código de Segurança como no máximo 255 caracteres obrigatório -->

<input type="submit" value="Contratar serviço agora" id="submit"/>
</form>
</section>

<!----------------------------------------------------------->
<!------------- FIM DAS INFORMAÇÕES DO SITE ----------------->
<!----------------------------------------------------------->
</body>
</html>