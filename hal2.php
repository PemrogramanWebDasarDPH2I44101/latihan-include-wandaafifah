<?php
session_start();
$nama = $_SESSION['nama'];
$akses = $_SESSION ['akses'];
$iduser = $_SESSION["iduser"];
//print_t($_SESSION);
include 'header.php';
if ($akses=='admin') {
	echo "<font size='20'>halaman boleh diakses, hai $nama</font>";
	if(isset($iduser)){
		echo "<font size='20'>id user : </font>" . $iduser;
	} else {
		echo "<font size='20'>id user tidak ada</font>";
	}
}else{
	header('location: form.html');
}

?>