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


<html lang="en">
<!-- head -->
<?php include('includes/head-top.php') ?>
    <title>SMA Tadikamesra</title>
    <link rel="icon" href="../theme/dist/img/osis.png">
<?php include('includes/head-bot.php') ?>
<!-- head end -->

<!-- body -->
<?php include('includes/nav-top.php') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark">Selamat Datang, <?php echo $username; ?></h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <!-- small card -->
                        <a href="form-register.php">
                            <div class="small-box bg-warning" style="height: 150px;"> 
                                <div class="inner">
                                    <h3>Daftarkan Siswa</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small card -->
                        <a href="list-siswa.php">
                            <div class="small-box bg-success" style="height: 150px;">
                                <div class="inner">
                                    <h3>List Siswa</h3>
                                    <p>
                                        <?php 
                                            $sql = "SELECT count(*) as total FROM calon_siswa";
                                            $query = mysqli_query($db_connection, $sql);
                                            $data = mysqli_fetch_array($query);
                                            $total = $data[0];
                                            echo $total." Siswa";
                                        ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small card -->
                        <a href="form-tambah-admin.php">
                            <div class="small-box bg-red" style="height: 150px;"> 
                                <div class="inner">
                                    <h3>Tambah Admin</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-ninja"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small card -->
                        <a href="proses-logout.php">
                            <div class="small-box bg-blue" style="height: 150px;"> 
                                <div class="inner">
                                    <h3>Logout</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
<!-- /.content-wrapper -->

<?php include('../includes/nav-bot.php') ?>
<!-- body end -->

</html>