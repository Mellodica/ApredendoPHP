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
    
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 2000;
    
    $pode = date("Y") - $ano;
    
    if($pode < 18)
    {
        if(($pode >= 16 && $pode < 18) )//|| $pode > 65)
        {
            echo "Você pode votar, mas voccê não é obrigado a votar, pois tem $pode anos!";
           
        }else{
        
            echo "O usuário não pode votar, é menor de idade, você tem $pode anos!";
        }
    }else
    {
        if($pode > 65){
            echo "Você pode votar, mas voccê não é obrigado a votar, pois tem $pode anos!";
        }else{
            echo "Você pode votar, pois é maior de idade, você tem $pode anos!";
        }
        
    }
        
    
       
      
    ?>
     <a href="index.php" >VOLTAR</a>
       
    </div> 
    </body>
</html>



