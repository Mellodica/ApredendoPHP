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
    /*
    echo"Funções Vetores<br>";
    $tet = array(3, 5, 8, 2);
    foreach ($tet as $item){
        echo"$item<br>";
    }/*
    echo"<br>Exibir o Vetor - print_r Mostrar Objeto que seja uma coleção<br> var_dump";
    var_dump($tet);
    echo"<br> Vetor Tem: ".count($tet);
    echo"<br>";
    $tet[] = 18;
    var_dump($tet);
    */
    /*
    echo"<br>gerenciar Elementos - array_push<br>";
    //LIFO - Last In, First Out!!!
    array_push($tet, 22); //Adiciona um item na ultima posição.
    
    print_r($tet); //printa o Array!
    echo"<br>array_pop - Retira o Ultimo elemento do VETOR<br>";
    array_pop($tet); //retira o ultimo elemento.
    print_r($tet); //printa o Array!
    array_push($tet, "POP");
    print_r($tet);
    echo"<br>Editando indices iniciais ARRAY_UNSHIFT - COLOCA NO INICIO DO VETOR - <br>";
    array_unshift($tet, "Banana");
    array_unshift($tet, "Balao");
    print_r($tet);
    echo"<br>ARRAY_SHIFT - APAGA O PRIMEIRO ELEMENTO DE UM VETOR<BR>";
    array_shift($tet);
    print_r($tet);
    */
    echo"<br>ARRAY_PUSH - ADICIONAR UM ITEM AO FINAL DO VETOR.<BR>"
    . "ARRAY_UNSHIFT - ADICIONA UM ITEM  NO INICIO DO VETOR<BR>"
    . "ARRAY_POP - RETIRA UM ITEM DO FINAL DO VETOR<BR>"
    . "ARRAY_SHIFT - RETIRA UM ITEM DO INICIO DE UM VETOR<BR>"
            . "ORDENAR VETOR - função sort<br>";
    $vnum = array(4, 2, 6, 5, 8, 1, 9);
    print_r($vnum);
    sort($vnum); //ordena os itens.
    echo"<br>";
    print_r($vnum);
    echo "<br>ORDENAR DE FORMA REVERSA - RSORT - reverse sort<br>";
    rsort($vnum);
    print_r($vnum);
    echo"<br>ORDENAÇÃO ASSOCIATIVA - ASORT<br>"
    . "faz com que seja feita ordenação, mas seja mantida o Indice de Posição<br>"
    . "ORDEM ASSOCIATIVA REVERSA - arsort - Deixa os elemento de maneira reversa<br>"
    . "Mas mantem os indices<br>";
    echo "ORDENAR POR INDICE/KEY - KSORT - E O KRSORT - ORGANIZA OS INDICE DE MANEIRA REVERSA";
    
    
    
    
    
    
    
    
    
    
    
    
    ?>   
    <br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



