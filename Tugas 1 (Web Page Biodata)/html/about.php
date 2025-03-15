<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content {
            margin-left: 100px;
            width: 100%;
            background-color: white;
            margin-top: 20px;
            height: 800px;
            border-radius: 50px;
        }

        .content h1 {
            padding-top: 20px;
            margin-top: 50px;
            margin-left: 50px;
        }

        .content iframe {
            margin-left: 100px;
        }

        .content p {
            padding: 20px;
            margin-left: 40px;
        }

        body {
            background-color: darkgrey;
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
        <H1>About Me</H1>
        <p>
            ipsum dolor sit amet, consectetur adipisicing elit. Explicabo impedit aperiam nihil, porro esse amet tempore?
            Eius quia modi necessitatibus dolorem fuga? Quis optio totam iusto soluta non earum unde. Lorem ipsum dolor
            sit amet consectetur adipisicing elit. Ea laborum, maiores eius, hic sapiente ex cumque quidem voluptate consequuntur repellendus optio doloribus sint incidunt magni. Non in doloribus possimus reiciendis.
        </p>
        <iframe src="https://www.youtube.com/watch?v=LXb3EKWsInQ?autoplay=1" frameborder="0" width="550px" height="50%" allowfullscreen></iframe>
    </div>
    <hr>
    <?php include "../inc/footer.php" ?>
</body>

</html>