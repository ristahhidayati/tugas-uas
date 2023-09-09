<?php 
   include 'config.php'; 

   if(isset($_POST['daftar'])){
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $jeniskelamin = $_POST['jeniskelamin'];
      $agama = $_POST['agama'];

      $daftar = mysqli_query($conn, "INSERT INTO user (nama,alamat,jeniskelamin,agama) VALUES  ('$nama','$alamat','$jeniskelamin','$agama')");
      if($daftar){
         header("location: list-mahasiswa.php");
      } else {
         header("location: form-daftar.php");
      }
   }
?>