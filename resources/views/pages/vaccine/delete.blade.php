<x-dash-layout>
    @if ($vaccine)
        <h1>Vacina de ID <strong>{{ $vaccine->id }}</strong></h1>
        <br />
        <ul>
            <li>Nome: {{ $vaccine->name }}</li>
            <li>Data de aplicação esperada: {{ $vaccine->expected_date }}</li>
            <li>Data de aplicação: {{ $vaccine->application_date }}</li>
        </ul>
        <br />
        <form action="{{ route('remove_vaccine', $vaccine->id) }}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <input type="submit" name='confirmar' value="Deletar" />
            <input type="submit" name='confirmar' value="Cancelar" />
        </form>
    @else
        <p>Vacinas não encontradas! </p>
        <a href="/vaccines">&#9664;Voltar</a>
    @endif
</x-dash-layout>