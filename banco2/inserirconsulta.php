
<?php
        $descricao = $_POST['descricao'];
        

        

        include "conecta.php";
        $sql = "SELECT descricao, fabricante, qnt, preco_custo, preco_venda FROM produtos WHERE descricao=$descricao";
        $resultado = mysqli_query($conexao, $sql);
        echo "<br>";
        if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "Id: " . $registro["id"]. " - Fabricante " . $registro["fabricante"]. "Quantidade" . $registro["qnt"]. " - Preço de custo: " . $registro["preco_custo"].  " - Preço de venda: " . $registro["preco_venda"].   "<br>";
        }
        } else {
        echo "Nenhum registro encontrado.";
        }
?>