<x-dash-layout>
<div class="text-center mt-8">
    @vite('resources/css/show-appointment.css')
    @if ($appointment)
        <h1 class='my-12 text-4xl font-bold'>{{ $appointment->type }}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Descrição</th>
                    <td>{{ $appointment->description }}</td>
                </tr>
                <tr>
                    <th>Data</th>
                    <td>{{ $appointment->date }}</td>
                </tr>
                <tr>
                    <th>Área</th>
                    <td>{{ $appointment->type }}</td>
                </tr>
               
            </tbody>
        </table>
        <a href="{{ route('edit_appointment', $appointment->id) }}"><button>editar</button></a>
        <a href="{{ route('delete_appointment', $appointment->id) }}"><button>deletar</button></a>
    @else
        <p>Consultas não encontradas! </p>
    @endif
    <div>
        <a href="/dashboard">&#9664;Voltar</a>
    </div>
</div>
</x-dash-layout>