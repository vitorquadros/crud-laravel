<div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-auto m-0 p-3 bg-white self-center rounded-md">
    <ul>
        <li>Descrição: {{ $appointment->description }}</li>
        <li>Data: {{ $appointment->date }}</li>
        <li>Área: {{ $appointment->type }}</li>
    </ul>
    <form id="{{ $appointment->id }}" wire:submit.prevent="remove({{ $appointment->id }})" method="POST">
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
                    form="{{ $appointment->id }}"
                    type="submit"
                    name='confirmar'
                    >
                    Deletar
                </x-danger-button>
            </td>
        </tr>
    </table>
</div>