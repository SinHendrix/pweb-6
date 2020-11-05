<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include('includes/head-top.php') ?>
<title>Formulir Pendaftaran - SMA Tadikamesra</title>
<link rel="icon" href="theme/dist/img/osis.png">
<?php include('includes/head-bot.php') ?>
<!-- head end -->
<?php include('includes/nav-top.php') ?>

<form action="proses-daftar.php" method="post" class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Formulir Pendaftaran</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form role="form">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <textarea class="form-control" rows="3" placeholder="Alamat Lengkap" name="alamat" ></textarea required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- select -->
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
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
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katholik">katholik</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
                                <option value="konghuchu">konghuchu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" required>
                        </div>
                    </div>
                </div>

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

<?php include('includes/nav-bot.php') ?>

</html>