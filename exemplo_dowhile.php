<?php
$num = 100;
echo "<h2> Exemplo de While </h2>";
do {
    echo $num. ' ';
    $num=$num-1;         // $num+=1;  $num=$num+1
} while ($num >= 1);
?>