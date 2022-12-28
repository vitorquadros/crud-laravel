{{-- <x-main-layout>
    <h2 class='text-4xl'>Consultas</h2>
    @if (isset($appointments) && $appointments->count() > 0)
        <x-tables.appointments :appointments="$appointments" class='table-odd' type='hover'/>
        @auth
            <div style="display:flex; flex-direction: row; justify-content:flex-end">
                <a href="/appointment"><button>Criar Nova Consulta</button></a>
            </div>
        @endauth
    @else
        <p>Consultas não encontradas! </p>
    @endif
</x-main-layout> --}}
<x-dash-layout>
    <h2 class='text-4xl'>Consultas</h2>
    <livewire:appointments :appointments="$appointments">
</x-dash-layout>