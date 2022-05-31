    <!-- detail clinic -->
    <section id="detailClinic">
        <div class="container-fluid">
            <!-- breadcrumb -->
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page">Konsultasi</li>
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
                            <form action="<?= BASEURL ?>/fill_data" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" value="<?= $_GET['date'] ?>" name="date" readonly="readonly">
                                    <label for="floatingInput">Tanggal</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" value="<?= $_GET['jumlahHewan'] ?>" name="jumlahHewan" readonly="readonly">
                                    <label for="floatingPassword">Jumlah Hewan</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jam" required>
                                        <!-- <option value="">None</option> -->
                                        <option value="">Pilih Jam Yang Tersedia</option>
                                        <?php
                                        foreach ($data['available_hour'] as $hour) {
                                            $hour_to_show = str_replace("0:00", "0", $hour[0]) . " - " . str_replace("0:00", "0", date('H:i:s', strtotime("+30 minutes", strtotime($hour[count($hour) - 1]))));
                                            $hour_val = "";
                                            foreach ($hour as $hour_) {
                                                $hour_val .= $hour_ . " ";
                                            };

                                            echo "<option value='$hour_val'>$hour_to_show</option>";
                                        }
                                        ?>
                                    </select>
                                    <label for="floatingSelect">Pilih jam disini</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-detail">Buat Janji Konsultasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- footer -->
    <footer class="detailClinic-footer">