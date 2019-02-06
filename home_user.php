<?php 
require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
	header('Location: login.php');
endif;


$id=$_SESSION['id_usuario'];
$sql="SELECT * FROM usuarios WHERE id='$id'";
$resultado=mysqli_query($conn,$sql);
$dados=mysqli_fetch_array($resultado);
$adm=$dados['adm'];
if ($adm==0) {
	echo "<script>alert('Bem vindo Usuário'); document.location.href='entrada.php';</script>";
}else{
		header('Location: login_user.php');

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