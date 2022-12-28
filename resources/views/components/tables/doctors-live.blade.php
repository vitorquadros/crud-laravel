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
            <th>Email</th>
            <th><a href="#" wire:click='orderByCrm'>Crm</a></th>
            @if(Auth::user())
                <th colspan="2" >Acoes</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
            <tr>
                @if(Auth::user())
                     <td><a href="{{route('doctor.single-dash', $doctor->id) }}">{{ $doctor->id }}</a></td>
                     <td><a href="{{route('doctor.single-dash', $doctor->id) }}">{{ $doctor->name }}</a></td>
                @else
                    <td><a href="/doctors/{{ $doctor->id }}">{{ $doctor->id }}</a></td>
                    <td><a href="/doctors/{{ $doctor->id }}">{{ $doctor->name }}</a></td>
                @endif

                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->crm }}</td>

                @if (Auth::user())
                <td class='actions'>
                    <x-primary-button class='px-2 py-1 mx-0 my-0'
                    @click=" idmodal = 'modal-upd-{{ $doctor->id }}'">
                        Editar
                    </x-primary-button>
                </td>
                <td class='actions'>
                    <x-danger-button class='px-2 py-1 mx-0 my-0'
                    @click=" idmodal = 'modal-rm-{{ $doctor->id }}'">
                        Remover
                    </x-danger-button>
                </td>
            @endif
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($doctors as $doctor)
    <x-modals.doctor-modal
        id="{{'modal-rm-'.$doctor->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$doctor->nome.' ('.$doctor->id.')'}}</x-slot>
        <x-modals.forms.doctor-remove :doctor="$doctor"/>
    </x-forms.doctor-modal>
@endforeach
@foreach ($doctors as $doctor)
    <x-modals.doctor-modal
        id="{{'modal-upd-'.$doctor->id}}"
        trigger="idmodal"
        >
        <x-slot name="title">{{$doctor->name.' ('.$doctor->id.')'}}</x-slot>
        <x-modals.forms.doctor-update :doctor="$doctor"/>
    </x-forms.doctor-modal>
@endforeach
</div>