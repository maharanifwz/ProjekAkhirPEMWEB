<section id="detailAdmin">
    <div class="container-fluid">
        <!-- breadcrumb -->
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= BASEURL ?>/">Semua Riwayat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Riwayat</li>
            </ol>
        </nav>
        <div class="riwayat-box">
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
                    <td>Budi Hartono</td>
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
                    </td>
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
                                        <!-- <img src="../../public/images/layanan.png"> -->
                                        <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($data['riwayat'][0]['invoice']) ?>" , height="auto" , width="auto" />

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
                <input type="text" class="form-control" id="floatingNama" placeholder="Nama Hewan">
                <label for="floatingNama">Nama Hewan</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan">
                <label for="floatingHewan">Jenis Hewan</label>
            </div>
        </div>
</section>
<footer>

    <script>
        function myFunction(x) {
            var b = x.rowIndex;
            // var idx = document.getElementById("mybtn").value
            //    document.cookie ="index=John Doe";
            // document.getElementById("image").innerHTML = b + "aaa";
        }
    </script>