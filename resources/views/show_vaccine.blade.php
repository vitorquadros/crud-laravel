<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{($vaccine) ? $vaccine->name : 'Não encontrado!'}}</title>
</head>
<body>
    <a href="/vaccines">Voltar</a>
    @if ($vaccine)
    <h1>Informações da vacina: {{$vaccine->name}}</h1>
    
    <p>Id: {{$vaccine->id}}</p>
    <p>Nome: {{$vaccine->name}}</p>
    <p>Data de aplicação esperada: {{$vaccine->expected_date}}</p>
    <p>Data de aplicação: {{($vaccine->application_date) ? $vaccine->application_date : 'Ainda não aplicada'}}</p>
    <p>Já aplicada: {{($vaccine->is_future) ? 'Não' : 'Sim'}}</p>
    @else
    <p>Vacina não encontrada!</p>
    @endif
</body>
</html>