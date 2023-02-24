<h1>Tambah Data</h1>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama Lengkap">
    </div>
    <div>
        <label>Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat Lengkap">
    </div>
    <div>
        <label>Telepon</label>
        <input type="text" name="telepon" placeholder="Nomor Telepon">
    </div>
    <button type="submit">Simpan</button>
</form>
