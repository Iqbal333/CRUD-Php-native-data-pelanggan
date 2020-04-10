<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['no_pelanggan'];
$nama = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$email = $_POST['email'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_pelanggan VALUES('$id','$nama', '$alamat', '$handphone', '$email')");

// mengalihkan halaman kembali ke index.php
header("location:index2.php");

?>