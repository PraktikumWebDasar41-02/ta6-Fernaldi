<?php 
session_start();
include 'koneksi.php';
$sin = $_GET['te'];
$sql = mysqli_query($conn,"DELETE FROM t_cerita WHERE  Kode_file = '$sin'");
if(!$sql){
	die("GAGAL!");
}else{
echo "BERHASIL!! <meta http-equiv=refresh content=2;url=daftarpost.php>";
}
	

?>