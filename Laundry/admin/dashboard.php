<?php
  ob_start();
  session_start();
  include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/template/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/template/assets/images/favicon.png" />

    <style>
      * {
        color: white !important;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar -->
      <?php include "../inc/sidebar.php" ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- Navbar -->
        <?php include "../inc/navbar.php" ?>


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php if(isset($_GET['page'])){
                    if (file_exists('../content/'.$_GET['page'].".php")){
                      include '../content/' . $_GET['page'] . ".php";
                    }
            }else{
              include "../content/home.php";
            }?>
          <!-- content-wrapper ends -->

          <!-- partial:partials/_footer.html -->
          <?php include '../inc/footer.php'?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/template/assets/js/off-canvas.js"></script>
    <script src="../assets/template/assets/js/hoverable-collapse.js"></script>
    <script src="../assets/template/assets/js/misc.js"></script>
    <script src="../assets/template/assets/js/settings.js"></script>
    <script src="../assets/template/assets/js/todolist.js"></script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <script src="../assets/js/main.js" ></script>
    <script src="../assets/js/jquery-3.7.1.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

    <script>
      $('#id_service').change(function(){
        let id_service = $(this).val();
        $.ajax({
          url: "get-service.php?id_services=" + id_service,
          method: "get",
          dataType: "json",
          success: function(res) {
            $('#service_price').val(res.data.service_price)
            }
        });
      });

      $('.add-row').click(function(){
        let serviceName = $('#id_service').find("option:selected").text();
        let service_price = $('#service_price').val();
        let newRow = "";
        newRow += "<tr>"
        newRow += `<td> ${serviceName } </td>`; //optional (newRow += "<td>" + service_name + "</td>")
        newRow += `<td> ${service_price.toLocalString()} </td>`;
        newRow += "<td><input class='form-control' name='qty[]' type='number'></td>";
        newRow += "<td><input class='form-control' name='notes[]' type='number'></td>";
        newRow += "<td><button class='btn btn-success btn-sm remove'>Remove</button></td>";
        newRow += "</tr>"

        $('.table-order tbody').append(newRow);

        $('.remove').click(function(event){
          event.preventDefault();
          $(this).closest("tr").remove();
        });
      });
    </script>
  </body>
</html>