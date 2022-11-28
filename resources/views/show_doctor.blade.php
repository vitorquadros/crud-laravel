<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/show_doctor_style.css') }}" />
    <title>{{($doctor) ? $doctor->name : 'Não encontrado!'}}</title>
</head>
<body>
    <a href="/doctors">Voltar</a>
    @if ($doctor)
    
    <section>
        <h1>Informações de {{$doctor->name}}</h1>
        <p>Id: {{$doctor->id}}</p>
        <p>Nome: {{$doctor->name}}</p>
        <p>CRM: {{$doctor->crm}}</p>
        <p>Email: {{$doctor->email}}</p>
    </section>
   
    @else
    <p>Médico não encontrado!</p>
    @endif
</body>
</html>