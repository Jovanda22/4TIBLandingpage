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
</head>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
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
                    <a class="navbar-brand me-auto" href="#">UNIVERSITAS METHODIST INDONESIA</a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link " aria-current="page" href="indeks.php">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br><br><br>
<section id="about" class="py-2 ">
-        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase ">Universitas Methodist Indonesia</h2>
                    <section id="FAKULTAS ILMU KOMPUTER">
<div class="card-footer text-center">


    <h2>Detail Kontak Biro Rektorat UMI</h2>
    
    <?php
    // Kontak Biro Rektorat UMI
    $contact = [
        "name" => "Biro Rektorat UMI",
        "address" => "Jl Hang Tuah no 8, Madras Hulu Medan Polonia, Medan, 20151",
        "phone" => "+62 61 415-7882",
        "fax" => "+62 61 456-7533"
    ];
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo htmlspecialchars($contact['name']); ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo htmlspecialchars($contact['address']); ?></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><?php echo htmlspecialchars($contact['phone']); ?></td>
        </tr>
        <tr>
            <th>Fax</th>
            <td><?php echo htmlspecialchars($contact['fax']); ?></td>
        </tr>
    </table>
</body>
</html>


