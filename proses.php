<?php
include 'model.php';
//tabel nilai
if (isset($_POST['submit_simpan_nilai'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->insert_nilai($nim, $nama, $uts, $uas, $tugas);
    header('location:index.php');
}
if (isset($_POST['submit_edit_nilai'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->update_nilai($nim, $nama, $uts, $tugas,$uas);
    header('location:index.php');
}
if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete_nilai($id);
    header('location:index.php');
}

//tabel mahasiswa
if (isset($_POST['submit_simpan_data'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->insert_data($id, $nama, $semester, $alamat, $no_tlp, $email);
    header('location:mahasiswa.php');
}
if (isset($_POST['submit_edit_data'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $model = new Model();
    $model->update_data($id, $nama, $semester, $alamat, $no_tlp, $email);
    header('location:mahasiswa.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_data($id);
    header('location:mahasiswa.php');
}

//tabel absen
if (isset($_POST['submit_simpan_absen'])) {
    $id = $_POST['id'];
    $mhs_id = $_POST['mhs_id'];
    $matakuliah_id = $_POST['matakuliah_id'];
    $tanggal_absen = $_POST['tanggal_absen'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->insert_absen($id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status);
    header('location:absen.php');
}
if (isset($_POST['submit_edit_absen'])) {
    $id = $_POST['id'];
    $mhs_id = $_POST['mhs_id'];
    $matakuliah_id = $_POST['matakuliah_id'];
    $tanggal_absen = $_POST['tanggal_absen'];
    $waktu_absen = $_POST['waktu_absen'];
    $status = $_POST['status'];
    $model = new Model();
    $model->update_absen($id, $mhs_id, $matakuliah_id, $tanggal_absen, $waktu_absen, $status);
    header('location:absen.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_absen($id);
}   header('location:absen.php');
