    <!-- landing page -->
    <section id="consultation">
        <div class="container-fluid">
            <!-- breadcrumb -->
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASEURL ?>/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                </ol>
            </nav>
            <h1>Konsultasi</h1>
            <p>Temukan klinik hewan di sekitarmu dan pilih jenis layanan (ke klinik atau ke rumah) dengan jadwal
                konsultasi
                yang sesuai dengan keinginanmu. Sekarang, pesan konsultasi untuk hewan peliharaanmu jadi lebih mudah
                dengan
                PetMate. Ingat, segera pesan layanan konsultasi untuk hewan peliharaan kesayanganmu ya!
            </p>
            <a href="<?= BASEURL ?>\klinik">
                <button type="button" class="btn btn-primary btn-consul" >Pesan</button>
            </a>
            
        </div>
    </section>

    <!-- faq -->
    <section id="faq">
        <div class="container-fluid">
            <h2 class="faq-heading">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana tata cara memesan layanan konsultasi ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Kamu bisa memilih klinik sesuai dengan tempat tinggalmu, mengisi form pendaftaran dan pilih
                            jenis layanannya. Kemudian memilih jadwal konsultasi dan lakukan pembayaran. Langkah
                            terakhir menggunggah bukti pembayarannya agar pesananmu bisa terdaftar!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana proses layanan konsultasi ke klinik ?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setelah pembayaran diverifikasi, kamu akan mendapat estimasi waktu untuk layanan yang sudah
                            kamu pesan melalui pesan Whatsapp. Pastikan untuk datang tepat waktu ya!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bagaimana proses layanan konsultasi ke rumah ?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Setelah pembayaran diverifikasi, kamu akan mendapatkan waktu untuk pihak klinik hewan tiba
                            di rumahmu. Pastikan tetap di rumah saja ya!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Berapa lama proses verifikasi pendaftaran ?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Verifikasi pendaftaran akan selesai dalam waktu 10 - 30 menit apabila Anda mengunggah bukti
                            pembayaran pada hari dan jam kerja. Apabila menggungah setelah jam kerja, pendaftaran akan
                            diverifikasi keesokan harinya
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Apa yang harus saya lakukan apabila pendaftaran belum diverifikasi lebih dari 30 menit ?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anda dapat menghubungi customer servis kami melalui Whatsapp di +62 823 1453 0092
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Apa yang harus saya lakukan apabila belum mendapatkan informasi estimasi waktu melalui
                            Whatsapp
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Apabila status pembayaran kamu sudah terverifikasi namun belum mendapatkan pesan di
                            Whatsapp, harap hubungi customer servis kami di +62 823 1453 0092
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>