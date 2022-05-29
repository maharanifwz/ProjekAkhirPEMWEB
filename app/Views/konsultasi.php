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
    <link rel="stylesheet" href="styles.css">

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

    <!-- landing page -->
    <section id="consultation">
        <div class="container-fluid">
            <!-- breadcrumb -->
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                </ol>
            </nav>
            <h1>Konsultasi</h1>
            <p>Temukan klinik hewan di sekitarmu dan pilih jenis layanan (ke klinik atau ke rumah) dengan jadwal
                konsultasi
                yang sesuai dengan keinginanmu. Sekarang, pesan konsultasi untuk hewan peliharaanmu jadi lebih mudah
                dengan
                PetMate. Ingat, segera pesan layanan konsultasi untuk hewan peliharaan kesayanganmu ya!
            </p>
            <button type="button" class="btn btn-primary btn-consul">Pesan</button>
        </div>
    </section>

    <!-- faq -->
    <section id="faq">
        <div class="container-fluid">
            <h2 class="faq-heading">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana tata cara memesan layanan konsultasi ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Kamu bisa memilih klinik sesuai dengan tempat tinggalmu, mengisi form pendaftaran dan pilih
                            jenis layanannya. Kemudian memilih jadwal konsultasi dan lakukan pembayaran. Langkah
                            terakhir menggunggah bukti pembayarannya agar pesananmu bisa terdaftar!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana proses layanan konsultasi ke klinik ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setelah pembayaran diverifikasi, kamu akan mendapat estimasi waktu untuk layanan yang sudah
                            kamu pesan melalui pesan Whatsapp. Pastikan untuk datang tepat waktu ya!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bagaimana proses layanan konsultasi ke rumah ?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setelah pembayaran diverifikasi, kamu akan mendapatkan waktu untuk pihak klinik hewan tiba
                            di rumahmu. Pastikan tetap di rumah saja ya!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Berapa lama proses verifikasi pendaftaran ?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Verifikasi pendaftaran akan selesai dalam waktu 10 - 30 menit apabila Anda mengunggah bukti
                            pembayaran pada hari dan jam kerja. Apabila menggungah setelah jam kerja, pendaftaran akan
                            diverifikasi keesokan harinya
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Apa yang harus saya lakukan apabila pendaftaran belum diverifikasi lebih dari 30 menit ?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anda dapat menghubungi customer servis kami melalui Whatsapp di +62 823 1453 0092
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Apa yang harus saya lakukan apabila belum mendapatkan informasi estimasi waktu melalui
                            Whatsapp
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Apabila status pembayaran kamu sudah terverifikasi namun belum mendapatkan pesan di
                            Whatsapp, harap hubungi customer servis kami di +62 823 1453 0092
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
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
                        <img src="../../public/images/logo.png" />
                        <a class="logo-desc">Pet<span class="identity">Mate</span></a>
                    </div>
                    <p>Dapatkan informasi terbaru tentang layanan dan promo dari Pet Mate</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email Anda" aria-label="Email Anda"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>