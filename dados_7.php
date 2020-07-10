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
    $estado = isset($_GET["estado"]) ? $_GET["estado"] : 0;
    //$o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
    
    switch ($estado){
        
        case 1:
            echo "Estado da Região SUL";
            break;
        case 2:
            echo "Estado da Região SUDESTE";
            break;
        case 3:
            echo "Estado da Região CENTRO-OESTE";
            break;
        case 4:
            echo "Estados da Região NORTE";
            break;
        case 5:
            echo "Estados da Região NORDESTE";
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



