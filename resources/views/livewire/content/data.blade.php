<div>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>caption</th>
                <th>foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->caption }}</td>
                <td>
                    <img src="{{ Storage::url('images/' . $data->filename) }}" alt="" width="50">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
