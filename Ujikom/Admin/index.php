<?php
include '../pendaftaran/koneksi.php';

// Pencarian
$cari = "";

if (isset($_GET['cari'])) {
    $cari = mysqli_real_escape_string($conn, $_GET['cari']);
}

if (!empty($cari)) {
    $sql = "SELECT * FROM tb_skema WHERE nm_skema LIKE '%" . $cari . "%'";
} else {
    $sql = "SELECT * FROM tb_skema";
}

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Sertifikasi</title>
    <!-- <link rel="stylesheet" a href="../style.css"> -->
    <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background: rgb(73,141,195);
background: linear-gradient(90deg, rgba(73,141,195,1) 0%, rgba(32,170,162,1) 37%, rgba(0,212,255,1) 79%);
    color: white;
    text-align: center;
    padding: 10px;
}

nav {
    display: flex;
    justify-content: center;
}

nav ul {
    list-style: none;
    padding: 0;
    display: flex;
}

nav ul li {
    margin: 0 10px;
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

#search-section {
    margin: 20px;
    text-align: center;
}

#participants-list {
    margin: 20px;
}

form {
    display: inline-block;
}

label {
    margin-right: 10px;
}

input[type="text"] {
    width: 150px;
    padding: 5px;
    border-radius: 5px;
}

input[type="submit"] {
    padding: 5px 10px;
    background-color: black;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

input[type="submit"]:hover {
    background-color: grey;
}

h1 {
 color: white;
text-shadow: 2px 4px 4px #000000;
}

.btn-primary{
margin-right: 40px;
margin-top: 40px;;
background-color: #007bff;
}

table{
    margin-top: 40px;
}

form{
    margin-left:600px ;
    margin-top: 40px;;
}

.gabung {
    display: flex;
    align-items: center;
}

.btn-custom {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-warning {
    background-color: #007bff; /* Warna biru */
    color: #ffffff;
}

.btn-danger {
    background-color: red; /* Warna biru */
    color: #ffffff;
}

.btn-custom:hover {
    opacity: 0.8;
}

/* Gaya untuk tombol back yang serupa */
.back-button-schema {
    display: inline-flex;
    align-items: center;
    padding: 10px;
    font-size: 16px;
    background-color: transparent;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
    text-decoration: none;
}

.back-button-schema:hover {
    color: #000;
}

.back-button-schema i {
    margin-right: 5px;
}

.berjalan {
    padding: 30px;
    overflow: hidden;
    font-family: 'Belanosima', sans-serif;
    font-size: 15px;
    margin-top:-40px;            
    text-align: center;
    font-weight: bold;
 }
 
 .berjalan h1 {
    animation: marquee 25s linear infinite;
    height: 5px;
 }
 
 
 @keyframes marquee {
 0% { transform: translateX(100%); }
 100% { transform: translateX(-100%); }
 }


    </style>
</head>
<body>

    <header>
        <div class="berjalan">
            <h1>Data Skema</h1>
            </div>
        <!-- Tambahkan di dalam body -->
        <a href="../index.php" class="back-button-schema" onclick="goBack()">
    <i data-feather="arrow-left"></i> Back
</a>
    </header>
    <script src="script.js"></script>
    <div class="container">
        <div class="gabung">
    <a href="tambah.php"> <button type="button" class="btn btn-primary">Tambah Data</button></a>

        <br /><br />
        <form action="index.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari" value="<?php echo $cari; ?>">
            <input type="submit" value="cari">
        </form>
    </div>
        <table class="table">
            <thead style="text-align: center;">
                <tr >
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Skema</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah Unit</th>
                    <th scope="col">Tahun lulus</th>
                </tr>
            </thead>

            <tbody style="text-align: center;">
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $data['kd_skema']; ?></td>
                        <td><?php echo $data['nm_skema']; ?></td>
                        <td><?php echo $data['jenis']; ?></td>
                        <td><?php echo $data['jml_unit']; ?></td>
                        <td><?php echo $data['thn_lulus']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['kd_skema']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            <a href="delete.php?id=<?php echo $data['kd_skema']; ?>" onclick="return confirm('Apakah anda yakin?');"><button type="button" class="btn btn-danger">Hapus</button></a>

                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Tambahkan di akhir body -->
<script>
    feather.replace();
</script>

</body>
</html>
