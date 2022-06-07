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
    <section id="login">
        <div class="container-fluid">
            <h1>Daftar</h1>
            <form action="<?= BASEURL ?>\prosesRegister" method="POST">
                <?php if (!empty($_SESSION['stateReg'])) { ?>
                    <div class="alert alert-danger" role="alert" id="loginAlert">
                        <?php echo $_SESSION['stateReg'] ?>
                    </div>
                <?php }; ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="floatingNama" placeholder="Maharani Fawwaz" required>
                    <label for="floatingNama">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="maharanifwz@gmail.com" required>
                    <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="floatingUsername" placeholder="maharanifwz" required>
                    <label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="alamat" id="floatingAlamat" placeholder="Bekasi" required>
                    <label for="floatingAlamat">Alamat</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div>
                    <button style="width: 300px" type="submit" class="btn btn-primary">Masuk</button>
                    <p class="submit-desc">Sudah memiliki akun ? <span><a href="<?= BASEURL ?>\login" class="identity">Masuk
                                disini</a></span>
                    </p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>