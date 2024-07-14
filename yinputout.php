<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Your Brand</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#survey">Survei</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="survey" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form-container">
                            <center><img src="umi.png" width="100" height="100"></center>
                            <h3 class="form-title">
                                FORM SURVEY FASILITAS BIRO FAKULTAS ILMU KOMPUTER UNIVERSITAS METHODIST INDONESIA</h3>
                            <form action="proses.php" method="POST">
                                <div class="form-group">
                                    <label for="npm" class="required">NO ID </label>
                                    <input type="number" class="form-control" id="noidentitas" name="noidentitas"
                                        placeholder="Masukkan No Identitas" required>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="required">NAMA LENGKAP </label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Anda" required>
                                </div>
                                <br>
                                <H3>PERTANYAAN</H3>
                                <div class="form-group">
                                    <label for="soal">
                                        1. Seberapa memadai fasilitas ruang tunggu yang tersedia di biro universitas?
                                    </label>
                                    <select id="pertanyaan1" name="pertanyaan1" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        2. Bagaimana penilaian Anda terhadap ketersediaan informasi dan panduan di fasilitas biro universitas?
                                    </label>
                                    <select id="pertanyaan2" name="pertanyaan2" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        3. Seberapa mudah aksesibilitas ke fasilitas biro universitas bagi penyandang disabilitas?
                                    </label>
                                    <select id="pertanyaan3" name="pertanyaan3" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        4. Bagaimana kualitas fasilitas teknologi (komputer, printer, Wi-Fi) yang disediakan oleh biro universitas?
                                    </label>
                                    <select id="pertanyaan4" name="pertanyaan4" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        5. Bagaimana penilaian Anda terhadap kebersihan fasilitas umum di biro universitas?
                                    </label>
                                    <select id="pertanyaan5" name="pertanyaan5" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    
                                 
                                </div>

                                <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>