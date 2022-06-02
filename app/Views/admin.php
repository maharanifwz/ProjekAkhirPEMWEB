<section id="riwayatKonsultasi">
    <div class="container-fluid">
        <div class="container">
            <div class="row riwayat-desc">
                <div class="col riwayat-box">
                    <h3 class="identity">Riwayat Konsultasi</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Semua
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Sedang Diproses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Selesai
                        </label>
                    </div>
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
                                <th scope="col">Bukti Transaksi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Budi Hartono</td>
                                <td>1</td>
                                <td>12 Maret 2022 (10.00 WIB)</td>
                                <td>Rp 150.000</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                        Lihat Bukti
                                    </button>
                                </td>
                                <td>
                                    <li><i class="fa-solid fa-circle fa-2xs"></i> Belum Terverifikasi</li>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ubah Status
                                    </button>

                                    <!-- Modal -->
                                    <form>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Status Transaksi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Terverifikasi
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Tidak Valid
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
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
                                    <form>
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Lihat Bukti Pembayaran</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="../../public/images/layanan.png">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Ani Pertiwi</td>
                                <td>2</td>
                                <td>13 Maret 2022 (14.00 WIB)</td>
                                <td>Rp 100.000</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                        Lihat Bukti
                                    </button>
                                </td>
                                <td>
                                    <li><i class="fa-solid fa-circle fa-2xs"></i> Belum Terverifikasi</li>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ubah Status
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>