<x-main-layout>
<div class="text-center mt-8">
    @vite('resources/css/show-doctor.css')
    @if ($vaccine)
        <h1 class='my-12 text-4xl font-bold'>{{ $vaccine->name }}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Data de aplicação esperada</th>
                    <td>{{ $vaccine->expected_date }}</td>
                </tr>
                <tr>
                    <th>Data de aplicação</th>
                    <td>{{ $vaccine->application_date }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('edit_vaccine', $vaccine->id) }}"><button>editar</button></a>
        <a href="{{ route('delete_vaccine', $vaccine->id) }}"><button>deletar</button></a>
    @else
        <p>Vacinas não encontradas! </p>
    @endif
    <div>
        <a href="/vaccines">&#9664;Voltar</a>
    </div>
</div>
</x-main-layout>