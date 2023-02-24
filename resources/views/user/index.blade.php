<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel Sederhana dengan Clean Architecture</title>
</head>
<body>
    <h1>Data User</h1>
    <a href="{{ route('user.create') }}">Tambah</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>
                        <a href="{{ route('user.edit', $item->id) }}">Ubah</a>
                        <form method="POST" action="{{ route('user.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
