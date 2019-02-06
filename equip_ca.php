<?php
session_start();
include_once("conexao.php");
//variaveis recebendo os inputs de index.html
$listipos = filter_input(INPUT_POST, 'listipos', FILTER_SANITIZE_STRING);
$fabr = filter_input(INPUT_POST, 'fabr', FILTER_SANITIZE_STRING);

$tipo = filter_input(INPUT_POST, 'model',FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'setor-sel',FILTER_SANITIZE_STRING);
$local = filter_input(INPUT_POST, 'geolocal',FILTER_SANITIZE_STRING);
$tomb = filter_input(INPUT_POST, 'tomb',FILTER_SANITIZE_STRING);
$status=filter_input(INPUT_POST, 'status',FILTER_SANITIZE_STRING);
$serie=filter_input(INPUT_POST, 'serie',FILTER_SANITIZE_STRING);
$codigo=filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
$anvisa=filter_input(INPUT_POST, 'reganvisa',FILTER_SANITIZE_STRING);
$instalacao=filter_input(INPUT_POST, 'inst',FILTER_SANITIZE_STRING);
$data=filter_input(INPUT_POST, 'data',FILTER_SANITIZE_STRING);
$vencimento=filter_input(INPUT_POST, 'venc',FILTER_SANITIZE_STRING);
$tensao=filter_input(INPUT_POST, 'tensao',FILTER_SANITIZE_STRING);
$obs=filter_input(INPUT_POST, 'obs',FILTER_SANITIZE_STRING);
$acessorios=filter_input(INPUT_POST, 'acess',FILTER_SANITIZE_STRING);
$nivel=filter_input(INPUT_POST, 'nivel',FILTER_SANITIZE_STRING);
$imagem=filter_input(INPUT_POST, 'pdf',FILTER_SANITIZE_STRING);






$recurso = filter_input(INPUT_POST, 'recurso',FILTER_SANITIZE_STRING);
$dcompra = filter_input(INPUT_POST, 'dcompra',FILTER_SANITIZE_STRING);
$custo = filter_input(INPUT_POST, 'custo',FILTER_SANITIZE_STRING);
$nota = filter_input(INPUT_POST, 'fiscal',FILTER_SANITIZE_STRING);
$emissao = filter_input(INPUT_POST, 'emissao',FILTER_SANITIZE_STRING);
$fornec = filter_input(INPUT_POST, 'fornec',FILTER_SANITIZE_STRING);
$telfornec = filter_input(INPUT_POST, 'telfornec',FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj',FILTER_SANITIZE_STRING);
$assist = filter_input(INPUT_POST, 'assist',FILTER_SANITIZE_STRING);
$telassist = filter_input(INPUT_POST, 'telassist',FILTER_SANITIZE_STRING);





//incerção no bando de daos
$result_usuario = "INSERT INTO equip (equipamento, fabricante, tipo,  setor, local,status,tomb_patrimonio,num_serie,codigo,reg_anvisa,proc_instalacao,data,venc_garantia,tensao,obs,acessorios,niv_criticidade,arquivo,recursos,data_compra,custo,nota_fiscal,data_emissao,razao_social,tel_fornec,cnpj,assist,telassist) VALUES ('$listipos', '$fabr','$tipo','$setor','$local','$status','$tomb','$serie','$codigo','$anvisa','$instalacao','$data','$vencimento','$tensao','$obs','$acessorios','$nivel','$imagem','$recurso','$dcompra','$custo','$nota','$emissao','$fornec','$telfornec','$cnpj','$assist','$telassist')" ;
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Equipamento cadastrado com sucesso</p>";
	header("Location: equip.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: equip.php");
}
?>		