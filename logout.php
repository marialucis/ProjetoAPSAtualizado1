<?php

session_start();

$_SESSION['logou'] = 0;

// relatorio de login
// $idacessoDoLogin = $_GET['id'];
// $loginafetado = $_SESSION['login'];

// data atual
// date_default_timezone_set('America/Sao_Paulo');
// $dataAtual = date('Y-m-d H:i:s');

// echo "Id: $idacessoDoLogin | login: $loginafetado <br> data atual: $dataAtual" . " | ";
// $servidor = mysqli_connect("localhost","root","","escola");

// consulta em usuarios
// $consultaUsuarios = mysqli_query($servidor, "select * from usuarios where id='$idacessoDoLogin'");
// $usuarioLogado = mysqli_fetch_assoc($consultaUsuarios);
// echo "<br> Usuario logado: ".$usuarioLogado['id'] . "<br>";

// buscar informações no banco de dado
// $pesquisarInformacoes = mysqli_query($servidor, "select * from relatorioacesso where loginafetado='$loginafetado' order by id desc");
// $dados = mysqli_fetch_assoc($pesquisarInformacoes);
// $datadeacesso = $dados['dataacesso'];
// $idacesso = $dados['id'];
// echo "data acesso: $datadeacesso" . "<br> id: $idacesso";
// echo "Data acesso" . $dados['dataacesso'] . "<br>";

// alterar dados para inserir data de logout
// mysqli_query($servidor, "update relatorioacesso SET dataacesso = '$datadeacesso', datasaida = '$dataAtual' WHERE id='$idacesso'");

session_destroy();
header('Location: index.php');
?>