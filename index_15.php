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
            
                <label for="papel">Primeiro Valor</label>
                <!--<input type="number" name="papel" min="0" max="9">-->
                <select name="papel">
                    <?php
                        for($c = 1; $c <= 10; $c++){
                            echo"<option>$c</option>";
                        }
                    
                    ?>
                    
                    
                </select>
                <br>
             
         
            <br>
            <br>
            <input type="submit" value="Analisar">
           
            </form>    
        
        
        
       
        </form>
         </div>
    </body>
</html>
