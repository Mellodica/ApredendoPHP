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
            <!--
            
            <form method="get" action="dados.php">   
            <input type="text" name="valor">
            <input type="submit" value="Calcular"> -->
            
            <form method="get" action="dados.php">
            
            <?php  
    
                $c = 5;
                //$c = isset($_GET["con"]) ? $_GET["con"] : 0;


                while($c >= 1){

                    echo " Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c--;        
                }
                ?>
         
            <br>
            <br>
            <input type="submit" value="Analisar">
           
            </form>    
        
        
        
       
        </form>
         </div>
    </body>
</html>
