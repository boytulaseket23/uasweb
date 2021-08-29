<?php
	include("koneksi.php");

	$nim = filter_var($_POST['nim'], FILTER_SANITIZE_STRING);
    $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
    $tanggal = filter_var($_POST['tanggal'], FILTER_SANITIZE_STRING);
    $ortu = htmlspecialchars($_POST['ortu']);

    if (empty($nim) || empty($nama) || empty($tanggal) || empty($ortu)) 
    {
    	# jika kosong...
    	echo "<script>
    		alert('Data tidak boleh Kosong');
    		window.location.href = 'mahasiswa.php';
    	</script>";
    }
    else
    {
    	# simpan -> INSERT
    	$simpan = mysqli_query($con, "INSERT INTO mahasiswa VALUES ('$nim','$nama','$tanggal','$ortu')");

    	if ($simpan) {
    		# true...
    		echo "<script>
	    		alert('Data berhasil ditambahkan');
	    		window.location.href = 'mahasiswa.php';
	    	</script>";
    	}else{
    		# false
    		echo "<script>
	    		alert('Terjadi kesalahan');
	    		window.location.href = 'mahasiswa.php';
	    	</script>";
    	}
    }
?>