<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn-send {
            background-color: lightslategrey;
            color: #fff;
            text-decoration: none;
            padding: 5px;
            display: flex;
            justify-content: center;
            width: 60px;
            margin-bottom: 10px;
        }

        .content {
            margin-left: 100px;
            width: 50%;
            background-color: white;
            margin-top: 20px;
            height: 800px;
            border-radius: 50px;
        }

        .content h1 {
            padding: 10px;
            margin-left: 50px;
        }

        body {
            background-color: darkgrey;
        }

        form {
            padding: 10px;
            margin-left: 50px;
            margin-bottom: 20px;
        }

        form textarea {
            width: 50%;
            height: 5vw;
        }

        nav {
            background-color: grey;
            color: white;
            padding: 10px;
            display: flex;
            gap: 30px;
            border-radius: 10px;
            box-shadow: 5px 5px #6a707d;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        nav a:hover {
            color: yellow;
        }

        footer {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include "../inc/navbar.php" ?>
    <div class="content">
        <h1>Contact Me</h1>
        <form>
            <div class="label-email">
                <label for="email">Email</label>
            </div>
            <div class="input-email">
                <input type="email" id="email" name="input-email" placeholder="Your email">
            </div>
            <div class="label-message">
                <label for="message">Message</label>
            </div>

            <textarea>Your Message</textarea>

            <div class="btn">
                <a href="" class="btn-send">Send</a>
            </div>
        </form>


    </div>
    <hr>
    <?php include "../inc/footer.php" ?>
</body>

</html>