<?php

require('conectar_banco.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$placa = $_POST["placa"];
$telefone = $_POST["telefone"];


$sql = "insert into cliente (id,nome,cpf,marca,modelo,placa,telefone) 
        values (NULL,'$nome','$cpf','$marca','$modelo','$placa','$telefone')";

mysqli_query($con,$sql) or die (mysqli_error($con));

mysqli_close($con);

header('Location: escolha.php');


?>