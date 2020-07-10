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
    $papel = isset($_GET["papel"]) ? $_GET["papel"] : 1;
 
    
    
    
    for($i = 0;$i < $papel;$i++)
    {
        echo "$i<br>";
        
    };
       
     
    
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



