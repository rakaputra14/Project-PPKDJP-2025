<?php 
include '../koneksi.php';
include '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$id = $_GET['idPrint'];
$select = mysqli_query($conn, "SELECT * FROM resume");
$row = mysqli_fetch_assoc($select);

$html = '
  <table border="1">
    <tr>
      <tr>
        <th>No.</th>
        <td>1</td>
      </tr>
      <tr>
        <th>Tahun Awal</th>
        <td>' . $row['tahun_awal'] . '</td>
      </tr>
      <tr>
        <th>tahun Akhir</th>
        <td>' . $row['tahun_akhir'] . '</td>
      </tr>
      <tr>
        <th>Skill</th>
        <td>' . $row['skill'] . '</td>
      </tr>
      <tr>
        <th>Instansi</th>
        <td>' . $row['instansi'] . '</td>
      </tr>
      <tr>
        <th>Deskripsi</th>
        <td>' . $row['deskripsi'] . '</td>
      </tr>
    </tr>
  </table>
';

$mpdf->WriteHTML($html);
$mpdf->Output();