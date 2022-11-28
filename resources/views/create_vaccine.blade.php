<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar vacina</title>
</head>
<body>
    <a href="/vaccines">Voltar</a>
    <h1>Criar vacina</h1>
   <form action="/vaccines" method="POST">
    @csrf
    <div>
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="expected_date">Data esperada de aplicação</label>
        <input type="text" name="expected_date" id="expected_date">
    </div>

    <div>
        <label for="application_date">Data de aplicação</label>
        <input type="text" name="application_date" id="application_date">
    </div>

    <div>
        <label for="is_future">Já aplicada?</label>
        <input type="checkbox" name="is_future" id="is_future">
    </div>
    <br /><button type="submit">Criar</button>
   </form>
</body>
</html>