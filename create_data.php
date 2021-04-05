<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Mahasiswa</title>
</head>

<body>
	<h1>Tambah Data Mahasiswa</h1>
	<a href="mahasiswa.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID</label>
		<br>
		<input type="text" name="id">
		<br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama">
		<br>
		<label>Semester</label>
		<br>
		<input type="number" name="semester">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
		<br>
		<label>Nomor Telepon</label>
		<br>
		<input type="text" name="no_tlp">
		<br>
		<label>Email</label>
		<br>
		<input type="text" name="email">
		<br><br>
		<button type="submit" name="submit_simpan_data">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>

</html>