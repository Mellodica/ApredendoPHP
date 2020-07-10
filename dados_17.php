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
    
    echo"strtolower - String To Lower<br> ";
    $nome = "helber oliveira<br>";
    /*
    echo"Seu nome é: ". strtolower($nome);
    echo"<br>strtoupper - String To Upper<br>";
    echo "Seu nome é: ". strtoupper($nome);
    echo"<br>ucfirst - Upper Case First - Maiuscula Primeiro";
    echo "<br>Seu nome é: ". ucfirst($nome);
    echo "ucwords - Upper Case Words- Primeira letra de cada palavra capitalizada<br>";
    echo "Seu nome é: ". ucwords($nome);
    echo"<br> strrev - String Reverse<br>";
    echo "Seu nome é: ".strrev($nome);
    echo"<br>strpos - String Pos - Encontra a posição de uma substring, dentro de uma string <br>";
    $pos = strpos($nome, "oliveira");
    $ipos = stripos($nome, "OLIVEIRA");
    echo"<br>Oliveira foi encontrado em: $pos<br>";
    echo"stripos - String (i)ignor Pos<br>";
    echo"Oliveira, esta na posição: $ipos<br>";
    echo"substr_count - SubString Count - verifica quantas vezes uma string aparece em determinado lugar<br>";
    echo "Quantas vezes oliveira aparece em seu nome: ". substr_count($nome, "oliveira");
    echo"<br>substr - Sub String";
    echo "<br> As primeiras 6 letras do seu nome: ". substr($nome, 0, 6);
    echo "<br> As ultimas letras do seu nome: ". substr($nome, 7);
    */
    echo"<br>str_pad - faz com que uma STRING seja conformada na regras";
    
    $novonome = str_pad($nome, 10, " ", STR_PAD_BOTH); //STR_PAD_LEFT STR_PAD_RIGHT
    echo"<br>Seu nome $novonome com 40 espaços: ";
    echo"<br>str_repeat - Repete uma String";
    $rpt = str_repeat($nome, 3);
    echo"<br>O testo repetido foi: $rpt";
    echo str_repeat("-", 20);
    echo"<br>str_replace ou str_ireplace - Retira a String marcado e a substitui, com i ignora maiscula";
    $newnome = str_ireplace("Oliveira", "Mellodica", $nome);
    echo "<br>$newnome";
    
    
    
    
    
    
    ?>
    <br><br>
    <?php
    
    ?>
    <br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



