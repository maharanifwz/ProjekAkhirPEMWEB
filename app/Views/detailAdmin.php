<section id="riwayatKonsultasi">
    <div class="container-fluid">
        <div class="container">
            <div class="row riwayat-desc">
                <div class="col riwayat-box">
                    <h3 class="identity">Riwayat Konsultasi</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Semua
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sedang Diproses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Selesai
                        </label>
                    </div>
                    <form>
                        <button type="button" class="btn btn-primary btn-Riwayat">FILTER</button>
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
                                <th scope="col">Harga</th>
                                <th scope="col">Bukti Transaksi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['user'] as $riwayat ){?>
                                <tr>
                                    <td> <?= $riwayat['1'] ?></td>
                                    <td> <?= $riwayat['jumlahHewan'] ?></td>
                                    <td> <?= $riwayat['tanggal']?></td>
                                    <td> Rp.<?= number_format($riwayat['jumlahHewan']*25000)?></td>
                                    <td>
                                        <input type="hidden" id="img" name="index">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                            Lihat Bukti
                                        </button>
                                    </td>
                                    <td>
                                        <li><i class="fa-solid fa-circle fa-2xs"></i> Belum Terverifikasi</li>
                                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" value='<?= $riwayat['2'] ?>'>
                                            Ubah Status
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>

                            <!-- <td>Budi Hartono</td>
                            <td>Layanan Ke Rumah</td>
                            <td>12 Maret 2022 (10.00 WIB)</td>
                            <td>Rp150.000</td>
                            <td>
                                <input type="hidden" id="img" name="index">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    Lihat Bukti
                                </button>
                            </td>
                            <td>
                                <li><i class="fa-solid fa-circle fa-2xs"></i> Belum Terverifikasi</li>

                                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" value='<?= $riwayat['2'] ?>'>
                                    Ubah Status
                                </button>
                            </td> -->
                            <!-- Modal -->
                            <form action="<?=BASEURL?>/updateStatus" method="GET">
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Status Transaksi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" >
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Terverifikasi
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" status id="flexRadioDefault2" >
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Tidak Valid
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" status id="flexRadioDefault3" >
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Selesai
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- INVOICE -->
                            <form>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Lihat Bukti Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="image">
                                                <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($data['user'][0]['invoice']) ?>" , height="auto" , width="auto" />

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </tbody>
                    </table>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Alamat" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingContact" placeholder="Kontak">
                        <label for="floatingContact">Kontak</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan">
                        <label for="floatingHewan">Jenis Hewan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingKelamin" placeholder="Jenis Kelamin">
                        <label for="floatingKelamin">Jenis Kelamin</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>