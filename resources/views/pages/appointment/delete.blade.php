<x-dash-layout>
    @if ($appointment)
        <h1>Consulta de ID <strong>{{ $appointment->id }}</strong></h1>
        <br />
        <ul>
            <li>Descrição: {{ $appointment->description }}</li>
            <li>Data: {{ $appointment->date }}</li>
            <li>Área: {{ $appointment->type }}</li>
        </ul>
        <br />
        <form action="{{ route('remove_appointment', $appointment->id) }}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <input type="submit" name='confirmar' value="Deletar" />
            <input type="submit" name='confirmar' value="Cancelar" />
        </form>
    @else
        <p>Consultas não encontradas! </p>
        <a href="/dashboard">&#9664;Voltar</a>
    @endif
</x-dash-layout>