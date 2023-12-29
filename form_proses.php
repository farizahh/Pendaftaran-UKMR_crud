<?php

include 'koneksi.php';

	$nama = $_POST['nama'];
	$npm = $_POST['npm'];
	$prodi = $_POST['prodi'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$ttl = $_POST['ttl'];

		$a="INSERT INTO customer (nama, npm, prodi, email, phone, gender, address, city, province, ttl) VALUES ('$nama', '$npm', '$prodi', '$email', '$phone', '$gender', '$address', '$city', '$province', '$ttl')";
		
		//$hsl = mysqli_query($conn, $a)or die(mysql_error());
		
		if (mysqli_query($conn, $a)) {
			echo "<meta http-equiv='refresh' content='1 url=index.php'>";
		
		}else {
			echo "Gagal simpan data mahasiswa";
		}  
	
?>
