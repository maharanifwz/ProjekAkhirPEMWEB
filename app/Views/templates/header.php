<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Mate</title>

    <!-- Link Favicon -->
    <link rel="shortcut icon" href="<?= BASEURL ?>/favicon/favicon.ico">
    <link rel="icon" type="image/gif" href="<?= BASEURL ?>favicon/animated_favicon1.gif">

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/ea1f512027.js" crossorigin="anonymous"></script>

    <!--  Link Bootstrap -->
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
                <nav class="navbar fixed-top navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= BASEURL ?>/">
                            <img src="<?= BASEURL ?>/images/logo.png" alt="Logo PetMate" class="d-inline-block align-text-top">
                        </a>
                        <a href="<?= BASEURL ?>/" class="logo-desc">Pet<span class="identity">Mate</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/konsultasi">Konsultasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?= BASEURL ?>/tentangKami">Tentang Kami</a>
                                </li>
                            </ul>
                            <?php
                            if (isset($_SESSION['loginState'])) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= $_SESSION['nama'] ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="<?= BASEURL ?>/ShowAllHistory">Riwayat Konsultasi</a></li>
                                        <li><a class="dropdown-item" href="<?= BASEURL ?>/logout">Keluar</a></li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li><a class="masuk-style" href="<?= BASEURL ?>/login">Masuk</a></li>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>