<?php
    //Atualização de Dados no banco de dados
    require("dao.php");

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $sql = "UPDATE usuarios set nome='$nome',telefone='$telefone',sexo='$sexo' WHERE rgm=$rgm";
    mysqli_query($con,$sql);
    echo "Usuario alterado com sucesso";
    echo "<a href = 'menu.php'> Voltar ao Menu </a>";
?>
