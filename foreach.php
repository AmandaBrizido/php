<?php
    $pessoa = ["nome" => "Amanda", "idade" => 18, "cidade" => "São Paulo"];
    echo "<br> Aqui estão as informações de $pessoa[nome] <br>";

    echo "Os dados são: ";
    foreach ($pessoa as $chave => $valor) {
        echo  "$chave:$valor". " ";
    }

?>
