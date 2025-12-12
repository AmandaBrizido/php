<html>
<head>
    <meta charset="utf-8">
    <title> Conectando ao BD</title>
</head>    
<?php
    require('dao.php');
?>
<body>
        <h4> Conexão ao BD MySql</h4>
        <?php
            $ret = conectar('localhost:3307','root','','backendqn');
            echo "Conectado ao banco:".'backendqn <br>';

            $consulta = "select * from alunos";
            //não está executando um programa sql, esta variavel só esta facilitando a variavel de baixo

            $obj_consulta = mysqli_query($ret,$consulta) or die(mysqli_connect_error);

            echo "<br>Seguem os dados da tabela alunos: <br><br>";
            while($reg_consulta = mysqli_fetch_array($obj_consulta)){
                echo $reg_consulta['rgm'].' ';
                echo $reg_consulta['nome'].' ';
                echo $reg_consulta['telefone'].' ';
                echo $reg_consulta['sexo'].'<br>';
            }
        ?>
</body>
</html>
