<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/index.css">
  <link rel="stylesheet" href="../../css/table.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <style>
    table.dataTable tbody tr.expired,
    table.dataTable.display tbody tr.expired,
    table.dataTable.stripe tbody tr.expired,
    table.dataTable tbody tr.expired>td,
    table.dataTable.display tbody tr.expired>td,
    table.dataTable.stripe tbody tr.expired>td {
      background-color: #f8d7da;
      color: #842029;
    }
  </style>
  <title>Daftar Obat</title>
</head>

<body>
  <header class="navbar">
    <div class="logo">
      <img src="../../css/logo_uks.png" alt="logo-uks" class="nav-icon">
    </div>
    <div class="title">
      Unit Kesehatan Sekolah
    </div>
    <button class="print-btn" onclick="window.print()">Cetak Laporan</button>
  </header>

  <main class="card-container">
    <div class="table-container">
      <div class="table-date">
        Tanggal sekarang: <strong><?php date_default_timezone_set('Asia/Jakarta');
        echo date('Y-m-d'); ?></strong>
      </div>
      <table id="myTable" class="data-table" border="0" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>NO</th>
            <th>NAMA OBAT</th>
            <th>JENIS</th>
            <th>TANGGAL KADALUARSA</th>
            <th>STOK</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include __DIR__ . '/../../koneksi.php';
          function isExpired($expiryDate)
          {
            $currentDate = date('Y-m-d');
            return $expiryDate < $currentDate;
          }

          $no = 1;
          $query = mysqli_query($conn, "SELECT * FROM tb_obat");
          while ($row = mysqli_fetch_array($query)) {
            $rowClass = isExpired($row['tgl_kadaluarsa']) ? 'expired' : '';
            ?>
            <tr class="<?php echo $rowClass ?>">
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['nama_obat'] ?></td>
              <td><?php echo $row['jenis'] ?></td>
              <td><?php echo $row['tgl_kadaluarsa'] ?></td>
              <td><?php echo $row['stok'] ?></td>
              <td class="actions" data-label="AKSI">
                <a href="edit_obat.php?id=<?php echo $row['id_obat'] ?>" class="btn btn-edit">EDIT</a>
                <a href="hapus_obat.php?id=<?php echo $row['id_obat'] ?>" class="btn btn-delete">HAPUS</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="site-footer">
    Unit Kesehatan Sekolah SMK AK Nusa Bangsa &copy; 2025
  </footer>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>

</html>