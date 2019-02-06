<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>iHospital</title>
        <!-- Importações das folhas de estilo -->
            <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">
    <style>*{font-size:15px;}nav.navbar{height:50px;}</style>
</head>
<body>



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
                                           
                                                .busca{
                                                  position: relative;
                                                  top: 50%;
                                                  color: green;
                                                }            
                                          }

             


</style>
        
<div class="container">
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
<form method="post" action="search_equip.php">
  

  
    <h1 class="text-center">ABRIR OS A PARTIR DO CADASTRO 
</h1>
    <div class="container">
            <div class="form-group col-xs-12 row">
              <div class="col-sm-12">
      <label>Equipamento</label>
      
        <select name="equip" id="listipos" class="form-control">
            <option value=""></option><option value="Acelerador Linear">Acelerador Linear</option><option value="Agitador">Agitador</option><option value="Amalgamador">Amalgamador</option><option value="Angiógrafo">Angiógrafo</option><option value="Aparelho de Anestesia">Aparelho de Anestesia</option><option value="Aparelho de Raio-X">Aparelho de Raio-X</option><option value="Aparelho deDensitometria Óssea por Raio X">Aparelho deDensitometria Óssea por Raio X</option><option value="Aquecedor">Aquecedor</option><option value="Arco Cirúrgico">Arco Cirúrgico</option><option value="Aspirador de Gases">Aspirador de Gases</option><option value="Aspirador de Secreção">Aspirador de Secreção</option><option value="Audiômetro">Audiômetro</option><option value="Autoclave">Autoclave</option><option value="Autorefrator">Autorefrator</option><option value="Balança">Balança</option><option value="Balão Intra Aórtico">Balão Intra Aórtico</option><option value="Banho Maria">Banho Maria</option><option value="Berço Aquecido">Berço Aquecido</option><option value="BIPAP">BIPAP</option><option value="Bisturi">Bisturi</option><option value="Bomba">Bomba</option><option value="Cama">Cama</option><option value="Campímetro">Campímetro</option><option value="Capela de FluxoLaminar">Capela de FluxoLaminar</option><option value="Capnógrafo">Capnógrafo</option><option value="Cardiotocógrafo">Cardiotocógrafo</option><option value="Cardioversor Desfibrilador">Cardioversor Desfibrilador</option><option value="Cauterizador">Cauterizador</option><option value="Centrífuga">Centrífuga</option><option value="Coagulador">Coagulador</option><option value="Colposcópio">Colposcópio</option><option value="Coluna Pantográfica">Coluna Pantográfica</option><option value="Contador de Células">Contador de Células</option><option value="CPAP">CPAP</option><option value="Deionizador">Deionizador</option><option value="Destilador de Água">Destilador de Água</option><option value="Detector">Detector</option><option value="Digitalizador de Imagens">Digitalizador de Imagens</option><option value="Ecobiômetro">Ecobiômetro</option><option value="Eletrocardiógrafo">Eletrocardiógrafo</option><option value="Eletroencefalógrafo">Eletroencefalógrafo</option><option value="Eletrômetro">Eletrômetro</option><option value="Eletromiógrafo">Eletromiógrafo</option><option value="Endoscópio Flexível">Endoscópio Flexível</option><option value="Ergometria">Ergometria</option><option value="Esfigmomanômetro">Esfigmomanômetro</option><option value="Espectrofotômetro">Espectrofotômetro</option><option value="Estimulador Neuro- Muscular">Estimulador Neuro- Muscular</option><option value="Estufa">Estufa</option><option value="Facoemulsificador">Facoemulsificador</option><option value="Foco Cirúrgico">Foco Cirúrgico</option><option value="Fonte de Luz">Fonte de Luz</option><option value="Fotômetro">Fotômetro</option><option value="Fototerapia">Fototerapia</option><option value="Gerador">Gerador</option><option value="Glicosímetro">Glicosímetro</option><option value="Homogeneizador de Bolsa de Sangue">Homogeneizador de Bolsa de Sangue</option><option value="ImpedanciômetroImitanciômetro">ImpedanciômetroImitanciômetro</option><option value="Impressora">Impressora</option><option value="Incubadora">Incubadora</option><option value="Insuflador">Insuflador</option><option value="Lâmpada de Fenda">Lâmpada de Fenda</option><option value="Laser para Oftalmologia">Laser para Oftalmologia</option><option value="Lavadora">Lavadora</option><option value="Lensômetro">Lensômetro</option><option value="Litotriptor">Litotriptor</option><option value="Mamógrafo">Mamógrafo</option><option value="Máquina de Circulação Extracorpórea">Máquina de Circulação Extracorpórea</option><option value="Máquina de Hemodiálise">Máquina de Hemodiálise</option><option value="Máquina de Osmose Reversa">Máquina de Osmose Reversa</option><option value="Medidor de PH">Medidor de PH</option><option value="Mesa">Mesa</option><option value="Microscópio">Microscópio</option><option value="Micrótomo Micrótomo Semi">Micrótomo Micrótomo Semi</option><option value="Módulo">Módulo</option><option value="Monitor">Monitor</option><option value="Oftalmoscópio">Oftalmoscópio</option><option value="Otoscópio">Otoscópio</option><option value="Oxímetro de Pulso">Oxímetro de Pulso</option><option value="Perfurador">Perfurador</option><option value="Polígrafo">Polígrafo</option><option value="Processadora">Processadora</option><option value="Projetor">Projetor</option><option value="Refratômetro">Refratômetro</option><option value="Refrator">Refrator</option><option value="Ressonância Nuclear Magnétic">Ressonância Nuclear Magnétic</option><option value="Retinógrafo">Retinógrafo</option><option value="Seladora">Seladora</option><option value="Sistema de Colposcopia">Sistema de Colposcopia</option><option value="Tomógrafo">Tomógrafo</option><option value="Tonômetro deAplanação">Tonômetro deAplanação</option><option value="Topógrafo de Córnea">Topógrafo de Córnea</option><option value="Ventilador Pulmonar">Ventilador Pulmonar</option><option value="Vitreófago">Vitreófago</option>       
             </select>
            </div>



