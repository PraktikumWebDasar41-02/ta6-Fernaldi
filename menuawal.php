<?php 
session_start();
include 'koneksi.php';
$nimm = $_SESSION['idie'];
$sql = mysqli_query($conn,"SELECT * FROM t_jurnal6 WHERE  Nim = '$nimm'");
if ($array=mysqli_fetch_array($sql)) {
	$nimm=$array['Nim'];
	$nama=$array['Nama'];	
	$klss=$array['Kelas'];		
	$jenisk=$array['Jenis_kelamin'];
	$hbb=$array['Hobi'];		
	$fakul=$array['Fakultas'];	
	$almm=$array['Alamat'];	
}else{echo "ERORR!!!";}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<center>
		<form method="post">
			<table>
				<tr>
					<td>NIM :</td>
					<td><?php echo $nimm."<br>"; ?></td>
				</tr>
				<tr>
					<td>Nama :</td>
					<td><?php echo $nama."<br>"; ?></td>
				</tr>
				<tr>
					<td>Kelas :</td>
					<td><?php echo $klss."<br>"; ?></td>
				</tr>
				<tr>
					<td>Jenis kelamin :</td>
					<td><?php echo $jenisk."<br>"; ?></td>
				</tr>
				<tr>
					<td>Hobi :</td>
					<td><?php echo $hbb."<br>"; ?></td>
				</tr>
				<tr>
					<td>Fakultas :</td>
					<td><?php echo $fakul."<br>"; ?></td>
				</tr>
				<tr>
					<td>Alamat :</td>
					<td><?php echo $almm."<br>"; ?></td>
				</tr>
				<tr>
					<td><button><a href="post.php" style="text-decoration: none">Post</a></button></td>
					<td><button><a href="daftarpost.php" style="text-decoration: none">Daftar Post</a></button></td>
					<td><button><a href="editprofil.php" style="text-decoration: none">Edit</a></button></td>
					<td><button><a href="logout.php" style="text-decoration: none">Logout</a></button></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>