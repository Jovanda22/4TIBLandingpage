<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $noidentitas= $_POST['noidentitas'];
    $pertanyaan1 = $_POST['pertanyaan1'];
    $pertanyaan2 = $_POST['pertanyaan2'];
    $pertanyaan3 = $_POST['pertanyaan3'];
    $pertanyaan4 = $_POST['pertanyaan4'];
    $pertanyaan5 = $_POST['pertanyaan5'];

    $query = "INSERT INTO survei (nama, noidentitas, pertanyaan1, pertanyaan2, pertanyaan3, pertanyaan4, pertanyaan5) VALUES ('$nama', '$noidentitas', '$pertanyaan1', '$pertanyaan2', '$pertanyaan3', '$pertanyaan4', '$pertanyaan5')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Gagal menambahkan data');</script>";
    }
}