<?php
include "../pendaftaran/koneksi.php";

$id_skema = mysqli_real_escape_string($conn, $_POST['id']);
$kd_skema = mysqli_real_escape_string($conn, $_POST['kd_skema']);
$nm_skema = mysqli_real_escape_string($conn, $_POST['nm_skema']);
$jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
$jml_unit = mysqli_real_escape_string($conn, $_POST['jml_unit']);
$thn_lulus = mysqli_real_escape_string($conn, $_POST['thn_lulus']);


$query = "UPDATE tb_skema SET
        kd_skema = '$kd_skema', 
        nm_skema = '$nm_skema', 
        jenis = '$jenis', 
        jml_unit = '$jml_unit',
        thn_lulus = '$thn_lulus'
        WHERE kd_skema = '$id_skema'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if ($result) {
    echo "<script>
            alert('Data berhasil diupdate');
            window.location.href='index.php';
        </script>";
} else {
    echo "Gagal mengedit data";
}

mysqli_close($conn);
?>
