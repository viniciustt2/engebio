<!DOCTYPE html>
<html>
<head>
	<title>Contratos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contratos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contrato.php">Cadastrar</a>
          <a class="dropdown-item" href="busca_contrato.php">  Buscar</a>
          
        </div>
      </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Gráficos</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Arquivos</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Agendar manuntenção</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="#" class="nav-link mr-2 waves-effect waves-light">Criticas</a>
                                    </li>
                                    <li class="nav-item">
                                  <a href="cadastro_empresas.php" class="nav-link mr-2 waves-effect waves-light">Cadastrar empresas</a>
                                    </li>

                                   
                                  

                               


       <li class="nav-item sair">
          <a href="logout.php" class="nav-link mr-2 waves-effect waves-light">Sair</a>
      </li>
    </ul>
  </div>
</nav><br><br><br><br><br><br>





  <div class="divisao">

<h1 class="text-center">Cadastrar contratos</h1>


        <form method="post" action="contrato_php.php">
          <div class="container">
            <div class="form-group col-xs-12 row">
              <div class="col-sm-12">
                <label >Equipamento</label>
                <select id="listipos" name="listipos" class="form-control">
            <option value=''></option><option value='Acelerador Linear'>Acelerador Linear</option><option value='Agitador'>Agitador</option><option value='Amalgamador'>Amalgamador</option><option value='Angiógrafo'>Angiógrafo</option><option value='Aparelho de Anestesia'>Aparelho de Anestesia</option><option value='Aparelho de Raio-X'>Aparelho de Raio-X</option><option value='Aparelho deDensitometria Óssea por Raio X'>Aparelho deDensitometria Óssea por Raio X</option><option value='Aquecedor'>Aquecedor</option><option value='Arco Cirúrgico'>Arco Cirúrgico</option><option value='Aspirador de Gases'>Aspirador de Gases</option><option value='Aspirador de Secreção'>Aspirador de Secreção</option><option value='Audiômetro'>Audiômetro</option><option value='Autoclave'>Autoclave</option><option value='Autorefrator'>Autorefrator</option><option value='Balança'>Balança</option><option value='Balão Intra Aórtico'>Balão Intra Aórtico</option><option value='Banho Maria'>Banho Maria</option><option value='Berço Aquecido'>Berço Aquecido</option><option value='BIPAP'>BIPAP</option><option value='Bisturi'>Bisturi</option><option value='Bomba'>Bomba</option><option value='Cama'>Cama</option><option value='Campímetro'>Campímetro</option><option value='Capela de FluxoLaminar'>Capela de FluxoLaminar</option><option value='Capnógrafo'>Capnógrafo</option><option value='Cardiotocógrafo'>Cardiotocógrafo</option><option value='Cardioversor Desfibrilador'>Cardioversor Desfibrilador</option><option value='Cauterizador'>Cauterizador</option><option value='Centrífuga'>Centrífuga</option><option value='Coagulador'>Coagulador</option><option value='Colposcópio'>Colposcópio</option><option value='Coluna Pantográfica'>Coluna Pantográfica</option><option value='Contador de Células'>Contador de Células</option><option value='CPAP'>CPAP</option><option value='Deionizador'>Deionizador</option><option value='Destilador de Água'>Destilador de Água</option><option value='Detector'>Detector</option><option value='Digitalizador de Imagens'>Digitalizador de Imagens</option><option value='Ecobiômetro'>Ecobiômetro</option><option value='Eletrocardiógrafo'>Eletrocardiógrafo</option><option value='Eletroencefalógrafo'>Eletroencefalógrafo</option><option value='Eletrômetro'>Eletrômetro</option><option value='Eletromiógrafo'>Eletromiógrafo</option><option value='Endoscópio Flexível'>Endoscópio Flexível</option><option value='Ergometria'>Ergometria</option><option value='Esfigmomanômetro'>Esfigmomanômetro</option><option value='Espectrofotômetro'>Espectrofotômetro</option><option value='Estimulador Neuro- Muscular'>Estimulador Neuro- Muscular</option><option value='Estufa'>Estufa</option><option value='Facoemulsificador'>Facoemulsificador</option><option value='Foco Cirúrgico'>Foco Cirúrgico</option><option value='Fonte de Luz'>Fonte de Luz</option><option value='Fotômetro'>Fotômetro</option><option value='Fototerapia'>Fototerapia</option><option value='Gerador'>Gerador</option><option value='Glicosímetro'>Glicosímetro</option><option value='Homogeneizador de Bolsa de Sangue'>Homogeneizador de Bolsa de Sangue</option><option value='ImpedanciômetroImitanciômetro'>ImpedanciômetroImitanciômetro</option><option value='Impressora'>Impressora</option><option value='Incubadora'>Incubadora</option><option value='Insuflador'>Insuflador</option><option value='Lâmpada de Fenda'>Lâmpada de Fenda</option><option value='Laser para Oftalmologia'>Laser para Oftalmologia</option><option value='Lavadora'>Lavadora</option><option value='Lensômetro'>Lensômetro</option><option value='Litotriptor'>Litotriptor</option><option value='Mamógrafo'>Mamógrafo</option><option value='Máquina de Circulação Extracorpórea'>Máquina de Circulação Extracorpórea</option><option value='Máquina de Hemodiálise'>Máquina de Hemodiálise</option><option value='Máquina de Osmose Reversa'>Máquina de Osmose Reversa</option><option value='Medidor de PH'>Medidor de PH</option><option value='Mesa'>Mesa</option><option value='Microscópio'>Microscópio</option><option value='Micrótomo Micrótomo Semi'>Micrótomo Micrótomo Semi</option><option value='Módulo'>Módulo</option><option value='Monitor'>Monitor</option><option value='Oftalmoscópio'>Oftalmoscópio</option><option value='Otoscópio'>Otoscópio</option><option value='Oxímetro de Pulso'>Oxímetro de Pulso</option><option value='Perfurador'>Perfurador</option><option value='Polígrafo'>Polígrafo</option><option value='Processadora'>Processadora</option><option value='Projetor'>Projetor</option><option value='Refratômetro'>Refratômetro</option><option value='Refrator'>Refrator</option><option value='Ressonância Nuclear Magnétic'>Ressonância Nuclear Magnétic</option><option value='Retinógrafo'>Retinógrafo</option><option value='Seladora'>Seladora</option><option value='Sistema de Colposcopia'>Sistema de Colposcopia</option><option value='Tomógrafo'>Tomógrafo</option><option value='Tonômetro deAplanação'>Tonômetro deAplanação</option><option value='Topógrafo de Córnea'>Topógrafo de Córnea</option><option value='Ventilador Pulmonar'>Ventilador Pulmonar</option><option value='Vitreófago'>Vitreófago</option>        </select>

              </div>

              <div class="col-sm-12">
                <label>Empresa responsável</label>
                <input type="text" name="fab" class="form-control">
              </div>

              <div class=" col-sm-4">
                <label>Data de validade</label>
                <input type="date" name="data" class="form-control">
              </div>

              <div class="col-sm-4">
                <label>Aviso prévio</label>
                <input type="text" name="aviso" class="form-control">
              </div>

              <div class="col-sm-4">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control">
          </div>  
              
              

            </div>
            
            <button type="submit" class="btn btn-primary ">Enviar</button>
          </div> <!-- fim do container -->

        </form>

        </div>











 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>