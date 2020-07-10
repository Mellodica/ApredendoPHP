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
    
        $num1 = isset($_GET["num1"]) ? $_GET["num1"] : 1;
        $num2 = isset($_GET["num2"]) ? $_GET["num2"] : 10;
        $interval = isset($_GET["interval"]) ? $_GET["interval"] : 1;
        if($num1 > $num2){
            while ($num1 > $num2){
                
                echo "$num1<br>";
                $num1-=$interval;             
                
            }
        }else{
            while($num1 < $num2){
                echo "$num2<br>";
                $num2-=$interval;
            }
        }
        
        
        
       
     
    
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



