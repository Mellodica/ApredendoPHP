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
        
   function soma($a, $b){
       $s = $a+$b;
       
       return $s;
   }
        
        $tt = soma(10, 7);
        
        echo"$tt";
        
        //func_get_arg() pega todos os argumento passados formando um array
        //func_num_args() identifica quantos argumentos foi passado.
    function somaL(){
        $p = func_get_args();
        $tot = func_num_args();
        $soma = 0;
        //$tot-=1;
        
        for($i=0; $i < $tot; $i++){
            $soma = $soma+$p["$i"];
        }
        
        return $soma;
    }
    
        $res = somaL(25, 25, 25, 25, 45, 13, 16, 38);
    
        echo "<br>$res";
    
    
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



