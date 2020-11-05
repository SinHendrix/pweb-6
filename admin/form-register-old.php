<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulir daftar</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran</h3>
    </header>
    <form action="../proses-daftar.php" method="post">
        <p>
            <label>Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap">
        </p>
        <p>
            <label>Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label>Jenis Kelamin: </label>
            <select name="jenis_kelamin" id="">
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </p>
        <p>
            <label>Agama: </label>
            <select name="agama" id="">
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="katholik">katholik</option>
                <option value="hindu">hindu</option>
                <option value="budha">budha</option>
                <option value="konghuchu">konghuchu</option>
            </select>
        </p>
        <p>
            <label>Asal Sekolah: </label>
            <input type="text" name="asal_sekolah" placeholder="asal sekolah">
        </p>
        <input type="hidden" value="1" name="admin">
        <button type="submit">Daftar</button>
    </form>

</body>
</html>