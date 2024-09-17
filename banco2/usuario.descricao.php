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

        #escrever{
            position: absolute;
            top:100px;

            border: 2px solid;
            border-radius: 5px;
            padding: 10px;
        }

        #form{
            position: absolute;
            left: 40%;
            top: 20%;
        }
    </style>
</head>
<body>



<nav>
    <ul>
        <li><a href="">Home:</a></li>
        <li><a href="">Contatos:</a></li>
        <li><a href="">Sobre:</a></li>
        <li><a href="">Login:</a></li>
    </ul>
</nav>
</header>













<form id="form" action="inserir.php" method="post">  
  Descrição do Produto:<input type="text" name="descricao"> <br>
  Fabricante:<input type="text" name="fabricante"> <br>
  Quantidade:<input type="text" name="qnt"> <br>
  Preço de custo: <input type="decimal" name="preco_custo"> <br>
  Preço de venda: <input type="decimal" name="preco_venda"> <br>   
  <button type="submit">Enviar</button>
  <button type="reset">Resetar</button>
  

  <br><br>
  <br><br>
 
</form>
<form action="consulta.php" method="get">
  <button type="submit">Consultar</button>
</form>





                

</body>
</html>