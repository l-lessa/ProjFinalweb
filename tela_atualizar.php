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
    if(isset($_GET["id"])){

        require('conectar_banco.php');
        
        $sql = "select * from cliente where id = " .$_GET["id"];
        
        $query = mysqli_query($con, $sql) or die (mysqli_error($con));
         
        $nome_cliente;
        $cpf_cliente;                 
        $marca_cliente;
        $modelo_cliente;
        $placa_cliente;
        $telefone_cliente;
        while($linha = mysqli_fetch_array($query)){
            $nome_cliente = $linha["nome"];
            $cpf_cliente = $linha["cpf"]; 
            $marca_cliente = $linha["marca"];   
            $modelo_cliente = $linha["modelo"];   
            $placa_cliente = $linha["placa"];   
            $telefone_cliente = $linha["telefone"];   
        }
        
        mysqli_close($con);

        echo "Atualização Cliente";
    echo "<form action='atualizar_cliente.php' method='POST'>";
    echo "<input type='text' name='nome' placeholder='nome' value='" . $nome_cliente ."'/><br>";
    echo "<input type='text' name='cpf' placeholder='cpf' value='" . $cpf_cliente ."'/><br>";  
    echo "<input type='text' name='marca' placeholder='marca' value='" . $marca_cliente ."'/><br>"; 
    echo "<input type='text' name='modelo' placeholder='modelo' value='" . $modelo_cliente ."'/><br>"; 
    echo "<input type='text' name='placa' placeholder='placa' value='" . $placa_cliente ."'/><br>"; 
    echo "<input type='text' name='telefone' placeholder='telefone' value='" . $telefone_cliente ."'/><br>"; 
    echo "<input type ='submit' value='atualizar'/>";
    echo "<input type='hidden' name='id' value='". $_GET["id"] . "'/>";
    echo "</form>";
    
    echo "<a href='escolha.php'>Voltar</a>";

    }else{        
    echo "Cadastro de Aluno";
    echo "<form action='cadastrar_aluno.php' method='post'>";
    echo "Nome: <input type='text' name='nome'/><br>";
    echo "Idade: <input type='text' name='idade'/><br>";
    echo "<input type = 'submit' value='Cadastrar'/>";
    echo "</form>";
    }
 ?>
    
</body>
</html>