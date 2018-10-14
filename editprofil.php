<?php 
$conn = mysqli_connect("localhost","root","","d_angga");
session_start();
$nimm = $_SESSION['idie'];
$sql = mysqli_query($conn,"SELECT * FROM t_jurnal6 WHERE  Nim = '$nimm'");
$array =mysqli_fetch_array($syntax);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>NIM :</td>
			<td><?php echo $nimm."<br>"; ?></td>
		</tr>
		<tr>
			<td>Nama: </td>
			<td><?php echo "<input type='text' name='nama' value='".$array['nama']."''>"; ?></td>
		</tr>
		<tr>
			<td>Kelas: </td>
			<td><input type="radio" name="kelas" value="MI-01" <?php echo ($array['kelas']=='MI-01')?'checked':'' ?>>MI-01<br>
				<input type="radio" name="kelas" value="MI-02" <?php echo ($array['kelas']=='MI-02')?'checked':'' ?>>MI-02<br>
				<input type="radio" name="kelas" value="MI-03" <?php echo ($array['kelas']=='MI-03')?'checked':'' ?>>MI-03<br>
				<input type="radio" name="kelas" value="MI-04" <?php echo ($array['kelas']=='MI-04')?'checked':'' ?>>MI-04</td>
		</tr>
		<tr>
			<td>Jenis Kelamin: </td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-laki <br>
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Hobi: </td>
			<td><input type="checkbox" name="hobi" value="Berenang">Berenang</input>
			<td><input type="checkbox" name="hobi" value="Sulap">Sulap</input>
			<td><input type="checkbox" name="hobi" value="Mendaki">Mendaki</input>
			<td><input type="checkbox" name="hobi" value="Mancing">Mancing</input></td>
		</tr>
		<tr>
			<td>Fakultas: </td>
			<td><select name="pilihb">
				<option>Pilih</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FRI">FRI</option>
				<option value="FTE">FTE</option>
				<option value="FIF">FIF</option>

			</select></td>
		</tr>
		<tr>
			<td>Alamat: </td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="SUBMIT"></td>
		</tr>
		<tr>
			<td> <button><a href="menuawal.php" style="text-decoration: none">Back</a></button></td>
		</tr>
	</table>
</form>
</body>
</html>


<?php 
include 'koneksi.php';
	if (isset($_POST['kirim'])) {
	
		if (strlen($_POST['nama'])>35 || $_POST['nama']==""){
			echo "Nama Anda Kurang!";}
			else{ $nm = $_POST['nama'];}
	$kls = $_POST['kelas'];
	$opsi1 = $_POST['hobi'];
	$opsi2 = $_POST['pilihb'];
	if (isset($_POST['jeniskelamin'])) {
		$jk = $_POST['jeniskelamin'];	
	}
	$alm =$_POST['alamat'];
	
	
	if (isset($dt)& 
		isset($nm)&&
		isset($kls)&&
		isset($jk)&&
		isset($opsi1)&&
		isset($opsi2)&&
		isset($alm)) {
		session_start();
		$_SESSION['idie'] = $dt;		
		$sql = mysqli_query($conn,"INSERT INTO t_jurnal6(Nim, Nama, Kelas, Jenis_kelamin, Hobi, Fakultas, Alamat) VALUES ('$dt','$nm','$kls','$jk','$opsi1','$opsi2','$alm')");
		$syntax = mysqli_query($conn,"SELECT * FROM t_jurnal6 ");
		$array =mysqli_fetch_array($syntax);
	if (isset($sql)) {
		echo "Data Anda Berhasil Di Input";
		header ("Location:login.php");
		}else{
			echo "Data Tidak Dapat Disimpan!";
		}
	}
}
 ?>