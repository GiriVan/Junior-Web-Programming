<?php
include 'koneksi.php';

// Pencarian
$cari = "";

if (isset($_GET['cari'])) {
    $cari = mysqli_real_escape_string($conn, $_GET['cari']);
}

if (!empty($cari)) {
    $sql = "SELECT * FROM tb_peserta WHERE nm_peserta LIKE '%" . $cari . "%'";
} else {
    $sql = "SELECT * FROM tb_peserta";
}

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pendaftaran Sertifikasi</title>

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

nav a:hover {
    color: #000000;
}

#search-section {
    margin: 20px;
    text-align: center;
}

#participants-list {
    margin: 20px;
}

/* Gaya untuk form dan tombol pencarian */
form {
    display: inline-block;
    margin-bottom: 20px;
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
    background-color: #3498db;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

h1 {
  color: white;
  text-shadow: 2px 4px 4px #000000;
}

table{
    margin-top: 40px;
}

/* Gaya untuk tombol back yang serupa */
.back-button-form {
    display: inline-flex;
    align-items: center;
    padding: 10px;
    font-size: 16px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
}

.back-button-form:hover {
    background-color: #2980b9;
}

.back-button-form i {
    margin-right: 5px;
}
    </style>
</head>
<body>

    <header>
        
        <h1>Sistem Pendaftaran Sertifikasi</h1>
        
        <nav>
            <ul>
                <a href="../index.php" class="back-button" onclick="goBack()">
                    <i data-feather="arrow-left"></i> Back
                </a>
                <li><a href="formPendaftaran.php">Form Pendaftaran</a></li>
            </ul>
        </nav>
    </header>
    
    <script src="script.js"></script>
    <div class="container">

        <br /><br />
        <form action="home.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari" value="<?php echo $cari; ?>">
            <input type="submit" value="cari">
        </form>

        <table class="table">
            <thead style="text-align: center;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Hp</th>
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
                        <td><?php echo $data['nm_peserta']; ?></td>
                        <td><?php echo $data['jekel']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
    feather.replace();
</script>
</body>
</html>
