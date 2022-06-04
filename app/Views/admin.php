<section id="riwayatKonsultasi">
    <div class="container-fluid">
        <div class="container">
            <div class="row riwayat-desc">
                <div class="col riwayat-box">
                    <h3 class="identity">Riwayat Konsultasi</h3>
                    <form action="<?= BASEURL ?>/filterHistoriAdmin" method="get">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter" id="flexRadioDefault1" checked value="all">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Semua
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter" id="flexRadioDefault2" value="onProcess">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Sedang Diproses
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter" id="flexRadioDefault3" value="Finished">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Selesai
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-Riwayat">FILTER</button>
                    </form>
                    
                </div>
                <div class="col riwayat-box">
                    <h3 class="center">Segera perbaharui status pendaftaran pelanggan Anda</h3>
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
                            <?php foreach($data['riwayat'] as $riwayat ){?>
                                <tr>
                                    <td> <?= $riwayat['1'] ?></td>
                                    <td> <?= $riwayat['jumlahHewan'] ?></td>
                                    <td> <?= $riwayat['tanggal']?></td>
                                    <td> <?= number_format($riwayat['jumlahHewan']*25000)?></td>
                                    <td>
                                       <?php
                                        $status = $riwayat['status'];
                                        if ($status == 'Belum Terverifikasi' || $status == 'Pembayaran Tidak Valid') {
                                            echo "<i class='fa-solid fa-circle fa-2xs'></i> $status";
                                        } else {
                                            echo "<i class='fa-solid fa-circle green fa-2xs'></i> $status";
                                        } ?>
                                    </td>
                                    <td>
                                        <form action="<?= BASEURL ?>/detailAdmin" method="POST">
                                            <button type="submit" class="btn btn-success" name="idHist"value="<?= $riwayat['id']?>">
                                                Ubah Status
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>

