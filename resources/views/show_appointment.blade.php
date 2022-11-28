<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{($appointment) ? $appointment->description : 'Não encontrado!'}}</title>
</head>
<body>
    <a href="/appointments">Voltar</a>
    @if ($appointment)
    <h1>Informações da consulta: {{$appointment->description}}</h1>
    
    <p>Id: {{$appointment->id}}</p>
    <p>Descrição: {{$appointment->description}}</p>
    <p>Data: {{$appointment->date}}</p>
    <p>Área: {{$appointment->type}}</p>
    @else 
    <p>Consulta não encontrada!</p>
    @endif
</body>
</html>