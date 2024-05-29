<!-- Filter Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="filterModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-dark mb-2">Ketersediaan</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="availability" id="tersediaRadio"
                        value="tersedia">
                    <label class="form-check-label text-dark" for="tersediaRadio">
                        Tersedia
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="availability" id="kuotaPenuhRadio"
                        value="kuota_penuh">
                    <label class="form-check-label text-dark" for="kuotaPenuhRadio">
                        Kuota Penuh
                    </label>
                </div>
                <hr>
                <h6 class="text-dark">Bidang Keahlian</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        UI UX Designer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        Forecasting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        Machine Learning
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        Sistem Pendukung Keputusan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        Tata Kelola Teknologi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        Keamanan Jaringan
                    </label>
                </div>
                <div class="form-check mb-5">
                    <input class="form-check-input" type="checkbox" name="expertise" id="uiUxCheckbox" value="UI/UX">
                    <label class="form-check-label" for="uiUxCheckbox">
                        Data Mining
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block">Terapkan</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Detail Modal -->
<div class="modal fade" id="detailTopikDosenModal" tabindex="-1" role="dialog"
    aria-labelledby="detailTopikDosenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="detailTopikDosenModalLabel">Detail Topik Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Log Bimbingan -->
<div class="modal fade" id="tambahUsulanTopikModal" tabindex="-1" role="dialog"
    aria-labelledby="tambahUsulanTopikModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-dark" id="tambahUsulanTopikModalLabel">Tambah Usulan Topik</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-modal">
                <form id="logBimbinganForm" action="" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="prodi">Program Studi</label>
                            <select class="form-control" id="prodi" name="program_studi">
                                <option value="" disabled selected>Pilih Program Studi</option>
                                <option value="ti">D4 Teknologi Informasi</option>
                                <option value="mi">Manajemen Informatika</option>
                                <option value="sib">Sistem Informasi Bisnis</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="jenistopik">Jenis</label>
                            <select class="form-control" id="jenistopik" name="metode_bimbingan">
                                <option value="" disabled selected>Pilih Jenis Topik</option>
                                <option value="pengembangan">Pengembangan</option>
                                <option value="penelitian">Penelitian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                            placeholder="Masukkan Judul Usulan Topik">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsikan usulan topik"
                            style="height: 137px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bidangtopik">Bidang Topik</label>
                        <select class="form-control" id="bidangtopik" name="bidangtopik">
                            <option value="" disabled selected>Pilih Bidang Topik</option>
                            <option value="ui-ux">UI UX Designer</option>
                            <option value="pc">Pengolahan Citra</option>
                        </select>
                    </div>
                    <div class="modal-footer px-0">
                        <button type="button" class="btn btn-primary px-5" id="btnSimpanUsulanTopik">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header" style="border-radius: 0px 0px 10px 10px;">
            <h1 class="text-head-sim">Informasi Dosen</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="row">
            <div class="col-12" id="alertContainer">
                @include('layouts.alert')
            </div>
        </div>
        <div class="section-body bg-white py-3">
            <ul class="nav nav-tabs px-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="usulan-topik-tab" data-toggle="tab" href="#usulan-topik"
                        role="tab" aria-controls="usulan-topik" aria-selected="true">Usulan Topik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="daftar-usulan-tab" data-toggle="tab" href="#daftar-usulan" role="tab"
                        aria-controls="daftar-usulan" aria-selected="false">Daftar Usulan Topik</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="usulan-topik" role="tabpanel"
                    aria-labelledby="usulan-topik-tab">
                    <div class="col-12 mb-3 py-3">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h6 class="text-dark">Usulan Topik Saya</h6>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="my-auto items-center btn btn-primary rounded-lg py-1.5 mr-2"
                                    style="letter-spacing: 0px !important;">
                                    <i class="fas fa-plus"></i>
                                    <a class="text-button-sim active px-4" data-toggle="modal"
                                        data-target="#tambahUsulanTopikModal">
                                        Tambah</a>
                                </div>
                                <div class="my-auto items-center btn btn-light rounded-lg py-1.5"
                                    style="letter-spacing: 0px !important;">
                                    <i class="fas fa-sliders-h text-primary" data-toggle="modal"
                                        data-target="#filterModal" style="font-size: 22px;"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <div class="card px-3 py-3"
                                style="background-color: #FCFDFD;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); ">
                                <div class="row mb-0">
                                    <div class="col-md-6">
                                        <p class="text-primary bold">Pengembangan</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="badge badge-info no-border-radius">Tersedia</span>
                                    </div>
                                </div>
                                <p class="mb-1">UI/UX Designer </p>
                                <p class="mb-2 text-dark bold">Analisis, Klasifikasi, dan Visualisasi Polusi Udara di
                                    Wilayah Jabodetabek Menggunakan Metode Fuzzy
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img alt="image" width="70px;"
                                            src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                    </div>
                                    <div class="col-md-10 align-content-center">
                                        <p class="text-dark medium">Ade Ismail S.Kom., M.TI</p>
                                    </div>
                                </div>
                                <div class="text-right mt-2">
                                    <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                        data-target="#detailTopikDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Ade Ismail S.Kom., M.TI" data-prodi="Teknologi Informasi"
                                        data-jenis="Pengembangan"
                                        data-judul="Analisis, Klasifikasi, dan Visualisasi Polusi Udara di Wilayah  Jabodetabek Menggunakan Metode Fuzzy"
                                        data-deskripsi="Deskripsi topik" data-bidang-topik="UI/UX Designer"
                                        data-status="Tersedia">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <div class="card px-3 py-3"
                                style="background-color: #FCFDFD;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); ">
                                <div class="row mb-0">
                                    <div class="col-md-6">
                                        <p class="text-primary bold">Pengembangan</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="badge badge-danger no-border-radius">Telah Diklaim</span>
                                    </div>
                                </div>
                                <p class="mb-1">UI/UX Designer</p>
                                <p class="mb-2 text-dark bold">Sistem Manajemen Aset Server Jurusan Teknologi Informasi
                                    Sistem Manajemen Aset Server Jurusan Teknologi Informasi
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img alt="image" width="70px;"
                                            src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                    </div>
                                    <div class="col-md-10 align-content-center">
                                        <p class="text-dark medium">Ade Ismail S.Kom., M.TI</p>
                                    </div>
                                </div>
                                <div class="text-right mt-2">
                                    <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                        data-target="#detailTopikDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Ade Ismail S.Kom., M.TI" data-prodi="Teknologi Informasi"
                                        data-jenis="Pengembangan"
                                        data-judul="Sistem Manajemen Aset Server Jurusan Teknologi Informasi Sistem Manajemen Aset Server Jurusan Teknologi Informasi "
                                        data-deskripsi="Deskripsi topik" data-bidang-topik="UI UX Designer"
                                        data-status="Telah Diklaim">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="daftar-usulan" role="tabpanel" aria-labelledby="daftar-usulan-tab">
                    <div class="col-12 mb-3 py-3">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h6 class="text-dark">Daftar Usulan Topik</h6>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="my-auto items-center btn btn-light rounded-lg py-1.5"
                                    style="letter-spacing: 0px !important;">
                                    <i class="fas fa-sliders-h text-primary" data-toggle="modal"
                                        data-target="#filterModal" style="font-size: 22px;"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <div class="card px-3 py-3"
                                style="background-color: #FCFDFD;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); ">
                                <div class="row mb-0">
                                    <div class="col-md-6">
                                        <p class="text-primary bold">Pengembangan</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="badge badge-danger no-border-radius">Telah Diklaim</span>
                                    </div>
                                </div>
                                <p class="mb-1">UI/UX Designer </p>
                                <p class="mb-2 text-dark bold">Analisis, Klasifikasi, dan Visualisasi Polusi Udara di
                                    Wilayah Jabodetabek Menggunakan Metode Fuzzy
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img alt="image" width="70px;"
                                            src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                    </div>
                                    <div class="col-md-10 align-content-center">
                                        <p class="text-dark medium">Ade Ismail S.Kom., M.TI</p>
                                    </div>
                                </div>
                                <div class="text-right mt-2">
                                    <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                        data-target="#detailTopikDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Ade Ismail S.Kom., M.TI" data-prodi="Teknologi Informasi"
                                        data-jenis="Pengembangan"
                                        data-judul="Analisis, Klasifikasi, dan Visualisasi Polusi Udara di Wilayah  Jabodetabek Menggunakan Metode Fuzzy"
                                        data-deskripsi="Deskripsi topik" data-bidang-topik="UI/UX Designer"
                                        data-status="Telah Diklaim">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <div class="card px-3 py-3"
                                style="background-color: #FCFDFD;box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); ">
                                <div class="row mb-0">
                                    <div class="col-md-6">
                                        <p class="text-primary bold">Pengembangan</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="badge badge-info no-border-radius">Tersedia</span>
                                    </div>
                                </div>
                                <p class="mb-1">Pengolahan Citra</p>
                                <p class="mb-2 text-dark bold">Laboratorium Virtual Mata Kuliah Pengolahan Citra materi
                                    "Filtering Image" menggunakan Flask Python dan Library OpenCV
                                </p>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img alt="image" width="70px;"
                                            src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                    </div>
                                    <div class="col-md-10 align-content-center">
                                        <p class="text-dark medium">Dr. Eng. Rosa Andrie Asmara, ST., MT.</p>
                                    </div>
                                </div>
                                <div class="text-right mt-2">
                                    <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                        data-target="#detailTopikDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Dr. Eng. Rosa Andrie Asmara, ST., MT." data-prodi="Teknologi Informasi"
                                        data-jenis="Pengembangan"
                                        data-judul="Laboratorium Virtual Mata Kuliah Pengolahan Citra materi Filtering Image menggunakan Flask Python dan Library OpenCV"
                                        data-deskripsi="Sistem Informasi Laboratorium Virtual Mata Kuliah Pengolahan Citra  materi Binary Morphology. terdapat dua bagian yaitu bagian  pembelajaran dan bagian evaluasi. pada bagian pembelajaran, mahasiswa  akan mempelajari materi2 seperti erosi, dilasi, opening, dan closing.  materi dapat dipelajari secara interaktif, dengan memasukkan parameter2  tertentu."
                                        data-bidang-topik="Pengolahan Citra" data-status="Tersedia">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4 align-items-center">
            <button class="btn" style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;"
                disabled><i class="fas fa-chevron-left mr-3"></i>Sebelumnya</button>
            <div style="color: #11468F; font-size:12px; font-weight:600;">
                1 dari 1 halaman
            </div>
            <button class="btn"
                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;">Selanjutnya<i
                    class="fas fa-chevron-right pl-3"></i></button>
        </div>
    </section>
