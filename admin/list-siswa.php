<?php
    include('../config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: form-login.php');
    }
    else{
        $username = $_SESSION['username'];
    }
?>

<?php
include('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include('includes/head-top.php') ?>
<title>Admin List Siswa - SMA Tadikamesra</title>
<link rel="icon" href="../theme/dist/img/osis.png">
<?php include('includes/head-bot.php') ?>
<!-- head end -->

<!-- body -->
<?php include('includes/nav-top.php') ?>
<div class="row">
    <div class="col-12">
        <div class="card" style="height: 170%;">
            <div class="card-header">
                <h3 class="card-title">List Pendaftar</h3>

                <div class="card-tools">
                    <form class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="search" class="form-control float-right" placeholder="Cari Nama">
    
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            if (isset($_GET['search'])) {
                                $search = $_GET['search'];
                                $sql = "select * from calon_siswa where nama like '%" . $search . "%'";
                            } else $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db_connection, $sql);
                            while ($siswa = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $siswa['id'] . "</td>";
                                echo "<td>" . $siswa['nama'] . "</td>";
                                echo "<td>" . $siswa['alamat'] . "</td>";
                                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                                echo "<td>" . $siswa['agama'] . "</td>";
                                echo "<td>" . $siswa['asal_sekolah'] . "</td>";
                                echo "<td>" . "<a href='form-edit.php?id=" . $siswa['id'] . "'>Ubah Data</a>" . "</td>";
                                echo "<td>" . "<a href='proses-hapus.php?id=" . $siswa['id'] . "'>Hapus</a>" . "</td>";
                                echo "</tr>";
                            }
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?php include('../includes/nav-bot.php') ?>
<!-- end body -->

</html>