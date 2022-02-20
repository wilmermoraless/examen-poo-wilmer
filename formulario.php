<?php
   $texto =($_REQUEST['texto']);
    echo "texto ingresado: ";
    echo $texto;
    echo "<br>";
    echo "<hr>";
    echo "texto en mayuscula: ";
    echo  strtoupper($texto);
    echo "<br>";
    echo "<hr>";
    echo "total de caracteres: ";
    echo strlen($texto);
    echo "<br>";
    echo "<hr>";
    echo "texto invertido: ";
    echo strrev($texto);
    echo "<br>";
    echo "<hr>";
    $texto_separado = str_split($texto);

    for($t=0 ; $t < count($texto_separado) ; $t++){
    echo  $t; 
    echo $texto_separado[$t];
    }    
?>