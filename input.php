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
    

    <main>
        <section id="survey" class="  animate__animated animate__fadeInUpBig animate__delay-2s">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form-container">
                            <center><img src="umi.png" width="100" height="100"></center>
                            <h3 class="form-title">
                                FORM SURVEY LAYANAN BIRO FAKULTAS ILMU KOMPUTER UNIVERSITAS METHODIST INDONESIA</h3>
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
                                        1. Seberapa puas Anda dengan responsivitas petugas biro UMI dalam menanggapi
                                        pertanyaan atau permintaan Anda?
                                    </label>
                                    <select id="pertanyaan1" name="pertanyaan1" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        2. Bagaimana penilaian Anda terhadap kejelasan informasi yang diberikan oleh
                                        petugas biro UMI terkait prosedur layanan yang disediakan?

                                    </label>
                                    <select id="pertanyaan2" name="pertanyaan2" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        3. Sejauh mana Anda merasa dipermudah dalam proses administrasi (misalnya
                                        pendaftaran, pembayaran, atau pengajuan dokumen) oleh petugas biro?

                                    </label>
                                    <select id="pertanyaan3" name="pertanyaan3" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        4. Apakah Anda merasa bahwa petugas biro ramah dan membantu dalam menangani
                                        kebutuhan Anda?

                                    </label>
                                    <select id="pertanyaan4" name="pertanyaan4" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        5. Seberapa efisien menurut Anda waktu tunggu dalam antrean untuk mendapatkan
                                        layanan dari biro kampus?
                                    </label>
                                    <select id="pertanyaan5" name="pertanyaan5" class="form-control">
                                        <option value="">--Pilih Jawaban--</option>
                                        <option value="Sangat Buruk">Sangat Buruk</option>
                                        <option value="Buruk">Buruk</option>
                                        <option value="Baik">Baik</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                    </select><br>
                                    <label for="soal">
                                        

                                <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".form-container").addClass("animate__animated animate__fadeInDown");
        });
    </script>

</body>

</html>
