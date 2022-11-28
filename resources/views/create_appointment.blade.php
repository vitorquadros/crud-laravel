<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar consulta</title>
</head>
<body>
    <a href="/appointments">Voltar</a>
    <h1>Criar consulta</h1>
   <form action="/appointments" method="POST">
    @csrf
    <div>
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description">
    </div>

    <div>
        <label for="date">Data</label>
        <input type="text" name="date" id="date">
    </div>

    <div>
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type">
    </div>
  
    <br /><button type="submit">Criar</button>
   </form>
</body>
</html>