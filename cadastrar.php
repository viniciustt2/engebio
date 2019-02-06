<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-witdh, initial-scale=1, shrink-to-fit-=no">
<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">

<title>CRUD - Cadastrar</title>		
</head>
	<body>

		<center>
<!----------------------------------------------------------------------------------->
		<?php
		session_start();
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
        
		<h1>Cadastrar Usuário</h1>

<!--- O forme é responsavel para conectar ao processa.php onde
	o mesmo esta se conectando ao conexao.php conexão com banco de dados-->
		<div class="container-fluid">

		<form method="POST" action="processa.php" >
			

	<!---input nome---->

		  <div class="form-group">

		  	<div  class="input-group">
			
				<input  class="form-control" type="text" name="nome" placeholder="Digite seu nome completo">
			</div>
			</div>
			<!---input email--->
		  <div class="form-group">	
		  			  	  <div class="input-group">

			  <input class="form-control" type="text" name="login" placeholder="Digite um login" >
			</div>
		  </div>

		  <div class="form-group">
		  	  <div class="input-group">

			

			<input class="form-control"  type="password"  name="senha" placeholder="Digite sua senha">
		</div>
			</div>


			<div class="input-group">
				<select class="form-control" name="adm">
					<option value="1">adm</option>
					<option value="0">comum</option>
				</select>
			</div>

	<!-----submite serve para enviar os dados para o arquivo de nome processa.php atrelado aconexao.php----->
	<br>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
			<a href="login.php" class="btn btn-link">Login</a>
			</div>

		

</div>
</center>
	</body>
</html>