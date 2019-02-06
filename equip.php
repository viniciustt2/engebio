<?php 

require_once 'conexao.php';
session_start();

if (!isset($_SESSION['logado'])) :
    header('Location: ../ihospital.php');
endif;

 ?>
<head>
  <meta charset="utf-8">
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
                
               }

                               @media screen and (min-width:992px){
                                          .navbar-toggler{
                                            display: none
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

  

<!-- Importações das folhas de estilo -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

<script language="javascript">
function abre(theURL) {
window.open('','destino','toolbar=0,titlebar=no,menubar=0,statusbar=0,width=900,height=100,top=0,left=0');
window.setTimeout(window.open(theURL,'_self'),3000);
}

function validaCadastro(){
    var equiplist = document.getElementById('listipos');
    var equip = document.getElementsByName('tipo');
    var setorlist = document.getElementById('setor-sel');
    var setor = document.getElementsByName('setor');
  
    document.write("TESTE");
    document.write(equip.value);

    alert("3");  
    if(equiplist.value == '' && equip.value == ''){ 
        alert("1");
        return false;
    }else if(setorlist.value == '' && setor.value == ''){
        alert("2");
        return false;
    }

  alert("3");  
}

function desabilita_comodato()
{
document.Form.dcompra.disabled="true";
document.Form.mcompra.disabled="true";
document.Form.acompra.disabled="true";
}

function desabilita_proprio()
{
document.Form.dcompra.disabled="false";
document.Form.mcompra.disabled="false";
document.Form.acompra.disabled="false";
}
</script>

<!--<center><h4>Cadastro de Equipamentos</h4></center>-->
<script type="text/javascript" src="ajax/funcs.js"></script>
<script type="text/javascript" src="ajax/jquery.js"></script>
<script type="text/javascript" src="ajax/jquery.validate"></script>

 <script type="text/javascript">

   $(document).ready(function()
  {
     jQuery("#listipos").change(
        function()
        {
          $.ajax({
              url: "listequipamentos.php?equipamento="+$(this).val(),
              dataType: 'html',
              error: function() {
                  alert('Error');
              },
              success : function(html) {
                  jQuery("#model").html(html);
              }
          });
        }
      )
   });
  </script>


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
</nav><br><br><br><br>
    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>


    
<div class="divisao">
<form name="Form" id="cadastro" action="equip_ca.php" method="post" target="destino"  enctype="multipart/form-data">
<h1 class="text-center">Cadastro de Equipamento</h1> 



 <h3 class="text-center">Dados do Equipamento</h3> 
   
    <div class="container">
            <div class="form-group col-xs-12 row">
              <div class="col-sm-8">
    <label>Equipamento</label>
       <input type="text" name="listipos" class="form-control">
     </div>

     <div class="col-sm-4">
    <label>Fabricante (obrigatório)</label>
    <input name="fabr" id="fabr" type="text" size="30" class="form-control">
  </div>
  

                  <div class="col-sm-4">
                   <label>Tipo</label>
                   <input type="text" name="model" class="form-control">
                 </div>
                        
      <div class="col-sm-4 ">
        <label>Setor</label>  
        <select id="setor-sel" name="setor-sel" class="form-control">
            <option></option><option>Ambularorio - Cir.Plastica</option><option>Ambulatorio - Acupuntura</option><option>Ambulatorio - Cardiologia</option><option>Ambulatorio - Cli.Medica</option><option>Ambulatorio - Colposcopia</option><option>Ambulatorio - Dermato</option><option>Ambulatorio - Gastroent.</option><option>Ambulatorio - Ginecologia</option><option>Ambulatorio - Neurologia</option><option>Ambulatorio - Oftalmo</option><option>Ambulatorio - Puericultura</option><option>Ambulatorio - Reumato</option><option>Anatomia Patologica</option><option>Banco de Leite</option><option>Central de Equipamentos</option><option>Centro Cirurgico</option><option>Centro Obstetrico</option><option>Cirurgia Ambulatorial</option><option>Cirurgia Experimental</option><option>Diag Imagem</option><option>Endocrinologia</option><option>Endoscopia</option><option>Enfermaria - 10aN</option><option>Enfermaria - 10aS</option><option>Enfermaria - 11aN</option><option>Enfermaria - 11aS</option><option>Enfermaria - 7aS</option><option>Enfermaria - 8aN</option><option>Enfermaria - 8aS</option><option>Enfermaria - 9aN</option><option>Enfermaria - 9aS</option><option>Engenharia Clinica</option><option>Farmacia - 3a</option><option>Fisioterapia</option><option>Fonoaudiologia</option><option>Gastroenterologia</option><option>Hemodinamica</option><option>Hemoterapia</option><option>Laboratorio - Bacteriologia</option><option>Laboratorio - Bioquimica</option><option>Laboratorio - Esterelizacao</option><option>Laboratorio - Hematologia</option><option>Laboratorio - Hemostagia</option><option>Laboratorio - Parasitologia</option><option>Laboratorio - Sorologia</option><option>Nefrologia</option><option>Oftalmologia</option><option>Pedriatria</option><option>Sala de ECG - 7a</option><option>Sala de Estabilizacao</option><option>Sala de Triagem</option><option>Serviço de Esterilizacao</option><option>Unidade Neonatal</option><option>UTI Adulto</option>        
          </select>
        </div>
  <div class="col-sm-4">
  <label>Localização</label> 
        <input name="geolocal" id="geolocal" type="text" size="30" class="form-control">
        </div>
      <div class="col-sm-4"> 
  <label>Tomb/Patrimônio</label>
  <input name="tomb" id="tomb" type="text" size="30" class="form-control">
  </div>

  <div class="col-sm-4"> 
  <label>Nº de Série</label> 
  <input name="serie" type="text" size="30" class="form-control">
  </div>

  <div class="col-sm-4">
  <label>Código</label>
      <input name="codigo" type="text" size="30" class="form-control">
      </div>

      <div class="col-sm-8">
       <label>Registro na Anvisa</label> 
        <input name="reganvisa" type="text" size="30" class="form-control">

        </div>

        <div class="col-sm-4">
        <label>Procedimento de instalação</label>
  <select name="inst" id="inst" style="background-color: white;font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;" class="form-control">
        <option value=""></option>
  <option value="Obrigatório via fornecedor">Obrigatório via fornecedor</option>
        <option value="Pelo próprio usuário via manual do usuário">Pelo próprio usuário via manual do usuário</option>
        </select>
        </div>


  <div class="col-sm-4">
  <label>Data da instalação</label>
        <input type="date" name="data" class="form-control">
  </div>
            <div class="col-sm-4">
<label>Venc. Garantia
</label>
        <input name="venc" type="date" class="form-control">
          </div>
          <div class="col-sm-4">

     <label>Tensão (V)</label>
 
  <input name="tensao" type="text" id="tensao" size="10" class="form-control">
     </div>

<div class="col-sm-12">
<label>Obs</label>
  
  <textarea name="obs" cols="50" rows="2" class="form-control"></textarea>
      </div>


  <div class="col-sm-12">
    <label>Status</label>
    
      <input name="status" type="radio" value="Péssimo">Péssimo
      <input name="status" type="radio" value="Ruim">Ruim
      <input name="status" type="radio" value="Bom">Bom
      <input name="status" type="radio" value="Ótimo">Ótimo
  </div>


<div class="col-sm-12">
  <label>Acessórios</label>
  
  <textarea name="acess" cols="50" rows="2" class="form-control"></textarea>
</div>

  <div class="col-sm-12">
    <label>Nível de Criticidade</label>

      <input name="nivel" type="radio" value="Alta">Alta
      <input name="nivel" type="radio" value="Média">Média
      <input name="nivel" type="radio" value="Baixa">Baixa
 </div>


  
<div class="col-sm-4">
       <label>Data da Compra</label>  
      
      <input type="date" name="dcompra" class="form-control">
      </div>

      <div class="col-sm-4">
<label>Custo R$</label>
      
        <input name="custo" type="text" id="custo" size="30" class="form-control">
</div>

<div class="col-sm-4">
      <label>Data da Emissão</label>
        <input type="date" name="emissao" class="form-control">

    </div>
    

<div class="col-sm-12">
<label>Recursos</label>


        
        
        <input name="recurso" type="radio" value="Próprio">Próprio
        <input name="recurso" type="radio" value="Doação">Doação
        <input name="recurso" type="radio" value="Comodato">Comodato
        <input name="recurso" type="radio" value="Projeto">Projeto
    </div>

        <div class="col-sm-4">
          <label>Nº da Nota Fiscal</label>
          <input name="fiscal" type="text" id="fiscal" size="30" class="form-control">

        </div>
         
    
     
        <div class="col-sm-8"><label>Razão Social Fornecedor</label>
            <input name="fornec" type="text" id="fornec" size="30" class="form-control">

        </div>
         
         <div class="col-sm-8">
          <label>CNPJ do Fornecedor</label>
          <input name="cnpj" type="text" id="cnpj" size="30" class="form-control">

        </div>

        <div class="col-sm-4">
          <label>Telefone</label>
        <input name="telfornec" type="text" id="telfornec" size="30" class="form-control">

        </div>
        
        
      


        <div class="col-sm-8">
          <label>Assistência Técnica</label>
          <input name="assist" type="text" id="assist" size="30" class="form-control">

        </div>
      
      <div class="col-sm-4">
        <label>Telefone</label>
        <input name="telassist" type="text" id="telassist" size="30" class="form-control">

      </div>

        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button> 
          </div>
  
    </div>
  </div><!-- fim do container -->


</form>
</div> 
<!-- fim da class divisao -->




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>
</html>
