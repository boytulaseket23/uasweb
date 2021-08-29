<?php  
    require_once 'koneksi.php';

    if (isset($_GET['nim'])) {
        
        $nim = $_GET['nim'];
        
        $sql = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
        $jml = mysqli_num_rows($sql); 

        if ($jml > 0) {
           $r = mysqli_fetch_array($sql);
        }else{
            echo "<script>
                alert('Data Tidak ditemukan');
                window.location.href = 'mahasiswa.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
                window.location.href = 'mahasiswa.php';
            </script>";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                            <form action="mahasiswa_update.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nim</label>
                                    <input type="text" name="nim" class="form-control" value="<?= $r['nim']?>" required="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $r['nama']?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?= $r['tanggal']?>" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Pekerjaan Orangtua</label>
                                    <input type="text" name="ortu" class="form-control" value="<?= $r['ortu']?>" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="cetak" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>