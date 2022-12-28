<div class="flex flex-col justify-center w-fit shadow dark:bg-gray-700 h-fit m-0 p-3 bg-white self-center rounded-md">
    <div x-data="{
        doctor: @js($doctor),
        update() {
            if (this.doctor.crm &&
                this.doctor.email) {
                $wire.set('name', this.doctor.name)
                $wire.set('crm', this.doctor.crm)
                $wire.set('email', this.doctor.email)
                $wire.update(this.doctor.id)
            } else {
                alert('Erro ao atualizar Médico!')
            }
        },
    }" x-init="start()">
        <form @submit.prevent="update()" id="doctor-update-{{ $doctor->id }}">
            {{-- @csrf --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
            {{-- <input x-model="doctor.id" type="hidden" name="id" value={{$doctor->id}} /> --}}
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input x-model="doctor.name" type="text" name="name" /></td>
                </tr>
                <tr>
                    <td>CRM:</td>
                    <td>
                        <input type="text" x-model="doctor.crm" name="crm" />
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input x-model="doctor.email" step=1 type="number" name="email" /></td>
                </tr>

            </table>
        </form>
        <div class='flex justify-center gap-24 w-full'>
            <x-secondary-button @click="idmodal=null">
                Cancelar
            </x-secondary-button>
            <x-primary-button form="doctor-update-{{ $doctor->id }}" @click="idmodal=null">
                Atualizar
            </x-primary-button>
        </div>
    </div>
</div>