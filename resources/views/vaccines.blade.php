<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vacinas</title>
</head>
<body>
    <a href="/">Voltar</a>
    <h1>Vacinas</h1>
    @if ($vaccines->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data de aplicação esperada</th>
                <th>Data de aplicação</th>
                <th>Já aplicada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vaccines as $vaccine)
            <tr>
                <td>{{$vaccine->id}}</td>
                <td>{{$vaccine->name}}</td>
                <td>{{$vaccine->expected_date}}</td>
                <td>{{($vaccine->application_date) ? $vaccine->application_date : 'Ainda não aplicada'}}</td>
                <td>{{($vaccine->is_future) ? 'Não' : 'Sim'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Vacinas não encontradas! </p>
    @endif
</body>
</html>