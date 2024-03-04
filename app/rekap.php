<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer fs-1 text-success"></i></button>

<form action="" class="form-control" method="post">
  Tanggal Awal : <input type="date" name="tgl1" class="form-control">
  Tanggal Akhir : <input type="date" name="tgl2" class="form-control">
  <div class="text-end">

    <input type="submit" class="btn btn-danger mt-2" value="cari">
  </div>
</form>
<div id="div1">
<?php
include "boot.php";
include "koneksi.php";
$date=date("d-m-y");


?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">keterangan</th>
      <th scope="col">waktu</th>
    </tr>
  </thead>
  <tbody>
    <?php

    @$tampil = $connect->query("select*from siswa where waktu between  '$_POST[tgl1]' and '$_POST[tgl2]' ");
    while ($s = $tampil->fetch_array()) {
        
        @$No++;
    
    ?>

    
    <tr>
      <th scope="row"><?= $No; ?></th>
      <td><?= $s['nama'] ?></td>
      <td><?= $s['keterangan'] ?></td>
      <td><?= $s['waktu'] ?></td>
    </tr>

    <?php
    }
    ?>
  </tbody>
</table>
</div>

<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>