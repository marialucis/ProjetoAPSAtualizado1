<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Layout sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="fontawesome/css/all.css" />
</head>

<body class="cadastroAluno">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-xs-12">
                <h3 class="titulo">Cadastrar Aluno</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-xs-12">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome completo">

                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="nome@email.com">

                <label for="senha">Password</label>
                <input type="password" class="form-control" id="senha" placeholder="*******">

                <label for="confirmarsenha">Confirmar Password</label>
                <input type="password" class="form-control" id="confirmarSenha" placeholder="*******">

                <input type="submit" class="btn btn-dark btn-block botaoCadastrar" value="Cadastrar">
            </div>
        </div>

    </div>
</body>

</html>