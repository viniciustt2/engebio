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

            




	

			

    <div class="divisao">

<h1 class="text-center">Buscar equipamento</h1>


        <form method="post" action="search_equip.php">
          <div class="container">
            <div class="form-group col-xs-12 row">
              <div class="col-sm-12">
                <label >Equipamento</label>
                <select id="listipos" name="listipos" class="form-control">
            <option value=''></option><option value='Acelerador Linear'>Acelerador Linear</option><option value='Agitador'>Agitador</option><option value='Amalgamador'>Amalgamador</option><option value='Angiógrafo'>Angiógrafo</option><option value='Aparelho de Anestesia'>Aparelho de Anestesia</option><option value='Aparelho de Raio-X'>Aparelho de Raio-X</option><option value='Aparelho deDensitometria Óssea por Raio X'>Aparelho deDensitometria Óssea por Raio X</option><option value='Aquecedor'>Aquecedor</option><option value='Arco Cirúrgico'>Arco Cirúrgico</option><option value='Aspirador de Gases'>Aspirador de Gases</option><option value='Aspirador de Secreção'>Aspirador de Secreção</option><option value='Audiômetro'>Audiômetro</option><option value='Autoclave'>Autoclave</option><option value='Autorefrator'>Autorefrator</option><option value='Balança'>Balança</option><option value='Balão Intra Aórtico'>Balão Intra Aórtico</option><option value='Banho Maria'>Banho Maria</option><option value='Berço Aquecido'>Berço Aquecido</option><option value='BIPAP'>BIPAP</option><option value='Bisturi'>Bisturi</option><option value='Bomba'>Bomba</option><option value='Cama'>Cama</option><option value='Campímetro'>Campímetro</option><option value='Capela de FluxoLaminar'>Capela de FluxoLaminar</option><option value='Capnógrafo'>Capnógrafo</option><option value='Cardiotocógrafo'>Cardiotocógrafo</option><option value='Cardioversor Desfibrilador'>Cardioversor Desfibrilador</option><option value='Cauterizador'>Cauterizador</option><option value='Centrífuga'>Centrífuga</option><option value='Coagulador'>Coagulador</option><option value='Colposcópio'>Colposcópio</option><option value='Coluna Pantográfica'>Coluna Pantográfica</option><option value='Contador de Células'>Contador de Células</option><option value='CPAP'>CPAP</option><option value='Deionizador'>Deionizador</option><option value='Destilador de Água'>Destilador de Água</option><option value='Detector'>Detector</option><option value='Digitalizador de Imagens'>Digitalizador de Imagens</option><option value='Ecobiômetro'>Ecobiômetro</option><option value='Eletrocardiógrafo'>Eletrocardiógrafo</option><option value='Eletroencefalógrafo'>Eletroencefalógrafo</option><option value='Eletrômetro'>Eletrômetro</option><option value='Eletromiógrafo'>Eletromiógrafo</option><option value='Endoscópio Flexível'>Endoscópio Flexível</option><option value='Ergometria'>Ergometria</option><option value='Esfigmomanômetro'>Esfigmomanômetro</option><option value='Espectrofotômetro'>Espectrofotômetro</option><option value='Estimulador Neuro- Muscular'>Estimulador Neuro- Muscular</option><option value='Estufa'>Estufa</option><option value='Facoemulsificador'>Facoemulsificador</option><option value='Foco Cirúrgico'>Foco Cirúrgico</option><option value='Fonte de Luz'>Fonte de Luz</option><option value='Fotômetro'>Fotômetro</option><option value='Fototerapia'>Fototerapia</option><option value='Gerador'>Gerador</option><option value='Glicosímetro'>Glicosímetro</option><option value='Homogeneizador de Bolsa de Sangue'>Homogeneizador de Bolsa de Sangue</option><option value='ImpedanciômetroImitanciômetro'>ImpedanciômetroImitanciômetro</option><option value='Impressora'>Impressora</option><option value='Incubadora'>Incubadora</option><option value='Insuflador'>Insuflador</option><option value='Lâmpada de Fenda'>Lâmpada de Fenda</option><option value='Laser para Oftalmologia'>Laser para Oftalmologia</option><option value='Lavadora'>Lavadora</option><option value='Lensômetro'>Lensômetro</option><option value='Litotriptor'>Litotriptor</option><option value='Mamógrafo'>Mamógrafo</option><option value='Máquina de Circulação Extracorpórea'>Máquina de Circulação Extracorpórea</option><option value='Máquina de Hemodiálise'>Máquina de Hemodiálise</option><option value='Máquina de Osmose Reversa'>Máquina de Osmose Reversa</option><option value='Medidor de PH'>Medidor de PH</option><option value='Mesa'>Mesa</option><option value='Microscópio'>Microscópio</option><option value='Micrótomo Micrótomo Semi'>Micrótomo Micrótomo Semi</option><option value='Módulo'>Módulo</option><option value='Monitor'>Monitor</option><option value='Oftalmoscópio'>Oftalmoscópio</option><option value='Otoscópio'>Otoscópio</option><option value='Oxímetro de Pulso'>Oxímetro de Pulso</option><option value='Perfurador'>Perfurador</option><option value='Polígrafo'>Polígrafo</option><option value='Processadora'>Processadora</option><option value='Projetor'>Projetor</option><option value='Refratômetro'>Refratômetro</option><option value='Refrator'>Refrator</option><option value='Ressonância Nuclear Magnétic'>Ressonância Nuclear Magnétic</option><option value='Retinógrafo'>Retinógrafo</option><option value='Seladora'>Seladora</option><option value='Sistema de Colposcopia'>Sistema de Colposcopia</option><option value='Tomógrafo'>Tomógrafo</option><option value='Tonômetro deAplanação'>Tonômetro deAplanação</option><option value='Topógrafo de Córnea'>Topógrafo de Córnea</option><option value='Ventilador Pulmonar'>Ventilador Pulmonar</option><option value='Vitreófago'>Vitreófago</option>        </select>

              </div>

              <div class="col-sm-12">
                <label>Fabricante</label>
                <input type="text" name="fab" class="form-control">
              </div>

              <div class=" col-sm-12">
                <label>Modelo</label>
                <input type="text" name="model" class="form-control">
              </div>

              <div class="col-sm-12">
                <label>Localização</label>
                <input type="text" name="local" class="form-control">
              </div>

              <div class="col-sm-6">
                <label>Tombamento</label>
                <input type="text" name="tomb" class="form-control">
          </div>  
              <div class="col-sm-6">
                <label>Nº de serie</label>
                <input type="text" name="serie" class="form-control">
              </div>
              

            </div>
            
            <button type="submit" class="btn btn-primary ">Enviar</button>
          </div> <!-- fim do container -->

        </form>

        </div>
		  
     
    

		
</body>
</html>