<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello World!</h1>
  <script>
    // let index = 0;
    // for (let index = 0; index < 10; index++) {
    //   console.log(index);
    // }

    // let array = ["apel", "jeruk", "mangga", 1, 2, 3, 4, 5, 6, 7]
    // for (let i = 0; i < array.length; i++) {
    //   console.log(array[i]);
    // }

     let n = 5;
     let faktorial = 1;
     let jml = 0;

     for (let ind = 1; ind <= n; ind++) {
       faktorial = faktorial * ind;
       jml = jml + ind;
     }
    //  console.log(faktorial);
     document.write(faktorial + "<br>");
     document.write(jml);
  </script>
</body>
</html>