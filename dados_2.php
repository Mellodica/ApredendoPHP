<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?PHP
            //Se usar o metodo GET deve usar o $_GET
            //Se usar o metodo POST deve usar o $_POST
            //isset se foi configurado algo no html
            // ternario
            $txt = isset($_GET["t"]) ? $_GET["t"] : "Fulano";
            $tam = isset($_GET["tam"]) ? $_GET["tam"] : "40pt";
            $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
        ?>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title></title>
        
        <style>
            span{
                
                font.size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
            
            
        </style>
    </head>
    <body>
    <div>  
            
    <?php
        
    
        echo "<span class='texto'>$txt</span><br><br>";
      
    ?>
     <a href="index.php" >VOLTAR</a>
       
    </div> 
    </body>
</html>



