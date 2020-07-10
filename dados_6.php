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
    $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    //$o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
    
    switch ($ds){
        
        case 1 :
        case 7 :
            echo "Descançar";
            break;
        
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Dia de Estudar";
            break;
    
        default:
            echo 'Nada a Declarar';
            
    }
    
        
    
       
      
    ?>
        <br><br>
     <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



