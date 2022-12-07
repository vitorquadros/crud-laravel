<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Data</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($appointments as $appointment)
            <tr>
                <td><a href="/appointments/{{ $appointment->id }}">{{ $appointment->id }}</a></td>
                <td>{{ $appointment->descricao }}</td>
                <td>{{ $appointment->data }}</td>
                <td>{{ $appointment->type }}</td>
                <td>
                    <a href="{{ route('edit', $appointment->id) }}">editar</a> |
                    <a href="{{ route('delete', $appointment->id) }}">deletar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>