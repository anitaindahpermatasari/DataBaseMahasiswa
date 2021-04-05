<?php
include 'connection.php';
class Model extends Connection
{
	//tabel nilai
	public function __construct()
    {
        $this->conn = $this->get_connection();
    }
	public function insert_nilai($nim, $nama, $uts, $uas, $tugas)
	{
	    $na = $this->na($uts,$tugas,$uas);
	    $status = $this->status_nilai($na);
	    $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama',
	            '$uts', '$uas', '$tugas', '$na', '$status')";
	    $this->conn->query($sql);
	}
	public function na($uts,$tugas,$uas)
	{
	    $na=(0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
	    return $na;
	}
	public function status_nilai($na)
	{
	    $status="";
	    if($na >=60 && $na <=100){
	    	$status="Lulus";
		}else{
		    $status="Tidak Lulus";
		}
		    return $status;
	}
	public function tampil_nilai()
	{
	    $sql = "SELECT * FROM tbl_nilai";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_nilai($id)
	{
	    $sql = "SELECT * FROM tbl_nilai WHERE nim='$id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_nilai($nim, $nama, $uts, $tugas,$uas)
	{
	    $na=$this->na($uts,$tugas,$uas);
	    $status=$this->status_nilai($na);
	    $sql = "UPDATE tbl_nilai SET nama='$nama', uts='$uts', uas='$uas', tugas='$tugas', na='$na',status='$status' WHERE nim='$nim'";
	    $this->conn->query($sql);
	}
	public function delete_nilai($nim)
	{
	    $sql = "DELETE FROM tbl_nilai WHERE nim='$nim'";
	    $this->conn->query($sql);
	}
	//tabel mahasiswa
	public function insert_data($id, $nama, $semester, $alamat, $no_tlp, $email)
	{
	    $sql = "INSERT INTO tbl_mahasiswa (id, nama, semester, alamat, no_tlp, email) VALUES ('$id', '$nama',
	    	   '$semester', '$alamat', '$no_tlp', '$email')";
	    $this->conn->query($sql);
	}
	public function tampil_data()
	{
	    $sql = "SELECT * FROM tbl_mahasiswa";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_data($id)
	{
	    $sql = "SELECT * FROM tbl_mahasiswa WHERE id='$id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_data($id, $nama, $semester, $alamat, $no_tlp, $email)
	{
	    $sql = "UPDATE tbl_mahasiswa SET nama='$nama', semester='$semester', alamat='$alamat', no_tlp='$no_tlp', email='$email' WHERE id='$id'";
	    $this->conn->query($sql);
	}
	public function delete_data($id)
	{
	    $sql = "DELETE FROM tbl_mahasiswa WHERE id='$id'";
	    $this->conn->query($sql);
	}
	//tabel absen
	public function insert_absen($id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status)
	{
	    $sql = "INSERT INTO tbl_absen (id, mhs_id, matakuliah_id, tanggal_absen, waktu_absen, status) VALUES ('$id', '$mhs_id',
	    	   '$matakuliah_id', '$tanggal_absen', '$waktu_absen', '$status')";
	    $this->conn->query($sql);
	}
	public function tampil_absen()
	{
	    $sql = "SELECT * FROM tbl_absen";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_absen($id)
	{
	    $sql = "SELECT * FROM tbl_absen WHERE id='$id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_absen($id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status)
	{
	    $sql = "UPDATE tbl_absen SET mhs_id='$mhs_id', matakuliah_id='$matakuliah_id', tanggal_absen='$tanggal_absen', waktu_absen='$waktu_absen', status='$status' WHERE id='$id'";
	    $this->conn->query($sql);
	}
	public function delete_absen($id)
	{
	    $sql = "DELETE FROM tbl_absen WHERE id='$id'";
	    $this->conn->query($sql);
	}
}
