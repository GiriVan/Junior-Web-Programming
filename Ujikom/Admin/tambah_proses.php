<?php
include '../pendaftaran/koneksi.php';

$kd_skema = mysqli_real_escape_string($conn, $_POST['kd_skema']);
$nm_skema = mysqli_real_escape_string($conn, $_POST['nm_skema']);
$jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
$jml_unit = mysqli_real_escape_string($conn, $_POST['jml_unit']);
$thn_lulus = mysqli_real_escape_string($conn, $_POST['thn_lulus']);

// Periksa apakah kd_skema sudah digunakan
$konek = mysqli_query($conn, "SELECT kd_skema FROM tb_skema WHERE kd_skema = '$kd_skema'");
if(mysqli_fetch_assoc($konek)) {
    echo "<script> 
            alert('Kode skema sudah digunakan');
            window.location.href = 'index.php';
          </script>";
    exit(); // Keluar dari script setelah menampilkan alert
}

// Query untuk menambahkan data
$query = "INSERT INTO tb_skema (kd_skema, nm_skema, jenis, jml_unit, thn_lulus) VALUES ('$kd_skema', '$nm_skema', '$jenis', '$jml_unit', '$thn_lulus')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script> 
            alert('Data berhasil ditambahkan');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal menambahkan data');
            window.location.href = 'index.php';
          </script>";
}

mysqli_close($conn);
?>
