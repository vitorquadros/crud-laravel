<x-dash-layout>
    <h1>Inserir novo Médico</h1>
    <form id="create" action="/doctor" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td>
                    <input name="name" type="text" />
                </td>   
            </tr>
            <tr>
                <td>CRM:</td>
                <td><input type="text" name="crm" /></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input type="text" name="email" /></td>
            </tr>
        </table>
    </form>
    <input type="submit" value="Criar" form="create" />
    <a href="/dashboard"><button>Cancelar</button></a>
</x-dash-layout>