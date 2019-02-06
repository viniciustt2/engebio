<?php
	session_start();
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "ihospital";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


	$campo="%".$_POST['nome_curso']."%";


$sql=$mysqli->prepare("select TAG,equipamento,fabricante,setor from equip  where equipamento  like ?");
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($TAG,$equipamento,$fabricante,$setor);



echo "
    <table>
        <thead>
        <tr>
                        <td>TAG</td>
                        <td>equipamento</td>
                        <td>fabricante</td>
                        <td>setor</td>
                      
        </tr>
        </thead>

        <tbody>
        ";

        while($sql->fetch()){

        echo "
        <tr>
            <td>$TAG</td>

            <td>$equipamento</td>
            <td>$fabricante</td>
            <td>$setor</td>
           


        </tr>
        ";
        }

        echo "
        </tbody>
    </table>
";


	?>