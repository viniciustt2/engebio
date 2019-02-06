<?php 
require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
	header('Location: ../ihospital.php');
endif;


$id=$_SESSION['id_usuario'];
$sql="SELECT * FROM usuarios WHERE id='$id'";
$resultado=mysqli_query($conn,$sql);
$dados=mysqli_fetch_array($resultado);
$adm=$dados['adm'];
if ($adm==1) {
	echo "<script>alert('Bem vindo Administrador'); document.location.href='entradaadm.php';</script>";
}else{
	echo "<script>alert('Você está logado'); document.location.href='entrada.php';</script>";

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>