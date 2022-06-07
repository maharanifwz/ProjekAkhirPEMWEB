<section id="detailAdmin">
    <div class="container-fluid">
        <!-- breadcrumb -->
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= BASEURL ?>/ShowAllHistory">Semua Riwayat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Riwayat</li>
            </ol>
        </nav>
        <div class="riwayat-box">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama User</th>
                        <th scope="col">Banyak Hewan</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th></th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                      <?php foreach ($data['riwayat'] as $riwayat) { 
                          $hours = explode(" ", $riwayat['jam']);
                                // seharusnya date dengan format H:i bakal nampilin 24 jam bukan dengan format 12 jam
                                $hour_to_show = str_replace("0:00", "0", $hours[0]) . " - " .  date('H:i', strtotime("+30 minutes", strtotime($hours[count($hours) - 1]))); ?>
                        <tr>
                            <td> <?=$riwayat['nama']?> </td>
                            <td> <?=$riwayat['jumlahHewan']?> </td>
                            <td> <li><?= $riwayat['tanggal'] ?> </li>  
                                 <li> <?= $hour_to_show . " WIB" ?> </li>
                            </td>
                            <td> Rp. <?= number_format($riwayat['jumlahHewan']*25000)?> </td>
                            <td> <?=$riwayat['status']?> </td>
                            <td>
                                <?php  $status = $riwayat['status'];
                                if($status=='Belum Terverifikasi' || $status=='Terverifikasi'){?>
                                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" value='<?= $riwayat['2'] ?>'>
                                    Batalkan
                                </button>
                               <?php }?>  
                            </td>
                        </tr>
                        <?php } ?>
                                     <!-- Modal -->
                                <form action="<?=BASEURL?>/cancelBooking" method="POST">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   <p>Apakah anda yakin ingin membatalkan pesanan?</p> 
                                                   <p>Pihak klinik tidak akan melakukan pengembalian uang muka apabila pesanan dibatalkan</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <input type="hidden" name="idHist" value="<?=$data['riwayat'][0]['id']?>">
                                                    <button type="submit" class="btn btn-primary">Batalkan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                                        <img id="invoice" src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($data['user'][0]['invoice']) ?>" , height="auto" , width="auto" />

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
                        <?php $i=1;
                    foreach ($data['hewan'] as $hewan) {?>
                        <h5>Hewan <?=$i?></h3>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingContact"  readonly="readonly" value="<?=$hewan['nama']?>">
                            <label for="floatingContact">Nama Hewan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan" readonly="readonly" value="<?=$hewan['jenis']?>">
                            <label for="floatingHewan">Jenis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan" readonly="readonly" value="<?=$hewan['ras']?>">
                            <label for="floatingHewan">Ras</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan" readonly="readonly" value="<?=$hewan['umur']?> tahun">
                            <label for="floatingHewan">Umur</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan" readonly="readonly" value="<?=$hewan['beratBadan']?> kg" >
                            <label for="floatingHewan">Berat Badan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingHewan" placeholder="Jenis Hewan" readonly="readonly" value="<?=$hewan['keluhan']?>">
                            <label for="floatingHewan">Keluhan</label>
                        </div>
                    <?php $i++;} ?>
                    
                </div>
        </div>
</section>
<footer>