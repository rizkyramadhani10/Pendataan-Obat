<?php
include __DIR__ . '/../../koneksi.php';
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kunjungan</title>
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
            <h2>Form Data Kunjungan Siswa</h2>

            <form action="simpan_pasien.php" method="post">

                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Masukkan nama siswa" required>

                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas" required>
                    <option value="">Pilih Kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                </select>

                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Analis Kimia">Analis Kimia</option>
                    <option value="Farmasi Klinis">Farmasi Klinis</option>
                    <option value="Pengembangan Perangkat Lunak dan Gim">Pengembangan Perangkat Lunak dan Gim</option>
                </select>

                <label for="keluhan">Keluhan</label>
                <textarea id="keluhan" name="keluhan" placeholder="Masukkan keluhan siswa" required></textarea>

                <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                <input type="date" id="tgl_kunjungan" name="tgl_kunjungan" required>

                <button type="submit">Simpan</button>
            </form>
        </div>
    </main>

    <footer class="site-footer">
        Unit Kesehatan Sekolah SMK AK Nusa Bangsa &copy; 2025
    </footer>
</body>

</html>