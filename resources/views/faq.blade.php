<!-- Modal Lihat Detail Daftar Bimbingan -->
<div class="modal fade" id="lihatInformasiModal" tabindex="-1" role="dialog" aria-labelledby="lihatInformasiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatInformasiModalLabel">Detail Informasi Terkini</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #FCFDFD">
                <div class="form-group row with-underline">
                    <label for="detailOlehInformasi" class="col-3 col-form-label text-dark">
                        Oleh:</label>
                    <div class="col-sm-8">
                        <p id="detailOlehInformasi" class="form-control-plaintext">Panitia D4-TI</p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailTanggalInformasi" class="col-3 col-form-label text-dark">
                        Tanggal:</label>
                    <div class="col-sm-8">
                        <p id="detailTanggalInformasi" class="form-control-plaintext">2024-02-20</p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailInformasi" class="col-3 col-form-label text-dark">
                        Informasi:</label>
                    <div class="col-sm-8">
                        <p id="detailInformasi" class="form-control-plaintext">Sosialiasai Tugas Akhir 2023</p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDetailInformasi" class="col-3 col-form-label text-dark">
                        Detail Informasi:</label>
                    <div class="col-sm-8">
                        <p id="detailDetailInformasi" class="form-control-plaintext">Materi sosialisasi dan hasil record
                            dapat diakses melalui tautan ini:<a href="">s.id/sosialisasi-skripsi-2023</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header" style="border-radius: 0px 0px 10px 10px;">
            <h1 class="text-head-sim text-dark">Frequently Asked Questions</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12" id="alertContainer">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-3 py-3 mr-2">
                        <div class="bg-white rounded-lg"
                            style=" padding: 16px 0 20px 0; margin-top: -16px; margin-left: -16px;">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="user-guide-tab" data-toggle="tab" href="#user-guide"
                                        role="tab" aria-controls="user-guide" aria-selected="true">Panduan Pengguna</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="thesis-procedure-tab" data-toggle="tab" href="#thesis-procedure"
                                        role="tab" aria-controls="thesis-procedure" aria-selected="false">Prosedur
                                        Skripsi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="technical-tab" data-toggle="tab" href="#technical"
                                        role="tab" aria-controls="technical" aria-selected="false">Teknis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="guidance-tab" data-toggle="tab" href="#guidance" role="tab"
                                        aria-controls="guidance" aria-selected="false">Bimbingan dan Pembimbing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab"
                                        aria-controls="schedule" aria-selected="false">Jadwal dan Tenggat Waktu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rules-tab" data-toggle="tab" href="#rules" role="tab"
                                        aria-controls="rules" aria-selected="false">Peraturan dan Kebijakan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col rounded-lg px-1 py-2">
                        <div class="tab-content no-padding" id="myTab2Content">
                            <div class="tab-pane fade show active" id="user-guide" role="tabpanel"
                                aria-labelledby="user-guide-tab">
                                @role('user')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana prosedur pengajuan topik skripsi? </p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-body"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-body" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Prosedur pengajuan topik skripsi dimulai dengan mengakses
                                                halaman proposal di website SIM-TA. Mahasiswa perlu mengisi formulir pengajuan
                                                dengan informasi lengkap tentang topik yang diusulkan, termasuk judul,
                                                deskripsi, bidang, dan jenis penelitian. Setelah formulir terisi, mahasiswa
                                                menyimpan topik proposal dan menunggu persetujuan calon dosen pembimbing.
                                                Proposal ini kemudian akan ditinjau oleh Calon Dosen Pembimbing dan Panitia
                                                Skripsi. Jika disetujui, mahasiswa akan menerima konfirmasi melalui notifikasi
                                                pada website dan email sehingga dapat melanjutkan ke tahap berikutnya.</p>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa yang harus dilakukan setelah topik skripsi
                                                    disetujui? </p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-body2"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-body2" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Setelah topik skripsi disetujui, langkah-langkah berikut harus
                                                dilakukan:</p>

                                            <ol class="text-dark">
                                                <li>
                                                    <strong>Mulai Penulisan Proposal:</strong>
                                                    Mahasiswa harus menulis proposal skripsi yang lebih rinci, mencakup bab-bab
                                                    pendahuluan, tinjauan pustaka, metode penelitian, dan rencana kerja.
                                                </li>
                                                <li>
                                                    <strong>Bimbingan Rutin:</strong>
                                                    Mengatur jadwal bimbingan rutin dengan dosen pembimbing untuk mendapatkan
                                                    arahan dan koreksi.
                                                </li>
                                                <li>
                                                    <strong>Persiapan Seminar Proposal:</strong>
                                                    Mempersiapkan presentasi untuk seminar proposal, yang mencakup pembuatan
                                                    slide presentasi dan latihan presentasi.
                                                </li>
                                                <li>
                                                    <strong>Pelaksanaan Seminar Proposal:</strong>
                                                    Melaksanakan seminar proposal di depan dosen pembimbing dan penguji.
                                                    Mendapatkan masukan dan revisi dari mereka.
                                                </li>
                                                <li>
                                                    <strong>Revisi Proposal:</strong>
                                                    Melakukan revisi sesuai dengan masukan yang diterima selama seminar.
                                                </li>
                                            </ol>

                                        </div>
                                    </div>
                                @endrole
                                @role('super-admin')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana prosedur pengajuan topik skripsi? </p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-body3"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-body3" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Prosedur pengajuan topik skripsi dimulai dengan mengakses
                                                halaman proposal di website SIM-TA. Mahasiswa perlu mengisi formulir pengajuan
                                                dengan informasi lengkap tentang topik yang diusulkan, termasuk judul,
                                                deskripsi, bidang, dan jenis penelitian. Setelah formulir terisi, mahasiswa
                                                menyimpan topik proposal dan menunggu persetujuan calon dosen pembimbing.
                                                Proposal ini kemudian akan ditinjau oleh Calon Dosen Pembimbing dan Panitia
                                                Skripsi. Jika disetujui, mahasiswa akan menerima konfirmasi melalui notifikasi
                                                pada website dan email sehingga dapat melanjutkan ke tahap berikutnya.</p>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa yang harus dilakukan setelah topik skripsi
                                                    disetujui?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-body4"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-body4" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">
                                                Setelah topik skripsi disetujui, langkah-langkah berikut harus dilakukan:
                                                <br><br>
                                                1. Mulai Penulisan Proposal: <br>
                                                Mahasiswa harus menulis proposal skripsi yang lebih rinci, mencakup bab-bab pendahuluan, tinjauan pustaka, metode penelitian, dan rencana kerja.
                                                <br><br>
                                                2. Bimbingan Rutin: <br>
                                                Mengatur jadwal bimbingan rutin dengan dosen pembimbing untuk mendapatkan arahan dan koreksi.
                                                <br><br>
                                                3. Persiapan Seminar Proposal: <br>
                                                Mempersiapkan presentasi untuk seminar proposal, yang mencakup pembuatan slide presentasi dan latihan presentasi.
                                                <br><br>
                                                4. Pelaksanaan Seminar Proposal: <br>
                                                Melaksanakan seminar proposal di depan dosen pembimbing dan penguji. Mendapatkan masukan dan revisi dari mereka.
                                                <br><br>
                                                5. Revisi Proposal: <br>
                                                Melakukan revisi sesuai dengan masukan yang diterima selama seminar.
                                            </p>

                                        </div>
                                    </div>
                                @endrole
                            </div>
                            <div class="tab-pane fade" id="thesis-procedure" role="tabpanel"
                                aria-labelledby="thesis-procedure-tab">
                                @role('user')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara mendaftar dan masuk ke sistem tugas
                                                    akhir?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytp1"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytp1" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Untuk mendaftar, klik tombol 'Daftar' di halaman utama, isi
                                                formulir pendaftaran dengan data yang benar, dan verifikasi email Anda. Untuk
                                                masuk, gunakan email dan password yang telah didaftarkan.</p>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara mengakses fitur bimbingan?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytp2"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytp2" style="display: none;">
                                        <div class="px-3 py-3">
                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masuk dengan email dan kata sandi Anda.</li>
                                                <li>Navigasi ke Menu Bimbingan: Dari dashboard, pilih menu 'Bimbingan'.</li>
                                                <li>Lihat Jadwal Bimbingan: Di halaman bimbingan, Anda dapat melihat jadwal
                                                    bimbingan yang telah diatur oleh dosen pembimbing.</li>
                                                <li>Tambah Catatan Bimbingan: Untuk menambah catatan bimbingan, klik tombol
                                                    'Tambah Catatan Bimbingan', isi formulir yang disediakan dengan detail
                                                    bimbingan, dan klik 'Simpan'.</li>
                                                <li>Riwayat Bimbingan: Anda juga dapat melihat riwayat bimbingan sebelumnya
                                                    untuk referensi.</li>
                                            </ol>
                                        </div>
                                    </div>
                                @endrole
                                @role('super-admin')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara mendaftar dan masuk ke sistem tugas
                                                    akhir?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytp4"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytp4" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Untuk mendaftar, klik tombol 'Daftar' di halaman utama, isi formulir  pendaftaran dengan data yang benar, dan verifikasi email Anda. Untuk  masuk, gunakan email dan password yang telah didaftarkan.</p>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara mengakses fitur bimbingan?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytp5"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytp5" style="display: none;">
                                        <div class="px-3 py-3">
                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masuk dengan email dan kata sandi Anda.</li>
                                                <li>Navigasi ke Menu Bimbingan: Dari dashboard, pilih menu 'Bimbingan'.</li>
                                                <li>Lihat Jadwal Bimbingan: Di halaman bimbingan, Anda dapat melihat jadwal
                                                    bimbingan yang telah diatur oleh dosen pembimbing.</li>
                                                <li>Tambah Catatan Bimbingan: Untuk menambah catatan bimbingan, klik tombol
                                                    'Tambah Catatan Bimbingan', isi formulir yang disediakan dengan detail
                                                    bimbingan, dan klik 'Simpan'.</li>
                                                <li>Riwayat Bimbingan: Anda juga dapat melihat riwayat bimbingan sebelumnya
                                                    untuk referensi.</li>
                                            </ol>
                                        </div>
                                    </div>
                                @endrole
                            </div>
                            <div class="tab-pane fade" id="technical" role="tabpanel" aria-labelledby="technical-tab">
                                @role('user')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa yang harus dilakukan jika lupa password?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytc1"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytc1" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Jika Anda lupa password, ikuti langkah-langkah berikut:</p>

                                            <ol class="text-dark">
                                                <li>Klik 'Lupa Password': Di halaman login, klik tautan 'Lupa Password'.</li>
                                                <li>Masukkan Email: Masukkan alamat email yang Anda gunakan untuk mendaftar.
                                                </li>
                                                <li>Cek Email: Sistem akan mengirimkan email berisi tautan untuk mereset
                                                    password.</li>
                                                <li>Reset Password: Klik tautan dalam email tersebut dan masukkan password baru.
                                                    Pastikan untuk mengingat password baru ini untuk login di masa mendatang.
                                                </li>
                                            </ol>

                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara mengatasi masalah saat mengunggah file?
                                                </p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytc2"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytc2" style="display: none;">
                                        <div class="px-3 py-3">
                                            <ol class="text-dark">
                                                <li>Periksa Format dan Ukuran File: Pastikan file yang diunggah memiliki format
                                                    (misalnya, PDF, DOCX) dan ukuran sesuai dengan ketentuan sistem.</li>
                                                <li>Koneksi Internet: Pastikan koneksi internet Anda stabil. Unggahan mungkin
                                                    gagal jika koneksi terputus.</li>
                                                <li>Bersihkan Cache Browser: Cobalah untuk membersihkan cache browser Anda dan
                                                    muat ulang halaman.</li>
                                                <li>Coba Browser Lain: Jika masalah berlanjut, coba gunakan browser yang
                                                    berbeda.</li>
                                                <li>Hubungi Tim Teknis: Jika semua langkah di atas tidak berhasil, hubungi tim
                                                    teknis melalui menu 'Bantuan' di dashboard dengan detail masalah yang Anda
                                                    alami.</li>
                                            </ol>
                                        </div>
                                    </div>
                                @endrole
                                @role('super-admin')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa yang harus dilakukan jika lupa password?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytc4"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytc4" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Jika Anda lupa password, ikuti langkah-langkah berikut:</p>

                                            <ol class="text-dark">
                                                <li>Klik 'Lupa Password': Di halaman login, klik tautan 'Lupa Password'.</li>
                                                <li>Masukkan Email: Masukkan alamat email yang Anda gunakan untuk mendaftar.
                                                </li>
                                                <li>Cek Email: Sistem akan mengirimkan email berisi tautan untuk mereset
                                                    password.</li>
                                                <li>Reset Password: Klik tautan dalam email tersebut dan masukkan password baru.
                                                    Pastikan untuk mengingat password baru ini untuk login di masa mendatang.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara mengatasi masalah saat mengunggah file?
                                                </p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodytc5"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodytc5" style="display: none;">
                                        <div class="px-3 py-3">
                                            <ol class="text-dark">
                                                <li>Periksa Format dan Ukuran File: Pastikan file yang diunggah memiliki format
                                                    (misalnya, PDF, DOCX) dan ukuran sesuai dengan ketentuan sistem.</li>
                                                <li>Koneksi Internet: Pastikan koneksi internet Anda stabil. Unggahan mungkin
                                                    gagal jika koneksi terputus.</li>
                                                <li>Bersihkan Cache Browser: Cobalah untuk membersihkan cache browser Anda dan
                                                    muat ulang halaman.</li>
                                                <li>Coba Browser Lain: Jika masalah berlanjut, coba gunakan browser yang
                                                    berbeda.</li>
                                                <li>Hubungi Tim Teknis: Jika semua langkah di atas tidak berhasil, hubungi tim
                                                    teknis melalui menu 'Bantuan' di dashboard dengan detail masalah yang Anda
                                                    alami.</li>
                                            </ol>
                                        </div>
                                    </div>
                                @endrole
                            </div>
                            <div class="tab-pane fade" id="guidance" role="tabpanel" aria-labelledby="guidance-tab">
                                @role('user')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara memilih dosen pembimbing?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyg1"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyg1" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Dosen pembimbing biasanya ditentukan oleh program studi
                                                berdasarkan topik skripsi yang diajukan. Namun, berikut langkah-langkah umum
                                                untuk memilih dosen pembimbing:</p>

                                            <ol class="text-dark">
                                                <li>Konsultasi dengan Koordinator Skripsi: Diskusikan topik skripsi Anda dengan
                                                    koordinator skripsi untuk mendapatkan saran mengenai dosen pembimbing yang
                                                    sesuai.</li>
                                                <li>Pilih Dosen yang Relevan: Pilih dosen yang memiliki keahlian atau minat
                                                    penelitian yang relevan dengan topik skripsi Anda.</li>
                                                <li>Ajukan Permohonan: Ajukan permohonan pembimbingan kepada dosen tersebut
                                                    melalui sistem. Sertakan proposal topik dan alasan memilih dosen tersebut.
                                                </li>
                                                <li>Konfirmasi Dosen: Jika dosen setuju, mereka akan menyetujui permohonan Anda
                                                    melalui sistem, dan Anda akan menerima notifikasi.</li>
                                            </ol>

                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara dosen menerima atau menolak mahasiswa
                                                    bimbingan?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyg2"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyg2" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Untuk menerima atau menolak mahasiswa bimbingan:</p>

                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masukkan email dan kata sandi.</li>
                                                <li>Navigasi ke Menu Bimbingan Mahasiswa: Dari dashboard, pilih menu 'Skripsi',
                                                    pilih submenu ‘Proposal’ dan masuk pada bagian Bimbingan Mahasiswa.</li>
                                                <li>Tinjau Permintaan: Tinjau detail permintaan bimbingan dari mahasiswa.</li>
                                                <li>Pilih Aksi: Klik 'Terima' atau 'Tolak' berdasarkan kesesuaian topik dengan
                                                    keahlian dosen dan ketersediaan waktu.</li>
                                            </ol>

                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara menjadwalkan sesi bimbingan?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyg3"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyg3" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Untuk menjadwalkan bimbingan, anda bisa menghubungi dosen
                                                terkait terlebih dahulu untuk memulai bimbimbingan baik secara offline, online,
                                                maupun melalui whatsApp dengan dosen terkait.</p>
                                        </div>
                                    </div>
                                @endrole
                                @role('super-admin')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara memilih dosen pembimbing?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyg4"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyg4" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Dosen pembimbing biasanya ditentukan oleh program studi
                                                berdasarkan topik skripsi yang diajukan. Namun, berikut langkah-langkah umum
                                                untuk memilih dosen pembimbing:</p>

                                            <ol class="text-dark">
                                                <li>Konsultasi dengan Koordinator Skripsi: Diskusikan topik skripsi Anda dengan
                                                    koordinator skripsi untuk mendapatkan saran mengenai dosen pembimbing yang
                                                    sesuai.</li>
                                                <li>Pilih Dosen yang Relevan: Pilih dosen yang memiliki keahlian atau minat
                                                    penelitian yang relevan dengan topik skripsi Anda.</li>
                                                <li>Ajukan Permohonan: Ajukan permohonan pembimbingan kepada dosen tersebut
                                                    melalui sistem. Sertakan proposal topik dan alasan memilih dosen tersebut.
                                                </li>
                                                <li>Konfirmasi Dosen: Jika dosen setuju, mereka akan menyetujui permohonan Anda
                                                    melalui sistem, dan Anda akan menerima notifikasi.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara dosen menerima atau menolak mahasiswa
                                                    bimbingan?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyg5"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyg5" style="display: none;">
                                        <div class="px-3 py-3">
                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masukkan email dan kata sandi.</li>
                                                <li>Navigasi ke Menu Bimbingan Mahasiswa: Dari dashboard, pilih menu 'Skripsi',
                                                    pilih submenu ‘Proposal’ dan masuk pada bagian Bimbingan Mahasiswa.</li>
                                                <li>Tinjau Permintaan: Tinjau detail permintaan bimbingan dari mahasiswa.</li>
                                                <li>Pilih Aksi: Klik 'Terima' atau 'Tolak' berdasarkan kesesuaian topik dengan
                                                    keahlian dosen dan ketersediaan waktu.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana cara menjadwalkan sesi bimbingan?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyg6"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyg6" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Untuk menjadwalkan bimbingan, anda bisa menghubungi dosen
                                                terkait terlebih dahulu untuk memulai bimbimbingan baik secara offline, online,
                                                maupun melalui whatsApp dengan dosen terkait.</p>
                                        </div>
                                    </div>
                                @endrole
                            </div>
                            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                                @role('user')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Di mana saya bisa melihat jadwal seminar proposal?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodysc1"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodysc1" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Jadwal seminar proposal dapat dilihat di menu 'Seminar
                                                Proposal' pada halaman utama sistem. Langkah-langkah untuk melihat jadwal:</p>

                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masuk dengan email dan kata sandi Anda.</li>
                                                <li>Navigasi ke Menu Skripsi: Dari dashboard, pilih menu 'Skripsi’.</li>
                                                <li>Kemudian pilih pada bagian Seminar Proposal.</li>
                                                <li>Lihat Jadwal: Jadwal seminar proposal akan ditampilkan di halaman tersebut,
                                                    termasuk tanggal, waktu, dan lokasi seminar.</li>
                                            </ol>

                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa tenggat waktu untuk mengumpulkan skripsi?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodysc2"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodysc2" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Tenggat waktu pengumpulan skripsi biasanya diumumkan setelah
                                                pelaksanaan seminar proposal. Untuk melihat tenggat waktu:</p>

                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masuk dengan email dan kata sandi Anda.</li>
                                                <li>Navigasi ke Menu Skripsi: Dari dashboard, pilih menu 'Skripsi' dan masuk
                                                    pada bagian Seminar Proposal.</li>
                                                <li>Lihat Tenggat Waktu: Tenggat waktu pengumpulan skripsi akan ditampilkan
                                                    bersama dengan informasi penting lainnya seperti jadwal seminar dan ujian
                                                    akhir.</li>
                                            </ol>

                                        </div>
                                    </div>
                                @endrole
                                @role('super-admin')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Di mana saya bisa melihat jadwal seminar proposal?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodysc4"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodysc4" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Jadwal seminar proposal dapat dilihat di menu 'Seminar
                                                Proposal' pada halaman utama sistem. Langkah-langkah untuk melihat jadwal:</p>

                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masuk dengan email dan kata sandi Anda.</li>
                                                <li>Navigasi ke Menu Skripsi: Dari dashboard, pilih menu 'Skripsi’.</li>
                                                <li>Kemudian pilih pada bagian Seminar Proposal.</li>
                                                <li>Lihat Jadwal: Jadwal seminar proposal akan ditampilkan di halaman tersebut,
                                                    termasuk tanggal, waktu, dan lokasi seminar.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa tenggat waktu untuk mengumpulkan skripsi?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodysc5"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodysc5" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Tenggat waktu pengumpulan skripsi biasanya diumumkan setelah
                                                pelaksanaan seminar proposal. Untuk melihat tenggat waktu:</p>

                                            <ol class="text-dark">
                                                <li>Login ke Sistem: Masuk dengan email dan kata sandi Anda.</li>
                                                <li>Navigasi ke Menu Skripsi: Dari dashboard, pilih menu 'Skripsi' dan masuk
                                                    pada bagian Seminar Proposal.</li>
                                                <li>Lihat Tenggat Waktu: Tenggat waktu pengumpulan skripsi akan ditampilkan
                                                    bersama dengan informasi penting lainnya seperti jadwal seminar dan ujian

                                        </div>
                                    </div>
                                @endrole
                            </div>
                            <div class="tab-pane fade" id="rules" role="tabpanel" aria-labelledby="rules-tab">
                                @role('user')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa kebijakan mengenai plagiarisme dalam penulisan
                                                    skripsi?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyrl1"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyrl1" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Plagiarisme dilarang keras. Setiap skripsi akan diperiksa menggunakan perangkat lunak antiplagiarisme. Jika ditemukan plagiarisme, skripsi tersebut akan ditolak dan mahasiswa akan dikenakan sanksi sesuai dengan peraturan akademik.</p>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana jika saya tidak bisa mengikuti seminar
                                                    proposal sesuai jadwal?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyrl2"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyrl2" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Jika tidak bisa mengikuti seminar proposal sesuai jadwal, segera ajukan permohonan penjadwalan ulang melalui menu 'Seminar' dengan alasan yang jelas dan bukti pendukung jika diperlukan.</p>
                                        </div>
                                    </div>
                                @endrole
                                @role('super-admin')
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Apa kebijakan mengenai plagiarisme dalam penulisan
                                                    skripsi?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyrl4"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyrl4" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Plagiarisme dilarang keras. Setiap skripsi akan diperiksa menggunakan perangkat lunak antiplagiarisme. Jika ditemukan plagiarisme, skripsi tersebut akan ditolak dan mahasiswa akan dikenakan sanksi sesuai dengan peraturan akademik.</p>
                                        </div>
                                    </div>
                                    <div class="card mb-2" style="border-radius: 8px;">
                                        <div class="row align-items-center px-3 py-3">
                                            <div class="col-md-10 d-flex align-items-center">
                                                <p class="m-0 bold-faq"> Bagaimana jika saya tidak bisa mengikuti seminar
                                                    proposal sesuai jadwal?</p>
                                            </div>
                                            <div class="col-md-2 d-flex align-items-center justify-content-end">
                                                <i class="fa fa-plus-circle ikon-plus" data-target="card-bodyrl5"
                                                    onclick="toggleCard(this)"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2" id="card-bodyrl5" style="display: none;">
                                        <div class="px-3 py-3">
                                            <p class="text-dark">Jika tidak bisa mengikuti seminar proposal sesuai jadwal, segera ajukan permohonan penjadwalan ulang melalui menu 'Seminar' dengan alasan yang jelas dan bukti pendukung jika diperlukan.</p>
                                        </div>
                                    </div>
                                @endrole
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customStyle')
    <style>
        .nav-pills .nav-item .nav-link.active {
            color: #11468F !important;
            background-color: #DBE3EE !important;
            box-shadow: none !important;
            border-left: 2px solid #11468F;
            font-weight: 600;
        }

        .nav-pills .nav-item .nav-link:not(.active) {
            color: #B5B7BA !important;
            font-weight: 600;
        }

        .overlay-circle {
            position: absolute;
            top: 75px;
            left: 75px;
            width: 20px;
            height: 20px;
            border-radius: 100%;
            background-color: #11468F;
        }

        .form-information {
            background-color: #F2F4F7 !important;
            border-radius: 8px !important;
        }

        .form-information-akademik {
            background-color: #FCFDFD !important;
            border-radius: 8px !important;
            color: black;
        }

        .form-information:focus {
            background-color: white !important;
            outline: none !important;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #11468F;
        }

        input:checked+.slider:before {
            transform: translateX(20px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 20px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .label-container {
            display: flex;
            align-items: center;
        }

        .label-text {
            margin-left: 16px;
            font-size: 14px;
            color: black;
        }

        .nav-pills .nav-link {
            border-radius: 0%;
        }

        .bold-faq {
            font-weight: 600;
            color: #11468F;
        }

        .ikon-plus {
            font-size: 20px;
            color: #11468F;
        }
    </style>
@endpush
@push('customScript')
    <script>
        $('#btnSimpanProfile').click(function() {
            setTimeout(function() {
                $('#alertContainer').prepend(`
                <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
                        <div>
                            <h6 class="text-dark">Sukses</h6>
                            <p class="text-secondary">Profil Berhasil Disimpan</p>
                        </div>
                    </div>
                    <button type="button" class="close text-secondary" data-dismiss="alert" aria-label="Close" style="position: absolute; top: 50%; transform: translateY(-50%); right: 1rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            `);
            }, 1000);
        });
    </script>
    <script>
        $('#btnSimpanPassword').click(function() {
            setTimeout(function() {
                $('#alertContainer').prepend(`
                <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
                        <div>
                            <h6 class="text-dark">Sukses</h6>
                            <p class="text-secondary">Password Berhasil Diperbarui</p>
                        </div>
                    </div>
                    <button type="button" class="close text-secondary" data-dismiss="alert" aria-label="Close" style="position: absolute; top: 50%; transform: translateY(-50%); right: 1rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            `);
            }, 1000);
        });
    </script>
    <script>
        $('#btnSimpanNotif').click(function() {
            setTimeout(function() {
                $('#alertContainer').prepend(`
                <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
                        <div>
                            <h6 class="text-dark">Sukses</h6>
                            <p class="text-secondary">Notifikasi Diperbarui</p>
                        </div>
                    </div>
                    <button type="button" class="close text-secondary" data-dismiss="alert" aria-label="Close" style="position: absolute; top: 50%; transform: translateY(-50%); right: 1rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            `);
            }, 1000);
        });
    </script>
    <script>
        // JavaScript to handle the toggle switch functionality
        document.getElementById('toggleReminder').addEventListener('change', function() {
            if (this.checked) {
                console.log('Toggle is ON');
                // Add your logic here when the toggle is turned on
            } else {
                console.log('Toggle is OFF');
                // Add your logic here when the toggle is turned off
            }
        });
    </script>
    <script>
        function toggleCard(element) {
            var cardBody = document.getElementById(element.getAttribute('data-target'));
            var toggleIcon = element;
            if (cardBody.style.display === "none" || cardBody.style.display === "") {
                cardBody.style.display = "block";
                toggleIcon.classList.remove("fa-plus-circle");
                toggleIcon.classList.add("fa-minus-circle");
            } else {
                cardBody.style.display = "none";
                toggleIcon.classList.remove("fa-minus-circle");
                toggleIcon.classList.add("fa-plus-circle");
            }
        }
    </script>
@endpush
