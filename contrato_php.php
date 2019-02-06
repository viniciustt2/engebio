s<?php
session_start();
include_once("conexao.php");
//variaveis recebendo os inputs de index.html
$listipos = filter_input(INPUT_POST, 'listipos', FILTER_SANITIZE_STRING);
$fabr = filter_input(INPUT_POST, 'fab', FILTER_SANITIZE_STRING);

$data = filter_input(INPUT_POST, 'data',FILTER_SANITIZE_STRING);
$aviso = filter_input(INPUT_POST, 'aviso',FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor',FILTER_SANITIZE_STRING);




//inserção no bando de daos
$result_usuario = "INSERT INTO contratos (equipamento, responsavel, data,  aviso, valor) VALUES ('$listipos', '$fabr','$data','$aviso','$valor')" ;
$resultado_usuario = mysqli_query($conn, $result_usuario);


?>		