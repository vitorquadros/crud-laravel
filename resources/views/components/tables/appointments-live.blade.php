<div x-data="{
    open: false,
    idmodal:null,
}">
<table {{ $attributes->merge(['class' => 'table table-' . $type]) }}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th><a href="#" wire:click='orderBy'>Id</a></th>
            <th><a href="#" wire:click='orderByDescription'>Descrição</a></th>
            <th>Data</th>
            <th><a href="#" wire:click='orderByType'>Área</a></th>
            @if(Auth::user())
                <th colspan="2" >Acoes</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($appointments as $appointment)
            <tr>
                @if(Auth::user())
                     <td><a href="{{route('appointment.single-dash', $appointment->id) }}">{{ $appointment->id }}</a></td>
                     <td><a href="{{route('appointment.single-dash', $appointment->id) }}">{{ $appointment->description }}</a></td>
                @else
                    <td><a href="/appointments/{{ $appointment->id }}">{{ $appointment->id }}</a></td>
                    <td><a href="/appointments/{{ $appointment->id }}">{{ $appointment->description }}</a></td>
                @endif

                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->type }}</td>

                @if (Auth::user())
                <td class='actions'>
                    <x-primary-button class='px-2 py-1 mx-0 my-0'
                    @click=" idmodal = 'modal-upd-{{ $appointment->id }}'">
                        Editar
                    </x-primary-button>
                </td>
                <td class='actions'>
                    <x-danger-button class='px-2 py-1 mx-0 my-0'
                    @click=" idmodal = 'modal-rm-{{ $appointment->id }}'">
                        Remover
                    </x-danger-button>
                </td>
            @endif
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($appointments as $appointment)
    <x-modals.appointment-modal
        id="{{'modal-rm-'.$appointment->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$appointment->description.' ('.$appointment->id.')'}}</x-slot>
        <x-modals.forms.appointment-remove :appointment="$appointment"/>
    </x-forms.appointment-modal>
@endforeach
@foreach ($appointments as $appointment)
    <x-modals.appointment-modal
        id="{{'modal-upd-'.$appointment->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$appointment->description.' ('.$appointment->id.')'}}</x-slot>
        <x-modals.forms.appointment-update :appointment="$appointment"/>
    </x-forms.appointment-modal>
@endforeach
</div>