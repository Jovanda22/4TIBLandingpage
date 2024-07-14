<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $noidentitas = $_POST['noidentitas'];
    $nama = $_POST['nama'];
    $pertanyaan1 = $_POST['pertanyaan1'];
    $pertanyaan2 = $_POST['pertanyaan2'];
    $pertanyaan3 = $_POST['pertanyaan3'];
    $pertanyaan4 = $_POST['pertanyaan4'];
    $pertanyaan5 = $_POST['pertanyaan5'];

    $query = "INSERT INTO surveitbl (noidentitas, nama, pertanyaan1, pertanyaan2, pertanyaan3, pertanyaan4, pertanyaan5) 
              VALUES ('$noidentitas', '$nama', '$pertanyaan1', '$pertanyaan2', '$pertanyaan3', '$pertanyaan4', '$pertanyaan5')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href = 'indeks.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Gagal menambahkan data');
                window.location.href = 'indeks.php';
              </script>";
        exit();
    }
}
?>
