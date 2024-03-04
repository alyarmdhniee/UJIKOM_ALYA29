<?php
include "boot.php";
?>

  <div class="container mt-2">
<form class="form-control mt-3 bg-dark text-light" action="inputprocess.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">

    <label for="exampleInputEmail1" class="form-label">jurusan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan">
    
    <label for="exampleInputEmail1" class="form-label">nisn :</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn">
    
    <label for="exampleInputEmail1" class="form-label">jenis_kelamin :</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="jk" value="laki-laki">
  <label class="form-check-label" for="flexRadioDefault1">
    laki-laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jk" value="perempuan">
  <label class="form-check-label" for="flexRadioDefault1">
    perempuan
  </label>
</div>


    <div class="text-end">
  <button type="submit" class="btn btn-light mt-3">Save</button>

  </div>
</form>
</div>
</div>


<?php
if (isset($_GET['notif'])=="berhasil"){
  ?>
  <div class="alert alert-success mt-3" role="alert">
  Input success
  </div>
  <?php
}
?>
</div>