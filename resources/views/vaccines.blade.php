<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/vaccines_style.css') }}" />
    <title>Lista de Vacinas</title>
</head>
<body>
    <a href="/">Voltar</a>
    <div class="container">
    <h1>Vacinas</h1>
    @if ($vaccines->count()>0)
    <section>
        <header>
            <p>ID</p>
            <p>Nome</p>
            <p>Data de aplicação esperada</p>
            <p>Data de aplicação</p>
            <p>Já aplicada</p>
            <a href="/vaccines/create">+ Novo</a>
        </header>
    </section>

    @foreach($vaccines as $vaccine)
    <div class="card">
        <p>{{$vaccine->id}}</p>
        <a href="/vaccines/{{$vaccine->id}}">{{$vaccine->name}}</a>
        <p>{{$vaccine->expected_date}}</p>
        <p>{{($vaccine->application_date) ? $vaccine->application_date : 'Ainda não aplicada'}}</p>
        <p>{{($vaccine->is_future) ? 'Não' : 'Sim'}}</p>
        <a id="edit" href="{{route('edit_vaccine', $vaccine->id)}}">Editar</a>
        <a id="delete" href="{{route('delete_vaccine', $vaccine->id)}}">Excluir</a>

    </div>
    @endforeach
     
    @else
    <p>Vacinas não encontradas! </p>
    @endif
    </div>
</body>
</html>