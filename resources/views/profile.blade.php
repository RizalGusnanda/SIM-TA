@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header" style="border-radius: 0px 0px 10px 10px;">
            <h1 class="text-head-sim">Profil Mahasiswa</h1>
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
                                    <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4"
                                        role="tab" aria-controls="home" aria-selected="true">Pengaturan Akun</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab"
                                        aria-controls="profile" aria-selected="false">Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab"
                                        aria-controls="contact" aria-selected="false">Notitfikasi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col bg-white rounded-lg px-3 py-3">
                        <div class="tab-content no-padding" id="myTab2Content">
                            <div class="tab-pane fade show active" id="home4" role="tabpanel"
                                aria-labelledby="home-tab4">
                                <div>
                                    <div class="px-4 py-4 rounded-lg"
                                        style="border: 1px solid #eeeeeef3;box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.011);
                                ">
                                        <div class="d-flex align-items-center">
                                            <div style="position: relative;">
                                                <img alt="image" width="100px;"
                                                    src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                                    class="rounded-circle" style="margin-right: 40px;">
                                                <div class="overlay-circle"></div>
                                            </div>
                                            <div>
                                                @role('user')
                                                    <h5 style="margin-bottom: 0px; font-size: 18px; color: black;">
                                                        Aisyah Ulil Maulina</h5>
                                                    <h6 style="margin: 8px 0 5px 0;">D-IV Sistem Informasi Bisnis</h6>
                                                    <p style="margin-bottom: 0px;">Teknologi Informasi</p>
                                                @endrole
                                                @role('super-admin')
                                                    <h5 style="margin-bottom: 0px; font-size: 18px; color: black;">
                                                        DR. Eng. Rosa Andrie Asmara, ST, MT.</h5>
                                                    <h6 style="margin: 8px 0 5px 0;">198010102005000000</h6>
                                                @endrole
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-4 rounded-lg mt-3"
                                        style="border: 1px solid #eeeeeef3;box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.011);
                                ">
                                        <h5 style="color: black; font-size: 16px;">Informasi Pribadi</h5>
                                        @role('user')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Nama Depan</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Nama Depan">
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Nama Belakang</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Nama Belakang">
                                                </div>
                                            </div>
                                        @endrole
                                        <div class="row mt-4">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Nama</h5>
                                                <input class="form-control form-information" type="text"
                                                    placeholder="Masukan Nama">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Alamat Email</h5>
                                                <input class="form-control form-information" type="email"
                                                    placeholder="Masukan Alamat Email">
                                                <p style="margin-bottom: 0px; font-size: 10px; font-weight: 500;">Untuk
                                                    menggunakan SSO, masukan alamat email
                                                    polinema</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Nomer HP</h5>
                                                <input class="form-control form-information" type="text"
                                                    placeholder="Masukan Nomer HP">
                                            </div>
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Jenis Kelamin</h5>
                                                <select class="form-control form-information" name=""
                                                    id="">
                                                    <option value="" disabled>Pilih Jenis Kelamin</option>
                                                    <option value="">Laki-laki</option>
                                                    <option value="">Wanita</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-4 rounded-lg mt-3"
                                        style="border: 1px solid #eeeeeef3;box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.011);
                                ">
                                        <h5 style="color: black; font-size: 16px;">Informasi Akademik</h5>
                                        @role('user')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">NIM</h5>
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="21275646" disabled>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Program Studi</h5>
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="D-IV Sistem Infromasi Bisnis" disabled>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Jurusan</h5>
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="Teknologi Informasi" disabled>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Kelas</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Kelas Anda">
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Tahun Masuk</h5>
                                                    <input class="form-control form-information" type="date"
                                                        placeholder="Masukan Tahun Masuk">
                                                </div>
                                            </div>
                                        @endrole
                                        @role('super-admin')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Jurusan</h5>
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="Teknologi Informasi" disabled>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Program Studi</h5>
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="D-IV Sistem Infromasi Bisnis" disabled>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">NIP</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan NIP Anda">
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">NIDN</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan NIDN Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Pegawai</h5>
                                                    <select class="form-control form-information" type="text"
                                                        placeholder="Pilih Pegawai">
                                                        <option value="">PNS</option>
                                                        <option value="">Kontrak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Jabatan</h5>
                                                    <select class="form-control form-information" type="text"
                                                        placeholder="Pilih Jabatan">
                                                        <option value="">Dosen</option>
                                                        <option value="">Asisten Ahli</option>
                                                        <option value="">Dosen Industri</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Tahun Mengajar</h5>
                                                    <input class="form-control form-information" type="date"
                                                        placeholder="Masukan Tahun Mengajar">
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Status</h5>
                                                    <select class="form-control form-information" type="text"
                                                        placeholder="Pilih Status">
                                                        <option value="">Aktif</option>
                                                        <option value="">Non-Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                        @endrole
                                    </div>
                                    <div class="px-4 py-4 rounded-lg mt-3"
                                        style="border: 1px solid #eeeeeef3;box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.011);
                                ">
                                        <h5 style="color: black; font-size: 16px;">Informasi Lain</h5>
                                        @role('user')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Nama Ortu/Wali</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Nama Ortu/Wali">
                                                </div>
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Nomer HP Ortu/Wali</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Nomer HP Ortu/Wali">
                                                </div>
                                            </div>
                                            <h5 style="color: black; font-size: 14px; font-weight: bold;" class="my-4">Link
                                                Akun Social Media
                                            </h5>
                                            <div class="row">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Linkedln</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Linkedln Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Instagram</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Instagram Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Facebook</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Facebook Anda">
                                                </div>
                                            </div>
                                        @endrole
                                        @role('super-admin')
                                            <div class="row mt-4">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Bidang Keahlian</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Bidang Minat Penelitian">
                                                </div>
                                            </div>
                                            <h5 style="color: black; font-size: 14px; font-weight: bold;" class="my-4">
                                                Platform Akademis
                                            </h5>
                                            <div class="row">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Sinta ID</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Sinta Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Scholar ID</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Scholar Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Scopus ID</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Scopus Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">ResearchGate ID</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun ResearchGate Anda">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <h5 style="font-size: 14px; color: black;">Orchid ID</h5>
                                                    <input class="form-control form-information" type="text"
                                                        placeholder="Masukan Link Akun Orchid Anda">
                                                </div>
                                            </div>
                                        @endrole
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary px-5 my-5"
                                            style="margin-left: auto; width:200px;" id="btnSimpanProfile">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                <div>
                                    <div>
                                        <h5 style="color: black; font-size: 16px; margin-top: 11px;">Ubah Password</h5>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Username</h5>
                                                @role('user')
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="21275646">
                                                @endrole
                                                @role('super-admin')
                                                    <input class="form-control form-information-akademik" type="text"
                                                        value="dosen">
                                                @endrole
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Password Sekarang</h5>
                                                <input class="form-control form-information" type="text"
                                                    placeholder="Masukan Password Sekarang">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Password Baru</h5>
                                                <input class="form-control form-information" type="text"
                                                    placeholder="Masukan Password Baru">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <h5 style="font-size: 14px; color: black;">Konfirmasi Password Baru</h5>
                                                <input class="form-control form-information" type="text"
                                                    placeholder="Konfirmasi Password Baru">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary px-5 mt-5"
                                            style="margin-left: auto; width:200px;" id="btnSimpanPassword">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                <div>
                                    <h5 style="color: black; font-size: 16px; margin-top: 11px;">Pengaturan Notifikasi</h5>
                                    <div>
                                        <h5 style="font-size: 14px; color: black; margin-top: 32px;">Notifikasi Reminder
                                        </h5>
                                        <p style="font-size: 12px; font-weight: 500; line-height: 18px;">Digunakan untuk
                                            mengingatkan pengguna tentang jadwal atau batas waktu penting,
                                            seperti pengumpulan proposal skirpsi atau jadwal seminar</p>
                                        <div class="label-container">
                                            <label class="switch" style="margin-bottom:0px;">
                                                <input type="checkbox" id="toggleReminder">
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="label-text">Website</span>
                                        </div>
                                        <div class="label-container">
                                            <label class="switch" style="margin-bottom:0px;">
                                                <input type="checkbox" id="toggleReminder">
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="label-text">Email</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 style="font-size: 14px; color: black; margin-top: 32px;">Notifikasi Utama
                                        </h5>
                                        <p style="font-size: 12px; font-weight: 500; line-height: 18px;">Berisi informasi
                                            penting atau perubahan signifikan dalam sistem, seperti perubahan status
                                            pengajuan proposal atau pemberitahuan dari dosen pemimbing tentang log bimbingan
                                        </p>
                                        <div class="label-container">
                                            <label class="switch" style="margin-bottom:0px;">
                                                <input type="checkbox" id="toggleReminder">
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="label-text">Website</span>
                                        </div>
                                        <div class="label-container">
                                            <label class="switch" style="margin-bottom:0px;">
                                                <input type="checkbox" id="toggleReminder">
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="label-text">Email</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary px-5 mt-5" style="width:200px;"
                                            id="btnSimpanNotif">Simpan</button>
                                    </div>
                                </div>
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
@endpush
