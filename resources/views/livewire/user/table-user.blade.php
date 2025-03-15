<div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td style="background-color: {{ $user->isComplete() && $selectedProfile?->isComplete() ? 'transparent' : 'red' }};">
                            {{ $user->isComplete() && $selectedProfile?->isComplete() ? 'Complete' : 'Not Complete' }}
                        </td>
                        <td>
                            <button wire:click="detailUser('{{ $user->id }}')">Detail</button>
                            <button wire:click="delete('{{ $user->id }}')">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links()}}
    </div>
</div>
