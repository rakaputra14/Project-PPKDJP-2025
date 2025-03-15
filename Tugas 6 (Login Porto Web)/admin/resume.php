<?php
session_start();
session_regenerate_id();
include '../koneksi.php';

//middleware
if(empty($_SESSION['EMAIL'])) {
  header("location:../login.php");
}

$resume = mysqli_query($conn, "SELECT * FROM resume");
$rows = mysqli_fetch_all($resume, MYSQLI_ASSOC);

if (isset($_GET['idDel'])) {
  $idDel = $_GET['idDel'];
  $del = mysqli_query($conn, "DELETE FROM resume WHERE id = $idDel");

  if ($del) {
    header("Location: resume.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "../inc/navbar.php";?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include "../inc/sidebar.php";?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Resume</h5>
              <div class="table table-responsive">
                <a class="btn btn-primary mb-2" href="add_edit_resume.php">CREATE</a>
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tahun</th>
                      <th>Skill</th>
                      <th>Instansi</th>
                      <th>Deskripsi</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($rows as $row) {
                    ?>
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $row['tahun_awal' ] . " - " . $row['tahun_akhir']?></td>
                      <td><?php echo $row['skill']?></td>
                      <td><?php echo $row['instansi']?></td>
                      <td><?php echo $row['deskripsi']?></td>
                      <td>
                        <a class="btn btn-success btn-sm" href="add_edit_resume.php?idEdt=<?php echo $row['id']?>">Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus ?')" href="resume.php?idDel=<?php echo $row['id'] ?>">Delete</a>
                        <a target="_blank" href="print-pdf.php?idPrint=<?php echo $row['id']?>" class="btn btn-primary">Print PDF</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php
                  } 
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script></script>

</body>

</html>