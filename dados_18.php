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
    
    echo"Vetores e Matrizes<br>";
    /*
    $vet = array(2, 3, 4, 5, 9);
    $vet[] = 8; //vai adionar o após o ultimo numero.
    print_r($vet);
    echo"<br>";
    echo"range<br>";
    echo "cria um vetor com numero inicial, numero final e passo.<br>";
    $p = range(3, 22, 2);
    print_r($p);
    echo "foreach<br>";
    foreach ($p as $item){
        echo "$item<br>";
    }*/
    echo "Chaves Personalizadas<br>";
    $v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
    $v[] = "E";
    print_r($v);
    echo"<br> UNSET - Retira do Array um Indice <br>";
    unset($v[6]);
    print_r($v);
    echo"<br> Chaves Associativas <br>";
    $cad = array(   "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 56.5);
    $cad["fuma"] = true;
    
                //print_r($cad);
                    //para cada Elemento do VETOR as CAMPO => ITEM
                foreach ($cad as $campo => $item){
                    echo "$campo : $item<br>";
                    
                }
    
    echo"Matrizes - Coleções<br>";
    $mat = array(   array(2,3),
                    array(3,4),
                    array(9,5));
    
                print_r($mat);
     echo"<br>";        
    $mat[1][1] = $mat[2][1];
    print_r($mat);
    echo"<br>Funções Vetores";
    
    
    
    
    ?>   
    <br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



