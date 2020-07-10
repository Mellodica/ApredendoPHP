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
    $n = isset($_GET["papel"])?$_GET["papel"]:"0";//Recebe numero do formulario
    $cp= 0;                                    //Contador de Numeros Primos, recebendo valor 0

    echo "Analisando o numero    : $n <br/>";  //Exibe o numero a ser consultado
    echo "Numeros Multiplos      :         ";  //Exibe o texto  "Numeros Multiplos: "
    for($p=1; $p<=$n;$p++){                    //Pega os numeros que passarão pela condição "if"
        if( $n%$p == 0){                       //Verifica se o número informado  tem o resto da divisão ==0
        echo  "$p " ;                          //Exibe os números que atendenderam à condição "if"
        $cp++;                                 //$cp Contador de Primos, conta quantos primos atenderam à condição "if"
        }                                      //à cada loop executado ele adiciona +1
     }

            echo "<br />";
            echo "Total multiplos: $cp  <br/><br/>";   //Exibe a quantidade de numeros multiplos
    if($cp==2){                                //Verifica se o contador de primos é "igual" à 2, se sim
        echo "Resultado: "."E PRIMO!";         //Exibe a mensagem "E PRIMO!
    }else{                                     //Caso contador de primos seja diferente de 2
        echo "Resultado: "."NAO E PRIMO!";     //Exibe a mensagem "NAO E PRIMO!"
    }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



