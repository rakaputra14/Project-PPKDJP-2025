<?php
require_once "koneksi.php";
session_start();
session_regenerate_id();

// if (empty($_SESSION['EMAILLLLLL'])) {
//     header("Location: login.php");
// }

if (isset($_POST['add-porto'])) {
  $photo = $_FILES['photo'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $deskripsi = $_POST['deskripsi'];

  if ($photo["error"] == 0) {
    $fillName = uniqid() . "_" . basename($photo["name"]);
    $fillpath = "assets/uploads/" . $fillName;
    move_uploaded_file($photo['tmp_name'], $fillpath);

    $q_insert = mysqli_query($conn, "INSERT INTO porto (photo, nama, jabatan, deskripsi) VALUES ('$fillName','$nama','$jabatan','$deskripsi')");

    if ($q_insert) {
      header("Location: profile.php");
    } else {
      header("Location: add_edit_profile.php?idEdt=$idEdt");
    }
  }
}

if (isset($_GET['idEdt'])) {
  $idEdt = base64_decode($_GET['idEdt']);
  $edit = mysqli_query($conn, "SELECT * FROM porto WHERE id = $idEdt");
  $row = mysqli_fetch_assoc($edit);
  // var_dump($row);
  
  
}
//UPDATE
if (isset($_POST['edit-profile'])) {
  $idEdt = base64_decode($_GET['idEdt']);
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $deskripsi = $_POST['deskripsi'];
  $photo = $_FILES['photo'];

  if ($photo["error"] == 0) {
    $fillName = uniqid() . "_" . basename($photo["name"]);
    $fillpath = "assets/uploads/" . $fillName;
    $fieldPhoto = "";

    if (move_uploaded_file($photo['tmp_name'], $fillpath)) {
      //Cek Fotonya:
      $cekFoto = mysqli_query($conn, "SELECT photo FROM porto WHERE id = $idEdt");
      $rowPhoto =mysqli_fetch_assoc($cekFoto);

      //Jika ada fotonya maka di unlink()
      if ($rowPhoto && file_exists("assets/uploads/" . $rowPhoto['photo'])) {
        unlink("assets/uploads/". $rowPhoto['photo']);
      }

      $fieldPhoto = ", photo='$fillName'";

    } else {
      echo "GAGAL UPLOAD FOTO";
  }
}
  $update = mysqli_query($conn, "UPDATE porto SET nama='$nama', jabatan='$jabatan', deskripsi='$deskripsi'" . $fieldPhoto . "WHERE id = $idEdt");


  if ($update) {
    header("Location: profile.php");
  } else {
    header("Location: add_edit_profile.php?idEdt=$idEdt");
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include "backup/inc/navbar.php"; ?>
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card">
            <div class="card-header text-center fw-bold">Add Profile</div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <label for="" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control">

                <?php if (isset($_GET['idEdt'])) {
                ?>
                <div class="mt-1">
                  <img src="assets/uploads/<?php echo $row['photo']?>" width="135" alt="test">
                </div>
                <?php }?>

                <div class="mt-1">
                  <label for="" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo isset($_GET['idEdt']) ? $row['nama'] : '' ?>">
                </div>
                <div class="mt-1">
                  <label for="" class="form-label">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" value="<?php echo isset($_GET['idEdt']) ? $row['jabatan'] : '' ?>">
                </div>
                <div class="mt-1">
                  <label for="" class="form-label">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" cols="30" rows="3"><?php echo isset($_GET['idEdt']) ? $row['deskripsi'] : '' ?></textarea>
                </div>
                <div class="mt-1">
                  <a class="btn btn-secondary" href="profile.php">Back</a>

                  <button class="btn btn-success" name="<?php echo isset($_GET['idEdt']) ? 'edit-profile' : 'add-porto' ?>" type="submit">
                    <?php echo isset($_GET['idEdt']) ? 'UPDATE' : 'ADD' ?>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>