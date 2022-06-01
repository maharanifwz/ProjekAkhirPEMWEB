<section id="riwayatKonsultasi">
    <div class="container-fluid">
        <!-- breadcrumb -->
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Riwayat Konsultasi</li>
            </ol>
        </nav>
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama Hewan</th>
                                <th scope="col">Umur Hewan</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Uang Muka</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['dataHistori'] as $perRiwayat) {
                                $hours = explode(" ", $perRiwayat['jam']);
                                // seharusnya date dengan format H:i bakal nampilin 24 jam bukan dengan format 12 jam
                                $hour_to_show = str_replace("0:00", "0", $hours[0]) . " - " .  date('H:i', strtotime("+30 minutes", strtotime($hours[count($hours) - 1])));
                            ?>
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
                                    <td>Rp 150.000</td>
                                    <?php
                                    $status = $perRiwayat['status'];
                                    if ($status == 'Belum Terverifikasi') {
                                        echo "<td><i class='fa-solid fa-circle fa-2xs'></i> $status</td>";
                                    } else {
                                        echo "<td><i class='fa-solid fa-circle green fa-2xs'></i> $status</td>";
                                    } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>