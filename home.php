<?php
include "session.php";
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color:lightgoldenrodyellow;
        }
    </style>
    <title>WEB BEASISWA</title>
  </head>
  <body>
    <<div class="container-fluid mb-2 p-0">
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once 'menu.php'; ?>
                </div>
            </div>
        </div>
      <div class="container">
              <div class="row">
                <div class="col-lg-12 bg-warning">
                <h3><marquee>Selamat Datang Di Website Kami</h3></marquee>
                </div>
              </div>
            </div>
            <br>
            <center>
              <hr size="1">
            <br>
            <h4><b>MEMBANTU MAHASISWA DALAM PERKULIAHAN </b></h4>
            <img src="imgweb/beasiswauas.jpeg" alt="coding" width="300" height="300">
            <br>
            <br>
            </center>
            <center>
            <div class="container">
              <div class="row">
                  <div class="col-lg-12 mt-2">
                      <div class="card">
                          <div class="card-body bg-link">
                              <p class="card-text">
                                  <h5>Website ini dibuat untuk menampung data mahasiswa yang ingin mendapatkan beasiswa !</h5>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            </center>
          </div>
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>