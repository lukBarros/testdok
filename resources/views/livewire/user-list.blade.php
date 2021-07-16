<div>
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
                <td></td>    
            </ŧr>
        @endforeach
    </table>

    {{ $users->links() }}
</div>