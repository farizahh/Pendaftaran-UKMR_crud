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
			<h2 align="center">Tambah Anggota</h2>
			
			<form action="form_proses.php" method="POST">
				<div class="form-group">
					<label class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" required>
				</div>
				<div class="form-group">
					<label class="form-label">Nomor Induk Mahasiswa</label>
					<input type="number" class="form-control" name="npm" required>
				</div>
				<div class="form-group">
					<label class="form-label">Program Studi</label>
					<input type="text" class="form-control" name="prodi" required>
				</div>
				<div class="form-group">
					<label class="form-label">Email</label>
					<input type="text" class="form-control" name="email" required>
				</div>
				<div class="form-group">
					<label class="form-label">No. Telepon</label>
					<input type="number" class="form-control" name="phone" required>
				</div>
				<div class="form-group">
					<label class="form-label">Jenis Kelamin</label>
					<br>
					<input type="radio" class="form-check-input" name="gender" value="pria">  Pria</input><br>
					<input type="radio" class="form-check-input" name="gender" value="wanita">  Wanita</input>
				</div>
				<div class="form-group">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="address" required>
				</div>
				<div class="form-group">
					<label class="form-label">Kota</label>
					<input type="text" class="form-control" name="city" required>
				</div>
				<div class="form-group">
					<label class="form-label">Provini</label>
					<input type="text" class="form-control" name="province" required>
				</div>
				<div class="form-group">
					<label class="form-label">Tanggal Lahir</label>
					<input type="date" class="form-control" name="ttl" required>
				</div>
				
				<div class="row">
						<a href="form_proses.php"><input type="submit" class="btn btn-primary"></a>
				</div>
			</form>
		</div>
	</body>
</html>