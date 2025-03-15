<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(to right, rgb(220, 147, 21), #fff);
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        footer {
            position: fixed;
            background-color: blue;
            color: white;
            bottom: 5px;
            width: 100%;
            padding: 7px;
            font-size: 18px;
            font-weight: bold;

        }

        .header {
            display: flex;
        }

        .container img {
            width: 15vw;
            top: 0;
            right: 0;
            position: fixed;
            padding: 10px;
            margin-right: 50px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .word {
            flex-grow: 1;
            margin-top: 30px;
            padding-left: 90px;
        }

        .word p {
            margin-top: 80px;
        }

        .menu {
            display: flex;
            justify-content: center;
            gap: 25px;
            border-radius: 50px;
        }

        .btn-option {
            background-color: blue;
            color: #fff;
            text-decoration: none;
            padding: 15px;
            display: flex;
            justify-content: center;
            width: 200px;
            height: 120px;
            font-size: 20px;
            font-weight: bold;
            align-items: center;
            margin-bottom: 10px;
        }

        .btn-option:hover {
            background-color: yellow;
        }


        .btn-option-mid {
            background-color: blue;
            color: #fff;
            text-decoration: none;
            padding: 15px;
            display: flex;
            justify-content: center;
            width: 200px;
            height: 120px;
            font-size: 20px;
            font-weight: bold;
            align-items: center;
            margin-bottom: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .btn-option-mid:hover {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="word">
                <h4>Assalamualaikum WR, WB</h4>
                <h5>Selamat Datang Di Bank Syariah Riyal Irsyadi</h5>
                <p>Silahkan Pilih Jenis Transaksi Anda</p>
            </div>
            <img src="../img/logo1.png" alt="">
        </div>
        <div class="menu">

            <a href="" class="btn-option">Customer Service</a>

            <a href="" class="btn-option-mid">Teller Officer</a>

            <a href="" class="btn-option">Pengaduan nasabah</a>

        </div>
    </div>


    <footer>
        <marquee direction="right">Running Text Test</marquee>
    </footer>
</body>


</html>