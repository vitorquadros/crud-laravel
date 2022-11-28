<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar consulta</title>
</head>
<body>
    <h1>Atualizar consulta</h1>
    <form action="{{route('update_appointment', $appointment->id)}}" method="POST">
    @csrf
    <div>
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" value="{{ $appointment->description }}">
    </div>

    <div>
        <label for="date">Data</label>
        <input type="text" name="date" id="date" value="{{ $appointment->date }}">
    </div>

    <div>
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type" value="{{ $appointment->type }}">
    </div>
  
    <br /><button type="submit">Atualizar</button>
   </form>
</body>
</html>