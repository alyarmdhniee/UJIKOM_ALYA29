<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $connect->query("select * from absen where no='$id'");
$a = $panggil->fetch_array();
?>
<div class="container mt-2">
<form class="form-control mt-3 bg-dark text-light" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama']?>">

    <label for="exampleInputEmail1" class="form-label">jurusan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan" value="<?= $a['jurusan']?>">
    
    <label for="exampleInputEmail1" class="form-label">nisn :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn" value="<?= $a['nisn']?>">

    
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
    

    <div class="text-end">
  <button name="edite" type="submit" class="btn btn-light mt-3">Save</button>

  </div>
</form>
</div>
</div>
<?php
if (! isset($_POST['edite'])){
}else{
$update = $connect->query("update absen set nama='$_POST[nama]', jurusan='$_POST[jurusan]', nisn= '$_POST[nisn]', jenis_kelamin= '$_POST[jk]'where no='$id'");
echo "data berhasil diubah<a href='tampil.php'>kembali</a>";
}
?>