@endsection
@push('customStyle')
    <style>
        .nav-tabs {
            display: flex;
            justify-content: left;
            border-bottom: none;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            color: #6c757d;
            font-weight: 600 !important;
        }

        .nav-tabs .nav-link.active {
            border-color: #11468F;
            color: #000;
        }

        .nav-tabs .nav-link:not(.active) {
            border-color: #6c757d;
            color: #6c757d !important;
        }

        .nav-tabs .nav-link:hover {
            border-color: #6c757d;
        }

        .no-border-radius {
            border-radius: 3px !important;
        }

        .badge-cv2 {
            color: #2360B2 !important;
            background-color: #EAF2FD !important;
            border: 1px solid #2360B2 !important;
        }

        .bold {
            font-weight: 600;
        }

        .medium {
            font-weight: 500;
        }

        .modal-dialog-right {
            position: fixed;
            right: 90;
            top: 90;
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
@endpush
@push('customScript')
    <script>
        $(document).ready(function() {
            $('.lihat-dosen').on('click', function() {
                var modal = $('#detailTopikDosenModal');
                var gambar = $(this).data('gambar');
                var nama = $(this).data('nama');
                var prodi = $(this).data('prodi');
                var jenis = $(this).data('jenis');
                var judul = $(this).data('judul');
                var deskripsi = $(this).data('deskripsi');
                var bidangTopik = $(this).data('bidang-topik');
                var status = $(this).data('status');

                var bidangBadges = bidangTopik.split(',').map(function(bidang) {
                    return `<span class="badge badge-cv2 me-1 mr-1">${bidang.trim()}</span>`;
                }).join('');

                var statusBadge = status === 'Tersedia' ? 'badge-info' : 'badge-danger';

                modal.find('.modal-body').html(`
            <div class="container-fluid">
                <div class="text-dark">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Dosen Pengusul:</strong></p>
                            <p class="my-auto">${nama}</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Program Studi:</strong></p>
                            <p class="my-auto">${prodi}</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Jenis:</strong></p>
                            <p class="my-auto">${jenis}</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Judul:</strong></p>
                            <p class="my-auto">${judul}</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Deskripsi:</strong></p>
                            <p class="my-auto">${deskripsi}</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Bidang Topik:</strong></p>
                            <p class="my-auto">${bidangBadges}</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex">
                            <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Status:</strong></p>
                            <p class="my-auto"><span class="badge ${statusBadge}">${status}</span></p>
                        </div>
                        <hr class="mt-0">
                    </div>
                </div>
            </div>
        `);
            });

            $('#btnSimpanUsulanTopik').click(function() {
                // Menutup modal
                $('#tambahUsulanTopikModal').modal('hide');

                // Menambahkan alert setelah modal tertutup
                setTimeout(function() {
                    $('#alertContainer').prepend(`
                        <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
                                <div>
                                    <h6 class="text-dark">Sukses</h6>
                                    <p class="text-secondary">Data Usulan Topik berhasil ditambahkan.</p>
                                </div>
                            </div>
                            <button type="button" class="close text-secondary" data-dismiss="alert" aria-label="Close"
                                style="position: absolute; top: 50%; transform: translateY(-50%); right: 1rem;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    `);
                }, 1000);
            });
        });
    </script>
@endpush
