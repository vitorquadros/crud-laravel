x-main-layout>
    <h1>Insert new Appointment</h1>
    <form id=create action="/appointments" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Descricao:</td>
                <td>
                    <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                </td>   
            </tr>
            <tr>
                <td>Data:</td>
                <td><input type="text" name="data" /></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="text" name="type" /></td>
            </tr>
        </table>
    </form>
    <input type="submit" value="Criar" form=create/>
    <a href="/appointments"><button>Cancelar</button></a>
</x-main-layout>