<?php
include "boot.php";
include "koneksi.php";
?>

  <div class="container mt-2">
<form class="form-control mt-3 bg-dark text-light" action="inputprocessabsen.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <select name="nama" id="" class="form-control">
      <?php
      $siswa=$connect->query("select nama from absen");
      while($row= $siswa->fetch_array()){
      ?>

      <option>
        <?=$row['nama']?>
      </option>

      <?php
      }
      ?>
    </select>



<label for="exampleInputEmail1" class="form-label">keterangan :</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="hadir">
  <label class="form-check-label" for="flexRadioDefault1">
    hadir
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="sakit">
  <label class="form-check-label" for="flexRadioDefault1">
    sakit
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="izin">
  <label class="form-check-label" for="flexRadioDefault1">
    izin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="alpa">
  <label class="form-check-label" for="flexRadioDefault1">
    alpa
  </label>
</div>


    <div class="text-end">
  <button type="submit" class="btn btn-light mt-3">Save</button>

  </div>
</form>
</div>



<?php
if (isset($_GET['notif'])=="berhasil"){
  ?>
  <div class="alert alert-success mt-3" role="alert">
  Absen success
  </div>
  <?php
}else{
  echo "anda sudah absen";
}
?>
</div>



