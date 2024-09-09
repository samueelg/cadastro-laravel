<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Pessoa</h1>
        <form action="/Pessoa" method="post">
            @csrf

            <label for="nome">Nome:</label>
            <input type="text" id="name" name="nome" placeholder="Digite o nome" required class="form-control">

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF" class="form-control">

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Digite o telefone" class="form-control">

            <input type="submit" value="Cadastrar" class="btn btn-success">
            </div>
        </form>
</body>
</html>