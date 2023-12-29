<?php

	include 'koneksi.php';
	
	$no = $_POST['no'];
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
	
	$hasil = mysqli_query($conn, "UPDATE customer SET nama='$nama', npm='$npm', prodi='$prodi', email='$email', phone='$phone', gender='$gender', address='$address', city='$city', province='$province', ttl='$ttl' WHERE no ='$no'");
	
	if ($hasil) {
		echo "<script>alert('Data berhasil diubah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=index.php'>";

	}
?>