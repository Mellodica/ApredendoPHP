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
    $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
    $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
    
    $media = ($nota1 + $nota2)/2;
    
    if($media <= 5)
    {
        echo "A média entre $nota1 e $nota2 é igual a $media";
        echo "<br>O situação do Aluno: REPROVADO<br><br>";
    }elseif($media >= 5 && $media <= 7)
    {
        echo "A média entre $nota1 e $nota2 é igual a $media";
        echo "<br>O situação do Aluno: RECUPERAÇÃO<br><br>";
    }else{
        echo "A média entre $nota1 e $nota2 é igual a $media";
        echo "<br>O situação do Aluno: APROVADO<br><br>";
    }
    
        
    
       
      
    ?>
     <a href="index.php" >VOLTAR</a>
       
    </div> 
    </body>
</html>



