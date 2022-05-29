<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Clinic</title>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/ea1f512027.js" crossorigin="anonymous"></script>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="http://localhost/ProjekAkhirPEMWEB/public/css/styles.css">

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
                        <img src="./images/logo.png" alt="Logo PetMate">
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

    <!-- detail clinic -->
    <section id="detailClinic">
        <div class="container-fluid">
            <!-- breadcrumb -->
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                    <li class="breadcrumb-item active" aria-current="page">Andista Animal Care</li>
                </ol>
            </nav>
            <div class="detailClinic-desc">
                <h2>Andista Animal Care</h2>
                <p>Jl. Kamboja No.2C, RW.1, Jatipulo, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="./images/detailclinic.png" alt="Detail Clinic">
                            <div class="detailClinic-ket">
                                <p>Rumah Sakit Hewan Dinas Peternakan Provinsi Jawa Timur pada awalnya adalah sebuah
                                    Klinik
                                    Hewan yang didirikan tahun 2002. Seiring dengan perkembangan zaman dan kebutuhan
                                    masyarakat yang semakin meningkat terhadap layanan kesehatan hewan, maka status
                                    Klinik
                                    Hewan secara bertahap ditingkatkan menjadi Rumah Sakit Hewan.</p>
                                <p>Rumah Sakit Hewan Dinas Peternakan Provinsi Jawa Timur merupakan kepanjangan fungsi
                                    pelayanan dari Bidang Kesehatan Hewan Dinas Peternakan Provinsi Jawa Timur.
                                </p>
                                <p>Dengan terus melakukan peningkatan di segala aspek yang berhubungan dengan pelayanan
                                    jasa
                                    Medik Veteriner secara berkesinambungan, Rumah Sakit Hewan Dinas Peternakan Provinsi
                                    Jawa Timur berkomitmen untuk dapat menjadi Rumah Sakit Hewan Pemerintah yang
                                    berkualitas
                                    dan terjangkau. Upaya peningkatan kualitas pelayanan antara lain di tempuh melalui
                                    pembelajaran berkelanjutan pada tenaga Medik Veteriner contohnya melalui Continuing
                                    Profesional Development, seminar, workshop, bimbingan teknis (BIMTEK), yang
                                    melibatkan
                                    narasumber yang berkompeten di bidangnya. Disamping itu updating (pembaharuan) dan
                                    penambahan peralatan pendukung diagnosa juga menjadi agenda tahunan Rumah Sakit
                                    Hewan
                                    Dinas Peternakan Provinsi Jawa Timur yang ditujukan untuk meningkatkan ketepatan
                                    diagnosa.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="Pilih Tanggal Konsultasi">
                                <label for="floatingInput">Tanggal</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Jumlah Hewan">
                                <label for="floatingPassword">Jumlah Hewan</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Pilih Jam Yang Tersedia</option>
                                    <option value="1">10.00</option>
                                    <option value="2">13.00</option>
                                    <option value="3">15.00</option>
                                </select>
                                <label for="floatingSelect">Pilih jam disini</label>
                            </div>
                            <button type="button" class="btn btn-primary btn-detail">Buat Janji Konsultasi</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- footer -->
    <footer class="detailClinic-footer">
        <hr />
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Mari Terhubung</h4>
                    <ul class='socials'>
                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-whatsapp-square fa-2x"></i></a>
                        </li>
                        <li><a href="https://www.twitter.com/"><i class="fa-brands fa-instagram-square fa-2x"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-linkedin fa-2x"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
                        </li>
                    </ul>
                    <p class="copy">&copy; Pet Mate.2022.All rights reserved.</p>
                </div>
                <div class="col">
                    <h4>Informasi Website</h4>
                    <ul>
                        <li>Konsultasi</li>
                        <li>Layanan Grooming</li>
                        <li>Komunitas</li>
                        <li>Blog</li>
                        <li>Tentang Kami</li>
                    </ul>
                </div>
                <div class="col">
                    <div className="logo">
                        <img src="./images/logo.png" />
                        <a class="logo-desc">Pet<span class="identity">Mate</span></a>
                    </div>
                    <p>Dapatkan informasi terbaru tentang layanan dan promo dari Pet Mate</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email Anda" aria-label="Email Anda" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>