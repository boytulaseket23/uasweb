<?php
session_start();
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Silahkan Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: rgb(242, 255, 255);
            }
        </style>
  </head>
  <body>
    <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body">
                            <center><b><h3 class="card-title">Form Login</h3></b></center>
                            <hr>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for=""><b>Username</b></label>
                                    <input type="text" class="form-control" name="username" required="">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for=""><b>Password</b></label>
                                    <input type="password" class="form-control" name="password" required="">
                                </div>
                                <div class="form-group d-grip mt-3">
                                    <center><button class="btn btn-danger" name="login">Login</button></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?php
if(isset($_POST['login'])){
    $user = "admin";
    $pass = "123";

    if(($_POST['username'] == $user) || ($_POST['password'] == $pass) ) {

        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }else{
        echo "<p align=center> Username dan Password salah ! </p>";
        echo "<meta http-equiv=refresh content=2;URL='loginuas.php'>";
    }
}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

