<x-main-layout>
    @vite('resources/css/show-appointment.css')
    @if ($appointment)
        <div>
            <h1 class='text-4xl font-bold'>{{ $appointment->type }}</h1>
            <p>{{ $appointment->descricao }}</p>
            <table>
                </thead>
                <tbody>
                    <tr>
                        <th>Data</th>
                        <td>{{ $appointment->date }}</td>
                    </tr>
                    <tr>
                        <th>Quantidade</th>
                        <td>5</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('edit_appointment', $appointment->id) }}"><button>editar</button></a>
            <a href="{{ route('delete_appointment', $appointment->id) }}"><button>deletar</button></a>
        @else
            <p>Consultas não encontradas! </p>
    @endif
    <div>
        <a href="/appointments">&#9664;Voltar</a>
    </div>
    </div>
</x-main-layout>