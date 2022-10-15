        
<?php
include 'koneksi.php';
if (isset($_POST['simpanx'])) {
	$kd_prodi = $_POST['kd_prodi'];
	$nama_prodi = $_POST['nama_prodi'];

	$x ="INSERT INTO `tb_prodi` (`kd_pordi`, `nama_prodi`) VALUES ('@kd_prodi', '$nama_prodi');";

	$y = mysqli_query($koneksi, $x);
	if ($y) {
		echo "Bata Berhasil Disimpan";
	} else {
		echo "Data gagal disimpan";
	}
}
?>