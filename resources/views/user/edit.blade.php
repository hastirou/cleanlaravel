<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel Sederhana dengan Clean Architecture</title>
</head>
<body>
    <h1>Edit Data User</h1>
    <form method="POST" action="{{ route('user.update', $model->id) }}">
        @csrf
        @method('PUT')
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ $model->nama }}">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="{{ $model->alamat }}">
        <label for="telepon">Telepon</label>
        <input type="text" id="telepon" name="telepon" value="{{ $model->telepon }}">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
