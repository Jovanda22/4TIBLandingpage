<?php
include 'koneksi.php';

if (isset($_POST['update'])) {
    $noidentitas = $_POST['noidentitas'];
    $nama = $_POST['nama'];
    $pertanyaan1 = $_POST['pertanyaan1'];
    $pertanyaan2 = $_POST['pertanyaan2'];
    $pertanyaan3 = $_POST['pertanyaan3'];
    $pertanyaan4 = $_POST['pertanyaan4'];
    $pertanyaan5 = $_POST['pertanyaan5'];

    $sql = "UPDATE surveitbl SET nama='$nama', pertanyaan1='$pertanyaan1', pertanyaan2='$pertanyaan2', pertanyaan3='$pertanyaan3', pertanyaan4='$pertanyaan4', pertanyaan5='$pertanyaan5' WHERE noidentitas='$noidentitas'";
    mysqli_query($koneksi, $sql);

    header("Location: indeks.php");
}

$noidentitas = $_GET['noidentitas'];
$sql = "SELECT * FROM surveitbl WHERE noidentitas='$noidentitas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Survei</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #87cefa;
            padding-top: 50px;
        }

        .form-container {
            background-color: #b0c4de;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .required::after {
            content: '*';
            color: red;
        }
    </style>
</head>

<body>
    <section id="survey" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-container">
                        <form action="zeditout.php" method="POST">
                            <h3>PERTANYAAN</h3>
                            <div class="form-group">
                                <input type="hidden" name="noidentitas" value="<?php echo $data['noidentitas']; ?>">

                                <label for="noidentitas">No Identitas </label>
                                <input type="text" id="noidentitas" name="noidentitas" class="form-control" value="<?php echo $data['noidentitas']; ?>"><br>
                                
                                <label for="nama">Nama </label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama']; ?>"><br>

                                <label for="pertanyaan1">
                                    1. Seberapa puas Anda dengan responsivitas petugas biro dalam menanggapi pertanyaan atau permintaan Anda?
                                </label>
                                <select id="pertanyaan1" name="pertanyaan1" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk" <?php echo $data['pertanyaan1'] == 'Sangat Buruk' ? 'selected' : ''; ?>>Sangat Buruk</option>
                                    <option value="Buruk" <?php echo $data['pertanyaan1'] == 'Buruk' ? 'selected' : ''; ?>>Buruk</option>
                                    <option value="Baik" <?php echo $data['pertanyaan1'] == 'Baik' ? 'selected' : ''; ?>>Baik</option>
                                    <option value="Sangat Baik" <?php echo $data['pertanyaan1'] == 'Sangat Baik' ? 'selected' : ''; ?>>Sangat Baik</option>
                                </select><br>

                                <label for="pertanyaan2">
                                    2. Bagaimana penilaian Anda terhadap kejelasan informasi yang diberikan oleh petugas biro terkait prosedur layanan yang disediakan?
                                </label>
                                <select id="pertanyaan2" name="pertanyaan2" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk" <?php echo $data['pertanyaan2'] == 'Sangat Buruk' ? 'selected' : ''; ?>>Sangat Buruk</option>
                                    <option value="Buruk" <?php echo $data['pertanyaan2'] == 'Buruk' ? 'selected' : ''; ?>>Buruk</option>
                                    <option value="Baik" <?php echo $data['pertanyaan2'] == 'Baik' ? 'selected' : ''; ?>>Baik</option>
                                    <option value="Sangat Baik" <?php echo $data['pertanyaan2'] == 'Sangat Baik' ? 'selected' : ''; ?>>Sangat Baik</option>
                                </select><br>

                                <label for="pertanyaan3">
                                    3. Sejauh mana Anda merasa dipermudah dalam proses administrasi (misalnya pendaftaran, pembayaran, atau pengajuan dokumen) oleh petugas biro?
                                </label>
                                <select id="pertanyaan3" name="pertanyaan3" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk" <?php echo $data['pertanyaan3'] == 'Sangat Buruk' ? 'selected' : ''; ?>>Sangat Buruk</option>
                                    <option value="Buruk" <?php echo $data['pertanyaan3'] == 'Buruk' ? 'selected' : ''; ?>>Buruk</option>
                                    <option value="Baik" <?php echo $data['pertanyaan3'] == 'Baik' ? 'selected' : ''; ?>>Baik</option>
                                    <option value="Sangat Baik" <?php echo $data['pertanyaan3'] == 'Sangat Baik' ? 'selected' : ''; ?>>Sangat Baik</option>
                                </select><br>

                                <label for="pertanyaan4">
                                    4. Apakah Anda merasa bahwa petugas biro ramah dan membantu dalam menangani kebutuhan Anda?
                                </label>
                                <select id="pertanyaan4" name="pertanyaan4" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk" <?php echo $data['pertanyaan4'] == 'Sangat Buruk' ? 'selected' : ''; ?>>Sangat Buruk</option>
                                    <option value="Buruk" <?php echo $data['pertanyaan4'] == 'Buruk' ? 'selected' : ''; ?>>Buruk</option>
                                    <option value="Baik" <?php echo $data['pertanyaan4'] == 'Baik' ? 'selected' : ''; ?>>Baik</option>
                                    <option value="Sangat Baik" <?php echo $data['pertanyaan4'] == 'Sangat Baik' ? 'selected' : ''; ?>>Sangat Baik</option>
                                </select><br>

                                <label for="pertanyaan5">
                                    5. Seberapa efisien menurut Anda waktu tunggu dalam antrean untuk mendapatkan layanan dari biro kampus?
                                </label>
                                <select id="pertanyaan5" name="pertanyaan5" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk" <?php echo $data['pertanyaan5'] == 'Sangat Buruk' ? 'selected' : ''; ?>>Sangat Buruk</option>
                                    <option value="Buruk" <?php echo $data['pertanyaan5'] == 'Buruk' ? 'selected' : ''; ?>>Buruk</option>
                                    <option value="Baik" <?php echo $data['pertanyaan5'] == 'Baik' ? 'selected' : ''; ?>>Baik</option>
                                    <option value="Sangat Baik" <?php echo $data['pertanyaan5'] == 'Sangat Baik' ? 'selected' : ''; ?>>Sangat Baik</option>
                                </select><br>
                            </div>

                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
