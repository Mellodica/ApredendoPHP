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
                           
                    <label for="itxt">Texto:</label>
                    <input type="text" name="t" itxt> <br/><br/>
                    <label for="itam">Tamanho</label>
                    <select name="tam" id="itam">
                        <option value="8pt">8</option>
                        <option value="10pt">10</option>
                        <option value="14pt" selected>14</option>
                        <option value="20pt">20</option>
                        <option value="40pt">40</option>
                    </select><br/><br/>
                    
                    <label for="icor">Cor: </label>
                    <input type="color" name="cor" id="icor"> <br/><br/>
                    <input type="submit" value="Gerar">
           
            </form>    
        
        
        
       
        </form>
         </div>
    </body>
</html>
