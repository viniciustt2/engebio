
<!DOCTYPE html>
<html>
<head>
	<title>Login admin</title>
	<!-- Importações das folhas de estilo (CSS CDN's) -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-witdh, initial-scale=1, shrink-to-fit-=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

<style type="text/css">
	/* Section principal do login */
	.container-fluid {
		background:linear-gradient(to bottom, #87CEFA, white, white, white);
	}
	/* Animacao do ECG */
	svg {
	  height: 30rem;
	  width: 110%;
	  position: absolute;
	  top: -20%;
	  left: -10%;
	}
	/* Animacao do ECG */
	path {
	  stroke: #87CEFA;
	  stroke-width: 2px;
	  fill: none;
	  stroke-dasharray: 800, 500;
	  stroke-dashoffset: 0;
	  animation: pulse 6s infinite linear;
	  &:nth-child(1) {
	    stroke: #b7b4c2;
	  }
	}
	/* Animacao do ECG */
	@keyframes pulse {
	  0% {
	    stroke-dashoffset: 5000;/*velocidade do pulso*/
	  }
	  100% {
	    stroke-dashoffset: 0;

	  }
	}
	/* Logomarcas */
	.logomarcas {
		position: absolute;
		bottom: -15px;
		left: 5px;
	}
	/* Logomarca engenbio 
	.logomarcas .right {
		right: 7px;
	}
	/* Logomarca ihospital 
	.logomarcas .left {
		left: 7px;
	}*/
	@media screen and (max-width: 768px){

		
		.logomarcas{
		position: absolute;
		top: 600px;
		left: 5px;
		}
		h1{
			
			font-size: 25px;
			vertical-align: center;
		}
	
	p.h3 .text-center {
		position: absolute;
		vertical-align: center;
	}
	svg {
	 
	  top: -30%;
	}
	
	}

		@media screen and (min-width: 769px){
					.logomarcas{
					position: absolute;
					top: 620px;
					left: 5px;
					}
				}


				</style>

<!-- Animação do ECG -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 600 300">
  <path d="M0,151h34.1c0.2,0,0.4-0.1,0.5-0.3l1.8-5.3c0.2-0.5,0.9-0.4,1,0.1l1.1,5.9c0.1,0.5,0.9,0.5,1,0l6.4-37
	c0.1-0.6,0.9-0.5,1,0l6.7,55c0.1,0.6,0.9,0.6,1,0l3.9-20c0.1-0.5,0.9-0.5,1,0l0.5,2.3c0.1,0.5,0.9,0.5,1,0l2.5-12.7
	c0.1-0.5,0.9-0.5,1,0l1.9,9.3c0,0.2,0.1,0.2,0.1,0l0.3-1.4c0-0.1,0.1-0.1,0.2,0l1.3,3.9c0.1,0.2,0.3,0.3,0.5,0.3H600"/>
  
  <path d="M0,150h35.1c0.2,0,0.4-0.1,0.5-0.3l1.8-5.3c0.2-0.5,0.9-0.4,1,0.1l1.1,5.9c0.1,0.5,0.9,0.5,1,0l6.4-37
	c0.1-0.6,0.9-0.5,1,0l6.7,55c0.1,0.6,0.9,0.6,1,0l3.9-20c0.1-0.5,0.9-0.5,1,0l0.5,2.3c0.1,0.5,0.9,0.5,1,0l2.5-12.7
	c0.1
	-0.5,0.9-0.5,1,0l1.9,9.3c0,0.2,0.1,0.2,0.1,0l0.3-1.4c0-0.1,0.1-0.1,0.2,0l1.3,3.9c0.1,0.2,0.3,0.3,0.5,0.3H600"/>
</svg>
</head>
<body>

				
<!-- Container do formulário -->
<section class="container-fluid">
	<!-- Row unica do container -->
	<section class="row flex-column flex-center">
		<!-- Section com 6 colunas do grid -->
		<section class="col-sm-6">
			

				<center><br><br><br><br><br><br><br><h1 >Seja bem vindo, ao Ihospital!</h1></center><br>
				<p class="h3 text-center">Login <i class="fas fa-sign-in-alt ml-2"></i></p><br>
			
			<!-- Formulário de login -->
			<?php 
				session_start();
		
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
			if(isset($_SESSION['erro'])){
			echo $_SESSION['erro'];
			unset($_SESSION['erro']);
		}

				 ?>
		<form method="POST" action="valida_login
		.php">
  		<div class="md-form">
					<i class="fa fa-user prefix mt-1"></i>
					<!-- Input (name: usuario)-->
					<input type="text" name="login" class="form-control" id="uname" aria-describedby="unameAjuda" required="" autocomplete="off">
					<!-- Label com o texto indicado do que se trata o input -->
					<label for="uname" class="font-weight-light">Usuário</label>
					<!-- Descrição do input -->
					<small id="unameAjuda" class="form-text text-muted">
						O seu nome de usuário *
					</small>
				</div>

				<!-- Input da senha -->
				<div class="md-form">
					<i class="fa fa-lock prefix mt-1"></i>
					<!-- Input (name: senha)-->
					<input type="password" name="senha" class="form-control" id="pass" aria-describedby="passAjuda" required="" autocomplete="off">
					<!-- Label com o texto indicado do que se trata o input -->
					<label for="pass" class="font-weight-light">Senha</label>
					<!-- Descrição do input -->
					<small id="passAjuda" class="form-text text-muted">
						A sua senha *
					</small>
				</div>

				<input type="hidden" name="xoops_redirect" value="/ihospital/htdocs/modules/ihospital/index.php">
				<input type="hidden" name="op" value="login">
  <button type="submit" class="btn btn-primary" name="btn-entrar">Entrar</button>
  <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
</form>
			
		</section>
		<aside class="logomarcas">
			<ul class="list-inline">
				<li class="list-inline-item left">
					<img src="ihospital.jpg" width="150">
				</li>
				<li class="list-inline-item right">
					<img src="odintech.jpeg" width="150">
				</li>
			</ul>
		</aside>
	</section>
</section>

<!-- Importações dos Scripts (Javascript CDN's) -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>

</body>
</html>