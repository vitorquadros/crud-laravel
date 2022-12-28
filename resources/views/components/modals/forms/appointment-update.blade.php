<div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-fit m-0 p-3 bg-white self-center rounded-md">
    <div x-data="{
        appointment: @js($appointment),
        update() {
            if (this.appointment.date &&
                this.appointment.type) {
                $wire.set('description', this.appointment.description)
                $wire.set('date', this.appointment.date)
                $wire.set('type', this.appointment.type)
                $wire.update(this.appointment.id)
            } else {
                alert('Erro ao atualizar Consulta!')
            }
        },
    }" x-init="start()">
        <form @submit.prevent="update()" id="appointment-update-{{ $appointment->id }}">
            {{-- @csrf --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
            {{-- <input x-model="appointment.id" type="hidden" name="id" value={{$appointment->id}} /> --}}
            <table>
                <tr>
                    <td>Descrição:</td>
                    <td><input x-model="appointment.description" type="text" name="description" /></td>
                </tr>
                <tr>
                    <td>Data:</td>
                    <td>
                        <input type="text" x-model="appointment.date" name="date" />
                    </td>
                </tr>
                <tr>
                    <td>Área:</td>
                    <td><input x-model="appointment.type" step=1 type="number" name="type" /></td>
                </tr>

            </table>
        </form>
        <div class='flex justify-center gap-24 w-full'>
            <x-secondary-button @click="idmodal=null">
                Cancelar
            </x-secondary-button>
            <x-primary-button form="appointment-update-{{ $appointment->id }}" @click="idmodal=null">
                Atualizar
            </x-primary-button>
        </div>
    </div>
</div>