<x-dash-layout>
    <h2 class='text-4xl'>Consultas</h2>
    <livewire:appointments :appointments="$appointments">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2 class='text-4xl'>Usuários cadastrados</h2>
                @if (isset($users) && $users->count() > 0)
                    <ul>
                        @foreach ($users as $user)
                            <li>{{ $user->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Usuários não encontrados! </p>
                @endif
            </div>
        </div>

</x-dash-layout>
