<h3>Data Absensi Hari Ini</h3>
<?php
include "boot.php";
$date=date("Y-m-d");
echo $date;
?>

<div class="row">
<div class="col">
<div class="card mb-5" style="width: 10rem;">
  <img src="../images/present.png" class="card-img-top" alt="...">
  <div class="card-body bg-success">
    <p class="card-text">hadir
     <?php
     include "koneksi.php";
     $lihat = $connect->query("select keterangan from siswa where keterangan like 'hadir' and waktu like '%$date%'");
     $jumlah = $lihat->num_rows;
     echo $jumlah;
     ?>
    </p>
  </div>
</div>
</div>

<div class="col">
<div class="card mb-5" style="width: 10rem;">
  <img src="../images/sick.png" class="card-img-top" alt="...">
  <div class="card-body bg-primary">
    <p class="card-text">sakit 
    <?php
     include "koneksi.php";
     $lihat = $connect->query("select keterangan from siswa where keterangan like 'sakit' and waktu like '%$date%'");
     $jumlah = $lihat->num_rows;
     echo $jumlah;
     ?> 
    </p>
  </div>
</div>
</div>
</div>


<div class="row">
<div class="col">
<div class="card mb-5" style="width: 10rem;">
  <img src="../images/izin.png" class="card-img-top" alt="...">
  <div class="card-body bg-warning">
    <p class="card-text">izin
    <?php
     include "koneksi.php";
     $lihat = $connect->query("select keterangan from siswa where keterangan like 'izin' and waktu like '%$date%'");
     $jumlah = $lihat->num_rows;
     echo $jumlah;
     ?>
    </p>
  </div>
</div>
</div>

<div class="col">
<div class="card mb-5" style="width: 10rem;">
  <img src="../images/absen.png" class="card-img-top" alt="...">
  <div class="card-body bg-danger">
    <p class="card-text">alpa
    <?php
     include "koneksi.php";
     $lihat = $connect->query("select keterangan from siswa where keterangan like 'alpa' and waktu like '%$date%'");
     $jumlah = $lihat->num_rows;
     echo $jumlah;
     ?>
    </p>
  </div>
</div>
</div>
</div>

