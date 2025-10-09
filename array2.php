<?php
    $notas = ["n1" =>8, "n2"=>5, "n3"=>4, "n4"=>8];
    $pessoa = array("nome"=>"Márcia", "idade"=>23, "cidade"=>"São Paulo");

    echo "$notas[n1]<br>";

    echo "Essa é um dado do array associativo $notas[n1]<br>";

    echo "As notas são: ";
    foreach ($notas as $key => $value) {
        echo "$key:$value ";
    }

    echo "<br>Array associativo relacionado<br>";
    echo "Os campos são: ";
    foreach ($pessoa as $key => $value) {
        echo "$key:$value ";
    }

?>
