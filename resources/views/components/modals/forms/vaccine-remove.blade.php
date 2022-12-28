<div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-auto m-0 p-3 bg-white self-center rounded-md">
    <ul>
        <li>Nome: {{ $vaccine->name }}</li>
        <li>Data de aplicação esperada: {{ $vaccine->expected_date }}</li>
        <li>Data de aplicação: {{ $vaccine->application_date }}</li>
        <li>Já aplicada: {{ strtotime($vaccine->expected_date) > strtotime($vaccine->application_date) ? 'Não' : 'Sim' }}</li>
    </ul>
    <form id="{{ $vaccine->id }}" wire:submit.prevent="remove({{ $vaccine->id }})" method="POST">
        <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste item?</h4>
    </form>
    <table>
        <tr align="center">
            <td>
            <x-secondary-button  @click="idmodal=null">
                Cancelar
            </x-secondary-button>
            </td>
            <td>
                <x-danger-button
                    class='px-2 py-1 mx-0 my-0'
                    @click="idmodal=null;"
                    form="{{ $vaccine->id }}"
                    type="submit"
                    name='confirmar'
                    >
                    Deletar
                </x-danger-button>
            </td>
        </tr>
    </table>
</div>