<?php 

include('conecta.php');

$campo="%".$_POST['campo']."%";

$sql=$mysqli->prepare("select TAG,equipamento,fabricante from equip where equipamento like ?");
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($TAG,$equipamento,$fabricante);

echo "
    <table>
        <thead>
        <tr>
                        <td>TAG</td>

            <td>equipamento</td>
            <td>fabricante</td>
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

        </tr>
        ";
        }

        echo "
        </tbody>
    </table>
";
 ?>