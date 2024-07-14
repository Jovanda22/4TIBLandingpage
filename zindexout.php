<!DOCTYPE html>
<html>
<head>
    <title>Data Survei Pelayanan Biro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="questions">
        <h2>Pertanyaan Survei</h2>
        <ol>
            <li>Seberapa puas Anda dengan responsivitas petugas biro dalam menanggapi pertanyaan atau permintaan Anda?</li>
            <li>Bagaimana penilaian Anda terhadap kejelasan informasi yang diberikan oleh petugas biro terkait prosedur layanan yang disediakan?</li>
            <li>Sejauh mana Anda merasa dipermudah dalam proses administrasi (misalnya pendaftaran, pembayaran, atau pengajuan dokumen) oleh petugas biro?</li>
            <li>Apakah Anda merasa bahwa petugas biro ramah dan membantu dalam menangani kebutuhan Anda?</li>
            <li>Seberapa efisien menurut Anda waktu tunggu dalam antrean untuk mendapatkan layanan dari biro kampus?</li>
        </ol>
    </div>

    <div class="table-container">
        <?php
       
        $koneksi = mysqli_connect("localhost", "root", "", "surveidb") or die(mysqli_error($koneksi));

        function tampil_data($koneksi) {
            $sql = "SELECT * FROM surveitbl";
            $query = mysqli_query($koneksi, $sql);

            echo "<fieldset>";
            echo "<legend><h2>Data Survei</h2></legend>";

            echo "<table>";
            echo "<tr>
            
                    <th>No Identitas</th>
                    <th>Nama</th>
                    <th>Pertanyaan 1</th>
                    <th>Pertanyaan 2</th>
                    <th>Pertanyaan 3</th>
                    <th>Pertanyaan 4</th>
                    <th>Pertanyaan 5</th>
                    <th>Aksi</th>
                  </tr>";

            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>{$data['noidentitas']}</td>
                        <td>{$data['nama']}</td>
                        <td>{$data['pertanyaan1']}</td>
                        <td>{$data['pertanyaan2']}</td>
                        <td>{$data['pertanyaan3']}</td>
                        <td>{$data['pertanyaan4']}</td>
                        <td>{$data['pertanyaan5']}</td>
                        <td><a href='edit.php?noidentitas={$data['noidentitas']}'>Edit</a> | <a href='hapus.php?noidentitas={$data['noidentitas']}'>Hapus</a></td>
                      </tr>";
            }
            echo "</table>";
            echo "</fieldset>";
        }

        if (isset($_GET['aksi']) && $_GET['aksi'] == "read") {
            tampil_data($koneksi);
        } else {
            tampil_data($koneksi);
        }
        ?>
    </div>
</div>

</body>
</html>
