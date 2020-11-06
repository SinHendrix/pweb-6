<?php
    include('../config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: form-login.php');
    }
    else{
        $username = $_SESSION['username'];
    }

    $id = $_GET['id'];
    // echo $id;
    $sql = 'select * from calon_siswa where id = '.$id;
    $query = mysqli_query($db_connection, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // echo mysqli_num_rows($query);
    if (!mysqli_num_rows($query)) {
        // echo "<p> data eror</p>";
        header('Location: list-siswa.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include('includes/head-top.php') ?>
    <title>Admin Formulir Edit - SMA Tadikamesra</title>
    <link rel="icon" href="../theme/dist/img/osis.png">
<?php include('includes/head-bot.php') ?>
<!-- head end -->


<?php include('includes/nav-top.php') ?>

<form action="proses-edit.php" method="post" class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Formulir Edit</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form role="form">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $siswa['nama'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <textarea class="form-control" rows="3" placeholder="Alamat Lengkap" name="alamat" required><?php echo $siswa['alamat'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- select -->
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?>>laki-laki</option>
                                <option value="perempuan" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?>>perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- select -->
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="agama">
                                <option <?php echo ($siswa['agama'] == 'islam') ? 'selected' : '' ?> value="islam" >islam</option>
                                <option <?php echo ($siswa['agama'] == 'kristen') ? 'selected' : '' ?> value="kristen" >kristen</option>
                                <option <?php echo ($siswa['agama'] == 'katholil') ? 'selected' : '' ?> value="katholik" >katholik</option>
                                <option <?php echo ($siswa['agama'] == 'hindu') ? 'selected' : '' ?> value="hindu" >hindu</option>
                                <option <?php echo ($siswa['agama'] == 'budha') ? 'selected' : '' ?> value="budha" >budha</option>
                                <option <?php echo ($siswa['agama'] == 'konghuchu') ? 'selected' : '' ?> value="konghuchu" >konghuchu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" value="<?php echo $siswa['asal_sekolah'] ?>" required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="admin" value=1>
                <input type="hidden" name="id" value="<?php echo $id; ?>">

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
<!-- /.card-body -->
</form>
<!-- /.card -->
<!-- general form elements disabled -->

<?php include('../includes/nav-bot.php') ?>
<!-- body end -->

</html>