<?php
    require("dao.php");
    $rgm = 2;
    $sql = "delete from alunos where rgm = $rgm";
    $ret = conectar('localhost:3307','root','','backendqn');
    mysqli_query($ret,$sql);
    echo "Usuário excluído com sucesso!";
?>
