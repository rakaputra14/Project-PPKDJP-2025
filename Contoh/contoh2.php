<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

  <style>
    body {
      background-color: rgb(177, 200, 231);
      margin: 3px;
      margin-left: 2rem;
    }

    h1,
    h3,
    .btn {
      text-align: center;
      margin-bottom: 3px;
    }

    hr {
      width: 50%;
      border: 2px solid green;
      border-radius: 3px;
    }
  </style>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <h3>Pusat Pelatihan Kerja Jakarta Pusat</h3>
  <hr>
  <form onsubmit="return false">
    <pre><label for="">NIM           :</label><input type="number" id="nim" name="nim"></pre>
    <pre><label for="">Nama Mahasiswa:</label><input type="text" id="nama" name="nama"></pre>
    <pre><label for="">Jenis Kelamin :</label><select name="jk" id="jk" required><option value="">--Pilih Jenis Kelamin--</option>
  <option value="Pria">Pria</option>
<option value="Wanita">Wanita</option></select></pre>
    <pre><label for="">Agama         :</label><select name="agama" id="agama" required><option value="">--Pilih Agama--</option>
<option value="Islam">Islam</option><option value="Kristen Protestan">Kristen Protestan</option><option value="Kristen Katolik">Kristen Katolik</option></select></pre>
    <pre><label for="">Status        :</label><input type="radio" id="pria" name="status" value="Pria">Pria  <input  type="radio" id="wanita" name="status" value="Wanita">Wanita</pre>
    <pre><label for="">Jurusan Unikom:</label><select name="jurusan" id="jurusan" required><option value="">--Pilih Jurusan--</option><option value="Informatika">Informatika</option><option value="Administrasi">Administrasi</option></select></pre>
    <pre><label for="">Komentar      :</label><textarea name="komentar" id="komentar" cols="25" rows="5" ></textarea></pre>
    <div class="btn">
      <button type="submit" onclick="kirim()">Kirim</button>
      <button type="reset">Ulang</button>
    </div>
  </form><br><br>


  <pre><label for="">NIM           :</label><input type="text" id="r_nim" name="r_nim"></pre>
  <pre><label for="">Nama Mahasiswa:</label><input type="text" id="r_nama" name="r_nama"></pre>
  <pre><label for="">Jenis Kelamin :</label><input type="text" id="r_jk" name="r_jk"></pre>
  <pre><label for="">Agama         :</label><input type="text" id="r_agama" name="r_agama"></pre>
  <pre><label for="">Status        :</label><input type="radio" id="r_pria" name="r_status">Pria  <input type="radio" id="r_wanita" name="r_status">Wanita</pre>
  <pre><label for="">Jurusan Unikom:</label><select name="r_jurusan" id="r_jurusan"><option value="">--Pilih Jurusan--</option><option value="Informatika">Informatika</option><option value="Administrasi">Administrasi</option></select></pre>
  <pre><label for="">Komentar      :</label><textarea name="r_komentar" id="r_komentar" cols="25" rows="5"></textarea></pre>

  <script>
    function kirim() {
      //input____________________
      var nim = document.getElementById("nim").value,
      nama = document.getElementById("nama").value,
      jk = document.getElementById("jk").value,
      agama = document.getElementById("agama").value;

      var status = document.querySelector("input[name='status']:checked");
      var statusResult = status ? status.value : "";

      var jurusan = document.querySelector("select[name='jurusan']");
      var jurusanResult = jurusan ? jurusan.value : "";

      var komentar = document.getElementById("komentar").value;

      //Output___________________
      document.getElementById("r_nim").value = nim;
      document.getElementById("r_nama").value = nama;
      document.getElementById("r_jk").value = jk;
      document.getElementById("r_agama").value = agama;

      if (statusResult === "Pria") {
        document.getElementById('r_pria').checked = true;
        document.getElementById('r_wanita').checked = false;
      } else if (statusResult === "Wanita") {
        document.getElementById('r_pria').checked = false;
        document.getElementById('r_wanita').checked = true;
      } else {
        document.getElementById('r_pria').checked = false;
        document.getElementById('r_wanita').checked = false;
      }

      document.getElementById('r_jurusan').value = jurusanResult;
      document.getElementById('r_komentar').value = komentar;
    }
  </script>
</body>

</html>