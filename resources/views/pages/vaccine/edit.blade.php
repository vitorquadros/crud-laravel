<x-dash-layout>
    <h1>Atualizar o registro de vacina {{ $vaccine->id }}</h1>
    <form id=edit action="{{route('update_vaccine',$vaccine->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="name" value="{{$vaccine->name}}"/></td>
            </tr>
            <tr>
                <td>Data de aplicação esperada:</td>
                <td><input name="crm" type="text" value="{{$vaccine->expected_date}}" /></td>
            </tr>
            <tr>
                <td>Data de aplicação:</td>
                <td><input type="text" name="email" value="{{$vaccine->application_date}}"/></td>
            </tr>

        </table>
    </form>
    <input form=edit type="submit" name='confirmar' value="Salvar"/>
    <a href="/vaccines"><button>Cancelar</button></a>
</x-dash-layout>