<?php


    /* isto e um comentario */

    if(isset ($_GET[ "bt_nome"])){
        $nome = $_GET ["bt_nome"];
        $Email= $_GET ["bt_E-mail"];
        $contato = $_GET ["bt_contato"];
        
      

    }



?>



<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel= "stylesheet" href= " meu_estilo.css">
</head>
<body>

    <div class="container text-center">
    <h1>Contato</h1>
    </div>

    <div class="container">
        <form action="" method= "get">
            <label for="">Nome </label>
            <input class="form-control" type=  "escreva seu nome"   name= "bt_nome">
            <label for="">E-mail</label>
            <input class="form-control" type= "carols.123@gmail.com" name= "bt_E-mail">
            <label for="">Contato</label>
            <input class="form-control"  type= "escreva seu contato" name= "bt_contato">
           
          

            <input  class="btn btn-success" type="submit">
            <input  class="btn btn-danger"  type="reset">
            
        </form>

        <?php
            if(isset ($nome)){

                if($nome){

                    echo "<hr>";
                    echo "<P>";
                    echo "nome" . $nome;
                    echo "<p>";
                    echo "<hr>"; 
                    echo "<P>";
                    echo "E-mail" . $Email;
                    echo "<P>";
                    echo "<hr>";
                    echo "<P>";
                    echo "contato" . $contato;
                    echo "<P>";
                    echo "<hr>";
                 }   
                    



            }
            
                
                


        ?>
    </div>


</body>
</html>