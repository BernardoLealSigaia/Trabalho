
<?php
        $descricao = $_POST['descricao'];
        $fabricante = $_POST['fabricante'];
        $quantidade = $_POST['qnt'];
        $preco_custo = $_POST['preco_custo'];
        $preco_venda = $_POST['preco_venda'];
        //echo $nome."<br>";
        //echo $email."<br>";
        //echo $senha."<br>";

        

        include "conecta.php";
        $sql = "INSERT INTO produtos(descricao, fabricante, qnt, preco_custo, preco_venda) values('$descricao', '$fabricante', '$quantidade', '$preco_custo', '$preco_venda')";
        $resultado = mysqli_query($conexao, $sql);
        if($resultado > 0)
        {      
                echo "Cadastro com sucesso!";
                
        }
?>