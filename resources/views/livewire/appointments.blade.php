<div x-data="{ open: false }">
    
    @if (isset($appointments))
    
        <div style="display:flex; flex-direction: row; justify-content:flex-end">
            <button @click="open = true">Criar Nova Consulta</button>
        </div>

        <!-- CONTEÚDO DO MODAL-->
        <div x-cloak>
            <div x-show="open"
                x-bind:class="!open ? 'hidden' :
                    'overflow-y-auto overflow-x-hidden pl-60 fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray-900/25'">

                <div class="flex rounded-md p-5 justify-center flex-col w-1/2 min-w-min pt-10 mt-10 bg-white"
                    @click.away="open = false">
                    <h1 class='text-center text-2xl font-bold'>Inserir nova consulta</h1>
                    <form id=create @submit.prevent="$wire.save()" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
                        <table>
                            <tr>
                                <td>Descrição:</td>
                                <td><input wire:model="description" type="text" name="description" /></td>
                            </tr>
                            <tr>
                                <td>Data:</td>
                                <td>
                                    <input wire:model="date" name="date" type="text" />
                                </td>
                            </tr>
                            <tr>
                                <td>Área</td>
                                <td><input type="text" wire:model='type' name="type" /></td>
                            </tr>
                        </table>
                    </form>
                    {{-- <input type="submit" value="Criar" form=create /> --}}
                    <div class='flex justify-center gap-24 w-full'>
                        <x-secondary-button @click="open=false" class='w-30'>Cancelar</x-secondary-button>
                        <x-primary-button @click="open=false" class='w-30' form='create'>Criar</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
        @if ($appointments->count() > 0)
        <x-tables.appointments-live :appointments="$appointments" class='table-odd' type='hover' />
        @endif
    @else
        <p>Consultas não encontradas! </p>
        
    @endif
</div>