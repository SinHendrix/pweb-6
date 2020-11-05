<?php 
    include('../config.php');
    //cek apakah sudah di tekan tobol daftarnya

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $id = $_POST['id'];

    $sql = "update calon_siswa set nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', agama = '$agama', asal_sekolah = '$asal_sekolah' where id = $id";
    // echo $sql;
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        header('Location: list-siswa.php?status:sukses');
    }
    else header('Location: list-siswa.php?status:gagal');
?>