<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

.container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
 color: black;
 text-shadow: 2px 4px 4px white;
 text-align: center;
}

.form-label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}



</style>
<body>
    <form name="tambah" method="post" action="tambah_proses.php" enctype="multipart/form-data">
        <div class="container">
            <h1>Tambah Data Skema</h1>
            <div class="mb-3">
                <label class="form-label">Kode Skema</label>
                <input type="text" class="form-control" name="kd_skema" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <input type="text" class="form-control" name="nm_skema" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <select class="form-select" name="jenis" required>
                    <option value="KKNI">KKNI</option>
                    <option value="KLASTER">KLASTER</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Unit</label>
                <input type="text" class="form-control" name="jml_unit" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" name="thn_lulus" required>
            </div>

            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
