<?php
 // mata a variavel de sessao 
    session_start();
    session_destroy();     
    header('Location: inicio.html');
 

?>