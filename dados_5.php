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
    $num = isset($_GET["num"]) ? $_GET["num"] : 0;
    $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
    
    switch ($o){
        
        case 1 :
            echo "O Dobro de $num é: ".($num * 2);
            break;
        
        case 2:
            echo "O Cubo de $num é: ". pow($num, 3); //ou ^3
            break;
        
        case 3:
            echo "A Raiz Quadrada de $num é: ". sqrt($num);
            break;
        
        
        default:
            echo 'Nada a Declarar';
            
    }
    
        
    
       
      
    ?>
        <br><br>
     <a href="index.php" class="btn-btn">VOLTAR</a>
       
    </div> 
    </body>
</html>



