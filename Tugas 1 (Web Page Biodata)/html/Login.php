<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-color: darkgrey;
        }
        .content {
            height: 200px;
            position: relative;
            border: 3px solid black; 
            width: 20%;
            text-align: center;
            background-color: white;
            border-radius: 50px;
            margin: auto;
            margin-top: 300px !important;
        }
        .username, .password {
            padding: 1px;
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
            bottom: 0;
            position: fixed;
            width: 100%;
            color: white;
            text-weight: bold;
        }
    </style>
</head>
<body>
    <?php include "../inc/navbar.php" ?>
    <div class="content">
        <h1>Login</h1>
        <form action="landing.php" method="post">
            <div class="username">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <br>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
    <?php include "../inc/footer.php" ?>
</body>
</html>