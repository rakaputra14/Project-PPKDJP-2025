<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Selamat Datang</h1>
  <script>
    let el = document.querySelector('h1');    
    el.innertext = "Selamat Datang Javascript";

    let h2 = document.createElement('h2');
    let div = document.createElement('div');
    h2.innerText = "ini H2";
    div.appendChild(h2)
    console.log(div);
  </script>
  
</body>
</html>