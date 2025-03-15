<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content {
            text-align: center;
            background-color: lightgray;
            margin-top: 75px;
            margin-left: 200px;
            margin-right: 200px;
            height: 750px;
            border-radius: 50px;
        }

        .content img {
            margin-top: 20px;
            border-radius: 100px;
        }

        .row1 {
            justify-content: center;
            display: flex;
        }

        .row2 {
            justify-content: center;
            display: flex;
        }

        .row1 .col {
            width: 250px;
            background-color: #d3705a;
            color: white;
            margin-left: 10px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .row2 .col {
            width: 250px;
            background-color: brown;
            color: white;
            margin-left: 10px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .desc {
            justify-self: center;
            text-align: center;
            padding: 10px 50px;
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
        <img src="../img/Untitled4.jpg" alt="">
        <div class="name">
            <h1>Raka</h1>
            <p>(Web Developer)</p>
        </div>
        <hr>
        <div class="desc">
            <h2>Overview</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nam voluptatum similique, quis labore, culpa eveniet
                magni modi nulla reprehenderit cum repellat? Nihil ratione facilis non inventore labore illum repellat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ipsa odio quisquam, nihil at quo magni
                tempora natus autem molestias, voluptate minus ullam distinctio totam vero accusantium quis vitae iure.
            </p>
        </div>
        <div class="row1">
            <div class="col">
                <p>Skill</p>
            </div>
            <div class="col">
                <p>Experience</p>
            </div>
        </div>
        <div class="row2">
            <div class="col">
                <p>Javascript (beginner)</p>
                <p>Html (beginner)</p>
                <p>CSS (beginner)</p>
            </div>
            <div class="col">
                <p>Lorem ipsum</p>
                <p>Lorem ipsum</p>
                <p>Lorem ipsum</p>
            </div>

            <!-- <div class="col-md-6">
                <li>Javascript (beginner)</li>
                <li>Html (beginner)</li>
                <li>CSS (beginner)</li>
            </div>
            <div class="col-md-6">
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li>
                <li>Lorem ipsum</li> -->

        </div>
    </div>
    <hr>
    <?php include "../inc/footer.php" ?>
</body>

</html>