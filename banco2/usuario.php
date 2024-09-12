<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            display:flex;
            list-style: none;
            background-color: black;
        }

        li{
            padding: 5px;
        }

        *{
            margin:0;
        }

        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            background-color: white;
            color: black;
            padding: 8px;
            transition: 250ms;
        }

        main{
            display: flex;
            margin: 10px;

        }

        img{
            width: 70px;
        
        }

        #button{
            position: absolute;
            right: 0;
            bottom: 0;

            display:flex;
            list-style: none;
            background-color: black;

           
          
        }
        button:hover{
            
        }

      

        #dados{
            width: "80%";
            height: "80%";
            color: black;
            border: 2px solid;
            border-radius: 10px;
            background-color: white;
            padding: 10px;
        }

        

        p{
            background-color: palegreen;
            border: 1px dashed; 
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        th,td{
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){
            background-color: lightgrey;
        }

        th{
            background-color: brown;
            color: white;
        }
    </style>
</head>
<body>

<header>

<nav>
    <ul>
        <li><a href="">Home:</a></li>
        <li><a href="">Contatos:</a></li>
        <li><a href="">Sobre:</a></li>
        <li><a href="">Login:</a></li>
    </ul>
</nav>
</header>

<main>
<div id="imagem">
    <img src="imagem.png">
</div>
    <div id="dados">
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Quantidade</th>
            <th>Preço de custo</th>
            <th>Preço de venda</th>
        </tr>




        <?php
        include "conecta.php";
        $sql = "SELECT id, descricao,fabricante, qnt,preco_custo, preco_venda FROM produtos";
        $resultado = mysqli_query($conexao, $sql);
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>" .$registro['id'] . "</td>";
            echo "<td>" .$registro['descricao'] . "</td>";
            echo "<td>" .$registro['fabricante'] . "</td> ";
            echo "<td>" .$registro['qnt'] . "</td> ";
            echo "<td>" .$registro['preco_custo'] . "</td>";
            echo "<td>" .$registro['preco_venda'] . "</td> </tr>";
        }

        ?>
    </table>
    </div>
    </main>

    <button id="button"> <a href="./usuario.descricao.php">Por descrição </a></button>
</body>
</html>