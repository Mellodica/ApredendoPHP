<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
    </head>
    <body>
    <div>  
            
        <?php
            //Se usar o metodo GET deve usar o $_GET
            //Se usar o metodo POST deve usar o $_POST
            //isset se foi configurado algo
            // ternario
          $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Fulano" ;
          $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1960;
          $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Não Transa";
          $idade = date("Y") - $ano;

          echo "<br><br><br> $nome é do sexo $sexo, e tem $idade anos.";

      
      
        ?>
           
            <a href="index.php" >VOLTAR</a>
       
    </div> 
    </body>
</html>