<div class="col-sm-12">
<label>Fabricante</label>

                
<select onchange="ModifyFormFabr1(-1)" name="fabricante" class="form-control">
    <option value="" selected=""></option>
    <option value=""></option>
    <option value="AGFA">AGFA</option>
    <option value="Alcon Surgical">Alcon Surgical</option>
    <option value="Arja">Arja</option>
    <option value="Artmed">Artmed</option>
    <option value="Barco">Barco</option>
    <option value="Baumer">Baumer</option>
    <option value="Bel">Bel</option>
    <option value="Bird">Bird</option>
    <option value="Bosch">Bosch</option>
    <option value="Brasinox">Brasinox</option>
    <option value="Brastemp">Brastemp</option>
    <option value="Brave">Brave</option>
    <option value="BSL">BSL</option>
    <option value="C-MAR">C-MAR</option>
    <option value="Carci">Carci</option>
    <option value="Cauduro">Cauduro</option>
    <option value="Cemap">Cemap</option>
    <option value="Centribio">Centribio</option>
    <option value="Centurion">Centurion</option>
    <option value="Cliane">Cliane</option>
    <option value="CMOS Drake ">CMOS Drake </option>
    <option value="Codman">Codman</option>
    <option value="Consul">Consul</option>
    <option value="Covidien">Covidien</option>
    <option value="CYZ">CYZ</option>
    <option value="Dako">Dako</option>
    <option value="Danier Medtech">Danier Medtech</option>
    <option value="Deltronix">Deltronix</option>
    <option value="DF Vasconcelos">DF Vasconcelos</option>
    <option value="DFV">DFV</option>
    <option value="Diapump">Diapump</option>
    <option value="Digicare">Digicare</option>
    <option value="Dixtal">Dixtal</option>
    <option value="Drageb">Drageb</option>
    <option value="Drager">Drager</option>
    <option value="dsfgsd">dsfgsd</option>
    <option value="Ecafix">Ecafix</option>
    <option value="Edlab">Edlab</option>
    <option value="Electrolux">Electrolux</option>
    <option value="EMAI">EMAI</option>
    <option value="EMB">EMB</option>
    <option value="Embreex">Embreex</option>
    <option value="Engefrio">Engefrio</option>
    <option value="Eppendora">Eppendora</option>
    <option value="Ergo-Fit">Ergo-Fit</option>
    <option value="Esmaltec">Esmaltec</option>
    <option value="EVLab">EVLab</option>
    <option value="Eyetec">Eyetec</option>
    <option value="Fabbe">Fabbe</option>
    <option value="Fabricante">Fabricante</option>
    <option value="Fanem">Fanem</option>
    <option value="Fanem diampump">Fanem diampump</option>
    <option value="FBDE">FBDE</option>
    <option value="Filizola">Filizola</option>
    <option value="Frenesius Kabi">Frenesius Kabi</option>
    <option value="Fricon">Fricon</option>
    <option value="Fujinom">Fujinom</option>
    <option value="Funcionando">Funcionando</option>
    <option value="Futura">Futura</option>
    <option value="Fysiomed">Fysiomed</option>
    <option value="GE">GE</option>
    <option value="Gehaka">Gehaka</option>
    <option value="Gigante">Gigante</option>
    <option value="GPUS PAC">GPUS PAC</option>
    <option value="Haag-streit">Haag-streit</option>
    <option value="HAG-Streit">HAG-Streit</option>
    <option value="HB Hospitalar">HB Hospitalar</option>
    <option value="Heine">Heine</option>
    <option value="Helmer">Helmer</option>
    <option value="Heraeus">Heraeus</option>
    <option value="Hologic ">Hologic </option>
    <option value="Hospimetal">Hospimetal</option>
    <option value="HT">HT</option>
    <option value="Hund">Hund</option>
    <option value="Huvitz">Huvitz</option>
    <option value="Ibramed">Ibramed</option>
    <option value="Iira">Iira</option>
    <option value="IL">IL</option>
    <option value="Inala Med">Inala Med</option>
    <option value="Inalamed">Inalamed</option>
    <option value="Inami">Inami</option>
    <option value="Indrel">Indrel</option>
    <option value="Instramed">Instramed</option>
    <option value="Intecal">Intecal</option>
    <option value="Intermed">Intermed</option>
    <option value="Invivo">Invivo</option>
    <option value="Jundflash">Jundflash</option>
    <option value="Kacil">Kacil</option>
    <option value="KLD Biosistemas">KLD Biosistemas</option>
    <option value="Konex">Konex</option>
    <option value="Laborline">Laborline</option>
    <option value="Leica">Leica</option>
    <option value="Leucotron">Leucotron</option>
    <option value="LF">LF</option>
    <option value="Lido">Lido</option>
    <option value="Lifemed">Lifemed</option>
    <option value="Linet">Linet</option>
    <option value="Luferco">Luferco</option>
    <option value="Lupe">Lupe</option>
    <option value="Luxvision">Luxvision</option>
    <option value="Macrotec">Macrotec</option>
    <option value="Maquet">Maquet</option>
    <option value="Marcosul">Marcosul</option>
    <option value="Medicate">Medicate</option>
    <option value="Mediphacos">Mediphacos</option>
    <option value="Medisa">Medisa</option>
    <option value="MedPEJ">MedPEJ</option>
    <option value="Medtronic">Medtronic</option>
    <option value="mercedes imec">mercedes imec</option>
    <option value="Microem">Microem</option>
    <option value="Micromed">Micromed</option>
    <option value="Moviment">Moviment</option>
    <option value="Nellcor">Nellcor</option>
    <option value="Newton">Newton</option>
    <option value="Nikon">Nikon</option>
    <option value="Olidef CZ">Olidef CZ</option>
    <option value="Olympus">Olympus</option>
    <option value="Omnimed">Omnimed</option>
    <option value="Opto">Opto</option>
    <option value="Oxypleth">Oxypleth</option>
    <option value="Philips">Philips</option>
    <option value="Phoenix">Phoenix</option>
    <option value="Pratice">Pratice</option>
    <option value="Presvac">Presvac</option>
    <option value="Proaction">Proaction</option>
    <option value="Promedon">Promedon</option>
    <option value="Quincy Lab (QL)">Quincy Lab (QL)</option>
    <option value="RDE">RDE</option>
    <option value="Renascer">Renascer</option>
    <option value="Riester">Riester</option>
    <option value="Rotal">Rotal</option>
    <option value="Sanyo">Sanyo</option>
    <option value="Shinnippon">Shinnippon</option>
    <option value="SIemens">SIemens</option>
    <option value="Sislab">Sislab</option>
    <option value="Soehnle">Soehnle</option>
    <option value="Sonosite">Sonosite</option>
    <option value="Sony">Sony</option>
    <option value="Start II">Start II</option>
    <option value="STORZ">STORZ</option>
    <option value="Takaoka">Takaoka</option>
    <option value="TEB">TEB</option>
    <option value="Teruflex">Teruflex</option>
    <option value="teste">teste</option>
    <option value="Toledo">Toledo</option>
    <option value="Urano">Urano</option>
    <option value="Valleylab">Valleylab</option>
    <option value="Veco">Veco</option>
    <option value="Versamed">Versamed</option>
    <option value="Welmy">Welmy</option>
    <option value="WEM">WEM</option>
    <option value="Zeiss">Zeiss</option>
