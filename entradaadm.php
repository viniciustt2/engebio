<?php 
require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
	header('Location: ../ihospital.php');
endif;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<center>
		<br>
<form>
 <select name="URL" onchange="window.location.href = this.form.URL.options[this.form.URL.selectedIndex].value">	<option>Escolha o hosptital</option>
	<option value="paginainicialadm.php">Restauração</option>
	<option>Portugues</option>
</select>
</form>
<br>
	<a href="cadastrarhospital.php" class="btn btn-primary">Cadastrar hospital</a> <br>
	<a href="cadastrar.php" charset="btn btn-link">Cadastrar usuário</a>
	</center>




	<!-- Importações dos Scripts (Javascript CDN's) -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>