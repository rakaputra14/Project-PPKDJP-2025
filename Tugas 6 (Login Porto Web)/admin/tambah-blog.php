<?php
session_start();
session_regenerate_id();
include '../koneksi.php';

//middleware
if(empty($_SESSION['EMAIL'])) {
  header("location:../login.php");
}

//Data Kategori
$queryKategori = mysqli_query($conn, "SELECT * FROM categories");
$rowKategori = mysqli_fetch_all($queryKategori, MYSQLI_ASSOC);

//INSERT
if (isset($_POST['simpan'])) { 
  //Pulling Data From Database
  $id_kategori = $_POST['id_kategori'];
  $judul = $_POST['judul'];
  $status = $_POST['status'];
  $isi = $_POST['isi'];
  $tags = $_POST['tags'];
  $penulis = $_SESSION['FULLNAME'];

  $foto = $_FILES['foto'];

    if ($foto['error'] == 0) {
        $fileName = uniqid() . '_' . basename($foto['name']);
        $filePath = "../assets/uploads/" . $fileName;
        move_uploaded_file($foto['tmp_name'], $filePath);

        //INSERTING DATA INTO DATABASE
        $insert = mysqli_query($conn, "INSERT INTO blog (id_kategori, judul, isi, status, tags, penulis, foto) VALUES ('$id_kategori','$judul','$isi','$status','$tags','$penulis','$fileName')");
        
        if ($insert) {
          header("Location: blog.php?kirim=sukses");
        } else {
          header("Location: tambah-blog.php?tambah=error");
        }
    }
}

//Checking Are We Editing
if (isset($_GET['edit'])) {
  //If we are editing, output data of the id to the input inside the form
  $id = ($_GET['edit']);
  $queryedit = mysqli_query($conn, "SELECT * FROM blog WHERE id = $id");
  $row = mysqli_fetch_assoc($queryedit);
  
  
}

//UPDATE
if (isset($_POST['edit'])) {
  $id = ($_GET['edit']);
  $id_kategori = $_POST['id_kategori'];
  $judul = $_POST['judul'];
  $status = $_POST['status'];
  $isi = $_POST['isi'];
  $tags = $_POST['tags'];
  $penulis = $_SESSION['FULLNAME'];
  
  $foto = $_FILES['foto'];
  unlink("../assets/uploads/" . $row['foto']);

  if ($foto['error'] == 0) {
    $fileName = uniqid() . '_' . basename($foto['name']);
    $filePath = "../assets/uploads/" . $fileName;
    move_uploaded_file($foto['tmp_name'], $filePath);

  $q_update = mysqli_query($conn, "UPDATE blog SET id_kategori='$id_kategori', judul='$judul', isi='$isi', foto='$fileName', tags='$tags', status='$status'  WHERE id = $id");
  
  if ($q_update) {
    header("Location: blog.php");
  } else {
    header("Location: tambah-blog.php?edit=$id");
  }
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
              <h5 class="card-title"><?php echo isset($_GET['edit']) ? 'Edit ' : 'Add ' ?>Blog</h5>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <div class="col-sm-2">
                    <label for="">Nama Kategori</label>
                  </div>
                  <div class="col-sm-10">
                    <!-- Select, Radio -->
                    <select name="id_kategori" id="" class="form_control">
                      <option value="">Pilih Kategori</option>
                      <?php foreach ($rowKategori as $item) {?>
                      <option value="<?= $item['id']?>"><?= $item['nama_kategori']?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Judul</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" value="<?php echo isset($_GET['edit']) ? $row['judul'] : '' ?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Isi</label>
                  </div>
                  <div class="col-sm-10">
                    <textarea name="isi" id="" class="form-control summernote"><?php echo isset($_GET['edit']) ? $row['isi'] : '' ?></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Tags</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tags" value="<?php echo isset($_GET['edit']) ? $row['tags'] : '' ?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Status</label> 
                  </div>
                  <div class="col-sm-10">
                    <select name="status" id="" class="form-control">
                      <option value="1" selected>Publish</option>
                      <option value="0">Draft</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Foto</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto" value="" required>
                    <div class="md-3">
                      <img width="100" src="../assets/uploads/<?php echo $row['foto'] ?>" alt="">
                    </div>
                  </div>
                </div>

                <!-- Button -->
                <div class="row mb-3">
                  <div class="col-md-2 offset-md-2">
                    <?php if (isset($_GET['edit'])) { ?>
                        <button name="edit" class="btn btn-primary" type="submit">Edit</button>
                    <?php 
                    } else { 
                    ?>
                        <button name="simpan" class="btn btn-primary" type="submit">Simpan</button>
                    <?php 
                    } ?>
                  </div>
                </div>
              </form>
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


  <!-- Summernote -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
  <script>
    $(".summernote").summernote({
      height: 300,
    })
  </script>

  <!-- Data Table -->
  <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/js/dataTables.min.js">
  <script src="cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
  <script>
  let table = new DataTable('#myTable');
  </script>



</body>

</html>