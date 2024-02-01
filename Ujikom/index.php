<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujikom</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootsratp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My<span>Ujikom</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Tambahkan ini ke dalam file HTML Anda -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Admin/index.php">Data Skema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="pendaftaran/home.php">Pendaftaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- TEKS BERJALAN -->
<div class="berjalan">
        <p>Selamat datang di Web Kami hadir untuk memenuhi kebutuhan Anda. Terima kasih atas kepercayaan Anda </p>
</div>
<!-- END TEKS BERJALAN -->

<!-- Hero Selection -->
<section class="hero" id="home">
        <main class="content">
            <h1>Bekerja dan Belajar dengan Produktivitas yang Nyaman</h1>
            <p>Web Terpercaya</p>
            <!-- <a href="#" class="cta">Beli Sekarang</a> -->
        </main>
    </section>


    <footer>
        <div class="sosial">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="Admin/index.php">Data Skema</a>
            <a href="pendaftaran/home.php">Pendaftaran</a>
        </div>

        <div class="credit">
            <p>Create by <a href="">Ujikom</a>. | &copy; 2024.</p>
        </div>
    </footer>

    <!-- My JS -->
    <script src="js/script.js"></script>

    <!-- Bootstrap -->

    <!-- Feather Icon  -->
    <script>
        feather.replace()
    </script>

</body>

</html>