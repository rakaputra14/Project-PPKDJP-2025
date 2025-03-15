<?php
require_once "koneksi.php";
session_start();
session_regenerate_id();

// $tampilProfile = mysqli_query($conn, "SELECT porto.id AS idparentprofile, porto.photo, porto.nama, porto.jabatan, porto.deskripsi, child_porto.id_porto, GROUP_CONCAT(child_porto.skill SEPARATOR '<br>') AS skl, GROUP_CONCAT(child_porto.pengalaman SEPARATOR '<br>') AS pgl FROM child_porto LEFT JOIN porto ON child_porto.id_porto = porto.id WHERE porto.id = 3");
$tampilProfile = mysqli_query($conn, "SELECT child_porto.id_porto, GROUP_CONCAT(child_porto.skill SEPARATOR '<br>') AS skl, GROUP_CONCAT(child_porto.pengalaman SEPARATOR '<br>') AS pgl, porto.nama, porto.deskripsi, porto.photo, porto.jabatan FROM porto LEFT JOIN child_porto ON child_porto.id_porto = porto.id WHERE porto.status = 1");
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
            <h2 style="margin-bottom: 10px;"><?php echo $row['jabatan']?></h2>
        </div>
        <section style="margin-bottom: 20px;">
            <h3 style="text-align: center; margin-bottom: 10px;">overview</h3>
            <p style="text-align: center;">Hi, saya adalah web developer. Saat ini sedang belajar HTML di PPKD JP.</p>
        </section>
        <section style="margin-bottom: 20px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <th style="text-align: center; padding: 10px; border: 1px solid #ccc;">Skill</th>
                    <th style="text-align: center; padding: 10px; border: 1px solid #ccc;">Pengalaman</th>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ccc;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 5px;"><?= $row['skl']?></li>
                            <li style="margin-bottom: 5px;"></li>
                            <li style="margin-bottom: 5px;"></li>
                        </ul>
                    </td>
                    <td style="padding: 10px; border: 1px solid #ccc;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 5px;"><?= $row['pgl']?></li>
                            <li style="margin-bottom: 5px;"></li>
                            <li style="margin-bottom: 5px;"></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </section>

        <footer style="text-align: center; margin-top: 20px; font-size: 0.8em; color: #666;">
            <p>Copyright 2024 © Nama pemilik.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>