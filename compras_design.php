<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('compras');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Obrigado pela compra!</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="estilo_compras_design.css"/>
	<link rel="shortcut icon" href="favicon.png"/>
<script>

	function voltar() // Fazer o link
	{
		window.location.href = "selecionar_quiz_design.php";
	}
		
</script>
</head>
<body>
<?php
$sobre=$_POST['sobre'];
$sobre_outro=$_POST['sobre_outro'];
$seria=$_POST['seria'];
$tempo=$_POST['tempo'];
$informacoes=$_POST['informacoes'];
$nome_do_cartao=$_POST['nome_do_cartao'];
$numero_do_cartao=$_POST['numero_do_cartao'];
$bandeira_do_cartao=$_POST['bandeira_do_cartao'];
$data_de_validade=$_POST['data_de_validade'];
$codigo_de_seguranca=$_POST['codigo_de_seguranca'];
$parcelas=$_POST['parcelas'];
$email=$_POST['email'];

$status="Em andamento";

// --------------------------------------------------------------------------
// ----- Para calcular o preço da compra e enviar para o Banco de dados -----
// --------------------------------------------------------------------------

$valtotal = 150.00; // Valor inicial

// ----------------------------- Pergunta Sobre -----------------------------

if($sobre == "Noticias") // Se a resposta for essa
{
	$valtotal = $valtotal + 180.00; // acrescenta o valor no total
}

elseif($sobre == "Humor") // Se a resposta for essa
{
	$valtotal = $valtotal + 150.00; // acrescenta o valor no total
}

elseif($sobre == "Loja Virtual") // Se a resposta for essa
{
	$valtotal = $valtotal + 110.00; // acrescenta o valor no total
}

else // Se a resposta for essa
{
	$valtotal = $valtotal + 120.00; // acrescenta o valor no total
}

// ----------------------------- Pergunta Seria -----------------------------

if($seria == "Basico (algo simples)") // Se a resposta for essa
{
	$valtotal = $valtotal + 70.00; // acrescenta o valor no total
}

else // Se a resposta for essa
{
	$valtotal = $valtotal + 130.00; // acrescenta o valor no total
}

// ----------------------------- Pergunta Tempo -----------------------------

if($tempo == "3 a 15 dias") // Se a resposta for essa
{
	$valtotal = $valtotal + 100.00; // acrescenta o valor no total
}

elseif($tempo == "15 a 30 dias") // Se a resposta for essa
{
	$valtotal = $valtotal + 80.00; // acrescenta o valor no total
}

elseif($tempo == "30 a 40 dias") // Se a resposta for essa
{
	$valtotal = $valtotal + 60.00; // acrescenta o valor no total
}

else // Se a resposta for essa
{
	$valtotal = $valtotal + 40.00; // acrescenta o valor no total
}


mysql_query("INSERT INTO compras_design(sobre, sobre_outro, seria, tempo, informacoes, nome_do_cartao, numero_do_cartao, data_de_validade, codigo_de_seguranca, parcelas, email, valtotal, bandeira_do_cartao, status)
VALUES('$sobre', '$sobre_outro', '$seria', '$tempo', '$informacoes', '$nome_do_cartao', MD5('$numero_do_cartao'), '$data_de_validade', MD5('$codigo_de_seguranca'), '$parcelas', '$email', '$valtotal', '$bandeira_do_cartao', '$status')");

echo "<section id='login'>

		<h1><center>Design</center></h1>
		<fieldset> <!-- Fieldset para criar a área -->
		<h1></h1>
		<h3>Sua compra foi efetuada com sucesso! <br> Aguarde confirmação no seu email e/ou na área de compra aqui no site. <br> Obrigado por nos escolher!</h3>
		<center><button class='button_voltar' onclick='voltar()'>VOLTAR</button></center> <br><br><!-- Botão para voltar -->
	</section>";
?>
</body>
</html>
