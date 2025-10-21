<?php
echo "<h2> Exemplo de For </h2>";

$nomes = ["Bia","Ana","Karol","Eliana"];
echo "O segundo nome é $nomes[1] <br>";

echo "Todos os nomes são:";
for($x= 0; $x <=3 ; $x++) {
    echo "$nomes[$x]".",";
}
echo "<br><br>";


for ($y=2; $y <=12; $y++) {
    if ($y == 6) break;
        echo "$y <br>";
}
echo "O programa acaba aqui, OBRIGADA"
?>
