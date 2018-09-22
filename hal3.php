<?php
session_start();
$nama = $_SESSION['nama']; 
//$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : ""; --> mengecek variabel session nama apakah berisi atau tidak
															// kalau ada isinya maka $_SESSION['nama'] kalau tidak maka ""
															// tanda : untuk pemisah jika true atau false
$akses = $_SESSION ['akses'];
//print_t($_SESSION);
include 'header.php';
if ($akses!='admin') {
	echo "halaman boleh diakses, hai $nama";
}else{
	header('location: form.html');
}

?>