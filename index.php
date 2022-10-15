<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>

<form action="simpan.php" method="post">

  <table align="1">
  	 <tr>
  	 	<td>KD.Prodi</td><td>:<td>
  	 	<input type="text" name="kd_prodi">
  	 	</td></td>
  	 </tr>
  	  <tr>
  	 	<td>Nama Prodi</td><td>:<td>
  	 	<input type="text" name="nama_prodi">
  	 	</td></td>
  	 </tr>
  	 
  	  <tr>
  	 	<td></td><td><td>
  	 	 <button name="simpanx" onclick="return confirm('Yakin Simpan Data')" class="btn btn-primary"> SIMPAN</button>
  	 	</td></td>
  	 </tr>
  </table>
</form>

</body>
</html>