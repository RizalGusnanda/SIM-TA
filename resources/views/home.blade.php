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
            <h1 class="text-head-sim">Dashboard</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12" id="alertContainer">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="col-12" style="padding-left: 0px; padding-right: 0px;">
                <div class="row">
                    <div class="col">
                        {{-- 3 card --}}
                        @role('super-admin')
                        <div class="d-flex justify-content-between">
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center rounded"
                                    style="padding: 24px 32px;">
                                    <div>
                                        <h5 style="font-size: 14px; color: #061932; font-weight: 600;">Kuota Bimbingan</h5>
                                        <p style="margin-bottom: 0px;"><span
                                                style="font-size: 32px; color: #061932;">7</span>/7 topik
                                        </p>
                                    </div>
                                    <img src="{{ asset('assets/img/bimbingan.svg') }}" class="ml-4" alt=""
                                        srcset="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center rounded"
                                    style="padding: 24px 32px;">
                                    <div>
                                        <h5 style="font-size: 14px; color: #061932; font-weight: 600;">Seminar Proposal
                                        </h5>
                                        <p style="margin-bottom: 0px;"><span
                                                style="font-size: 32px; color: #061932;">6</span>/7 mahasiswa
                                        </p>
                                    </div>
                                    <img src="{{ asset('assets/img/proposal.svg') }}" class="ml-4" alt=""
                                        srcset="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center rounded"
                                    style="padding: 24px 32px;">
                                    <div>
                                        <h5 style="font-size: 14px; color: #061932; font-weight: 600;">Sidang Skripsi</h5>
                                        <p style="margin-bottom: 0px;"><span
                                                style="font-size: 32px; color: #061932;">0</span>/7 mahasiswa
                                        </p>
                                    </div>
                                    <img src="{{ asset('assets/img/skripsi.svg') }}" class="ml-4" alt=""
                                        srcset="">
                                </div>
                            </div>
                        </div>
                        @endrole
                        @role('user')
                        <div class="d-flex justify-content-between">
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center rounded"
                                    style="padding: 24px 32px;">
                                    <div>
                                        <h5 style="font-size: 14px; color: #061932; font-weight: 600;">Kuota Bimbingan</h5>
                                        <p style="margin-bottom: 0px;"><span
                                                style="font-size: 32px; color: #061932;">8</span>/14 log tercapai
                                        </p>
                                    </div>
                                    <img src="{{ asset('assets/img/bimbingan.svg') }}" class="ml-4" alt=""
                                        srcset="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center rounded"
                                    style="padding: 24px 32px;">
                                    <div>
                                        <h5 style="font-size: 14px; color: #061932; font-weight: 600;">Seminar Proposal
                                        </h5>
                                        <p style="margin-bottom: 0px;">Tahap <t></t><span
                                                style="font-size: 32px; color: #061932;">1</span>
                                        </p>
                                    </div>
                                    <img src="{{ asset('assets/img/proposal.svg') }}" class="ml-4" alt=""
                                        srcset="">
                                </div>
                            </div>
                            <div class="card">
                                <div class="d-flex justify-content-between align-items-center rounded"
                                    style="padding: 24px 32px;">
                                    <div>
                                        <h5 style="font-size: 14px; color: #061932; font-weight: 600;">Sidang Skripsi</h5>
                                        <p style="margin-bottom: 0px;">Tahap <t><span
                                                style="font-size: 32px; color: #061932;">1</span>
                                        </p>
                                    </div>
                                    <img src="{{ asset('assets/img/skripsi.svg') }}" class="ml-4" alt=""
                                        srcset="">
                                </div>
                            </div>
                        </div>
                        @endrole
                        {{-- 2 card --}}
                        <div class="d-flex justify-content-between">
                            <div class="mr-4" style="width: 60%;">
                                <h6 class="text-dark" style="font-size: 16px; font-weight: 600;">Keaktifan Mahasiswa</h6>
                                <div class="bg-white py-3 px-3 rounded" style="height: 100%;">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h6 class="text-dark" style="font-size: 14px;">log Bimbingan</h6>
                                        <select
                                            style="background-color: transparent !important; border: none; color: #AAAAAA;"
                                            name="" id="">
                                            <option value="">Bulan Ini</option>
                                        </select>
                                    </div>
                                    <div style="height: 277px;">
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex align-items-center">
                                            <div class="overlay-circle-offline"></div>
                                            <span class="text-dark ml-2" style="font-size: 12px;">Offline</span>
                                        </div>
                                        <div class="d-flex align-items-center mx-2">
                                            <div class="overlay-circle-wa"></div>
                                            <span class="text-dark ml-2" style="font-size: 12px;">Whatsapp</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="overlay-circle-online"></div>
                                            <span class="text-dark ml-2" style="font-size: 12px;">Online</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-dark">
                                <h6 style="font-size: 16px; font-weight: 600;">Akses Dokumen Penting</h6>
                                <div class="bg-white px-3 py-3 rounded" style="height: 100%;">
                                    <div class="d-flex align-items-center px-2 py-2 rounded"
                                        style="border: 1px solid #F6F8F9;">
                                        <img src="{{ asset('assets/img/doc-1.svg') }}" class="mr-3" alt=""
                                            srcset="">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Tumer_brown.svg') }}" alt=""
                                                    srcset="">
                                                <span class="ml-2" style="font-size: 10px; color: #AAAAAA;">2023 - 12 -
                                                    23</span>
                                            </div>
                                            <p class="text-dark" style="margin-bottom: 0px; font-weight: 600;">Buku
                                                Pedoman
                                                Tugas Akhir</p>
                                            <a href=""
                                                style="color: #11468F; text-decoration: none; font-weight: 600;">Buka
                                                dokumen</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center px-2 py-2 rounded mt-2"
                                        style="border: 1px solid #F6F8F9;">
                                        <img src="{{ asset('assets/img/doc-2.svg') }}" class="mr-3" alt=""
                                            srcset="">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Tumer_brown.svg') }}" alt=""
                                                    srcset="">
                                                <span class="ml-2" style="font-size: 10px; color: #AAAAAA;">2023 - 12 -
                                                    23</span>
                                            </div>
                                            <p class="text-dark" style="margin-bottom: 0px; font-weight: 600;">Template
                                                Proposal Pengembangan</p>
                                            <a href=""
                                                style="color: #11468F; text-decoration: none; font-weight: 600;">Buka
                                                dokumen</a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center px-2 py-2 rounded mt-2"
                                        style="border: 1px solid #F6F8F9;">
                                        <img src="{{ asset('assets/img/doc-2.svg') }}" class="mr-3" alt=""
                                            srcset="">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/img/Tumer_brown.svg') }}" alt=""
                                                    srcset="">
                                                <span class="ml-2" style="font-size: 10px; color: #AAAAAA;">2023 - 12 -
                                                    23</span>
                                            </div>
                                            <p class="text-dark" style="margin-bottom: 0px; font-weight: 600;">Template
                                                Proposal Penelitian</p>
                                            <a href=""
                                                style="color: #11468F; text-decoration: none; font-weight: 600;">Buka
                                                dokumen</a>
                                        </div>
                                    </div>
                                    <div class="text-right mt-2">
                                        <a href=""
                                            style="font-weight: 600; color: #11468F; text-decoration: none;">Selengkapnya<i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="text-dark" style="font-size: 16px; font-weight: 600;">Linimasa Proposal</h6>
                        <div class="py-4 px-4 bg-white rounded" style="height: 100%;">
                            <ul class="progress-steps">
                                <li class="step">
                                    <img src="{{ asset('assets/img/step-image.svg') }}" width="25px;" height="25px;"
                                        alt="">
                                    <div>
                                        <p class="text-dark"
                                            style="font-weight: 600; margin-bottom: 2px; line-height: 18px;">
                                            Topik Proposal
                                        </p>
                                        <p style="margin-bottom: -6px; font-size: 12px; line-height: 18px;">Ajukan topik
                                            proposal</p>
                                        <a href="informasi-dosen"
                                            style="text-decoration: none; font-weight: 600; font-size: 11px; color: #2F80ED;">Ajukan
                                            topik</a>
                                    </div>
                                </li>
                                <li class="step">
                                    <img src="{{ asset('assets/img/step-image.svg') }}" width="25px;" height="25px;"
                                        alt="">
                                    <div>
                                        <p class="text-dark"
                                            style="font-weight: 600; margin-bottom: 2px; line-height: 18px;">
                                            Log Bimbingan
                                        </p>
                                        <p style="margin-bottom: -6px; font-size: 12px; line-height: 18px;">Validasi log
                                            bimbingan</p>
                                        <a href="/pra-seminar-proposal"
                                            style="text-decoration: none; font-weight: 600; font-size: 11px; color: #2F80ED;">Validasi
                                            sekarang</a>
                                    </div>
                                </li>
                                <li class="step">
                                    <img src="{{ asset('assets/img/step-image.svg') }}" width="25px;" height="25px;"
                                        alt="">
                                    <div>
                                        <p class="text-dark"
                                            style="font-weight: 600; margin-bottom: 2px; line-height: 18px;">
                                            Seminar Proposal
                                        </p>
                                        <p style="margin-bottom: -6px; font-size: 12px; line-height: 18px;">Lihat jadwal
                                            seminar proposal</p>
                                        <a href="/proposal-skripsi#proposal"
                                            style="text-decoration: none; font-weight: 600; font-size: 11px; color: #2F80ED;">Lihat
                                            Jadwal</a>
                                    </div>
                                </li>
                                <li class="step">
                                    <img src="{{ asset('assets/img/step-image.svg') }}" width="25px;" height="25px;"
                                        alt="">
                                    <div>
                                        <p class="text-dark"
                                            style="font-weight: 600; margin-bottom: 2px; line-height: 18px;">
                                            Berita Acara
                                        </p>
                                        <p style="margin-bottom: -6px; font-size: 12px; line-height: 18px;">Validasi berita
                                            acara</p>
                                        <a href="/proposal-skripsi#daftar"
                                            style="text-decoration: none; font-weight: 600; font-size: 11px; color: #2F80ED;">Validasi
                                            sekarang</a>
                                    </div>
                                </li>
                                <li class="step">
                                    <img src="{{ asset('assets/img/step-image.svg') }}" width="25px;" height="25px;"
                                        alt="">
                                    <div>
                                        <p class="text-dark"
                                            style="font-weight: 600; margin-bottom: 2px; line-height: 18px;">
                                            Revisi Proposal
                                        </p>
                                        <p style="margin-bottom: -6px; font-size: 12px; line-height: 18px;">Validasi Revisi
                                            Proposal</p>
                                        <a href="/proposal-skripsi#laksana"
                                            style="text-decoration: none; font-weight: 600; font-size: 11px; color: #2F80ED;">Lihat
                                            Berita Acara</a>
                                    </div>
                                </li>
                                <li class="step last-step" style="margin-bottom: 7px;">
                                    <img src="{{ asset('assets/img/final_step.svg') }}" width="25px;" height="25px;"
                                        alt="">
                                    <div>
                                        <p class="text-dark"
                                            style="font-weight: 600; margin-bottom: 2px; line-height: 18px;">
                                            Final Proposal
                                        </p>
                                        <p style="margin-bottom: -6px; font-size: 12px; line-height: 18px;">Validasi revisi
                                            final proposal</p>
                                        <a href="/proposal-skripsi#laksana"
                                            style="text-decoration: none; font-weight: 600; font-size: 11px; color: #2F80ED;">Validasi
                                            sekarang</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <h6 class="text-dark" style="font-size: 16px; font-weight: 600; margin-top: 60px;">Informasi Terkini</h6>
                <div class="row">
                    <div class="col">
                        <div class="card rounded px-3 py-3">
                            <a href="" id="lihatInformasi" data-toggle="modal" data-target="#lihatInformasiModal"
                                class="py-1" style="border-left: 4px solid #11468F; text-decoration: none;">
                                <div class="d-flex align-items-center justify-content-between pl-3"
                                    style="text-decoration: none;">
                                    <p class="text-dark" style="margin-bottom: 0px; font-size: 14px; font-weight: 600;">
                                        Sosialisasi Tugas
                                        Akhir</p>
                                    <img src="{{ asset('assets/img/Arrow_alt_lright.svg') }}"
                                        style="background-color: #E7EDF4; border: 1px solid #061932; border-radius: 50%;"
                                        width="20px;" height="20px;" alt="" srcset="">
                                </div>
                                <div class="text-dark rounded px-3 py-1 ml-3"
                                    style="background-color: #DBDCDE; width: fit-content; font-size: 12px;"> Sosialisasi
                                </div>
                            </a>
                            <div class="d-flex mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/Date_range_brown.svg') }}" width="20px;"
                                        alt="" srcset="">
                                    <span class="ml-1 mt-1" style="font-size: 12px;">2024 - 02 - 20</span>
                                </div>
                                <div class="d-flex align-items-center ml-5">
                                    <img src="{{ asset('assets/img/User_alt_fill_brown.svg') }}" alt=""
                                        srcset="">
                                    <span class="ml-1 mt-1" style="font-size: 12px;">Panitia D4-TI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded px-3 py-3">
                            <a href="" id="lihatInformasi" data-toggle="modal" data-target="#lihatInformasiModal"
                                class="py-1" style="border-left: 4px solid #11468F; text-decoration: none;">
                                <div class="d-flex align-items-center justify-content-between pl-3">
                                    <p class="text-dark" style="margin-bottom: 0px; font-size: 14px; font-weight: 600;">
                                        Sosialisasi Pasca Seminar Proposal</p>
                                    <img src="{{ asset('assets/img/Arrow_alt_lright.svg') }}"
                                        style="background-color: #E7EDF4; border: 1px solid #061932; border-radius: 50%;"
                                        width="20px;" height="20px;" alt="" srcset="">
                                </div>
                                <div class="text-dark rounded px-3 py-1 ml-3"
                                    style="background-color: #DBDCDE; width: fit-content; font-size: 12px;"> Sosialisasi
                                </div>
                            </a>
                            <div class="d-flex mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/Date_range_brown.svg') }}" width="20px;"
                                        alt="" srcset="">
                                    <span class="ml-1 mt-1" style="font-size: 12px;">2024 - 02 - 20</span>
                                </div>
                                <div class="d-flex align-items-center ml-5">
                                    <img src="{{ asset('assets/img/User_alt_fill_brown.svg') }}" alt=""
                                        srcset="">
                                    <span class="ml-1 mt-1" style="font-size: 12px;">Panitia D4-TI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card px-3 py-3">
                            <a href="" id="lihatInformasi" data-toggle="modal" data-target="#lihatInformasiModal"
                                class="py-1" style="border-left: 4px solid #11468F; text-decoration: none;">
                                <div class="d-flex align-items-center justify-content-between pl-3">
                                    <p class="text-dark" style="margin-bottom: 0px; font-size: 14px; font-weight: 600;">
                                        Pendataan Proposal Skripsi</p>
                                    <img src="{{ asset('assets/img/Arrow_alt_lright.svg') }}"
                                        style="background-color: #E7EDF4; border: 1px solid #061932; border-radius: 50%;"
                                        width="20px;" height="20px;" alt="" srcset="">
                                </div>
                                <div class="text-dark rounded px-3 py-1 ml-3"
                                    style="background-color: #DBDCDE; width: fit-content; font-size: 12px;"> Pendataan
                                    Proposal
                                </div>
                            </a>
                            <div class="d-flex mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/Date_range_brown.svg') }}" width="20px;"
                                        alt="" srcset="">
                                    <span class="ml-1 mt-1" style="font-size: 12px;">2024 - 02 - 20</span>
                                </div>
                                <div class="d-flex align-items-center ml-5">
                                    <img src="{{ asset('assets/img/User_alt_fill_brown.svg') }}" alt=""
                                        srcset="">
                                    <span class="ml-1 mt-1" style="font-size: 12px;">Panitia D4-TI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="text-dark" style="font-size: 16px; font-weight: 600;">Akses Fitur</h6>
                <div class="row">
                    <div class="col-3">
                        <div class="d-flex bg-white rounded py-2 px-3">
                            <img src="{{ asset('assets/img/topik.svg') }}" width="25px;" alt=""
                                srcset="">
                            <p style="margin-bottom: 0px; font-size: 12px; font-weight: 600; color: #061932"
                                class="ml-2">
                                Topik Proposal
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex bg-white rounded py-2 px-3">
                            <img src="{{ asset('assets/img/log.svg') }}" width="25px;" alt="" srcset="">
                            <p style="margin-bottom: 0px; font-size: 12px; font-weight: 600; color: #061932"
                                class="ml-2">
                                Log Bimbingan
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex bg-white rounded py-2 px-3">
                            <img src="{{ asset('assets/img/pengaturan.svg') }}" width="25px;" alt=""
                                srcset="">
                            <p style="margin-bottom: 0px; font-size: 12px; font-weight: 600; color: #061932"
                                class="ml-2">
                                Pengaturan
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex bg-white rounded py-2 px-3">
                            <img src="{{ asset('assets/img/FAQ.svg') }}" width="25px;" alt="" srcset="">
                            <p style="margin-bottom: 0px; font-size: 12px; font-weight: 600; color: #061932"
                                class="ml-2">
                                FAQ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customStyle')
    <style>
        .progress-steps {
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
        }

        .step {
            display: flex;
            align-items: flex-start;
            position: relative;
            margin-bottom: 20px;
        }

        .step img {
            z-index: 1;
        }

        .step div {
            margin-left: 10px;
        }

        .progress-steps:before {
            content: "";
            position: absolute;
            top: 0;
            left: 12.5px;
            width: 2px;
            height: 88%;
            background: #ddd;
            z-index: 0;
        }

        .step.completed img,
        .step.active img {
            filter: brightness(1.2);
        }

        .step.active:before,
        .step.completed:before {
            background: #007bff;
        }

        .overlay-circle-offline {
            width: 10px;
            height: 10px;
            border-radius: 100%;
            background-color: #2F80ED;
        }

        .overlay-circle-wa {
            width: 10px;
            height: 10px;
            border-radius: 100%;
            background-color: #27AE60;
        }

        .overlay-circle-online {
            width: 10px;
            height: 10px;
            border-radius: 100%;
            background-color: #F6C23E;
        }
    </style>
@endpush
@push('customScript')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.getElementById('toggleReminder').addEventListener('change', function() {
            if (this.checked) {
                console.log('Toggle is ON');
            } else {
                console.log('Toggle is OFF');
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['', '', '', '', '', '', '', '', '', '', '', ''],
                datasets: [{
                        label: 'Offline',
                        data: [5, 10, 15, 20, 25, 20, 15, 10, 5, 10, 15, 20],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(47, 128, 237, 0.1)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 0
                    },
                    {
                        label: 'WhatsApp',
                        data: [15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'transparent',
                        borderDash: [5, 5],
                        fill: true,
                        tension: 0.4,
                        pointRadius: 0
                    },
                    {
                        label: 'Online',
                        data: [10, 20, 10, 15, 25, 10, 5, 15, 20, 25, 10, 15],
                        borderColor: 'rgba(255, 206, 86, 1)',
                        backgroundColor: 'transparent',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        ticks: {
                            display: false,
                        },
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            max: 30
                        }
                    }]
                },
                legend: {
                    display: true,
                    labels: {
                        usePointStyle: false
                    }
                },
                elements: {
                    point: {
                        radius: 0
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                }
            }
        });
    </script>
@endpush
