<?php
    require ("dao.php");
    try{
        $ret = conectar("localhost:3307","root"," ","backendqn");

        $rgm = 44455;
        $nome = "Lucas Alves";
        $telefone = 97584533;
        $sexo = 'M';

        //verifica se já existe o aluno
        $sql = "select * from alunos where rgm=$rgm";
        $consulta = mysqli_query($ret,$sql);
        $retorno = mysqli_num_rows($consulta);

        if ($retorno > 0) 
            echo "Esse aluno já existe";
        else {
            $sql = "insert into alunos(rgm,nome,telefone,sexo)
                    values('$rgm','$nome','$telefone','$sexo')";
            $consulta = mysqli_query($ret,$sql);
            if ($consulta) 
                echo "Cadastro realizado com sucesso! ";
            else 
                echo "Problema ao realizar o cadastro! ";
        } 
    } catch(Exception $e) {
        echo 'Falha na conexão: '.$e->getMessage();
        }
?>
