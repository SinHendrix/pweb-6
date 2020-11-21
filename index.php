<?php
include('config.php');
// session_start();
// session_destroy();
    // echo ("test");
    $date = date("Y-m-d");
    $userIP = $_SERVER['REMOTE_ADDR'];
    $query = "SELECT * FROM unique_visitors WHERE date = $date";
    $result = mysqli_query($db_connection, $query);



    $updateQuery = "UPDATE unique_visitors SET views = views + 1
    WHERE id='1'";

    $hasil = mysqli_query($db_connection, $updateQuery);
    // echo($hasil);
?>

<html lang="en">
<!-- head -->
<?php include('includes/head-top.php') ?>
    <title>SMA Tadikamesra</title>
    <link rel="icon" href="theme/dist/img/osis.png">
<?php include('includes/head-bot.php') ?>
<!-- head end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H1PZ31RRF5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H1PZ31RRF5');
</script>

<!-- body -->
<?php include('includes/nav-top.php') ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark">Selamat Datang</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <a href="form-register.php">
                            <div class="small-box bg-warning" style="height: 150px;"> 
                                <div class="inner">
                                    <h3>Daftar Diri</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6">
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
                                    <i class="ion ion-stats-bars"></i>
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
<?php
    $filecounter="counter.txt";
    $fl=fopen($filecounter,"r+");
    $hit=fread($fl,filesize($filecounter));

    echo("<table width=250 align=center border=0 cellspacing=0 cellpadding=0><tr>");
    echo("<td width=250 valign=middle align=center>");
    echo("<font face=verdana size=2 color=#000000><b>");
    echo("Anda pengunjung yang ke:");
    $hit=$hit+1;
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");

    fclose($fl);
    $fl=fopen($filecounter,"w+");
    
    fwrite($fl,$hit,strlen($hit));
    fclose($fl);
?>

<?php include('includes/nav-bot.php') ?>
<!-- body end -->

</html>