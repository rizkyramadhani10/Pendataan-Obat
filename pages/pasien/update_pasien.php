<?php
//include koneksi database
include __DIR__ . '/../../koneksi.php';
//get data dari form, validate presence
if (!isset($_POST['id_siswa'])) {
    echo "ID Pasien tidak ditemukan.";
    exit;
}
$id_pasien = mysqli_real_escape_string($conn, $_POST['id_siswa']);
$nama_siswa = mysqli_real_escape_string($conn, $_POST['nama_siswa']);
$kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
$tgl_kunjungan = mysqli_real_escape_string($conn, $_POST['tgl_kunjungan']);
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_pasien SET nama_siswa = '$nama_siswa', kelas = '$kelas', jurusan = '$jurusan', tgl_kunjungan = '$tgl_kunjungan' WHERE id_siswa = '$id_pasien'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if (mysqli_query($conn, $query)) {
    header("Location: daftar_pasien.php");
    exit;
} else {
    echo "Data Gagal Diupdate: " . mysqli_error($conn);
}