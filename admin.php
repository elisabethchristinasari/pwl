<?php 
require_once ("koneksi.php");                                                           
 ?>

<h2>Tabel Admin</h2>
 <table border="1">

 	<tr>
 		<td>id</td>
 		<td>user</td>
 		<td>pass</td>
 		<td>aksi</td>
 	</tr>

<form name="tambahadmin" action="tambahadmin.php" method="post" >
<input type="submit" class="btn btn-lg btn-primary" value="Tambah">
</form>

<?php 
//Perulangan
$query = mysqli_query($con, "SELECT * FROM admin");
while ($record = mysqli_fetch_array($query)) {
?>

                                                                                                                                                                                                                    
	<tr class = "active">
		<td><?php echo $record['id_admin'];?></td>
		<td><?php echo $record['username'];?></td>
		<td><?php echo $record['password'];?></td>
		<td> <CENTER style="">
<a href="updateadmin.php?id_admin=<?php echo
$record['id_admin']?>" class="btn btn-xs btnsuccess">Update</a>

<a href="deleteadmin.php?id_admin=<?php echo $record['id_admin']?>" class="btn btn-xs btn-danger"
onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
</td>
	</tr>
<?php
}
?>
</table>

<?php
mysqli_close($con);
?>
