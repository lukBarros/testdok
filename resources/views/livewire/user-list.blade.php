<div>

<a class="btn btn-primary" wire:click="buttonCreate()">cadastrar</a>


    <table class="table">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</td>    
        </ŧr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-primary" wire:click="buttonUpdate({{ $user->id }})">Editar</a>
                </td>    
            </ŧr>
        @endforeach
    </table>

    {{ $users->links() }}
</div>