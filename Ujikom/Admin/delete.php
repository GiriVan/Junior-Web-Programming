<?php
include '../pendaftaran/koneksi.php';

if (isset($_GET['id'])) {
    $hapus = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "DELETE FROM tb_skema WHERE kd_skema = '$hapus'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href='index.php';
            </script>";
        exit();
    } else {
        echo "Data gagal dihapus";
    }
} else {
    echo "Data tidak valid";
}
?>
