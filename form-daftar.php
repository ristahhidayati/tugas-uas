<?php
   include 'config.php';
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
   <div class="container ">
      <div class="row mt-3">
         <div class="col-6 mt-2">
            <h1 class="mt-5 text-center mb-5">Daftar</h1>
            <form action="proses-pendaftaran.php" method="post">
               <div class="form-floating mb-3">
                  <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Nama</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="alamat" class="form-control" id="floatingInput" placeholder="Alamat">
                  <label for="floatingInput">Alamat</label>
               </div>
               <div class="form-group mb-3">
                  <label class="col-md-4 control-label" for="jeniskelamin">Jenis Kelamin</label>
                  <div class="col-md-4 ">
                     <div class="me-5">
                        <label class="radio-inline" for="jeniskelamin-0">
                           <input type="radio" name="jeniskelamin" id="jeniskelamin-0" value="pria">
                           Pria
                        </label>
                     </div>
                     <div>
                        <label class="radio-inline" for="jeniskelamin-1">
                           <input type="radio" name="jeniskelamin" id="jeniskelamin-1" value="wanita">
                           Wanita
                        </label>
                     </div>
                  </div>
               </div>
               <select class="form-select mb-3" aria-label="Default select example" name="agama">
                  <option selected>Pilih Agama Kamu..</option>
                  <option value="1" name="agama">Islam</option>
                  <option value="2" name="agama">Kristen</option>
                  <option value="3" name="agama">Budha</option>
                  <option value="4" name="agama">Hindu</option>
               </select>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary mb-3" name="daftar">Daftar</button>
               </div>
            </form>
         </div>
         <div class="col-6 mt-5">
            <img src="assets/img/logo.png" class="img-fluid" alt="">
         </div>
      </div>
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