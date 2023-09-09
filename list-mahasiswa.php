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
   <div class="container mt-5">

      <table class="table table-bordered">
         <button class="btn btn-info mb-3"><a href="form-daftar.php" class="text-decoration-none text-light">Tambah
               Baru</a></button>
         <thead>
            <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Jenis Kelamin</th>
               <th>Agama</th>
               <th>Tindakan</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $i = 1;
            $ambildata = mysqli_query($conn, "SELECT * FROM user");
            while ($baris = mysqli_fetch_array($ambildata)){
               $iduser = $baris['iduser'];
               $nama = $baris['nama'];
               $alamat = $baris['alamat'];
               $jeniskelamin = $baris['jeniskelamin'];
               $agama = $baris['agama'];
               ?>

            <tr>

               <td><?=$i;?></td>
               <td><?=$nama;?></td>
               <td><?=$alamat;?></td>
               <td><?=$jeniskelamin;?></td>
               <td><?=$agama;?></td>
               <td>
                  <button type="button" class="btn btn-warning"><a href="form-edit.php#iduser=<?=$iduser;?>"
                        class=" text-decoration-none text-light">Edit</a></button>
                  <button type="button" class="btn btn-danger"><a href="form-hapus.php#iduser<?=$iduser;?>"
                        class="text-decoration-none text-light">Hapus</a></button>
               </td>
            </tr>
            <?php
            $i++;   
         }
            ?>
         </tbody>
      </table>
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