<?php 
//conexao
require_once 'conexao.php';
session_start();


//botao enviar 
if (isset($_POST['btn-entrar'])) :
	$erros=array();
	$login=mysqli_escape_string($conn,$_POST['login']);
	$senha=mysqli_escape_string($conn,$_POST['senha']);
	if (empty($login) or empty($senha)) :
		$erros[]="<li> O campo login/senha precisa ser preenchido</li>";
else:
	$sql="SELECT login FROM usuarios WHERE login ='$login'";
	$resultado= mysqli_query($conn,$sql);
	if (mysqli_num_rows($resultado) > 0):
		$senha=md5($senha);
		$sql= "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
		$resultado=mysqli_query($conn,$sql);
			if (mysqli_num_rows($resultado) ==1) :
				$dados=mysqli_fetch_array($resultado);
				$_SESSION['logado']=true;
				$_SESSION['id_usuario']=$dados['id'];
				header("Location: home.php");
			else:
				$erros[]="<li>Usuário e senha não conferem</li>";
								$_SESSION['erro']="<li style='list-style-type: none; color:red; 
				'>Usuário e senha não conferem</li>";
								header("Location:login.php");
			endif;
				
			
	else:
		$erros[]="<li> Usuário inexistente</li>";
										$_SESSION['erro']="<li style='list-style-type: none; color:red;  
'>Usuário inexistente</li>";

						header("Location:login.php");


	endif;
		
		endif;
	
	
endif;

	if (!empty($erros)) :
				 	foreach($erros as $erro):
				 		echo $erro;
				 endforeach;
				 	endif;

 ?>
