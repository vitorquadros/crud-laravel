<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/appointments_style.css') }}" />
    <title>Lista de Consultas</title>
</head>
<body>
    <a href="/">Voltar</a>
    <div class="container">
    <h1>Consultas</h1>
    @if ($appointments->count()>0)
    <section>
        <header>
            <p>ID</p>
            <p>Descrição</p>
            <p>Data</p>
            <p>Tipo</p>
            <a href="/appointments/create">+ Novo</a>
        </header>
    </section>

    @foreach($appointments as $appointment)
    <div class="card">
        <p>{{$appointment->id}}</p>
        <a href="/appointments/{{$appointment->id}}">{{$appointment->description}}</a>
        <p>{{$appointment->date}}</p>
        <p>{{$appointment->type}}</p>
        <a id="edit" href="{{route('edit_appointment', $appointment->id)}}">Editar</a>
        <a id="delete" href="{{route('delete_appointment', $appointment->id)}}">Excluir</a>

    </div>
    @endforeach
     
    @else
    <p>Consultas não encontradas! </p>
    @endif
    </div>
</body>
</html>