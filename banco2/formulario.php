<?php
    $nome = $_POST['nome'];

    include "conecta.php";
    $sql = "SELECT produtos(nome) AS ('$nome') FROM descricao";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado > 0){
        echo "Cadastro com sucesso!";
    }