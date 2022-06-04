    <!-- detail clinic -->
    <section id="detailClinic">
        <div class="container-fluid">
            <!-- breadcrumb -->
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASEURL ?>/">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page"> <a href="<?= BASEURL ?>/konsultasi">Konsultasi</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Pet Mate Animal Care</li>
                </ol>
            </nav>
            <div class="detailClinic-desc">
                <h2>PetMate Animal Care</h2>
                <p>Jl. Kamboja No.2C, RW.1, Jatipulo, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="<?= BASEURL ?>/images/detailclinic.png" alt="Detail Clinic">
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
                            <form action="<?= BASEURL ?>/check_availability" method="GET">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="Pilih Tanggal Konsultasi" name="date" min=<?= date('Y-m-d') ?> required>
                                    <label for="floatingInput">Tanggal</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah Hewan" name="jumlahHewan" min = 1 max = 3 required>
                                    <label for="floatingPassword">Jumlah Hewan</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-detail">Cek Ketersediaan Jam Konsultasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- footer -->
    <footer class="detailClinic-footer">