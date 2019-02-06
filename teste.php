<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="processa.php">
    Buscar por: <input type="text" name="campo" id="campo">
</form>

<div id="resultado">
	<?php  
    include('conexao.php');

    $sql=$mysqli->prepare('select * from produtos');
    $sql->execute();
    $sql->bind_result($id,$produto,$valor);

    echo "
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Produtos</td>
                    <td>Valor</td>
                </tr>
            </thead>

            <tbody>
    ";

    while($sql->fetch()){

    echo "
        <tr>
            <td>$id</td>
            <td>$produto</td>
            <td>$valor</td>
        </tr>
    ";
    }

    echo "
        </tbody>
    </table>
    ";
    ?>
</div>
</body>
</html>