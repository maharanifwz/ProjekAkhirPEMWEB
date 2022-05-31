    <!-- form section -->
    <section id="formPendaftaran">
        <div class="container-fluid">
            <!-- breadcrumb -->
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page">Konsultasi</li>
                    <li class="breadcrumb-item" aria-current="page">Andista Animal Care</li>
                    <li class="breadcrumb-item active" aria-current="page">Form Pendaftaran</li>
                </ol>
            </nav>
            <div class="container formPendaftaran-desc">
                <form action="<?= BASEURL ?>/upload_invoice" method="POST">
                    <div class="row">
                        <div class="col clinic-container">
                            <div class="clinic-box">
                                <img src="../../public/images/form.png" src="Andista Animal Care">
                                <h4>Andista Animal Care</h4>
                                <p>Jl. Kamboja No.2C, Jakarta Barat</p>
                                <p class="clinic-desc">09.00 - 24.00 WIB</p>
                                <button type="button" class="btn btn-outline-secondary btn-Form">Lihat Kembali Detail Klinik</button>
                            </div>
                        </div>
                        <div class="col">
                            <?php for ($i = 0; $i < (int)$data['jumlahHewan']; $i++) {
                            ?>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Contoh: Chloe">
                                            <label for="floatingInput">Nama Hewan</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected>Pilih Jenis Hewan</option>
                                                <option value="1">Kucing</option>
                                                <option value="2">Anjing</option>
                                                <option value="3">Burung</option>
                                            </select>
                                            <label for="floatingSelect">Jenis Hewan</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingRas" placeholder="Contoh: Pomeranian">
                                            <label for="floatingRas">Ras</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option selected>Pilih Jenis Kelamin</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                            <label for="floatingSelect">Jenis Kelamin</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingBerat" placeholder="Contoh: 1 kg">
                                            <label for="floatingBerat">Berat Badan</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingUmur" placeholder="Contoh: 1 tahun 2 bulan">
                                            <label for="floatingUmur">Umur</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control success" placeholder="Tuliskan Kelihan" id="floatingTextarea2" style="height: 100px" name="keluhan"></textarea>
                                            <label for="floatingTextarea2">Keluhan</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            <?php
                            } ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-Form2">Lanjutkan ke Pembayaran</button>
                </form>
            </div>

        </div>
    </section>
    </body>

    </html>