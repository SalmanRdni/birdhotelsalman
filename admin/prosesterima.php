<?php 
include 'koneksi.php';
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	mysqli_query($koneksi,"UPDATE transaksi SET status = 'confirm' where id = '$id'");
	header("location:transaksi.php");
}
?>