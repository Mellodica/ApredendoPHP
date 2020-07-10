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
    /*Há duas vformas que importar classes
   Com include e require sendo Requerido ou Incluido
    em caso da classe ser adicionada por include, memso que o sistema não consiga
   carregar o arquivo, o sistema continuará a rodar.
   <as se o arquivo for REQUERIDO o sistema vai travar e não mostrar mais nada
    Além desses há os 
     * include_onde => verificar se já existe um script na pagina, se for positivo ele não adiciona novamente
     * require_onde => verificar se já houve a inclusao do script caso seja sim, ele não faz outra inslusao.
      
     
          
          */
    include "fukfuk.php";
    
   
    ola();
   
   
   $a = 3;
   teste($a);
   
   valor($a);
   
   $b = 5;
   teste($b);
   valor($b);
   
   
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



