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
            
            //Aplicar 10% desconto ao produto
            $preco = $_GET['p'];
            
            echo "O preço do produto é: R$$preco";
            $preco-=($preco*10/100);
            
            echo "<br>O preço com 10% de desconto é R$ ". number_format($preco, "2");
            
            //Pre incremento ++$a
            //Pos Incremento $a++
            
            //Pre Incremento --$a                       
            //Pos Decremento $a--
            
            //Mostrar o ano anterior ao ano atual
            
            $atual = $_GET["aa"];
            
            echo "<br><br><br>O ano atual é $atual, o ano anterior é " .--$atual;
            
            $a = 6;
            $b = $a;
            $b += 5;
            echo "<br>A".$a;
            echo "<br>B".$b;
            echo "<br>";
           
            $c = 3;
            $d = &$a; //varialvel referenciada o A passa a ter o valor de d
            $d += 5;
            
            echo "A".$a;
            echo "<br>".$d;
            
            //Variaveis de variaveis ou variaveis variante
            
            $site = "Helber";
            $$site = "cursoPHP";
            
            echo "<br>".$site;
            echo "<br> $site ou $Helber"
                    
            //maior >
            //menor <
            //Maior igual   >=
            //Menor igual   <=
            //Diferente <> ou !=
            //igual ==
            //identico  ===
            //Operador Unário ?: expressao ? verdade : falso
            // Operador E and OU &&
            // Operador Ou or OU ||
            //Operador XOU não pode ser tudo verdade ou tudo falso xor
            //Não !
                    
            
                    
                    
            
            
           
            
            
            
            
            
            
            
            
        ?>
        </div>
    </body>
</html>
