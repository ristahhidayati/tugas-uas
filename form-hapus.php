<?php
   include 'config.php';

   if(isset($_POST['hapus'])){
      $iduser = $_POST['iduser'];

      $hapus = mysqli_query($conn, "DELETE FROM user WHERE iduser = '$iduser'");
      if($hapus){
         header("location: list-mahasiswa.php");
      } else {
         header("location: form-hapus.php");
      }
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>PMB | Stmik Al Fath</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets/img/stmiklogo.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
      rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">

   <!-- =======================================================
  * Template Name: Moderna
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <?php
   $ambilbaris = mysqli_query($conn, "SELECT * FROM user");
   $baris = mysqli_fetch_array($ambilbaris);
   $iduser=$baris['iduser'];
   $nama=$baris['nama'];
   ?>
   <div class="container mt-5" id="iduser<?=$iduser;?>">
      <form   method="post">
         <input type="hidden" id="iduser<?=$iduser;?>" name="iduser" value="<?=$iduser;?>">
         <h1 class="text-center"> Apakah Kamu Yakin Ingin Menghapus Akun <strong><?=$nama;?></strong></h1>
         <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3 text-center" name="hapus">Hapus</button>
         </div>
      </form>
   </div>
   <footer class="footer text-center fixed-bottom bg-primary text-light">
      &copy;Copyright by Eri Maulana | 2023
   </footer>



   <!-- Vendor JS Files -->
   <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>
</body>

</html>