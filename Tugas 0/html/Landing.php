<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <?php include "inc/navbar.php"; ?>
    <h1> Belajar Programing</h1>
    <hr>
    <p>Belajar Website Seru</p>
    <div class="content">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus accusamus cupiditate voluptatem
            corporis et dolores delectus quaerat illum? Optio aut aperiam cum voluptates, dolorum fuga! Culpa sunt
            suscipit in recusandae.\</p>
    </div>
    <?php include "inc/footer.php" ?>
</body>

</html>