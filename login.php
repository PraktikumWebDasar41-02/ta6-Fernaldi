<form method="post">
	Nim:<input type="text" name="nim"><br>
	Nama:<input type="text" name="nama"><br>
	<input type="submit" name="kirim" value="Login">
	<tr><td>
		<button><a href="form.php">Registrasi</a></button>
	</td></tr>
</form>

<?php 
include "koneksi.php";
	if (isset($_POST['kirim'])) {
		session_start();
		if (strlen($_POST['nama'])>35 || $_POST['nama']==""){
			echo "Nama Anda Kurang!";}
			else{ $nm = $_POST['nama'];}
		if (strlen($_POST['nim']) == 10 && $_POST['nim']!="" && is_numeric($_POST['nim'])){
			$dt = $_POST['nim'];}
			else{echo "Masukkan 10 Angka!";}
			$syntax = mysqli_query($conn,"SELECT * FROM `t_jurnal6` WHERE Nim='$dt'");
			$cek=mysqli_num_rows($syntax);
				if ($cek>0) {
				echo "Berhasil Login!!";
				header("Location:menuawal.php");
				}
			
			}
?>