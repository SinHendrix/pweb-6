<?php 
    include('config.php');
    //cek apakah sudah di tekan tobol daftarnya

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "insert into calon_siswa (nama, alamat, jenis_kelamin, agama, asal_sekolah) values('$nama', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        if ($_POST['admin']) {
            header('Location: admin/index.php?status:sukses2');
        }
        else header('Location: index.php?status:sukses');
    }
    else header('Location: index.php?status:gagal');
?>