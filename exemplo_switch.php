<?php
$cor = "verde";
switch ($cor) {
    case 'amarelo':
        echo 'A cor escolhida foi amarelo.';
        echo 'Essa cor está na bandeira';
        break;
    case 'azul':
        echo 'A cor escolhida foi azul.';
        echo 'Essa cor está na bandeira';
        break;
    case 'vermelho':
        echo 'A cor escolhida foi vermelho.';
        echo 'Essa cor não está na bandeira';
        break;
    case 'verde':
        echo 'A cor escolhida foi verde.';
        echo 'Essa cor está na bandeira';
        break;
    default:
        echo 'A cor escolhida é inválida';
        break;
}
?>