<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css"/>
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
            animation: fadeInDown 1s ease-in-out; /* Animasi fadeInDown dari animate.css */
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark main-color animate__animated animate__fadeInDown">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="image/umi.png" class="img-fluid" width="90px">
                    </a>
                    <a class="navbar-brand me-auto" href="#">UNIVERSITAS METHODIST INDONESIA</a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid banner d-flex align-items-center">
        
            <h1 class="text-light text-center mb-3 animate__animated animate__fadeInLeftBig animate__delay-1s">
                LAYANAN BIRO FAKULTAS ILMU KOMPUTER UNIVERSITAS METHODIST INDONESIA
                <br>
                <a href="#" data-bs-toggle="modal" data-bs-target="#surveyModal" class="btn btn-custom btn-lg animate__animated animate__fadeInUpBig animate__delay-2s">SURVEY LAYANAN</a> <a href="#" data-bs-toggle="modal" data-bs-target="#surveyfasilitas" class="btn btn-custom btn-lg animate__animated animate__fadeInUpBig animate__delay-2s">SURVEY FASILITAS</a>
            </h1>
            <ul class="list-unstyled mt-4 d-flex justify-content-center">
               
            </ul>
        
    </div>


    <div class="modal fade" id="surveyModal" tabindex="-1" aria-labelledby="surveyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <h3 class="form-title">FORM SURVEY LAYANAN BIRO FAKULTAS ILMU KOMPUTER UNIVERSITAS METHODIST INDONESIA</h3>
                        <form action="proses.php" method="POST">
                            <div class="form-group">
                                <label for="noidentitas" class="required">NO ID </label>
                                <input type="number" class="form-control" id="noidentitas" name="noidentitas" placeholder="Masukkan No Identitas" required>
                            </div>

                            <div class="form-group">
                                <label for="nama" class="required">NAMA LENGKAP </label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <br>
                            <h3>PERTANYAAN</h3>
                            <div class="form-group">
                                <label for="pertanyaan1">1. Seberapa puas Anda dengan responsivitas petugas biro UMI dalam menanggapi pertanyaan atau permintaan Anda?</label>
                                <select id="pertanyaan1" name="pertanyaan1" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan2">2. Bagaimana penilaian Anda terhadap kejelasan informasi yang diberikan oleh petugas biro UMI terkait prosedur layanan yang disediakan?</label>
                                <select id="pertanyaan2" name="pertanyaan2" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan3">3. Sejauh mana Anda merasa dipermudah dalam proses administrasi (misalnya pendaftaran, pembayaran, atau pengajuan dokumen) oleh petugas biro?</label>
                                <select id="pertanyaan3" name="pertanyaan3" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan4">4. Apakah Anda merasa bahwa petugas biro ramah dan membantu dalam menangani kebutuhan Anda?</label>
                                <select id="pertanyaan4" name="pertanyaan4" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan5">5. Seberapa efisien menurut Anda waktu tunggu dalam antrean untuk mendapatkan layanan dari biro kampus?</label>
                                <select id="pertanyaan5" name="pertanyaan5" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="surveyfasilitas" tabindex="-1" aria-labelledby="surveyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <h3 class="form-title">FORM SURVEY FASILITAS BIRO FAKULTAS ILMU KOMPUTER UNIVERSITAS METHODIST INDONESIA</h3>
                        <form action="yproses.php" method="POST">
                            <div class="form-group">
                                <label for="noidentitas" class="required">NO ID </label>
                                <input type="number" class="form-control" id="noidentitas" name="noidentitas" placeholder="Masukkan No Identitas" required>
                            </div>

                            <div class="form-group">
                                <label for="nama" class="required">NAMA LENGKAP </label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <br>
                            <h3>PERTANYAAN</h3>
                            <div class="form-group">
                                <label for="pertanyaan1">1. Seberapa memadai fasilitas ruang tunggu yang tersedia di biro universitas?</label>
                                <select id="pertanyaan1" name="pertanyaan1" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan2">2. Bagaimana penilaian Anda terhadap ketersediaan informasi dan panduan di fasilitas biro universitas?</label>
                                <select id="pertanyaan2" name="pertanyaan2" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan3">3. Seberapa mudah aksesibilitas ke fasilitas biro universitas bagi penyandang disabilitas?</label>
                                <select id="pertanyaan3" name="pertanyaan3" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan4">4. Bagaimana kualitas fasilitas teknologi (komputer, printer, Wi-Fi) yang disediakan oleh biro universitas?</label>
                                <select id="pertanyaan4" name="pertanyaan4" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <label for="pertanyaan5">5. Bagaimana penilaian Anda terhadap kebersihan fasilitas umum di biro universitas?</label>
                                <select id="pertanyaan5" name="pertanyaan5" class="form-control">
                                    <option value="">--Pilih Jawaban--</option>
                                    <option value="Sangat Buruk">Sangat Buruk</option>
                                    <option value="Buruk">Buruk</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                </select><br>
                                <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-nlZNxnKXZ9tQZY4pLh04BrVb9Tft6DQoZzxG/+BhKZLDOkl2Y2RPKKRE5tQ0zrmF" crossorigin="anonymous"></script>
    <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>


