<x-dash-layout>
    <h1>Atualizar o Médico {{ $doctor->id }}</h1>
    <form id=edit action="{{route('update_doctor',$doctor->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="name" value="{{$doctor->name}}"/></td>
            </tr>
            <tr>
                <td>CRM:</td>
                <td><input name="crm" type="text" value="{{$doctor->crm}}" /></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email" value="{{$doctor->email}}"/></td>
            </tr>

        </table>
    </form>
    <input form=edit type="submit" name='confirmar' value="Salvar"/>
    <a href="/dashboard"><button>Cancelar</button></a>
</x-dash-layout>