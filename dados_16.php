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
   include "fukfuk.php";
   /*
   $prod = "Leite";
   $prec = 4.5;
   
   echo"O $prod custa R$ ". number_format($prec, "2");
   
   printf("<br>O %s custa R$ %.2f", $prod, $prec);
   /*
    tabela de aceitações do printf
    %d valor decimal (positivo ou negativo)
    %u valor decimal sem sinal (apenas positivos) não mostra negativo
    %f para numero real
    %s para string 
     
     
    PRINTR para mostrar o conteudo de um vetor(array)
    */
    ?>
     
    <br>
    <?php
    /*
    $x[0] = 4;
    $x[1] = 3;
    $x[2] = 8;
    
    print_r($x);
    
    //criar vetor
    echo"<br>";
    $vec = array(3, 7, 6, 2, 1, 9);
    echo"<br>";
    //var_dump
    //var_export
    var_dump($vec);
    //echo"<br>";
    //echo"wordwrap";
    echo"<br>";
    //função wordrap cria quebra de linha
    $texto = "A transferência para sua conta no Banco do Brasil S.A. foi realizada com sucesso.";
    //$res = wordwrap($texto,5, "<br>\n", false);
    //echo($res);
    */
    ?>
    <br><br>
    <?php
    echo"Função strlen<br>";
    //strlen calcula o comprimento de uma string;
    $nome = "Helber Aparecido de Oliveira";
    $tamanho = strlen($nome);

    echo"Função TRIM<br>";
    echo "O trim retira os espaçamentos do inicio e do fim <br>";
    $novo = trim($nome);
    echo(strlen($nome));
    
    echo"<br>Após a Função trim temos a Função LTRIM, para retirar os espaços do começo<br>";
    echo"RTRIM<br>retira os espaçmentos do fim.<br> Função str_word_count.<br> conta a quantidade de palavras no texto. <br>"
    . "opção 0 conta as palavras, a opção 1 gera um vetor com a palavra.<br> a opção 2 gera array com a posição dentro da string.<br>";
    $haha = str_word_count($nome, 1);
    print_r($haha);
    echo"<br>";
    $sitep = "Curso";
    //$vetor = explode($sitep, $nome);
    //print_r($vetor);
    echo"str_split";
    $pt = str_split($sitep);
    print_r($pt);
    echo"<br>implode<br>";
    $nome[0] = "Curso";
    $nome[1] = "em";
    $nome[2] = "Video";
    //$texto = implode("#", $nome); //join igual implode
    //print($texto);
    echo"chr, verificação do letra do numero<br>"; 
    echo "ord, identifica o numero da letra<br>";
    
    /*
     * Comentário (espero que seja útil): cuidado com as funções de manipulação de strings quando forem tratadas palavras da língua portuguesa com ACENTUAÇÃO.
        Exemplo: 
        strlen("mãe") retorna 4
        mb_strlen("mãe","UTF-8") retorna 3 (que é o esperado)

        Outro problema a ser considerado:

        str_word_count("mãe coração abrangência bênçãos",1) devolve um ARRAY com 9 elementos:
        "m" "e" "cora" "o" "abrang" "ncia" "b" "n" "os" isso porque os caracteres acentuados são considerados como NÃO SENDO LETRAS.

        Para corrigir isso é necessário acrescentar a lista de letras acentuadas a serem considerada como SENDO LETRAS:
        str_word_count("mãe coração abrangência bênçãos",1,"çãê") devolve um ARRAY com 4 elementos:
        "mãe" "coração" "abrangência" "bênçãos"

        para que a função str_word_count sempre funcione sugiro que seja criada uma constante a ser utilizada em todos os projetos/sites com todas as acentuações que utilizamos:

        "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº"

        Alguns dos acentos acima não estão no português mas são encontrados no francês.
        Inclui "ª" e "º" pois frequentemente encontro abreviações em cadastro como "Stª" para "Santa" e "Stº" para "Santo" ou "Profª" para "Professora.

        Usando mb_strlen($string, "utf-8"); Resolvê-se o problema de contar a mais strings com acentuação.

     */
    
    
    
    ?>
    
    <br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
       
    </div> 
    </body>
</html>



