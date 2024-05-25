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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Ambil Topik</button>
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
        <div class="section-body">
            <div class="row">
                <div class="col-12" id="alertContainer">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h6 class="text-dark">Usulan Topik Dosen</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <i class="fas fa-sliders-h text-primary" data-toggle="modal" data-target="#filterModal"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card px-3 py-3">
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <p class="text-primary bold">Penelitian</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="badge badge-danger no-border-radius">Telah Diklaim</span>
                            </div>
                        </div>
                        <p class="mb-1">Internet of Things (IoT) | Keamanan Jaringan</p>
                        <p class="mb-2 text-dark bold">Sistem Manajemen Aset Server Jurusan Teknologi Informasi </p>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img alt="image" width="70px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
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
                                data-jenis="Penelitian"
                                data-judul="Sistem Manajemen Aset Server Jurusan Teknologi Informasi"
                                data-deskripsi="Deskripsi topik" data-bidang-topik="Internet of Things (IoT), Keamanan Jaringan"
                                data-status="Telah Diklaim">
                                Lihat Dosen
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card px-3 py-3">
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <p class="text-primary bold">Pengembangan</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="badge badge-info no-border-radius">Tersedia</span>
                            </div>
                        </div>
                        <p class="mb-1">Learning Engineering Technology (LET)</p>
                        <p class="mb-2 text-dark bold">SQLearn Platform Pembelajaran SQL 2024 Topik 3</p>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img alt="image" width="70px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="col-md-10 align-content-center">
                                <p class="text-dark medium">Annisa Taufika Firdausi, ST., MT.</p>
                            </div>
                        </div>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                data-target="#detailTopikDosenModal"
                                data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                data-nama="Annisa Taufika Firdausi, ST., MT." data-prodi="Teknologi Informasi"
                                data-jenis="Pengembangan"
                                data-judul="SQLearn Platform Pembelajaran SQL 2024 Topik 3"
                                data-deskripsi="Deskripsi topik" data-bidang-topik="Learning Engineering Technology (LET)"
                                data-status="Tersedia">
                                Lihat Dosen
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card px-3 py-3">
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <p class="text-primary bold">Pengembangan</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="badge badge-danger no-border-radius">Telah Diklaim</span>
                            </div>
                        </div>
                        <p class="mb-1">Learning Engineering Technology (LET)</p>
                        <p class="mb-2 text-dark bold">SQLearn Platform Pembelajaran SQL 2024 Topik 4</p>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img alt="image" width="70px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="col-md-10 align-content-center">
                                <p class="text-dark medium">Annisa Taufika Firdausi, ST., MT.</p>
                            </div>
                        </div>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                data-target="#detailTopikDosenModal"
                                data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                data-nama="Annisa Taufika Firdausi, ST., MT." data-prodi="Teknologi Informasi"
                                data-jenis="Pengembangan"
                                data-judul="SQLearn Platform Pembelajaran SQL 2024 Topik 4"
                                data-deskripsi="Deskripsi topik" data-bidang-topik="Learning Engineering Technology (LET)"
                                data-status="Telah Diklaim">
                                Lihat Dosen
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card px-3 py-3">
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <p class="text-primary bold">Pengembangan</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="badge badge-info no-border-radius">Tersedia</span>
                            </div>
                        </div>
                        <p class="mb-1">Sistem Informasi</p>
                        <p class="mb-2 text-dark bold">Sistem Informasi E-Office</p>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img alt="image" width="70px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="col-md-10 align-content-center">
                                <p class="text-dark medium">Moch Zawaruddin Abdullah, S.ST., M.Kom.</p>
                            </div>
                        </div>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                data-target="#detailTopikDosenModal"
                                data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                data-nama="Moch Zawaruddin Abdullah, S.ST., M.Kom." data-prodi="Teknologi Informasi"
                                data-jenis="Pengembangan"
                                data-judul="Sistem Informasi E-Office"
                                data-deskripsi="Deskripsi topik" data-bidang-topik="Sistem Informasi"
                                data-status="Tersedia">
                                Lihat Dosen
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card px-3 py-3">
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <p class="text-primary bold">Penelitian</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="badge badge-danger no-border-radius">Telah Diklaim</span>
                            </div>
                        </div>
                        <p class="mb-1">Sistem Informasi</p>
                        <p class="mb-2 text-dark bold">Sistem Informasi RPS dan SAP</p>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img alt="image" width="70px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
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
                                data-jenis="Penelitian"
                                data-judul="Sistem Informasi RPS dan SAP"
                                data-deskripsi="Deskripsi topik" data-bidang-topik="Sistem Informasi"
                                data-status="Tidak Tersedia">
                                Lihat Dosen
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card px-3 py-3">
                        <div class="row mb-0">
                            <div class="col-md-6">
                                <p class="text-primary bold">Penelitian</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <span class="badge badge-danger no-border-radius">Telah Diklaim</span>
                            </div>
                        </div>
                        <p class="mb-1">Sistem Informasi</p>
                        <p class="mb-2 text-dark bold">SIB : Sistem Informasi Repository </p>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img alt="image" width="70px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
                            </div>
                            <div class="col-md-10 align-content-center">
                                <p class="text-dark medium">Mungki Astiningrum, ST., M.Kom.</p>
                            </div>
                        </div>
                        <div class="text-right mt-2">
                            <a href="#" class="btn btn-primary px-4 lihat-dosen" data-toggle="modal"
                                data-target="#detailTopikDosenModal"
                                data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                data-nama="Mungki Astiningrum, ST., M.Kom." data-prodi="Teknologi Informasi"
                                data-jenis="Pengembangan"
                                data-judul="SIB : Sistem Informasi Repository"
                                data-deskripsi="Deskripsi topik" data-bidang-topik="Sistem Informasi"
                                data-status="Tidak Tersedia">
                                Lihat Dosen
                            </a>
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
        </div>
    </section>
@endsection
@push('customStyle')
    <style>
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
        });
    </script>
@endpush
