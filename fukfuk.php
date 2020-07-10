<?php
//passagem por refencia
function teste(&$x){
       $x += 2;
       return $x;
       
   }
   
function ola(){
    echo "Olá Helber!<br><br>";
}


function valor($v){
    echo "Mostra valor: $v<br>";
}
   
?>