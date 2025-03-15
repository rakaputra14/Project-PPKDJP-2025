<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memasukan Bilangan</title>
</head>

<body>
    <script>
        function jumlah() {
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN(bil1))
                bil1 = 0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN(bil2))
                bil2 = 0.0;
            var hasil = bil1 + bil2;
            alert("Hasil Penjumlahan = " + hasil);
        }

        function kurang() {
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN(bil1))
                bil1 = 0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN(bil2))
                bil2 = 0.0;
            var hasil = bil1 - bil2;
            alert("Hasil Penjumlahan = " + hasil);
        }

        function kali() {
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN(bil1))
                bil1 = 0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN(bil2))
                bil2 = 0.0;
            var hasil = bil1 * bil2;
            alert("Hasil Penjumlahan = " + hasil);
        }

        function bagi() {
            var bil1 = parseFloat(document.fform.bilangan1.value);
            if (isNaN(bil1))
                bil1 = 0.0;
            var bil2 = parseFloat(document.fform.bilangan2.value);
            if (isNaN(bil2))
                bil2 = 0.0;
            var hasil = bil1 / bil2;
            alert("Hasil Penjumlahan = " + hasil);
        }
    </script>
    <form name="fform">
        <h1>
            <br>MEMASUKAN DATA LEWAT KEYBOARD
        </h1>
        <pre>Bilangan Pertama :<input type="text" size="11" name="bilangan1">
Bilangan Kedua   :<input type="text" size="11" name="bilangan2">
        </pre>
        <p>
            <input type="button" value="jumlahkan" onclick="jumlah()">
            <input type="button" value="Kurangkan" onclick="kurang()">
            <input type="button" value="kalikan" onclick="kali()">
            <input type="button" value="bagikan" onclick="bagi()">
            <input type="reset" value="Ulang">
        </p>
    </form>
</body>

</html>