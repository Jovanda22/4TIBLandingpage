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
    <style>
        .kategori-card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .kategori-card h4 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .list-group-item:hover {
            background-color: #f0f0f0;
        }
        .list-group-item a {
            text-decoration: none;
            color: #333;
        }
        .list-group-item.active {
            background-color: #007bff;
            border-color: #007bff;
        }
        .list-group-item.active a {
            color: #fff;
        }
    </style>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark main-color">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <img src="image/umi.png" class="img-fluid" width="90px">
                    </a>
                    <a class="navbar-brand me-auto " href="#">UNIVERSITAS METHODIST INDONESIA</a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link " aria-current="page" href="indeks.php">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active " href="about.php">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav><br><br><br><br><br>
    <section id="about" class="py-2 ">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Universitas Methodist Indonesia</h2>
                    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="kategori-card">
                <h4>Kategori</h4>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><a href="index.php">SEMUA</a></li>
                    <li class="list-group-item"><a href="SambutanRektor.php">Kata Sambutan</a></li>
                    <li class="list-group-item"><a href="sejarahSingkatUmi.php">Sejarah Singkat UMI</a></li>
                    <li class="list-group-item"><a href="penyelenggaraumi.php">Penyelenggara UMI</a></li>
                    <li class="list-group-item"><a href="SrukturOrganisasi.php">Struktur Organisasi</a></li>
                    <li class="list-group-item"><a href="visimisi.php">Visi Misi</a></li>
                    <li class="list-group-item"><a href="fasilitas.php">Fasilitas dan Keunggulan</a></li>
                    <li class="list-group-item"><a href="kerjasama.php">Kerjasama</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



                <section id="FAKULTAS ILMU KOMPUTER">
                        <div class="card-footer text-center">
                            <h2>FAKULTAS ILMU KOMPUTER</h4>
                        </div>


                        <figure class="figure d-flex border border-primary">
                            <img src="image/gbrTI.webp" class="figure-img img-fluid " style="width: 250px;" alt="...">
                            <figcaption class="figure-caption">
                                <center>
                                    <div class="fluid bg-primary"><strong style="color:black;"> 1. TEKNIK INFORMATIKA</strong></div>
                                </center><br>
                                <p style="margin-left:10px;text-align:justify;margin-right:5px;">
                                    Menyelenggarakan Pendidikan Tinggi yang dapat menghasilkan lulusan berkualitas bidang Teknologi Informasi dan Komunikasi yang berwawasan Teknologi Informasi dan Komunikasi dan enterpreunership, serta siap bersaing secara global.
                                    Melakukan kegiatan Penelitian dan pengembangan bidang Teknologi Informasi dan Komunikasi terkini berdasarkan suatu roadmap yang jelas dan berujung pada publikasi ilmiah dan/atau produk nyata. Melakukan berbagai kegiatan pengabdian kepada masyarakat /industri sebagai upaya untuk berkontribusi menyelesaikan problem nyata di masyarakat/industri.
                                </p>
                                <figcaption class="figure-caption ml-3">
                                </figcaption>
                        </figure>
                    </section>

                    <section id="vutsal">
                        <figure class="figure d-flex border border-primary">
                            <figcaption class="figure-caption ">
                                <center>
                                    <div class="fluid bg-primary"><strong style="color:black;"> 2. SISTEM INFORMASI</strong></div>
                                </center><br>
                                <p style="margin-left:5px;text-align:justify;margin-right:10px">
                                    Menghasilkan lulusan yang memahami proses bisnis di dalam berbagai macam organisasi secara umum (penjualan-pembelian, perencanaan produksi, hrd, retail, logistik, pelayanan jasa, pendidikan, pemerintahan dll) dengan praktek dan standar mutu yang baik. Mampu mengolah informasi yang berukuran besar dan tidak beraturan dengan metodologi penambangan data dan menyajikan nya dalam bentuk yang mudah dipahami, merancang arsitektur teknologi informasi suatu sistem informasi untuk meningkatkan kinerja organisasi tersebut menjadi transparan, aman, cepat, akurat, tepat sasaran dan kompetitif.
                                </p>
                            </figcaption>
                            <img src="image/gbrSI.jPG" class="figure-img img-fluid " style="width: 450px;" alt="...">
                        </figure>
                    </section>

                    <section id="basket">
                        <figure class="figure d-flex border border-primary">
                            <img src="image/gbr_pti.jPG" class="figure-img img-fluid" style="width: 450px;" alt="...">
                            <figcaption class="figure-caption">
                                <center>
                                    <div class="fluid bg-primary"><strong style="color:black;"> 3. PENDIDIKAN TEKNOLOGI INFORMASI</strong></div>
                                </center> <br>
                                <p style="margin-left:10px;text-align:justify;margin-right:5px">
                                    Menyelenggarakan pendidikan dan pengajaran yang efektif, efisien, akuntabel, dan berkelanjutan dengan penjaminan mutu sesuai standar nasional dan internasional dalam rangka menghasilkan lulusan sarjana Pendidikan Teknologi Informasi yang berkompeten sebagai tenaga pendidik di bidang Pendidikan Teknologi Informasi, sebagai tenaga profesional di bidang Teknologi Informasi yang berkarakter da beretika di tingkat nasional.
                                    Mengembangkan penelitian, inovasi, berkualitas dan bermanfaat dalam bidang pendidikan teknologi informasi.
                                    Meningkatkan kontribusi dan kolaborasi dengan pemangku kepentingan dalam riset dan Pengabdian Kepada Masyarakat (PKM) bidang Informatika</p>
                            </figcaption>
                        </figure>
                    </section>

            </div>
        </div>
    </section>


    <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>

</html>