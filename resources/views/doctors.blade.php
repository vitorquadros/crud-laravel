<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
</head>
<body>
    <h1>Médicos</h1>
    @if ($doctors->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CRM</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>{{$doctor->id}}</td>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->crm}}</td>
                <td>{{$doctor->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Doctors não encontrados! </p>
    @endif
</body>
</html>