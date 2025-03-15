<?php
require_once "koneksi.php";
session_start();
session_regenerate_id();

if (empty($_SESSION['email'])) {
    header("Location: login.php");
}

$tampilProfile = mysqli_query($conn, "SELECT child_porto.id_porto, GROUP_CONCAT(child_porto.skill SEPARATOR '<br>') AS skl, GROUP_CONCAT(child_porto.pengalaman SEPARATOR '<br>') AS pgl, porto.nama, porto.deskripsi, porto.photo,porto.jabatan FROM porto LEFT JOIN child_porto ON child_porto.id_porto = porto.id WHERE porto.status = 1");
$row = mysqli_fetch_assoc($tampilProfile);

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
    <?php include "./inc/navbar.php"; ?>
    <div style="width: 80%; margin: 20px auto; padding: 20px; background-color: white; border: 1px solid #ccc;">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="assets/uploads/<?php echo $row['photo']?>" alt="Avatar"  style="width: 100px; height: 100px; border-radius: 50%; ">
            <h1 style="margin-bottom: 10px;"><?php echo $row['nama']?></h1>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>