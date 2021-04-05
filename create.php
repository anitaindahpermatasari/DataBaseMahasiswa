<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Nilai</title>
</head>

<body>
	<h1>Tambah Nilai Mahasiswa</h1>
	<a href="index.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>NIM</label>
		<br>
		<input type="text" name="nim">
		<br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama">
		<br>
		<label>UTS</label>
		<br>
		<input type="number" name="uts">
		<br>
		<label>UAS</label>
		<br>
		<input type="number" name="uas">
		<br>
		<label>Tugas</label>
		<br>
		<input type="number" name="tugas">
		<br><br>
		<button type="submit" name="submit_simpan_nilai">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>

</html>