<!DOCTYPE html>
<html>
<head>
    <title>Data Survei Pelayanan Biro</title>
    <link rel="stylesheet" type="text/css" href="zstyleout.css">
</head>
<body>

<div class="container">
    <div class="questions">
        <h2>Pertanyaan Survei Layanan</h2>
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
            echo "<legend><h2>Data Survei Layanan</h2></legend>";

            echo "<table>";
            echo "<tr>
                    <th>No</th>
                    <th>No Identitas</th>
                    <th>Nama</th>
                    <th>Pertanyaan 1</th>
                    <th>Pertanyaan 2</th>
                    <th>Pertanyaan 3</th>
                    <th>Pertanyaan 4</th>
                    <th>Pertanyaan 5</th>
                    <th>Aksi</th>
                  </tr>";
                  $no = 1;

            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$data['noidentitas']}</td>
                        <td>{$data['nama']}</td>
                        <td>{$data['pertanyaan1']}</td>
                        <td>{$data['pertanyaan2']}</td>
                        <td>{$data['pertanyaan3']}</td>
                        <td>{$data['pertanyaan4']}</td>
                        <td>{$data['pertanyaan5']}</td>
                        <td><a href='zeditout.php?noidentitas={$data['noidentitas']}'>Edit</a> | <a href='zhapusout.php?noidentitas={$data['noidentitas']}'>Hapus</a></td>
                      </tr>";
                      $no++;
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

<!DOCTYPE html>
<html>
<head>
    <title>Data Survei Fasilitas Biro</title>
    <link rel="stylesheet" type="text/css" href="zstyleout.css">
</head>
<body>

<div class="container">
    <div class="questions">
        <h2>Pertanyaan Survei Fasilitas </h2>
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

    function tampil_dataf($koneksi) {
        $sql = "SELECT * FROM fasilitastbl";
        $query = mysqli_query($koneksi, $sql);

        echo "<fieldset>";
        echo "<legend><h2>Data Survei Fasilitas</h2></legend>";

        echo "<table>";
        echo "<tr>
                <th>No</th>
                <th>No Identitas</th>
                <th>Nama</th>
                <th>Pertanyaan 1</th>
                <th>Pertanyaan 2</th>
                <th>Pertanyaan 3</th>
                <th>Pertanyaan 4</th>
                <th>Pertanyaan 5</th>
                <th>Aksi</th>
              </tr>";

        $no = 1; // Inisialisasi variabel penghitung
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$data['noidentitas']}</td>
                    <td>{$data['nama']}</td>
                    <td>{$data['pertanyaan1']}</td>
                    <td>{$data['pertanyaan2']}</td>
                    <td>{$data['pertanyaan3']}</td>
                    <td>{$data['pertanyaan4']}</td>
                    <td>{$data['pertanyaan5']}</td>
                    <td><a href='yeditout.php?noidentitas={$data['noidentitas']}'>Edit</a> | <a href='yhapusout.php?noidentitas={$data['noidentitas']}'>Hapus</a></td>
                  </tr>";
            $no++; // Tingkatkan variabel penghitung
        }
        echo "</table>";
        echo "</fieldset>";
    }

    if (isset($_GET['aksi']) && $_GET['aksi'] == "read") {
        tampil_dataf($koneksi);
    } else {
        tampil_dataf($koneksi);
    }
    ?>
</div>

</div>

</body>
</html>
