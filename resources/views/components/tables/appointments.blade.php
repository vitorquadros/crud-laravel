<table {{ $attributes->merge(['class' => 'table table-' . $type]) }}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Área</th>
            @if(Auth::user() && Route::is('dashboard'))
                <th>Acoes</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($appointments as $appointment)
            <tr>
                <td><a href="/appointments/{{ $appointment->id }}">{{ $appointment->id }}</a></td>
                <td>{{ $appointment->description }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->type }}</td>
        
                @if(Auth::user() && Route::is('dashboard'))
                    <td><a href="{{ route('edit_appointment', $appointment->id) }}">editar</a> |
                        <a href="{{ route('delete_appointment', $appointment->id) }}">deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>