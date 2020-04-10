<?php
//koneksi database

include 'koneksi.php';

//menangkap data no_pelanggan yg dikirim dari url
$id = $_GET['no_pelanggan'];

//menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE no_pelanggan='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index2.php");

?>