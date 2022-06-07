<section id="riwayatKonsultasi">
    <div class="container-fluid">
        <!-- breadcrumb -->
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= BASEURL ?>/">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Riwayat Konsultasi</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row riwayat-desc">
                <div class="col riwayat-box">
                    <form action="<?= BASEURL ?>/FilterHistory" method="GET">
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

                <?php
                if (count($data['dataHistori']) > 0) { ?>
                    <div class="col riwayat-box">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Hewan</th>
                                    <th scope="col">Umur Hewan</th>
                                    <th scope="col">Jadwal</th>
                                    <th scope="col">Uang Muka</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($data['dataHistori'] as $perRiwayat) {
                                $hours = explode(" ", $perRiwayat['jam']);
                                // seharusnya date dengan format H:i bakal nampilin 24 jam bukan dengan format 12 jam
                                $hour_to_show = str_replace("0:00", "0", $hours[0]) . " - " .  date('H:i', strtotime("+30 minutes", strtotime($hours[count($hours) - 1]))); ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php
                                            $listIdHewan = explode(" ", $perRiwayat['listHewan']);
                                            $listUmurHewan = [];
                                            foreach ($data['dataHewan'] as $i) {
                                                if (in_array($i['id'], $listIdHewan)) {
                                                    $name = $i['nama'];
                                                    echo "<li>$name</li>";
                                                    array_push($listUmurHewan, $i['umur']);
                                                }
                                            } ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($listUmurHewan as $i) {
                                                echo "<li>$i</li>";
                                            }
                                            ?>
                                        </td>
                                        <td><?= $perRiwayat['tanggal'] . " " . $hour_to_show . " WIB" ?></td>
                                        <td>Rp. <?= number_format($perRiwayat['jumlahHewan']*25000)?></td>
                                        <?php
                                        $status = $perRiwayat['status'];
                                        if ($status == 'Belum Terverifikasi' || $status == 'Pembayaran Tidak Valid') {
                                            echo "<td><i class='fa-solid fa-circle fa-2xs'></i> $status</td>";
                                        } else {
                                            echo "<td><i class='fa-solid fa-circle green fa-2xs'></i> $status</td>";
                                        }  ?>
                                        <td>
                                            <form action="<?= BASEURL ?>/ShowDetailHistory" method="GET">
                                            <input type="hidden" name="historyId" value="<?=$perRiwayat['id']?>">
                                            <?php if($status == 'Belum Terverifikasi' || $status == 'Terverifikasi'){?>
                                                    <button type="submit" class="btn btn-success" name="idHist" value="<?= $riwayat['id'] ?>">
                                                        Batalkan Pesanan
                                                    </button>
                                           <?php }else{?>
                                                <button type="submit" class="btn btn-success" name="idHist" value="<?= $riwayat['id'] ?>">
                                                    Detail Pesanan
                                                </button>
                                           <?php }
                                            ?>
                                            
                                        </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                    <?php

                } else {
                    ?>
                        <div class="col riwayat-box center">
                            <img src="../../public/images/riwayat.svg" alt="Riwayat Konsultasi" width="150" height="150">
                            <p class="riwayat-heading">Tidak ada data histori yang ditemukan</p>
                        </div>
                    <?php } ?>

                    </div>
            </div>
        </div>
    </div>
</section>
<footer>