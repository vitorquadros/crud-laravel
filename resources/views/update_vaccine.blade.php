<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar vacina</title>
</head>
<body>
    <h1>Atualizar vacina</h1>
    <form action="{{route('update_vaccine', $vaccine->id)}}" method="POST">
    @csrf
    <div>
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $vaccine->name }}">
    </div>

    <div>
        <label for="expected_date">Data esperada de aplicação</label>
        <input type="text" name="expected_date" id="expected_date" value="{{ $vaccine->expected_date }}">
    </div>

    <div>
        <label for="application_date">Data de aplicação</label>
        <input type="text" name="application_date" id="application_date" value="{{ $vaccine->application_date }}">
    </div>
  
    <br />
    <button type="submit">Atualizar</button>
   </form>
</body>
</html>