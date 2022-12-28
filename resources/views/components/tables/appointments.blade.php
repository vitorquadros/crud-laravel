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
                @if(Auth::user() && Route::is('dashboard'))
                     <td><a href="{{route('appointment.single-dash',$appointment->id) }}">{{ $appointment->id }}</a></td>
                     <td><a href="{{route('appointment.single-dash',$appointment->id) }}">{{ $appointment->description }}</a></td>
                @else
                    <td><a href="/appointments/{{ $appointment->id }}">{{ $appointment->id }}</a></td>
                    <td><a href="/appointments/{{ $appointment->id }}">{{ $appointment->description }}</a></td>
                @endif
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