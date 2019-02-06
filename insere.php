<?php
require_once

'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
    header('Location: ihospital.php');
endif;

//inserção no bando de dados

$result_empresas = INSERT INTO empresas("Nome da Empresa","Cidade","CNPJ","Email","Endereço","Telefone") VALUES ('$Nome da Empresa', '$Cidade','$Email','$Endereço','$telefone','$cnpj',)" ;
$resultado_empresas = mysqli_query($conn, $result_empresas");

if(!mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Empresa cadastrada com sucesso</p>";
	header("Location:cadastro_empresas.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Empresa não foi cadastrada</p>";
	header("Location: cadastro_empresas.php");
}
?>