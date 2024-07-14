<?php
include 'koneksi.php';

if(isset($_GET['noidentitas'])){
    $noidentitas = $_GET['noidentitas'];
    $sql = "DELETE FROM surveitbl WHERE noidentitas='$noidentitas'";
    
    if(mysqli_query($koneksi, $sql)){
        header("Location: indeks.php");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No Identitas not set.";
}
?>
