<?php

$server = "localhost";
$db= "estacionamentofn";
$user = "root";
$senha = "";

$con = mysqli_connect($server,$user,$senha,$db);
if(!$con){
    die("erro ao conectar no banco de dados " . mysqli_connect_error());
}

?>