<div x-data="{
    open: false,
    idmodal:null,
}">
<table {{ $attributes->merge(['class' => 'table table-' . $type]) }}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th><a href="#" wire:click='orderBy'>Id</a></th>
            <th><a href="#" wire:click='orderByName'>Nome</a></th>
            <th>Data de aplicação esperada</th>
            <th>Data de aplicação</th>
            <th>Já aplicada</th>
            @if(Auth::user())
                <th colspan="2" >Acoes</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($vaccines as $vaccine)
            <tr>
                @if(Auth::user())
                     <td><a href="{{route('vaccine.single-dash', $vaccine->id) }}">{{ $vaccine->id }}</a></td>
                     <td><a href="{{route('vaccine.single-dash', $vaccine->id) }}">{{ $vaccine->name }}</a></td>
                @else
                    <td><a href="/vaccines/{{ $vaccine->id }}">{{ $vaccine->id }}</a></td>
                    <td><a href="/vaccines/{{ $vaccine->id }}">{{ $vaccine->name }}</a></td>
                @endif

                <td>{{ $vaccine->expected_date }}</td>
                <td>{{ $vaccine->application_date }}</td>
                <td>{{ strtotime($vaccine->expected_date) > strtotime($vaccine->application_date) ? 'Não' : 'Sim' }}</td>

                @if (Auth::user())
                <td class='actions'>
                    <x-primary-button class='px-2 py-1 mx-0 my-0'
                    @click=" idmodal = 'modal-upd-{{ $vaccine->id }}'">
                        Editar
                    </x-primary-button>
                </td>
                <td class='actions'>
                    <x-danger-button class='px-2 py-1 mx-0 my-0'
                    @click=" idmodal = 'modal-rm-{{ $vaccine->id }}'">
                        Remover
                    </x-danger-button>
                </td>
            @endif
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($vaccines as $vaccine)
    <x-modals.vaccine-modal
        id="{{'modal-rm-'.$vaccine->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$vaccine->name.' ('.$vaccine->id.')'}}</x-slot>
        <x-modals.forms.vaccine-remove :vaccine="$vaccine"/>
    </x-forms.vaccine-modal>
@endforeach
@foreach ($vaccines as $vaccine)
    <x-modals.vaccine-modal
        id="{{'modal-upd-'.$vaccine->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$vaccine->name.' ('.$vaccine->id.')'}}</x-slot>
        <x-modals.forms.vaccine-update :vaccine="$vaccine"/>
    </x-forms.vaccine-modal>
@endforeach
</div>