<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_skema = mysqli_real_escape_string($conn, $_POST['kd_skema']);
    $nm_peserta = mysqli_real_escape_string($conn, $_POST['nm_peserta']);
    $jekel = mysqli_real_escape_string($conn, $_POST['jekel']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);

    // Query untuk menyimpan data ke tabel tb_peserta
    $query = "INSERT INTO tb_peserta (kd_skema, nm_peserta, jekel, alamat, no_hp) 
              VALUES ('$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil didaftarkan');
                window.location.href='home.php';
            </script>";
    } else {
        echo "Gagal menyimpan data. Error: " . mysqli_error($conn);
    }
} else {
    echo "Metode pengiriman formulir tidak valid.";
}

mysqli_close($conn);
?>
