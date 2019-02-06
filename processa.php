<?php
session_start();
include_once("conexao.php");
//variaveis recebendo os inputs de index.html
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'adm',FILTER_SANITIZE_STRING);

//$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "senha: $senha <br>
//echo "cpf: $cpf <br>
		$senha=md5($senha);


//incerção no bando de daos
$result_usuario = "INSERT INTO usuarios (nome, login, senha,adm) VALUES ('$nome', '$login','$senha','$tipo')" ;
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastrar.php");

}


?>	