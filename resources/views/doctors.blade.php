<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/doctors_style.css') }}" />
    <title>Lista de Médicos</title>
</head>
<body>
    <a href="/">Voltar</a>
    <div class="container">
    <h1>Médicos</h1>
    @if ($doctors->count()>0)
    <section>
        <header>
            <p>ID</p>
            <p>Nome</p>
            <p>CRM</p>
            <p>Email</p>
            <a href="/doctors/create">+ Novo</a>
        </header>
    </section>

    @foreach($doctors as $doctor)
    <div class="card">
        <p>{{$doctor->id}}</p>
        <p>{{$doctor->name}}</p>
        <p>{{$doctor->crm}}</p>
        <p>{{$doctor->email}}</p>
        <button id="edit">Editar</button>
        <button id="delete" onclick="window.location='{{ url('/doctors/' . $problem->id . '/edit') }}'">Excluir</button>

    </div>
    @endforeach
     
    @else
    <p>Doctors não encontrados! </p>
    @endif
    </div>
</body>
</html>