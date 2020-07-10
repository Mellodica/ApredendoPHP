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
    
        $i = 1;
        
        while($i <= 5){
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $i++;            
        }
        
        echo "$num1, $num2, $num3, $num4, $num5";
    
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



