<?php
//Include koneksi database
include __DIR__ . '/../../koneksi.php';

//get data dari form
$nama_obat = $_POST['nama_obat'];
$jenis = $_POST['jenis'];
$date = $_POST['tgl_kadaluarsa'];
$stok = $_POST['stok'];

//Query insert data ke dalam database
$query = "INSERT INTO tb_obat (nama_obat, jenis, tgl_kadaluarsa, stok) VALUES ('$nama_obat', '$jenis', '$date', '$stok')";

//Kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($conn ->query($query)) {
    //Redirect ke halaman index.php
    header("location: daftar_obat.php");
} else {
    //Pesan error gagal insert data
    echo "Saving data failed!";
}