<?php
// Include koneksi database (project root)
include __DIR__ . '/../../koneksi.php';

//get data dari form
$nama = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$keluhan = $_POST['keluhan'];
$kunjungan = $_POST['tgl_kunjungan'];

//Query insert data ke dalam database
$query = "INSERT INTO tb_pasien (nama_siswa, kelas, jurusan, keluhan, tgl_kunjungan) VALUES ('$nama', '$kelas', '$jurusan', '$keluhan', '$kunjungan')";

//Kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($conn ->query($query)) {
    //Redirect ke halaman index.php
    header("location: daftar_pasien.php");
} else {
    //Pesan error gagal insert data
    echo "Saving data failed!";
}