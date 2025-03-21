<?php

include '../koneksi.php';

$id = isset($_GET['id_services']) ? $_GET['id_services'] : '';

$query = mysqli_query($conn, "SELECT * FROM services WHERE id = '$id'");
$rows  = mysqli_fetch_assoc($query);

$response = ['status' => 'success', 'message' => 'fetch data services success', 'data' => $rows];
echo json_encode($response);
?>