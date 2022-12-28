<x-dash-layout>
    <h1>Atualizar a Consulta {{ $appointment->id }}</h1>
    <form id=edit action="{{route('update_appointment',$appointment->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Descrição:</td>
                <td><input type="text" name="description" value="{{$appointment->description}}"/></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input name="date" type="text" value="{{$appointment->date}}" /></td>
            </tr>
            <tr>
                <td>Área:</td>
                <td><input type="text" name="type" value="{{$appointment->type}}"/></td>
            </tr>

        </table>
    </form>
    <input form=edit type="submit" name='confirmar' value="Salvar"/>
    <a href="/dashboard"><button>Cancelar</button></a>
</x-dash-layout>