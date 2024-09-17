<?php
    //$mysqli = new mysqli("localhost:3307","root","","sistema");
    
    $conexao = mysqli_connect("localhost:3307", "root","", "loja2");
    if (!$conexao){
        die("Falhou!Erro:" . mysqli_connect_error());
    }
    echo "Conectado com sucesso!";
     
    
        $descricao = "aaaaaaaa";
        $fabricante = "dddd";
        $quantidade = "jhjj";
        $preco_custo = "rehehtr";
        $preco_venda ="ywuirtg";
        //echo $nome."<br>";
        //echo $email."<br>";
        //echo $senha."<br>"

      /*  $descricao = $_POST['descricao'];
        $fabricante = $_POST['fabricante'];
        $quantidade = $_POST['qnt'];
        $preco_custo = $_POST['preco_custo'];
        $preco_venda = $_POST['preco_venda']; */

       // include "conecta.php";
        $sql = "INSERT INTO produtos(descricao, fabricante, qnt, preco_custo, preco_venda) values ('$descricao', '$fabricante', '$quantidade', '$preco_custo', '$preco_venda')";
        $resultado = mysqli_query($conexao, $sql);
        if($resultado > 0)
        {      
                echo "Cadastro com sucesso!";
                
        }





?> 
    
 