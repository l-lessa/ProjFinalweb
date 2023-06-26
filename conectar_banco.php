<?php

$server = "localhost";
$db= "id20936297_estacionamentofn";
$user = "id20936297_root";
$senha = "kxeS3]k[s/0dg2}G";

$con = mysqli_connect($server,$user,$senha,$db);
if(!$con){
    die("erro ao conectar no banco de dados " . mysqli_connect_error());
}

?>