<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       .card {
          border-radius: 10px;
          margin-top: 100px;
        }
       .card-reader {
          border: 1px solid #ccc;
          border-radius: 5px;
          padding: 20px;
          text-align: center;
        }
       .card-body {
          padding: 20px;
        }
       .card-body form {
          display: flex;
          flex-direction: column;
        }
       .card-body form div {
          margin-bottom: 10px;
        }
       .card-body form button {
          width: 100%;
        }
       .card-body form span {
          color: red;
        }
        @media screen and (max-width: 768px) {
         .card {
            margin-top: 50px;
          }
        }
      
  
    </style>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <div class="card">
          <div class="card-reader">
          </div>
          <div class="card-body">
            <form action="" method="post" onsubmit="return validasi()">
              <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <span id="emailError" class="text-danger" style ="display: none" >Email Tidak Valid!</span>
              </div>
              <div class="mt-2">
                <label for="password"class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                <span class="text-danger" id="passwordError" style ="display: none">Pass Tidak Valid!</span>
              </div>
              </div>
              <div class="mt-2" id="">
                <button type="submit" onclick="validasi()" class="btn btn-primary">Login</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    function validasi() {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

      var emailErrors = document.getElementById('emailErrors');
      var passwordErrors = document.getElementById('passwordErrors');

      var isValid = true;

      var emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var passwordReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$/;

      if (emailReg.test(email)) {
        emailError.style.display = "none";
      }
      else if (emailReg.test(email)) { 
        emailError.style.display = "block";
        isValid = false;
      }

      if (passwordReg.test(password)) {
        passwordError.style.display = "none";
      }
      else if (passwordReg.test(password)) { 
        passwordError.style.display = "block";
        isValid = false;
      }
      return isValid;
    }
  </script>
</body>
</html>