<section id="riwayatKonsultasi">
    <div class="container-fluid">
        <div class="container">
            <div class="row riwayat-desc">
                <div class="col riwayat-box">
                    <form action="<?= BASEURL ?>/filterHistoriAdmin" method="get">
                        <h3 class="identity">Riwayat Konsultasi</h3>
                        <div class="form-check">
                            <?php if ($data['filter'] == 'all') {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='all' checked>";
                            } else {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='all'>";
                            } ?>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Semua
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if ($data['filter'] == 'unverified') {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='unverified' checked>";
                            } else {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='unverified'>";
                            } ?>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum Terverifikasi
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if ($data['filter'] == 'onProcess') {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='onProcess' checked>";
                            } else {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='onProcess'>";
                            } ?>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Sedang Diproses
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if ($data['filter'] == 'Dibatalkan') {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='Dibatalkan' checked>";
                            } else {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='Dibatalkan'>";
                            } ?>
                            <label class="form-check-label" for="flexRadioDefault3">
                                Dibatalkan
                            </label>
                        </div>
                        <div class="form-check">
                            <?php if ($data['filter'] == 'Finished') {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='Finished' checked>";
                            } else {
                                echo "<input class='form-check-input' type='radio' name='filter' id='flexRadioDefault1' value='Finished'>";
                            } ?>
                            <label class="form-check-label" for="flexRadioDefault3">
                                Selesai
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-Riwayat">FILTER</button>
                    </form>

                </div>
                <?php if (isset($data['riwayat'])) {
                    if (count($data['riwayat']) > 0) { ?>
                        <div class="col riwayat-box">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama User</th>
                                        <th scope="col">Banyak Hewan</th>
                                        <th scope="col">Jadwal</th>
                                        <th scope="col">Uang Muka</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($data['riwayat'] as $riwayat) { ?>
                                        <tr>
                                            <td> <?= $riwayat['1'] ?></td>
                                            <td> <?= $riwayat['jumlahHewan'] ?></td>
                                            <td> <?= $riwayat['tanggal'] ?></td>
                                            <td> <?= number_format($riwayat['jumlahHewan'] * 25000) ?></td>
                                            <td>
                                                <?php
                                                $status = $riwayat['status'];
                                                if ($status == 'Belum Terverifikasi' || $status == 'Pembayaran Tidak Valid' || $status == 'Dibatalkan') {
                                                    echo "<i class='fa-solid fa-circle fa-2xs'></i> $status";
                                                } else {
                                                    echo "<i class='fa-solid fa-circle green fa-2xs'></i> $status";
                                                } ?>
                                            </td>
                                            <td>
                                                <form action="<?= BASEURL ?>/detailAdmin" method="POST">
                                                    <button type="submit" class="btn btn-success" name="idHist" value="<?= $riwayat['id'] ?>">
                                                        Ubah Status
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                </tbody>
                            <?php }
                                } else {
                            ?>
                            <div class="col riwayat-box center">
                                <img src="../../public/images/riwayat.svg" alt="Riwayat Konsultasi" width="150" height="150">
                                <p class="riwayat-heading">Tidak ada data histori yang ditemukan</p>
                            </div>
                    <?php
                                }
                            } ?>
                            </table>
                        </div>
            </div>
        </div>
    </div>
</section>
<footer>