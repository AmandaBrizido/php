<html>
<head>
    <meta charset="utf-8">
    <title> Cadastro</title>
</head>
<body>
    <h3> Formulário de Cadastro para o BD</h3>
    <form method="POST" action="cadastroEnviadoAoBD.php">
        Digite seu RGM:
        <input type="numeric" name="rgm" required> <br>
        Digite seu nome:
        <input type="text" name="nome"> <br>
        Digite seu telefone:
        <input type="numeric" name="telefone"> <br>
        Digite seu sexo:
        <input type="text" name="sexo"> <br>
        <input type="submit" value="salvar"> &nbsp
        <input type="reset" name="limpar"> 
    </form>
    <a href="index.php"> clique aqui para voltar ao Menu </a>
</body>
</html>
