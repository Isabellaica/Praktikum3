<?php

require_once 'model.php';

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    exit;
}

$nama_mahasiswa = $_POST["nama"];
$mata_pelajaran = $_POST["matakuliah"];
$hasil_penilaian_uts = $_POST["uts"];
$hasil_penilaian_uas = $_POST["uas"];
$hasil_penilaian_tugas = $_POST["tugas"];
$hasil_penilaian_akhir = ($hasil_penilaian_uts + $hasil_penilaian_uas + $hasil_penilaian_tugas) / 3;

echo 'Nama Mahasiswa : '  . $nama_mahasiswa;
echo '<br> Mata Pelajaran : ' . $mata_pelajaran;
echo '<br> Hasil Penilaian UTS : ' . $hasil_penilaian_uts;
echo '<br> Hasil Penilaian UAS : ' . $hasil_penilaian_uas;
echo '<br> Hasil Penilaian Tugas : ' . $hasil_penilaian_tugas;

echo '<br> Hasil Penilaian Akhir : ' . $hasil_penilaian_akhir;
echo '<br> DIUMUMKAN : ' . kelulusan($hasil_penilaian_akhir);
echo '<br> GRADE : ' . grade($hasil_penilaian_akhir);

?>
