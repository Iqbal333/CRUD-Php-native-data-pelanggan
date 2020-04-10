<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['no_pelanggan'];
$nama = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];
$handphone = $_POST['handphone'];
$email = $_POST['email'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE tb_pelanggan SET nama_lengkap='$nama', alamat='$alamat', handphone='$handphone', email='$email' WHERE no_pelanggan='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>