<!-- form section -->
<section id="formPendaftaran">
    <div class="container-fluid">
        <!-- breadcrumb -->
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= BASEURL ?>/">Beranda</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="<?= BASEURL ?>/konsultasi">Konsultasi</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= BASEURL ?>/klinik">PetMate Animal Care</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Pendaftaran</li>
            </ol>
        </nav>
        <div class="container formPendaftaran-desc">
            <div class="row formPendaftaran2">
                <div class="col clinic-box2">
                    <p class="bold">Ringkasan Pemesanan</p>
                    <img src="../../public/images/layanan.png" alt="Ringkasan Pemesanan">
                    <p class="bold top">Pembayaran Muka <?= $_SESSION['jumlahHewan']?> hewan</p>
                    <p class="bold identity">Rp. <?= number_format($_SESSION['jumlahHewan']*25000) ?></p>
                </div>
                <div class="col clinic-box2">
                    <p class="buktiBayar">Silahkan lakukan pembayaran ke nomor rekening dibawah ini paling lambat 2 jam sebelum jadwal konsultasi yang anda pilih</p>
                    <p class="buktiBayar">Jika anda keluar tanpa melakukan pembayaran, pesanan anda akan dibatalkan</p>
                    <div class="container">
                        <div class="row bca-container">
                            <div class="col logo-bca">
                                <img src="../../public/images/LogoBCA.png" alt="Logo BCA">
                            </div>
                            <div class="col">
                                <p>BCA : 123 456 7890 (PT PetMate Sejahtera)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="<?= BASEURL ?>/konfirmasi" method="post" class="col clinic-box2" enctype="multipart/form-data">
                    <div class="mb-3 unggahBayar">
                        <label for="formFile" class="form-label">Bukti Pembayaran</label>
                        <!-- alert -->
                        <?php if (isset($_SESSION['Invoicestate'])) { ?>
                            <div class="alert alert-danger" role="alert" id="invoiceAlert">
                                <?php echo $_SESSION['Invoicestate'];
                                ?>
                            </div>
                        <?php }; ?>

                        <input class="form-control" type="file" id="formFile" name="invoice" required>

                    </div>

                    <button type="submit" class="btn btn-outline-secondary btn-Bayar" name="konfirm">Konfirmasi Pembayaran</button>
                </form>
            </div>
        </div>
</section>

<footer>