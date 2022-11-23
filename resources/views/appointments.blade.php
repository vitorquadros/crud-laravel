<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Consultas</title>
</head>
<body>
    <h1>Consultas</h1>
    @if ($appointments->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Área</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $appointment)
            <tr>
                <td>{{$appointment->id}}</td>
                <td>{{$appointment->description}}</td>
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Consultas não encontradas! </p>
    @endif
</body>
</html>