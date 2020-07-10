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
    
      $cont = isset($_GET["cont"]) ? $_GET["cont"] : 1;
      $memo = $cont;
      /*
      do{
          echo"$cont <br>";
          $cont++;
          
      }while($cont < 10);
      */
      $fat = 1;
      do{
          $fat = $fat * $cont;
          $cont--;
      }while($cont >= 1);
      
      echo "$memo ! = $fat"; 
        
        
        
       
     
    
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



