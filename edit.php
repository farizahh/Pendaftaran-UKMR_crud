<?php
	include "koneksi.php";
	$no = $_GET['no'];
	$query = mysqli_query($conn, "SELECT * FROM customer WHERE no = '$no' ");
	
?>

<html>
	<head>
		<meta charset="uft-8">
		<title>Form Registration</title>
		<link rel="stylesheet" href="assets/fas/css/all.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	</head>
	
	<body>
		<div class="container">
			<br><a href="index.php"><button type="button" class="btn btn-outline-warning">Back</button></a><br>
			<h2 align="center">Edit Data Anggota</h2>
			
			<?php
				while ($data = mysqli_fetch_array($query)) { ;
			?>
				<form action="update.php" method="post">
					<div class="form-group">
						<label class="form-label">Nama Lengkap</label>
						<input type="hidden" name="no" value="<?php echo $data['no'] ?>">
						<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Nomor Induk Mahasiswa</label>
						<input type="text" class="form-control" name="npm" value="<?php echo $data['npm'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Program Studi</label>
						<input type="text" class="form-control" name="prodi" value="<?php echo $data['prodi'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">No. Telepon</label>
						<input type="text" class="form-control" name="phone" value="<?php echo $data['phone'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Jenis Kelamin</label>
						<br>
						<input type="radio" class="form-check-input" name="gender" value="Pria" <?php if($data['gender']=='Pria') echo 'checked'?>>  Pria</input>
						<input type="radio" class="form-check-input" name="gender" value="Wanita" <?php if($data['gender']=='Wanita') echo 'checked'?>> Wanita</input>
					</div>
					<div class="form-group">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Kota</label>
						<input type="text" class="form-control" name="city" value="<?php echo $data['city'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Provinsi</label>
						<input type="text" class="form-control" name="province" value="<?php echo $data['province'] ?>">
					</div>
					<div class="form-group">
						<label class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control" name="ttl" value="<?php echo $data['ttl'] ?>">
					</div>
					
					<div class="row">
							<a href="form_proses.php"><input type="submit" class="btn btn-primary"></a>
					</div>
				</form>
				
			<?php } ?>
		</div>
	</body>
	
</html>