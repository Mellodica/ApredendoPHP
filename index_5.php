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
                <label for="nota1">Número</label>        
                <input type="number" placeholder="1 digito" name="num"><br><br>
                
                <fieldset><legend>Operação</legend>
                    <input type="radio" name="oper" id="dobro" value="1" checked="">
                    <label for="dobro">Dobro</label>
                    <input type="radio" name="oper" id="cubo" value="2">
                    <label for="cubo">Cubo</label>
                    <input type="radio" name="oper" id="raiz" value="3">
                    <label for="raiz">Raiz</label>
                                    
                </fieldset>
               
                <br>
                <input type="submit" value="Calcular">
           
            </form>    
        
        
        
       
        </form>
         </div>
    </body>
</html>
