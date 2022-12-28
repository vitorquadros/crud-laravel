<div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-auto m-0 p-3 bg-white self-center rounded-md">
    <ul>
        <li>Nome: {{ $doctor->name }}</li>
        <li>CRM: {{ $doctor->crm }}</li>
        <li>E-mail: {{ $doctor->email }}</li>
    </ul>
    <form id="{{ $doctor->id }}" wire:submit.prevent="remove({{ $doctor->id }})" method="POST">
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
                    form="{{ $doctor->id }}"
                    type="submit"
                    name='confirmar'
                    >
                    Deletar
                </x-danger-button>
            </td>
        </tr>
    </table>
</div>