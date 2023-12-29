<?php
	include "koneksi.php";
	
?>

<html>
	<head>
		<meta charset="uft-8">
		<title>Form Registration</title>
		<link rel="stylesheet" href="assets/fas/css/all.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	</head>
	
	<body>
		<h1 align="center">Daftar Anggota Unit Kegiatan Mahasiswa Renang</h1>
		
		<div class="container-fluid">
			<a href="form.php"><button type="button" class="btn btn-outline-primary">+ Add</button></a>
		
			<table class="table table-bordered" align="center">
				<thead class="thead-light">
					<tr style="background-color: #e5e3e3; color: black:" align="center">
						<th>No. </th>
						<th>Nama Lengkap</th>
						<th>NPM</th>
						<th>Program Studi</th>
						<th>Email</th>
						<th>No. Telp</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>Provinsi</th>
						<th>Tanggal Lahir</th>
						<th><i class="fas fa-cog"></i></th>
					</tr>
				</thead>
				
					<?php
					$query = mysqli_query($conn, "SELECT * FROM customer")or die(mysql_error());
					$no = 1;
					while($data = mysqli_fetch_array($query)){
					?>
					
				
				<tbody>
						<tr>
							<td align="center"> <?php echo $no++; ?> </td>
							<td> <?php echo $data ["nama"]; ?> </td>
							<td> <?php echo $data["npm"]; ?> </td>
							<td> <?php echo $data["prodi"]; ?> </td>
							<td> <?php echo $data["email"]; ?> </td>
							<td> <?php echo $data["phone"]; ?> </td>
							<td> <?php echo $data["gender"]; ?> </td>
							<td> <?php echo $data["address"]; ?> </td>
							<td> <?php echo $data["city"]; ?> </td>
							<td> <?php echo $data["province"]; ?> </td>
							<td> <?php echo $data["ttl"]; ?> </td>
							
							<td align="center"><a href="edit.php?no=<?php echo $data['no']; ?>" class="btnu"><i class="fas fa-edit"></i></a> |
									<a href="hapus.php?no=<?php echo $data['no']; ?>" class="btnu"><i class="fas fa-trash"></i></a>
								</td>

							<?php } ?>
						</tr>
					</tbody>				
			</table>
		</div>
	</body>
</html>