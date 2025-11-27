<?php
include __DIR__ . '/../../koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM tb_obat WHERE id_obat = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
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

            <form action="update_obat.php" method="post">
                <input type="hidden" name="id_obat" value="<?php echo htmlspecialchars($row['id_obat']); ?>">

                <label for="nama_obat">Nama Obat</label>
                <input type="text" id="nama_obat" name="nama_obat"
                    value="<?php echo htmlspecialchars($row['nama_obat']); ?>" placeholder="Masukkan nama obat"
                    required>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="jenis">Jenis Obat</label>
                        <select id="jenis" name="jenis" required>
                            <option value="">Pilih Jenis</option>
                            <option value="Tablet" <?php if ($row['jenis'] === 'Tablet')
                                echo 'selected'; ?>>Tablet
                            </option>
                            <option value="Kapsul" <?php if ($row['jenis'] === 'Kapsul')
                                echo 'selected'; ?>>Kapsul
                            </option>
                            <option value="Sirup" <?php if ($row['jenis'] === 'Sirup')
                                echo 'selected'; ?>>Sirup</option>
                            <option value="Salep" <?php if ($row['jenis'] === 'Salep')
                                echo 'selected'; ?>>Salep</option>
                            <option value="Tetes" <?php if ($row['jenis'] === 'Tetes')
                                echo 'selected'; ?>>Tetes</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" id="stok" name="stok" value="<?php echo htmlspecialchars($row['stok']); ?>"
                            placeholder="Masukkan jumlah stok" required>
                    </div>
                </div>

                <label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
                <input type="date" id="tgl_kadaluarsa" value="<?php echo htmlspecialchars($row['tgl_kadaluarsa']); ?>"
                    name="tgl_kadaluarsa" required>

                <div class="form-actions">
                    <button type="submit" class="btn-save">Simpan</button>
                    <a href="daftar_obat.php" class="btn-cancel">Batal</a>
                </div>
            </form>
        </div>
    </main>

    <footer class="site-footer">
        Unit Kesehatan Sekolah SMK AK Nusa Bangsa &copy; 2025
    </footer>
</body>

</html>