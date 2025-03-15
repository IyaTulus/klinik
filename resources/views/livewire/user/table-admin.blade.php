<div>
    <div>
        <input type="text" wire:model.live="search" placeholder="Name">
        @livewire('user.add-admin')
    </div>
    <span>{{$search}}</span>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Clinic</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td></td>
                    <td>
                        <button wire:click="edit({{ $user->id }})">Edit</button>
                        <button wire:click="delete('{{ $user->id }}')">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links()}}
</div>
