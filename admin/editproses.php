<?php 

include 'koneksi.php';


$id 	= $_POST['id'];
$nama 	= $_POST['nama'];
$email 	= $_POST['email'];
$akses	= $_POST['akses'];
$gambar = $_POST['gambar'];

$query = mysqli_query($koneksi,"UPDATE pengguna SET nama='$nama', email='$email', akses='$akses', gambar='$gambar' WHERE id='$id'");

	header('location: datapengguna.php');

?>