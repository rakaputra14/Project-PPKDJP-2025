<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 0%;
            margin: 0%;
        }

        nav {
            background-color: purple;
            color: white;
            padding: 10px;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        nav a:hover {
            color: yellow;
        }

        .content {
            background-color: green;
            box-shadow: 0px 0px 3px black;
            padding: 15px;
            min-height: 100px;
        }

        form label {
            font-weight: bold;
            display: block;
        }

        form input,
        form textarea {
            width: 99%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid pink;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: yellow;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;

        }

        footer {
            position: fixed;
            bottom: 0;
            background-color: green;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h1> Kontak Kami</h1>
        <p>
            <small>Berinteraksi Dengan Kami</small>
        </p>
    </header>
    <hr>
    <div class="content">
        <form action="" method="post">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required />

            <label for="pesan">Pesan</label>
            <textarea name="pesan" id="pesan"></textarea>

            <button type="submit">Kirim Pesan</button>
            <!-- <input Type="submit" value="Kirim Pesan"> -->
        </form>

    </div>
    <footer> &copy; website Design By Raka Refiando Putra</footer>
</body>

</html>