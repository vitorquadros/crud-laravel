<x-dash-layout>
<div class="text-center mt-8">
    @vite('resources/css/show-doctor.css')
    @if ($doctor)
        <h1 class='my-12 text-4xl font-bold'>{{ $doctor->type }}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Nome</th>
                    <td>{{ $doctor->name }}</td>
                </tr>
                <tr>
                    <th>CRM</th>
                    <td>{{ $doctor->crm }}</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>{{ $doctor->email }}</td>
                </tr>
               
            </tbody>
        </table>
        <a href="{{ route('edit_doctor', $doctor->id) }}"><button>editar</button></a>
        <a href="{{ route('delete_doctor', $doctor->id) }}"><button>deletar</button></a>
    @else
        <p>Médicos não encontrados! </p>
    @endif
    <div>
        <a href="/dashboard">&#9664;Voltar</a>
    </div>
</div>
</x-dash-layout>