<div>
    <div style="margin-bottom: 20px; display: {{ $detailOpen ? 'block' : 'none' }};">
        <h1>Detail User</h1>
        <div style="position: relative; display: flex; gap: 20px;">
            <table border="1">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $selectedUser?->name }}</td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>:</td>
                    <td>{{ $selectedUser?->faculty ?? 'Belum Di Isi' }}</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>{{ $selectedUser?->prodi ?? 'Belum Di Isi' }}</td>
                </tr>
            </table>
            <table border="1">
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $selectedProfile?->gender }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $selectedProfile?->addres ?? 'Belum Di Isi' }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $selectedProfile?->birth ?? 'Belum Di Isi' }}</td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td>:</td>
                    <td>{{ $selectedProfile?->phone ?? 'Belum Di Isi' }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $selectedProfile?->religion ?? 'Belum Di Isi' }}</td>
                </tr>
            </table>
        </div>
        <div style="margin-top: 10px">
            <table border="1">
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td style="background-color: {{ $selectedUser?->isComplete() && $selectedProfile?->isComplete() ? 'transparent' : 'red' }};">
                        {{ $selectedUser?->isComplete() && $selectedProfile?->isComplete() ? 'Complete' : 'Not Complete' }}
                    </td>
                </tr>
            </table>
        </div>
        <button wire:click="toggleClose">Back</button>
        {{-- <button wire:click="delete('{{ $user->id }}')">Delete</button> --}}
    </div>
</div>
