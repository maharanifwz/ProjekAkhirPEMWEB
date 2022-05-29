<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetMate</title>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/ea1f512027.js" crossorigin="anonymous"></script>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="../">

    <!-- Link Google Fonts -->
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

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

    <!-- landing page -->
    <div class="heroBlock">
        <h1>Layanan terbaik untuk hewan peliharaan kesayanganmu</h1>
        <p>Temukan layanan terbaik dan terdekat untuk hewan peliharaan kesayanganmu dalam <span class='identity'>satu
                tempat</span>
        </p>
        <div>
            <button type="button" class="btn btn-primary">Mulai</button>
            <button type="button" class="btn btn-outline-secondary">Pelajari Selengkapnya</button>
        </div>
    </div>

    <!-- layanan kami -->
    <section id="service">
        <div class="container-fluid">
            <div class="container service-section">
                <div class="row">
                    <div class="col service-desc-1">
                        <img src="./images/service.png" alt="Service Image">
                        <h3 class="identity">Konsultasi</h3>
                        <p>Kami membantu Anda menemukan layanan konsultasi kesehatan hewan disekitarmu.</p>
                    </div>
                    <div class="col">
                        <h2>Layanan kami</h2>
                        <p class="service-desc-2">Kami sadar bahwa hewan peliharaan sangat berperan besar bagi kehidupan
                            pemiliknya. Untuk itu
                            kami hadir memberikan fitur yang terbaik bagi hewan peliharaan kesayanganmu</p>
                        <button type="button" class="btn btn-primary btn-service">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- benefit -->
    <section id="benefit">
        <div class="container-fluid">
            <div class="benefit-desc">
                <h2 class="identity">Mengapa harus memilih kami ?</h2>
                <p class="benefit-heading">Sebagai penyedia layanan terbaik untuk hewan peliharaan, tentunya kami
                    memiliki keunggulan yang
                    membedakan kamu dengan produk lain</p>
                <div class='services'>
                    <i class="fa-solid fa-paw"></i>
                    <p>Pesan layanan konsultasi dengan mudah</p>
                </div>
                <div class='services'>
                    <i class="fa-solid fa-paw"></i>
                    <p>Harga layanan terjangkau</p>
                </div>
                <div class='services'>
                    <i class="fa-solid fa-paw"></i>
                    <p>Transaksi pembayaran yang aman dan terpercaya</p>
                </div>
            </div>
            <div class="benefit-card">
                <h3 class="quotes1">They motivate us to play, love, seek adventure,</h3>
                <h3 class="quotes2">and be loyal." - Tom Hayden</h3>
            </div>
        </div>
    </section>


    <!-- review -->
    <section id="review">
        <div class="container-fluid">
            <h2 class="identity">Apa kata mereka?</h2>
            <p>Beberapa testimonial dari para pelanggan yang telah menggunakan layanan pada website PetMate</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col review-desc">
                                    <img src="./images/review1.png" alt="Review 1">
                                    <h3>Meisya</h3>
                                    <p>PetMate membuat saya merasa tidak khawatir untuk memesan layanan konsultasi di
                                        kala pandemi.</p>
                                </div>
                                <div class="col review-desc">
                                    <img src="./images/review2.png" alt="Review 2">
                                    <h3>Andrew</h3>
                                    <p>PetMate menyediakan layanan terbaik untuk merawat hewan peliharaan saya.</p>
                                </div>
                                <div class="col review-desc">
                                    <img src="./images/review3.png" alt="Review 3">
                                    <h3>Hanan</h3>
                                    <p>Temukan komunitas pada PetMate mempertemukan saya dengan penyayang hewan
                                        peliharaan lain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col review-desc">
                                    <img src="./images/review1.png" alt="Review 1">
                                    <h3>Meisya</h3>
                                    <p>PetMate membuat saya merasa tidak khawatir untuk memesan layanan konsultasi
                                        di
                                        kala pandemi.</p>
                                </div>
                                <div class="col review-desc">
                                    <img src="./images/review2.png" alt="Review 2">
                                    <h3>Andrew</h3>
                                    <p>PetMate menyediakan layanan terbaik untuk merawat hewan peliharaan saya.</p>
                                </div>
                                <div class="col review-desc">
                                    <img src="./images/review3.png" alt="Review 3">
                                    <h3>Hanan</h3>
                                    <p>Temukan komunitas pada PetMate mempertemukan saya dengan penyayang hewan
                                        peliharaan lain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col review-desc">
                                    <img src="./images/review1.png" alt="Review 1">
                                    <h3>Meisya</h3>
                                    <p>PetMate membuat saya merasa tidak khawatir untuk memesan layanan konsultasi
                                        di
                                        kala pandemi.</p>
                                </div>
                                <div class="col review-desc">
                                    <img src="./images/review2.png" alt="Review 2">
                                    <h3>Andrew</h3>
                                    <p>PetMate menyediakan layanan terbaik untuk merawat hewan peliharaan saya.</p>
                                </div>
                                <div class="col review-desc">
                                    <img src="./images/review3.png" alt="Review 3">
                                    <h3>Hanan</h3>
                                    <p>Temukan komunitas pada PetMate mempertemukan saya dengan penyayang hewan
                                        peliharaan lain.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="fa-solid fa-angle-left" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="fa-solid fa-angle-right" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                        <img src="./images/logo.png" />
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