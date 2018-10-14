<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Story	:</td>
			<td><textarea name="Cerita" rows="20" cols="80"></textarea></td>
		</tr>
		<tr>
			<td>Gambar	:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save" value="submit"><button><a href="menuawal.php" style="text-decoration: none">Back</a></button></td>
		</tr>		
	</table>
</form>

<?php 
include 'koneksi.php';
session_start();
if(isset($_POST['save'])){
	if ($_FILES['foto']['name'] != "") {
		$nimm = $_SESSION['idie'];
		$gambar = $_FILES['foto']['name'];
		if (str_word_count($_POST['Cerita'])<=30) {
			$cerita = $_POST['Cerita'];
		}else{echo "Cerita Harus Berjumlah 30 Kata";}
	if (isset($cerita)&&isset($gambar)) {
		$syntax = mysqli_query($conn,"INSERT INTO t_cerita(Nim,Kode_file,Cerita,File_gambar) VALUES ('$nimm','','$cerita','$gambar')");
		if (!$syntax) {
			die("GAGAL!");
		}else{echo "Berhasil!";}
	}
	}
}

?>