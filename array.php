<?php
$valores = [7,2,8,5,1,3];
$nomes = array("Bia","Ana","Karol","Eliana");

$tamanho_valores = count($valores);
$tamanho_nomes = sizeof($nomes);

echo "A quantidade de valores é: $tamanho_valores <br>";
echo "A quantidade de valores é: $tamanho_nomes <br>";

    $i = 0;
    while ($i < $tamanho_valores){
        echo "Os números do array valores são: $valores[$i]<br>";
        $i++;
}
?>
