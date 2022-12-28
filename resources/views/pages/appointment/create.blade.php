<x-main-layout>
    <h1>Inserir nova Consulta</h1>
    <form id="create" action="/appointment" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Descricao:</td>
                <td>
                    <input name="description" type="text" />
                </td>   
            </tr>
            <tr>
                <td>Data:</td>
                <td><input type="text" name="date" /></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="text" name="type" /></td>
            </tr>
        </table>
    </form>
    <input type="submit" value="Criar" form="create" />
    <a href="/dashboard"><button>Cancelar</button></a>
</x-main-layout>