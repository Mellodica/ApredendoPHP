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
                Nome: <input type="text" name="nome"><br><br>
                Nascimento: <input type="number" name="ano"><br><br>
                <fieldset><legend>Sexo</legend>
                    
                    <input type="radio" name="sexo" id="masc" value="homem">
                    <label for="masc">Masculino</label><br>
                    <input type="radio" name="sexo" id="fem" value="mulher">
                    <label for="fem">Feminino</label>
                       
                </fieldset><br>
                
                <input type="submit" value="Enviar">
                    
                
                
                
                
            </form>    
        
        
        
       
        </form>
         </div>
    </body>
</html>
