<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>
</body>

    <form method="post" action="/user/ubah_simpan/{{ $data->user_id}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->username }}">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" value="{{ $data->username }}">
        <br>
        <label>Label ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->username }}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</html>