<div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-fit m-0 p-3 bg-white self-center rounded-md">
    <div x-data="{
        vaccine: @js($vaccine),
        update() {
            if (this.vaccine.expected_date &&
                this.vaccine.application_date) {
                $wire.set('name', this.vaccine.name)
                $wire.set('expected_date', this.vaccine.expected_date)
                $wire.set('application_date', this.vaccine.application_date)
                $wire.update(this.vaccine.id)
            } else {
                alert('Erro ao atualizar Consulta!')
            }
        },
    }" x-init="start()">
        <form @submit.prevent="update()" id="vaccine-update-{{ $vaccine->id }}">
            {{-- @csrf --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
            {{-- <input x-model="vaccine.id" type="hidden" name="id" value={{$vaccine->id}} /> --}}
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input x-model="vaccine.name" type="text" name="name" /></td>
                </tr>
                <tr>
                    <td>Data de aplicação esperada:</td>
                    <td>
                        <input type="text" x-model="vaccine.expected_date" name="expected_date" />
                    </td>
                </tr>
                <tr>
                    <td>Data de aplicação:</td>
                    <td>
                        <input type="text" x-model="vaccine.application_date" name="application_date" />
                    </td>
                </tr>

            </table>
        </form>
        <div class='flex justify-center gap-24 w-full'>
            <x-secondary-button @click="idmodal=null">
                Cancelar
            </x-secondary-button>
            <x-primary-button form="vaccine-update-{{ $vaccine->id }}" @click="idmodal=null">
                Atualizar
            </x-primary-button>
        </div>
    </div>
</div>