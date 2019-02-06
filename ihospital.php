  <div class="php">
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
				 </div>
<!DOCTYPE html>
<html>
<head>
	<title>Ihospital</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="telas.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

	<style type="text/css">
					

			}
			body{
				overflow: hidden;
			}

				  @media screen and (max-width: 500px){
				  	.subir{
				  		color: white;
				  		font-size: 10px;
				  		position: absolute;
				  		left: 40%;
				  		top: 90%;
				  	}
				  	img{
				  		width: 80px;
				  		position: relative;
				  		top: 160px;
				  		left: 5px;
				  	}

				  }
				  				  @media screen and (min-width: 501px){
				  				  		.subir{
				  		color: white;
				  		font-size: 10px;
				  		position: absolute;
				  		left: 60%;
				  		top: 90%;
				  	}
				  	body{background-image: url("fundo01.jpg");
				background-size:  200%!important ;
			}
				  	img{
				  		width: 100px;
				  		position: relative;
				  		top: 140px;
				  		left: 5px;
				  	}
				  	
				  				  		}

	  @media screen and (min-width:768px){
      			.divisao{
                                         	
          width: 40%;
          position: absolute;
          left: 35%;
          background-color: transparent;!important;
	}  
	.btn-primary{
		background-color:#027eb9!important;
	}  		  		.subir{
				  		color: white;
				  		font-size: 10px;
				  		position: absolute;
				  		left:73%;
				  		top: 90%;
				  	}
				  	img{
				  		width: 120px;
				  		position: relative;
				  		top: 550px;
				  	}
      	}  







		@media screen and (min-width: 992px){
	 	.divisao{
                                         	
          width: 30%;
          position: relative;
          left: 35%;
          background-color: transparent;
	}  
	.btn-primary{
		background-color:#027eb9!important;
	} 
	.php{
		width: 50%;
		position: relative;
		left: 5%;
	} 
	.subir{
				position: absolute;
				color: white;
				font-size: 10px;
				left:78%;
				top: 92%;
                                                            
                                     }
                                     img{
			
												width: 130px;
	 											position: relative;
	 											top: 150px;
	 											left: 15px;
			                                     }
								 }
								 @media screen and (min-width:1200px){
	 		img{
	 				width: 130px;
	 				position: absolute;
					 top: 90%;
					 left: 5%;
	 		}
	 		.direitos{
	 			position: absolute;
	 			top: 90%;
				 left: 80%;
			 }
			 h1,h4{
				 position: relative;
				 left: 0%;
				 top: 40%;
			 }
			
			 .row{
				 position: absolute;
				 left: 40%;
				 top: 30%;
			 }
			 .divisao{
                                         	
											 width: 30%;
											 position: absolute;
											 left: 35%;
											 top: 20%;
									   }  
			
	 		}
                                


	</style>

</head>

<body>

	


      

<div class="container-fluid">
		<div class="divisao">


  			<form method="POST" action="IHOSPITAL/valida_login.php">
  				<div class="container-fluid">
					  <div class="">
  					<h1 class="text-center " style="color: white;">odinTeCH</h1>
							<h4 class="text-center" style="color: white;">Engenharia online</h4>
					  <h1 class="text-center" style="color: white;">Ihospital</h1> <br><br><br><br>
				  </div>
					  
					

	  					 <div class=" col-sm-12 form">
			  				<input type="text" name="login" class="form-control" placeholder="Digite o login" required="true">
			  			</div> 
							<br>
				  			<div class="col-sm-12">
			  				<input type="password" name="senha" class="form-control" placeholder="Digite a senha" required="true"><br>
			  				 <button type="submit" class="btn btn-primary btn-block" name="btn-entrar">Entrar</button>

			  			</div> 
			  				
                                  </div>   

	  						 
		  			
	  			</div> <!-- fim do container -->

  			</form>

  				
                                  </div>   
  			</div>   
			  				

</div>




<img src="IHOSPITAL/odintech.jpeg">
<img src="IHOSPITAL/ihospital.jpg">


<h3 class="text-right subir"> 2018 Todos os direitos reservados a Odin Tech.<p> Fone: 081 3038-3312 </h3></p>

<!-- Importações dos Scripts (Javascript CDN's) -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>
