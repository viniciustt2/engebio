<?php 
require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
	header('Location: login.php');
endif;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<select onchange="window.open(this.value)">
	<option>Escolha o hosptital</option>
	<option value="paginainicial.php">Restauração</option>
	<option>Portugues</option>
</select>
</body>
</html>