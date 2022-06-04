<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Mate</title>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/ea1f512027.js" crossorigin="anonymous"></script>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

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
                    <a href="<?= BASEURL ?>/" class="logo">
                        <img src="<?= BASEURL ?>/images/logo.png" alt="Logo PetMate">
                        <a href="<?= BASEURL ?>/" class="logo-desc">Pet<span class="identity">Mate</span></a>
                    </a>
                    <ul>
                        <li><a href="<?= BASEURL ?>/konsultasi">Konsultasi</a></li>
                        <li><a href="<?= BASEURL ?>/tentangKami">Tentang Kami</a></li>
                        <?php
                        if (isset($_SESSION['loginState'])) { ?>
                            <!-- <li><a  class="right" href="<?= BASEURL ?>/logout">Keluar</a></li> -->
                            <!-- Example single danger button -->
                            <!-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle show" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li><br>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div> -->
                        <?php } else { ?>
                            <li><a href="<?= BASEURL ?>/login">Masuk</a></li>
                        <?php } ?>

                    </ul>
                </nav>
            </header>
        </div>
    </div>