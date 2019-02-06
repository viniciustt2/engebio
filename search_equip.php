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
        <!-- Importações das folhas de estilo -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
        <link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>






        <style>*{font-size:15px;}nav.navbar{height:50px;}
            @media screen and (max-width: 500px){
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

                   .tamanho{

                    position: relative;
                    left: -10%;
                     width: 80%;
                     height: 50%;
                   }
                   table thead td{
                         background-color:#007bff;
                                            }
                                            input{
                                              position: relative;
                                              left: 15%;
                                            }

               }@media screen and (min-width:501px ) and (max-width: 991px){
                       table thead td{
                         background-color:#007bff;
                                            }
                                            input{
                                              position: relative;
                                              left: 30%;
                                            }
                                             #menu{
              overflow: auto;
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

                   .tamanho{

                    position: relative;
                    left: -10%;
                     width: 80%;
                     height: 50%;
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
                                        
                                            table thead td{
                                              background-color:#007bff;
                                            }

                                          }

             


          </style>
          
</head>
<body>
      <h1 class="text-center">Resultado da consulta</h1>   

       


<?php 
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $dbname = "ihospital";
  //Criar a conexao
  $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
  $verifica=0;
$listipos = filter_input(INPUT_POST, 'listipos',FILTER_SANITIZE_STRING);
$fab = filter_input(INPUT_POST, 'fab',FILTER_SANITIZE_STRING);
$model=filter_input(INPUT_POST, 'model',FILTER_SANITIZE_STRING);
$local=filter_input(INPUT_POST, 'local',FILTER_SANITIZE_STRING);
$tomb=filter_input(INPUT_POST, 'tomb',FILTER_SANITIZE_STRING);
$serie=filter_input(INPUT_POST, 'serie',FILTER_SANITIZE_STRING);

if(!empty($listipos) or !empty($fab) or !empty($model)or !empty($local)or !empty($tomb)or !empty($serie)){
    $result_cursos = "SELECT * FROM equip WHERE equipamento LIKE '%$listipos%' and fabricante LIKE '%$fab%' and tipo LIKE '%$model%' and local LIKE '%$local%' and tomb_patrimonio LIKE '%$tomb%' and num_serie LIKE '%$serie%'LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $verifica = mysqli_num_rows($resultado_cursos);
  }elseif(!empty($listipos)){    
    $result_cursos = "SELECT * FROM equip WHERE equipamento LIKE '%$listipos%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);    
    $verifica = mysqli_num_rows($resultado_cursos);
  }elseif(!empty($fab)){    
    $result_cursos = "SELECT * FROM equip WHERE fabricante LIKE '%$fab%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);  
    $verifica = mysqli_num_rows($resultado_cursos); 
  }elseif(!empty($model)){    
    $result_cursos = "SELECT * FROM equip WHERE tipo LIKE '%$model%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);  
    $verifica = mysqli_num_rows($resultado_cursos); 
  }
          if($verifica > 0){

    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){

      ?>
      
      <div class="container exibir">  
        <table class="table table-dark table-bordered table-hover">
    <thead>
      <tr>
        <th>Tag</th>
        <th>equipamento</th>
        <th>fabricante</th>
        <th>setor</th>
        <th>modelo</th>
        <th>local</th>
        <th>tomb</th>
        <th>serie</th>

       

      </tr>
    </thead>
    <tbody>
      <?php
        ?>
        <tr>
          <th><?php echo $rows_cursos['TAG']; ?></th>
          <td><?php echo $rows_cursos['equipamento']; ?></td>
          <td><?php echo $rows_cursos['fabricante']; ?></td>
          <td><?php echo $rows_cursos['setor']; ?></td>
          <td><?php echo $rows_cursos['tipo']; ?></td>
          <td><?php echo $rows_cursos['local']; ?></td>
          <td><?php echo $rows_cursos['tomb_patrimonio']; ?></td>
          <td><?php echo $rows_cursos['num_serie']; ?></td>

        </tr>
        <?php
      }?>
    </tbody>
  </table>
          </div>


<?php     
}else  {
echo"<script>alert('dados n encontrados');window.history.back();</script>
";
} ?>

</body>
</html>