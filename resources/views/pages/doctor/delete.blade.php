<x-dash-layout>
    @if ($doctor)
        <h1>Médico de ID <strong>{{ $doctor->id }}</strong></h1>
        <br />
        <ul>
            <li>Nome: {{ $doctor->name }}</li>
            <li>CRM: {{ $doctor->crm }}</li>
            <li>E-mail: {{ $doctor->email }}</li>
        </ul>
        <br />
        <form action="{{ route('remove_doctor', $doctor->id) }}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
            <input type="submit" name='confirmar' value="Deletar" />
            <input type="submit" name='confirmar' value="Cancelar" />
        </form>
    @else
        <p>Médicos não encontrados! </p>
        <a href="/dashboard">&#9664;Voltar</a>
    @endif
</x-dash-layout>