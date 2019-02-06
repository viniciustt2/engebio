<?php 

require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
    header('Location: ../ihospital.php');
endif;

 ?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">




        <style>*{font-size:15px;}nav.navbar{height:50px;}
            @media screen and (max-width: 991px){
            #menu{
              background-color: lightgrey;
              width: 100%;
              height: 100%;
              position: fixed;
              top: 50px;
              left:0px;
            }
              .nav-link{
                background-color: #509BF5;
                color: white;
                  }
                  .nav-item{
                    background-color: #509BF5;
                }
                .navbar-toggler{
                    position: absolute; 
                    right: 0px;
                }

                   img{
                                        width: 250px;
                                        height: 80px  
                                            }

               }

                               @media screen and (min-width:992px){
                                          .navbar-toggler{
                                            display: none;
                                            right: 0px;
                                          }
                                                  
                                            .dropdown-item:hover{
                                              background-color: lightblue;
                                            }    
                                            .navbar-nav{
                                              position: absolute;
                                              
                                            } 
                                            .nav-item{
                                              color: red;
                                            }
                                            .nav-item:hover{
                                              background-color: lightblue;
                                             border-radius: 25px;

                                            }
                                          .divisao{
                                         	
                                         		width: 50%;
                                         		position: absolute;
                                         		left: 25%;
                                         	                                         	}
                                           
                                                            
                                          }

             


          </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item">
          <a href="paginainicialadm.php" class="nav-link mr-2 waves-effect waves-light">Início</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Equipamento</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="equip.php">Cadastrar</a>
          <a class="dropdown-item" href="busca_equip.php">Buscar</a>
          <a class="dropdown-item" href="relatorio.php">Relatório</a>
        </div>
      </li>

       <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownItem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerenciar O.S</a>
                                   <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownItem">
                                       <a class="dropdown-item waves-effect waves-light" href="abriros.php">Abrir</a>
                                       <a class="dropdown-item waves-effect waves-light" href="procuraros.php">Procurar</a>
                                   </div>
                                </li>
                                <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Contratos</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Gráficos</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Arquivos</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="agendar_manutenção.php" class="nav-link mr-2 waves-effect waves-light">Agendar manuntenção</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Criticas</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Cadastrar empresas</a>
                                    </li>

                                   
                                  

                               


       <li class="nav-item sair">
          <a href="logout.php" class="nav-link mr-2 waves-effect waves-light">Sair</a>
      </li>
    </ul>
  </div>
</nav><br><br><br><br><br><br><br>
			<div class="divisao">

	<form name="from" action="insere.php" method="post" target="destino" onsubmit="abre('empresas.php?eas=1')" enctype="multipart/form-data">

	

	
			<h1 class="text-center">Cadastro - Dados da Empresa</h1>
				<div class="container">
  					<div class="form-group col-xs-12 row">
	  					<div class="col-sm-12">
		<label>Empresa</label>
			<input type="text" class="form-control">
		</div>
		
		<div class="col-sm-12">
		<label>CNPJ</label>
			<input  name="cnpj" type="text" class="form-control">
		</div>

		<div class="col-sm-12">
	
		<label>Endereço</label>	
			<input name="endereço" type="text" class="form-control">
		</div>


			<div class="col-sm-6">
			<label>Cidade</label>
			<input name="cidade" type="text" class="form-control">
			</div>
			
			<div class="col-sm-6">

			<label>Estado</label>
			
			<select name="uf" class="form-control">
				<option>AC</option>
				<option>AL</option>
				<option>AM</option>
				<option>BA</option>
				<option>CE</option>
				<option>DF</option>
				<option>ES</option>
				<option>GO</option>
				<option>MA</option>
				<option>MG</option>
				<option>MS</option>
				<option>MT</option>
				<option>PA</option>
				<option>PB</option>
				<option>PE</option>
				<option>PI</option>
				<option>PR</option>
				<option>RJ</option>
				<option>RN</option>
				<option>RO</option>
				<option>RR</option>
				<option>RS</option>
				<option>SC</option>
				<option>SE</option>
				<option>SP</option>
				<option>TO</option>
			</select>
		</div>

		<div class="col-sm-6">
		<label>E-mail</label>
		<input class="form-control" name="email" type="email" >
		</div>


		<div class="col-sm-6">
		<label>Telefone</label>
		<input class="form-control" name="telefone" type="text">
		</div>
				
				<div class="col-sm-6">
				<label>Contato Responsável</label>

			<input class="form-control" name="respons" type="text">
		</div>

		<div class="col-sm-6">
		<label>CPF</label>
			<input class="form-control" name="cpf" type="text">
			</div>


			<div class="col-sm-6">
		<label>E-mail</label>

			<input class="form-control" name="email_respons" type="text" >

		</div>

		<div class="col-sm-6">
		<label>Telefone</label>
		<input type="text" name="telrespon" class="form-control">

		</div>

		<div class="col-sm-12">
		<button type="submit" class="btn btn-primary">Cadastrar</button>

		</div>

		</div>
	</div>

</form>











<!-- Importações dos Scripts (Javascript CDN's) -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>
