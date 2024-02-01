<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Pendaftaran</title>
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


        form {
            width: 50%;
            margin: 20px auto;
        }

        label {
            margin-right: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4a9ac4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h1 {
        color: white;
        text-shadow: 2px 4px 4px #000000;
        }
    </style>
</head>
<body>

<header>
        <h1>Sistem Pendaftaran Sertifikasi</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="formPendaftaran.php">Form Pendaftaran</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <form action="proses_pendaftaran.php" method="post">
            <label for="kd_skema">Kode Skema:</label>
            <select id="kd_skema" name="kd_skema" required>
                <option value="SKM-001">SKM-001</option>
                <option value="SKM-002">SKM-002</option>
                <option value="SKM-003">SKM-003</option>
                <option value="SKM-004">SKM-004</option>
                <option value="SKM-005">SKM-005</option>
            </select>

            <label for="nm_peserta">Nama Peserta:</label>
            <input type="text" id="nm_peserta" name="nm_peserta" required>

            <label for="jekel">Jenis Kelamin:</label>
            <select id="jekel" name="jekel" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="no_hp">Nomor HP:</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <input type="submit" value="Daftar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
