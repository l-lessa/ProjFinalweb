<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estacionamento Floresta Negra</title>
</head>
<body>
<?php

require('conectar_banco.php');

$sql = "select * from cliente";

$query = mysqli_query($con, $sql) or die (mysqli_error($con));

echo "<table border='1'>";         
echo "<tr><td>NOME</td>
        <td>CPF</td><td>MARCA</td><td>MODELO</td><td>PLACA</td><td>TELEFONE</td></tr>";
while($linha = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>
    <a href='tela_atualizar.php?id=".$linha["id"]."'>". $linha["nome"]. "</a>
    </td>";
    echo "<td>" . $linha["cpf"] . "</td>" ;
    echo "<td>" . $linha["marca"] . "</td>" ;
    echo "<td>" . $linha["modelo"] . "</td>" ;
    echo "<td>" . $linha["placa"] . "</td>" ;
    echo "<td>" . $linha["telefone"] . "</td>" ;
    
}
echo "</table>";

mysqli_close($con);

?>
</body>
</html>