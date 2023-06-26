<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    
    if($usuario == "admin" && $senha == "123"){
        session_start();
        $_SESSION["esta_logado"]= "true";
        if(isset($_SESSION["esta_logado"]) && $_SESSION["esta_logado"] == "true"){
                header('Location: escolha.php');           
        }else{            
            header('Location: login.html');
        }
        
    }else{
        echo "Usuario ou senha invalido";
    }
    
?>

