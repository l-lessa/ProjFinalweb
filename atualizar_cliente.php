<?php

$server = "localhost";
$db= "id20936297_estacionamentofn";
$user = "id20936297_root";
$senha = "kxeS3]k[s/0dg2}G";

$con = mysqli_connect($server,$user,$senha,$db);
if(!$con){
    die("erro ao conectar no banco de dados " . mysqli_connect_error());
}


$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$placa = $_POST["placa"];
$telefone = $_POST["telefone"];

$sql = "update cliente set nome = '" . $nome . "', cpf = '" . $cpf . "', marca = '". $marca . "', modelo = '" . $modelo. "', placa = '" . $placa. "', telefone = '" . $telefone. "' where id = " . $id;

mysqli_query($con,$sql);

mysqli_close($con);

header('Location: listar_cadastro_update.php');


?>