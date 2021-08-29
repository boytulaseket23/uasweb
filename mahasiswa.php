<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WEB BEASISWA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{
                background-color: rgb(242, 255, 255);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid mb-2 p-0">
            <div class="row">
                <div class="col-lg-12">
                    <?php require_once 'menu.php'; ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Form Input Mahasiswa</h2>
                            <form action="mahasiswa_save.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nim</label>
                                    <input type="text" name="nim" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Pekerjaan Orangtua</label>
                                    <input type="text" name="ortu" class="form-control" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="cetak" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Mahasiswa</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>TANGGAL LAHIR</th>
                                        <th>PEKERJAAN ORANGTUA</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require_once 'koneksi.php';
                                    $sql = mysqli_query($con, "SELECT * FROM mahasiswa");
                                    while($r = mysqli_fetch_array($sql))
                                    {
                                        echo "<tr>
                                                <td>$r[nim]</td>
                                                <td>$r[nama]</td>
                                                <td>$r[tanggal]</td>
                                                <td>$r[ortu]</td>
                                                <td>
                                                    <a href='mahasiswa_edit.php?nim=$r[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                                    <a href='mahasiswa_hapus.php?nim=$r[nim]' onclick=\"return confirm('Hapus Data?')\" class='btn btn-sm btn-danger'>Hapus</a>
                                                </td>
                                            </tr>";
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </head>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>