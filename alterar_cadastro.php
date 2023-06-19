<?php

require('conectar_banco.php');

$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$placa = $_POST["placa"];
$telefone = $_POST["telefone"];

$sql = "update cliente set nome = '$nome', cpf = '$cpf', marca = '$marca', modelo = '$modelo', placa = '$placa', telefone = '$telefone'  where id =  $id";

mysqli_query($con,$sql);

mysqli_close($con);

header('Location: escolha.php');


?>