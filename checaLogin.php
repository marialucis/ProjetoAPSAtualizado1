<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$servidor = mysqli_connect("localhost", "root", "", "escola");

$resultado = mysqli_query($servidor, "select * from aluno where login = '$login' and senha = '$senha'");


$numLinhas = mysqli_num_rows($resultado);

if ($numLinhas != 0) {
	$_SESSION['logou'] = 1;
	$_SESSION['login'] = $login;

	// relatorio de login
	// $loginafetado = $_SESSION['login'];

	// data atual
	// date_default_timezone_set('America/Sao_Paulo');
	// $dataAtual = date('Y-m-d H:i:s');

	// echo "login: $loginafetado <br> data atual: $dataAtual";
	// mysqli_query($servidor, "insert into relatorioacesso (loginafetado, dataacesso, datasaida) values ('$loginafetado','$dataAtual','0000-00-00 00:00:00')");

	header('Location: principal.php');
} else {
	$_SESSION['logou'] = 0;
	header('Location: index.php');
}
