<?php
// Inicia e finaliza a sessão e redireciona para a pagina escolhida
session_start();
session_destroy();
header("Location: login.html");
?>