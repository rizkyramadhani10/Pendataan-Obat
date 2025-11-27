<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="css/logo_uks.png" alt="logo-uks" class="nav-icon">
        </div>
        <div class="title">
            Unit Kesehatan Sekolah
        </div>
        
    </header>

    <main class="card-container">
        <section class="container-pasien">
            <div class="header-top">
                <img src="css/pasien.jpg" alt="" class="icon">
                <p class="container-title">Pasien</p>
            </div>

            <div class="button-container">
                <a href="pages/pasien/daftar_pasien.php">
                    <button class="btn-primary">Daftar Pasien</button>
                </a>
                <a href="pages/pasien/tambah_pasien.php">
                    <button class="btn-outline">Tambah Pasien</button>
                </a>
            </div>
        </section>

        <section class="container-obat">
            <div class="header-top">
                <img src="css/obat.jpg" alt="" class="icon">
                <p class="container-title">Obat</p>
            </div>

            <div class="button-container">
                <a href="pages/obat/daftar_obat.php">
                    <button class="btn-primary">Daftar Obat</button>
                </a>
                <a href="pages/obat/tambah_obat.php">
                    <button class="btn-outline">Tambah Obat</button>
                </a>
            </div>
        </section>
    </main>
    
    <footer class="site-footer">
        Unit Kesehatan Sekolah SMK AK NUSA BANGSA &copy; 2025
    </footer>
</body>

</html>