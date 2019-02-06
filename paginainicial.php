<?php 

require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
    header('Location: login.php');
endif;
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>iHospital</title>
        <!-- Importações das folhas de estilo -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">
    <style>*{font-size:15px;}nav.navbar{height:50px;}</style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
                <a class="navbar-brand" href="#" style="font-size:15px;"></a>
                <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                
                                <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownItem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EQUIPAMENTO</a>
                                   <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownItem">
                                       <a class="dropdown-item waves-effect waves-light" href="EQUIPAMENTO/CADASTRO/equip.php">CADASTRAR</a>
                                       <a class="dropdown-item waves-effect waves-light" href="busca_equip.php">BUSCA</a>
                                   </div>
                                </li>
                                

                                     <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownItem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABERTURTURA DE O.S</a>
                                   <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownItem">
                                       <a class="dropdown-item waves-effect waves-light" href="equip.php">CADASTRAR</a>
                                       <a class="dropdown-item waves-effect waves-light" href="busca_equip.php">BUSCA</a>
                                   </div>
                                </li>

                               

                                <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownItem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FINANCEIRO</a>
                                   <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownItem">
                                       <a class="dropdown-item waves-effect waves-light" href=""></a>
                                       
                                   </div>
                                </li>


                                 <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle waves-effect waves-light" id="dropdownItem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ESTOQUE</a>
                                   <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownItem">
                                   <a class="dropdown-item waves-effect waves-light" href="">BUSCA</a>
                                   </div>
                                </li>

                                <li class="nav-item">
                                        <a href="logout.php" class="nav-link mr-2 waves-effect waves-light">Sair</a>
                                </li>
                        </ul>
                </div>
        </nav>
        <center>
            <img src="ihospital.jpg" width="250" height="80"><br>
           

        </center>
             <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>


<div class="hiddendiv common"></div></body>
</html>
