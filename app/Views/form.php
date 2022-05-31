<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/ea1f512027.js" crossorigin="anonymous"></script>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>\css\styles.css">

    <!-- Link Google Fonts -->
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar section -->
    <div class="container-fluid">
        <div class="wrapper">
            <header>
                <nav class="navigasi">
                    <div href="#" class="logo">
                        <img src="../../public/images/logo.png" alt="Logo PetMate">
                        <a class="logo-desc">Pet<span class="identity">Mate</span></a>
                    </div>
                    <ul>
                        <li><a href="#">Konsultasi</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Masuk</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>

    <!-- form section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../../public/images/form.png" src="Andista Animal Care">
                <h4>Andista Animal Care</h4>
                <p>Jl. Kamboja No.2C, Jakarta Barat</p>
                <p>09.00 - 24.00 WIB</p>
            <button type="button" class="btn btn-outline-secondary">Lihat Kembali Detail Klinik</button>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Contoh: Chloe">
                    <label for="floatingInput">Nama Hewan</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Pilih Jenis Hewan</option>
                        <option value="1">Kucing</option>
                        <option value="2">Anjing</option>
                        <option value="3">Burung</option>
                    </select>
                    <label for="floatingSelect">Jenis Hewan</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingRas" placeholder="Contoh: Pomeranian">
                    <label for="floatingRas">Ras</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    <label for="floatingSelect">Jenis Kelamin</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingBerat" placeholder="Contoh: 1 kg">
                    <label for="floatingBerat">Berat Badan</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingUmur" placeholder="Contoh: 1 tahun 2 bulan">
                    <label for="floatingUmur">Umur</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Tuliskan Kelihan" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Keluhan</label>
                </div>
                <button type="button" class="btn btn-primary">Lanjutkan ke Pembayaran</button>
            </div>
        </div>
    </div>
</body>

</html>