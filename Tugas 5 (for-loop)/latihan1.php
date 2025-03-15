<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="content">
    <h1>Perhitungan bunga</h1>
    <br>
    <h2>Data input:</h2>
    <br>
    <form action="" onsubmit="return false">
      <br>
      <label for="saldo">Saldo</label>
      <input type="text" id="saldo" name="saldo">
      <br>
      <label for="bunga">Bunga</label>
      <input type="text" id="bunga" name="bunga">
      <br>
      <label for="waktu">Waktu</label>
      <input type="text" id="waktu" name="waktu">
      Bulan
      <br>
      <button type="submit" onclick="count()">Hitung</button>
      <button type="text">Ulang</button>
    </form>
  </div>

  <script>
    function count() {
      let saldo = parseFloat(document.getElementById('saldo').value);
      let bunga = parseFloat(document.getElementById('bunga').value) / 100;
      let waktu = document.getElementById('waktu').value;

      // console.log(saldo);
      // console.log(bunga);
      // console.log(waktu);

      for (let bulan = 1; bulan <= waktu; bulan++) {
        saldo = saldo + (saldo * bunga);

      }
      console.log(saldo);
      
}
  </script>
</body>
</html>