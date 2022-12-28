<x-dash-layout>
    <h1>Inserir novo registro de Vacina</h1>
    <form id="create" action="/vaccine" method="POST">
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
                <td>Data de aplicação esperada:</td>
                <td><input type="text" name="expected_date" /></td>
            </tr>
            <tr>
                <td>Data de aplicação:</td>
                <td><input type="text" name="application_date" /></td>
            </tr>
        </table>
    </form>
    <input type="submit" value="Criar" form="create" />
    <a href="/vaccines"><button>Cancelar</button></a>
</x-dash-layout>