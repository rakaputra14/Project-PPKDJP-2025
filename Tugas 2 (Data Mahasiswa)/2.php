<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            text-align: center;
        }

        .inputData {
            border-radius: 20px;
            width: 50%;
            background-color: lightgreen;
            display: inline-block;
            padding: 10px;
            margin-left: 50px;
        }

        .outputData {
            border-radius: 20px;
            width: 50%;
            background-color: lightskyblue;
            display: inline-block;
            padding: 10px;
            margin-left: 50px;
        }

        h1 {
            text-align: center;
        }

        body {
            background-color: lightgoldenrodyellow;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>
            Data Mahasiswa
        </h1>
        <h2>
            Universitas Lorem Ipsum Indonesia
        </h2>
    </div>
    <hr>
    <form class="inputData">
        <div class="nim">
            <p>Nim :</p>
            <input type="text" id="in-nim" required>
        </div>
        <div class="nama-mahasiswa">
            <p>Nama Mahasiswa :</p>
            <input type="text" id="nama" required>
        </div>
        <div class="gender">
            <p>Jenis Kelamin :</p>
            <input type="radio" name="in-gender" value="Pria" id="Pria">Pria
            <input type="radio" name="in-gender" value="Wanita" id="Wanita">Wanita
        </div>
        <div class="agama">
            <p>Agama :</p>
            <select id="in-agama" required>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">katolik</option>
                <option value="konghucu">Konghucu</option>
            </select>
        </div>
        <div class="jurusan">
            <p>Jurusan :</p>
            <select id="in-jurusan" required>
                <option value="TI">Teknik informatika</option>
                <option value="SI">Sistem Informasi</option>
                <option value="Tata Boga">Tata Boga</option>
                <option value="Perhotelan">Perhotelan</option>
            </select>
        </div>
        <div class="komentar">
            <p>Komentar :</p>
            <textarea id="in-komentar"></textarea>
        </div>
        <p>
            <input type="button" value="Submit" onclick="cetak()">
            <input type="reset" value="Ulang">
        </p>
    </form>
    <br>
    <h1>Data Mahasiswa Universitas Lorem Ipsum Indonesia</h1>
    <form class="outputData">
        <pre>NIM             :<input id="out-nim"></input></pre>
        <pre>Nama Mahasiswa  :<input id="out-nama"></input></pre>
        <pre>Jenis kelamin   :   </label><input type="radio" id="r_pria" name="r_status">Pria  <input type="radio" id="r_wanita" name="r_status">Wanita</pre>
        <pre>Agama           :<input id="out-agama"></input></pre>
        <pre>Jurusan         :<input id="out-jurusan"></input></pre>
        <pre>Komentar        :<textarea id="out-komentar"></textarea></pre>
    </form>

    <script>
        function cetak() {
            // input
            var nim = document.getElementById("in-nim").value;
            var nama = document.getElementById("nama").value;

            var status = document.querySelector("input[name='in-gender']:checked");
            var statusResult = status ? status.value : "";

            var agama = document.getElementById("in-agama").value;
            var jurusan = document.getElementById("in-jurusan").value;
            var komentar = document.getElementById("in-komentar").value;

            // output
            document.getElementById("out-nim").value = nim;
            document.getElementById("out-nama").value = nama;

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


            document.getElementById("out-agama").value = agama;
            document.getElementById("out-jurusan").value = jurusan;
            document.getElementById("out-komentar").value = komentar;


        }
    </script>
</body>

</html>