<!DOCTYPE html>
<html>
<head>
    <title>Data Survei Fasilitas Biro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="questions">
        <h2>Pertanyaan Survei </h2>
        <ol>
        <li>Seberapa memadai fasilitas ruang tunggu yang tersedia di biro universitas?</li>
            <li>Bagaimana penilaian Anda terhadap ketersediaan informasi dan panduan di fasilitas biro universitas?</li>
            <li>Seberapa mudah aksesibilitas ke fasilitas biro universitas bagi penyandang disabilitas?</li>
            <li>Bagaimana kualitas fasilitas teknologi (komputer, printer, Wi-Fi) yang disediakan oleh biro universitas?</li>
            <li>Bagaimana penilaian Anda terhadap kebersihan fasilitas umum di biro universitas?</li>
        </ol>
    </div>

    <div class="table-container">
        <?php
       
        $koneksi = mysqli_connect("localhost", "root", "", "surveidb") or die(mysqli_error($koneksi));

        function tampil_data($koneksi) {
            $sql = "SELECT * FROM fasilitastbl";
            $query = mysqli_query($koneksi, $sql);

            echo "<fieldset>";
            echo "<legend><h2>Data Survei Fasilitas</h2></legend>";

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
