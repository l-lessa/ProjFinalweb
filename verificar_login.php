
<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    
    if($usuario == "admin" && $senha == "123"){
        session_start();
        $_SESSION["esta_logado"]= "true";
        header('Location: dashboard.php');
        
    }else{
        echo "Usuario ou senha invalido";
    }
    
?>

