<?php 
session_start();
include 'koneksi.php';
$nimm = $_SESSION['idie'];
$sql = mysqli_query($conn,"SELECT * FROM t_cerita WHERE  Nim = '$nimm'");
	

?>

<form method="post">
	<table border="1">
		<tr>
			<td>Cerita</td>
			<td>Gambar</td>
		</tr>
			
		<?php 
			while ($array=mysqli_fetch_array($sql)){
				$sin = $array['Kode_file'];
				echo "<tr>";
				echo "<td>".$array['Cerita']."</td>";
				echo "<td><img src='Picture/".$array['File_gambar']."' height='140'></td>";
				
				echo "<tr>";

			}
		?>
		<tr>
			<td><button> <a href="menuawal.php" style="text-decoration: none">Back</button></a></td>
		</tr>


	</table>
</form>