</select>
</div>

    <label>Modelo</label>
    <div class="col-sm-12">
        <select name="modelob" id="model" class="form-control">
            <option value=""></option><option value=""></option><option value=" Aparelho de Anestesia para ambiente de Ressonância Magnética."> Aparelho de Anestesia para ambiente de Ressonância Magnética.</option><option value=" Automático"> Automático</option><option value=" CR Digitalizador de Imagens Radiográficas (monocassete)"> CR Digitalizador de Imagens Radiográficas (monocassete)</option><option value=" Projetor Oftalmológico"> Projetor Oftalmológico</option><option value=" Sistema de Hemodinâmica"> Sistema de Hemodinâmica</option><option value="(Eletrocardiograma)">(Eletrocardiograma)</option><option value="Acelerador Linear de Fótons e Elétrons (dual 10 MV)">Acelerador Linear de Fótons e Elétrons (dual 10 MV)</option><option value="Acelerador Linear de Fótons e Elétrons (dual 15 MV)">Acelerador Linear de Fótons e Elétrons (dual 15 MV)</option><option value="Acelerador Linear só de Fótons (monoenergético 6 MV)">Acelerador Linear só de Fótons (monoenergético 6 MV)</option><option value="Agitador com incubadora">Agitador com incubadora</option><option value="Agitador de Kline">Agitador de Kline</option><option value="Agitador de Plaquetas">Agitador de Plaquetas</option><option value="Agitador Magnético">Agitador Magnético</option><option value="Agitador Orbital de Tubos">Agitador Orbital de Tubos</option><option value="Aparelho de Anestesia Convencional">Aparelho de Anestesia Convencional</option><option value="Aparelho de Raio X Fixo Convencional">Aparelho de Raio X Fixo Convencional</option><option value="Aparelho de Raio X Fixo Digital">Aparelho de Raio X Fixo Digital</option><option value="Aparelho de Raio X Móvel">Aparelho de Raio X Móvel</option><option value="Aparelho de Raio X Odontológico">Aparelho de Raio X Odontológico</option><option value="Aparelho de Raio X Telecomandado">Aparelho de Raio X Telecomandado</option><option value="Aquecedor de Ambiente">Aquecedor de Ambiente</option><option value="Aquecedor de Fluido">Aquecedor de Fluido</option><option value="Aquecedor de manta térmica">Aquecedor de manta térmica</option><option value="Arco em &quot;C&quot; Móvel Convencional">Arco em "C" Móvel Convencional</option><option value="Arco em &quot;C&quot; Móvel Digital">Arco em "C" Móvel Digital</option><option value="Aspirador de Secreção Elétrico Móvel">Aspirador de Secreção Elétrico Móvel</option><option value="Autoclave Formaldeído">Autoclave Formaldeído</option><option value="Autoclave Horizontal (151 a 350litros)">Autoclave Horizontal (151 a 350litros)</option><option value="Autoclave Horizontal (75 a 150 litros)">Autoclave Horizontal (75 a 150 litros)</option><option value="Autoclave Horizontal (acima de 350litros)">Autoclave Horizontal (acima de 350litros)</option><option value="Autoclave Horizontal de Mesa">Autoclave Horizontal de Mesa</option><option value="Autoclave por Plasma de Peróxido de Hidrogênio">Autoclave por Plasma de Peróxido de Hidrogênio</option><option value="Autoclave Vertical">Autoclave Vertical</option><option value="Autorefrator">Autorefrator</option><option value="Autorefrator com Ceratômetro">Autorefrator com Ceratômetro</option><option value="Balança Analítica">Balança Analítica</option><option value="Balança Antropométrica Eletrônica com capacidade para até 150Kgs">Balança Antropométrica Eletrônica com capacidade para até 150Kgs</option><option value="Balança Antropométrica Eletrônica com capacidade para até 200Kgs">Balança Antropométrica Eletrônica com capacidade para até 200Kgs</option><option value="Balança Antropométrica Eletrônica com capacidade para até 300Kgs">Balança Antropométrica Eletrônica com capacidade para até 300Kgs</option><option value="Balança Antropométrica Mecânica com capacidade para até 150Kgs">Balança Antropométrica Mecânica com capacidade para até 150Kgs</option><option value="Balança Antropométrica Mecânica com capacidade para até 200Kgs">Balança Antropométrica Mecânica com capacidade para até 200Kgs</option><option value="Balança Antropométrica Mecânica com capacidade para até 300Kgs">Balança Antropométrica Mecânica com capacidade para até 300Kgs</option><option value="Balança pediátrica eletrônica com capacidade para até 15Kgs">Balança pediátrica eletrônica com capacidade para até 15Kgs</option><option value="Balança pediátrica eletrônica com capacidade para até 25Kgs">Balança pediátrica eletrônica com capacidade para até 25Kgs</option><option value="Balança pediátrica mecânica com capacidade para até 15Kgs">Balança pediátrica mecânica com capacidade para até 15Kgs</option><option value="Balança pediátrica mecânica com capacidade para até 25Kgs">Balança pediátrica mecânica com capacidade para até 25Kgs</option><option value="Balança semi-analítica">Balança semi-analítica</option><option value="Bicicleta Ergométrica">Bicicleta Ergométrica</option><option value="Bisturi e aspirador ultrassônico">Bisturi e aspirador ultrassônico</option><option value="Bisturi eletrônico">Bisturi eletrônico</option><option value="Bomba de Cobalto">Bomba de Cobalto</option><option value="Bomba de Infusão">Bomba de Infusão</option><option value="Bomba de Infusão de Seringa">Bomba de Infusão de Seringa</option><option value="Bomba de Sucção de Leite Elétrica">Bomba de Sucção de Leite Elétrica</option><option value="Bomba Injetora de Contraste">Bomba Injetora de Contraste</option><option value="Cama Elétrica Hospitalar">Cama Elétrica Hospitalar</option><option value="Cama PPP (Pré Parto, Parto e Pós Parto)">Cama PPP (Pré Parto, Parto e Pós Parto)</option><option value="Capela de Fluxo Laminar Horizontal">Capela de Fluxo Laminar Horizontal</option><option value="Capela de Fluxo Laminar Vertical">Capela de Fluxo Laminar Vertical</option><option value="Cardioversor Desfibrilador Bifásico">Cardioversor Desfibrilador Bifásico</option><option value="Cardioversor Desfibrilador Monofásico">Cardioversor Desfibrilador Monofásico</option><option value="Centrífuga Refrigerada">Centrífuga Refrigerada</option><option value="Centrífuga Sorológica Laboratorial">Centrífuga Sorológica Laboratorial</option><option value="Cicloergômetro Horizontal">Cicloergômetro Horizontal</option><option value="Coagulador de Argônio">Coagulador de Argônio</option><option value="Contador de Células Automático">Contador de Células Automático</option><option value="Contador de Células Manual">Contador de Células Manual</option><option value="CR Digitalizador de Imagens Radiográficas (multicassetes)">CR Digitalizador de Imagens Radiográficas (multicassetes)</option><option value="Deionizador de Água">Deionizador de Água</option><option value="Desfibrilador Externo Automático (DEA)">Desfibrilador Externo Automático (DEA)</option><option value="Detector Detector Fetal">Detector Detector Fetal</option><option value="Esfigmomanômetro Coluna de Mercúrio">Esfigmomanômetro Coluna de Mercúrio</option><option value="Esfigmomanômetro Mesa Parede">Esfigmomanômetro Mesa Parede</option><option value="Esfigmomanômetro Pedestal Aneróide">Esfigmomanômetro Pedestal Aneróide</option><option value="Estacionária">Estacionária</option><option value="Esteira Ergométrica">Esteira Ergométrica</option><option value="Estufa de Cultura Biológica">Estufa de Cultura Biológica</option><option value="Estufa de Secagem e Esterilização">Estufa de Secagem e Esterilização</option><option value="ETCO3">ETCO3</option><option value="Fibrobroncoscópio">Fibrobroncoscópio</option><option value="Fibrocolonoscópio">Fibrocolonoscópio</option><option value="Fibroduodenoscópio">Fibroduodenoscópio</option><option value="Foco Cirúrgico Auxiliar (móvel)">Foco Cirúrgico Auxiliar (móvel)</option><option value="Foco Cirúrgico de Teto">Foco Cirúrgico de Teto</option><option value="Fotocoagulador a Laser">Fotocoagulador a Laser</option><option value="Gerador de Marcapasso">Gerador de Marcapasso</option><option value="Greens">Greens</option><option value="Homogeneizador de Sangue">Homogeneizador de Sangue</option><option value="Homogeneizador Sanguíneo">Homogeneizador Sanguíneo</option><option value="IBP">IBP</option><option value="Impressora Dry de Filmes Radiológicos">Impressora Dry de Filmes Radiológicos</option><option value="Impressora Térmica (vídeo printer)">Impressora Térmica (vídeo printer)</option><option value="Incubadora de CO2">Incubadora de CO2</option><option value="Incubadora Neonatal">Incubadora Neonatal</option><option value="Incubadora Neonatal de Transporte">Incubadora Neonatal de Transporte</option><option value="Lavadora Termodesinfectora">Lavadora Termodesinfectora</option><option value="Lavadora Ultrassônica">Lavadora Ultrassônica</option><option value="Litotriptor Extracorpóreo">Litotriptor Extracorpóreo</option><option value="Litotriptor Intracorpóreo">Litotriptor Intracorpóreo</option><option value="Mamógrafo Convencional">Mamógrafo Convencional</option><option value="Mamógrafo Digital de Campo Total">Mamógrafo Digital de Campo Total</option><option value="Máquina de Osmose Reversa Convencional">Máquina de Osmose Reversa Convencional</option><option value="Máquina de Osmose Reversa Portátil">Máquina de Osmose Reversa Portátil</option><option value="Medidor de Dênsidade de Urina">Medidor de Dênsidade de Urina</option><option value="Medidor de Índice de Refração">Medidor de Índice de Refração</option><option value="Mesa Cirúrgica Elétrica">Mesa Cirúrgica Elétrica</option><option value="Mesa Cirúrgica Mecânica">Mesa Cirúrgica Mecânica</option><option value="Mesa Ginecológica">Mesa Ginecológica</option><option value="Microscópio Cirúrgico">Microscópio Cirúrgico</option><option value="Microscópio Epecular">Microscópio Epecular</option><option value="Microscópio Laboratorial">Microscópio Laboratorial</option><option value="Módulo de Bateria">Módulo de Bateria</option><option value="Módulo de Capnografia">Módulo de Capnografia</option><option value="Módulo de Débito Cardíaco">Módulo de Débito Cardíaco</option><option value="Módulo de ECG">Módulo de ECG</option><option value="Módulo de Oximetria SPO3">Módulo de Oximetria SPO3</option><option value="Módulo de Pressão Invasiva">Módulo de Pressão Invasiva</option><option value="Módulo Registrador Gráfico">Módulo Registrador Gráfico</option><option value="Monitor de Eletrocardiograma ECG">Monitor de Eletrocardiograma ECG</option><option value="Monitor de Pressão Não Invasiva PNI">Monitor de Pressão Não Invasiva PNI</option><option value="Monitor de Vídeo Convecional">Monitor de Vídeo Convecional</option><option value="Monitor Multiparamétrico">Monitor Multiparamétrico</option><option value="Oftalmoscópio Direto">Oftalmoscópio Direto</option><option value="Oftalmoscópio Indireto">Oftalmoscópio Indireto</option><option value="Óptica (OCT)">Óptica (OCT)</option><option value="Óptica com Angiografia de Retina (OCT combinado com Hemodinâmica)">Óptica com Angiografia de Retina (OCT combinado com Hemodinâmica)</option><option value="Perfurador Elétrico">Perfurador Elétrico</option><option value="Perfurador Ósseo">Perfurador Ósseo</option><option value="Perfurador Pneumático">Perfurador Pneumático</option><option value="Peristáltica Volumétrica">Peristáltica Volumétrica</option><option value="Pressão Não Invasiva NIBP">Pressão Não Invasiva NIBP</option><option value="Ressonância Nuclear Magnética 0,5T">Ressonância Nuclear Magnética 0,5T</option><option value="Ressonância Nuclear Magnética 1,5T">Ressonância Nuclear Magnética 1,5T</option><option value="Ressonância Nuclear Magnética 3,0T">Ressonância Nuclear Magnética 3,0T</option><option value="Seladora de Embalagens">Seladora de Embalagens</option><option value="Seladora de Tubos">Seladora de Tubos</option><option value="Sistema Computadorizado de Ergometria">Sistema Computadorizado de Ergometria</option><option value="Tomógrafo Computadorizado (128 Cortes)">Tomógrafo Computadorizado (128 Cortes)</option><option value="Tomógrafo Computadorizado (16 Cortes)">Tomógrafo Computadorizado (16 Cortes)</option><option value="Tomógrafo Computadorizado (2 a 4 Cortes)">Tomógrafo Computadorizado (2 a 4 Cortes)</option><option value="Tomógrafo Computadorizado (6 a 8 Cortes)">Tomógrafo Computadorizado (6 a 8 Cortes)</option><option value="Tomógrafo Computadorizado (64 Cortes)">Tomógrafo Computadorizado (64 Cortes)</option><option value="Tomógrafo de Coerência">Tomógrafo de Coerência</option><option value="Tomógrafo Odontológico">Tomógrafo Odontológico</option><option value="Ventilador de Alta Frequência">Ventilador de Alta Frequência</option><option value="Ventilador Pulmonar Convencional">Ventilador Pulmonar Convencional</option><option value="Ventilador Pulmonar de Transporte">Ventilador Pulmonar de Transporte</option><option value="Ventilador Pulmonar para Ambiente de Ressonância Magnética">Ventilador Pulmonar para Ambiente de Ressonância Magnética</option><option value="Vertical">Vertical</option><option value="Vídeo Processadora de Imagem">Vídeo Processadora de Imagem</option><option value="Vídeo Processadora de Imagem com Câmera">Vídeo Processadora de Imagem com Câmera</option><option value="Vídeo Processadora de Imagem Ultrassônico">Vídeo Processadora de Imagem Ultrassônico</option><option value="Videobroncoscópio">Videobroncoscópio</option><option value="Videocolonoscópio">Videocolonoscópio</option><option value="Videoduodenoscópio">Videoduodenoscópio</option><option value="Videogastroscópio">Videogastroscópio</option>        </select>  
            </div>  
        <div class="col-sm-12">
          <label>Setor</label>
        <select name="setor" class="form-control">
        <option></option><option></option><option>10° andar ? Sala da engenharia </option><option>3º andar Sul (Farmacia)</option><option>Ambularorio - Cir.Plastica</option><option>Ambulatório - Acupuntura </option><option>Ambulatório - Cirurgia plástica</option><option>Ambulatório Colposcopia</option><option>Ambulatório de cardiologia </option><option>Ambulatório de clínica médica</option><option>Ambulatório de Ginecologia </option><option>Ambulatório de oftalmologia </option><option>Ambulatório Gastroenterologia</option><option>Ambulatório Puericultura</option><option>Anatomia patológica</option><option>Banco de leite</option><option>BTCA</option><option>Central de equipamentos</option><option>Centro cirúrgico</option><option>Centro Obstetrico</option><option>Centro obstétrico - 4º andar </option><option>Diagimagem </option><option>Enfermaria - 10° andar Norte</option><option>Enfermaria - 10º andar Sul </option><option>Enfermaria - 11º andar Sul </option><option>Enfermaria - 7º andar Sul</option><option>Enfermaria - 8º andar Norte</option><option>Enfermaria - 8º andar Sul</option><option>Enfermaria - 9° andar Norte</option><option>Enfermaria - 9° andar Sul</option><option>Enfermaria - 9º andar Norte </option><option>Enfermaria - 9º andar Sul </option><option>Fisioterapia</option><option>Gastroenterologia</option><option>Hemodinâmica</option><option>Hemoterapia</option><option>Laboratório (Bacteriologia)</option><option>Laboratório (Bioquímica)</option><option>Laboratório (Esterelização)</option><option>Laboratório (Hematologia)</option><option>Laboratório (Hemostasia)</option><option>Laboratório (Parasitologia ? Urinálise)</option><option>Laboratório (Sorologia)</option><option>Lika Endoscopia</option><option>Nefrologia</option><option>Nutrição</option><option>Oftalmologia </option><option>Pediatria</option><option>Pneumologia</option><option>Sala de ECG - 7º andar</option><option>Sala de estabilização</option><option>Sala de Triagem </option><option>Unidade neonatal </option><option>UTI / URCC </option>        
      </select>
      </div>



 <div class="col-sm-12">   
<label>Tombamento</label>
<input type="text" name="tomb" class="form-control">
</div>
    
    <div class="col-sm-12">
    <label>Nº de Série</label>
    <input type="text" name="serie" class="form-control">

            <input type="submit" class="btn btn-primary my-4" value="Buscar">

  </div>
   
      </div>
    </div><!-- fim do container -->


</form>
</div> <!-- fim da classe divisao -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>
