<?php

require('conectar_banco.php');

$sql = "select * from cliente";

$query = mysqli_query($con, $sql) or die (mysqli_error($con));

echo "<table border='1'>";         
echo "<tr><td>ID</td><td>NOME</td>
        <td>CPF</td><td>MARCA</td><td>MODELO</td><td>PLACA</td><td>TELEFONE</td></tr>";
while($linha = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>" . $linha["id"] . "</td>" ;
    echo "<td><a href='#'>" . $linha["nome"] . "</a></td>" ;
    echo "<td>" . $linha["cpf"] . "</td>" ;
    echo "<td>" . $linha["marca"] . "</td>" ;
    echo "<td>" . $linha["modelo"] . "</td>" ;
    echo "<td>" . $linha["placa"] . "</td>" ;
    echo "<td>" . $linha["telefone"] . "</td>" ;
    
}
echo "</table>";

mysqli_close($con);

?>