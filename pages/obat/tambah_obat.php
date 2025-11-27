<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Obat</title>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/form.css">
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <img src="../../css/logo_uks.png" alt="logo-uks" class="nav-icon">
        </div>
        <div class="title">
            Unit Kesehatan Sekolah
        </div>
    </header>

    <main class="form-page">
        <div class="container">
            <h2>Form Obat</h2>

            <form action="simpan-obat.php" method="post">

                <label for="nama_obat">Nama Obat</label>
                <input type="text" id="nama_obat" name="nama_obat" placeholder="Masukkan nama obat" required>

                <label for="jenis">Jenis Obat</label>
                <select id="jenis" name="jenis" required>
                    <option value="">Pilih Jenis</option>
                    <option value="Tablet">Tablet</option>
                    <option value="Kapsul">Kapsul</option>
                    <option value="Sirup">Sirup</option>
                    <option value="Salep">Salep</option>
                    <option value="Tetes">Tetes</option>
                </select>

                <label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
                <input type="date" id="tgl_kadaluarsa" name="tgl_kadaluarsa" required>

                <label for="stok">Stok</label>
                <input type="number" id="stok" name="stok" placeholder="Masukkan jumlah stok" required>

                <button type="submit">Simpan</button>
            </form>
        </div>
    </main>

    <footer class="site-footer">
        Unit Kesehatan Sekolah SMK AK Nusa Bangsa &copy; 2025
    </footer>
 </body>

</html>