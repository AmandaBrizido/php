<?php
print ('<h1> Testando funções de tratamento de string do Php </h1>');

    print ('A quantidade de letras da frase "Hoje tem aula de Php" é :');
    print (strlen("Hoje tem aula de Php"));
    # A quantidade de letras da frase "Hoje tem aula de Php" é :20


    $endereco = "Av. Minas Gerais, 2545, bairro centro - sp";
    print ('<br> O tamanho da variavel é: '. strlen($endereco));
    # O tamanho da variavel é: 42

    echo '<br> A quantidade de palavras nessa frase é: '. str_word_count($endereco);
    # A quantidade de palavras nessa frase é: 7

    print ('<br> A posição da palvra bairro é: '. strpos($endereco,'Av'));
    # A posição da palvra bairro é: 4
    echo strpos("Amanda Brizido dos S.", "dos");
		# 16 

    print ('<br> Toda frase em maiúsculo :' .strtoupper($endereco));
    # Toda frase em maiúsculo :AV. MINAS GERAIS, 2545, BAIRRO CENTRO - SP


    echo '<br> Toda frase em minúsculo :' .strtolower($endereco);
    # Toda frase em minúsculo :av. minas gerais, 2545, bairro centro - sp
?>
