<!-- Modal Konfirmasi Skripsi -->
<div class="modal fade" id="konfirmasiSkripsiModal" tabindex="-1" role="dialog"
    aria-labelledby="konfirmasiSkripsiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 0px !important;">
                <h5 class="modal-title text-center" id="konfirmasiSkripsiModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="text-center w-100">
                <div style="background-color: #E7EDF4; padding: 12px; border-radius: 50%; display: inline-block;"
                    class="mb-2">
                    <i class="fas fa-info-circle" style="font-size: 25px; color: #11468F"></i>
                </div>
                <h5 class="modal-title mt-2 text-dark" id="konfirmasiSkripsiModalLabel">Konfirmasi Pendaftaran Seminar
                </h5>
                <p class="px-5">Pastikan berkas Anda sudah benar. Apakah Anda ingin melanjutkan pendaftaran?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary rounded-lg" data-dismiss="modal"
                    style="width: 137px;">Batal</button>
                <button type="button" id="sudahDisimpan" class="btn btn-primary rounded-lg"
                    style="width: 137px;">Lanjut</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Detail Bimbingan -->
<div class="modal fade" id="lihatRevisiPengujiModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatRevisiPengujiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between" style="padding-bottom: 10px;">
                <h6 class="modal-title text-dark" id="lihatRevisiPengujiModalLabel">Detail Log Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-left: 25px !important;">
                <li class="nav-item">
                    <a class="nav-link active" id="dosen1-tab" data-toggle="tab" href="#dosen1" role="tab"
                        aria-controls="dosen1" aria-selected="true">Penguji 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dosen2-tab" data-toggle="tab" href="#dosen2" role="tab"
                        aria-controls="dosen2" aria-selected="false">Penguji 2</a>
                </li>
            </ul>
            <div class="modal-body rounded" style="background-color: #FCFDFD;">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dosen1" role="tabpanel" aria-labelledby="dosen1-tab">
                        <div class="row" style="margin-bottom: 0px !important;">
                            <label for="detailDosenPembimbing" class="col-sm-4 col-form-label text-dark"
                                style="font-weight: 600 !important;">Dosen
                                Pembimbing</label>
                            <div class="col-sm-8">
                                <p id="detailDosenPembimbing" class="form-control-plaintext">Ade Ismail S.Kom., M.TI</p>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                        <div class="row">
                            <label for="detailWaktuTanggal" class="col-sm-4 col-form-label text-dark"
                                style="font-weight: 600 !important;">Revisi
                                Penguji:</label>
                            <div class="col-sm-8">
                                <div>
                                    <ul style="margin-left: -30px; color: black;">
                                        <li>Lorem ipsum dolor sit amet consectetur. Morbi faucibus eu at ullamcorper
                                            rutrum iaculis sed. Volutpat egestas lectus sit venenatis nec. Euismod cras
                                            ac laoreet quis nascetur. Urna vestibulum pharetra enim maecenas adipiscing
                                            felis et velit et. d</li>
                                        <li>Lorem ipsum dolor sit amet consectetur. Morbi faucibus eu at ullamcorper
                                            rutrum iaculis sed. Volutpat egestas lectus sit venenatis nec. Euismod cras
                                            ac laoreet quis nascetur. Urna vestibulum pharetra enim maecenas adipiscing
                                            felis et velit et. d</li>
                                        <li>Lorem ipsum dolor sit amet consectetur. Morbi faucibus eu at ullamcorper
                                            rutrum iaculis sed. Volutpat egestas lectus sit venenatis nec. Euismod cras
                                            ac laoreet quis nascetur. Urna vestibulum pharetra enim maecenas adipiscing
                                            felis et velit et. d</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                    </div>
                    <div class="tab-pane fade" id="dosen2" role="tabpanel" aria-labelledby="dosen2-tab">
                        <div class="row">
                            <label for="detailDosenPembimbing" class="col-sm-4 col-form-label text-dark"
                                style="font-weight: 600 !important;">Dosen
                                Pembimbing</label>
                            <div class="col-sm-8">
                                <p id="detailDosenPembimbing" class="form-control-plaintext">Ade Ismail S.Kom., M.TI
                                </p>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                        <div class="row">
                            <label for="detailWaktuTanggal" class="col-sm-4 col-form-label text-dark"
                                style="font-weight: 600 !important;">Revisi Penguji</label>
                            <div class="col-sm-8">
                                <div>
                                    <ul style="margin-left: -30px; color: black;">
                                        <li>Lorem ipsum dolor sit amet consectetur. Morbi faucibus eu at ullamcorper
                                            rutrum iaculis sed. Volutpat egestas lectus sit venenatis nec. Euismod cras
                                            ac laoreet quis nascetur. Urna vestibulum pharetra enim maecenas adipiscing
                                            felis et velit et. d</li>
                                        <li>Lorem ipsum dolor sit amet consectetur. Morbi faucibus eu at ullamcorper
                                            rutrum iaculis sed. Volutpat egestas lectus sit venenatis nec. Euismod cras
                                            ac laoreet quis nascetur. Urna vestibulum pharetra enim maecenas adipiscing
                                            felis et velit et. d</li>
                                        <li>Lorem ipsum dolor sit amet consectetur. Morbi faucibus eu at ullamcorper
                                            rutrum iaculis sed. Volutpat egestas lectus sit venenatis nec. Euismod cras
                                            ac laoreet quis nascetur. Urna vestibulum pharetra enim maecenas adipiscing
                                            felis et velit et. d</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
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
            <h1 class="text-head-sim">Skripsi</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12" id="alertContainer">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="col-12 bg-white rounded py-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="proposal-tab" data-toggle="tab" href="#proposal" role="tab"
                            aria-controls="proposal" aria-selected="true">Proposal <i class="fas fa-check-circle"
                                id="check-proposal" style="display: none;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab"
                            aria-controls="daftar" aria-selected="false">Pendaftaran Seminar<i
                                class="fas fa-check-circle" style="display: none;" id="check-daftar"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="laksana-tab" data-toggle="tab" href="#laksana" role="tab"
                            aria-controls="laksana" aria-selected="false">Pelaksanaan Seminar<i
                                class="fas fa-check-circle" style="display: none;" id="check-laksana"></i></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="proposal" role="tabpanel"
                        aria-labelledby="proposal-tab">
                        <div class="px-3 py-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Detail
                                Proposal
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Silahkan lengkapi detail proposal skripsi anda
                            </p>
                            <div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Jenis Proposal</h5>
                                        <select class="form-control form-information" name="" id="">
                                            <option value="">Pilih Jenis Proposal</option>
                                            <option value="">Penelitian</option>
                                            <option value="">Pengembangan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Tahapan Proposal</h5>
                                        <select class="form-control form-information" name="" id="">
                                            <option value="">Pilih Tahapan Proposal</option>
                                            <option value="">Tahapan 1</option>
                                            <option value="">Tahapan 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Tipe Proposal</h5>
                                        <select class="form-control form-information" name="" id="">
                                            <option value="">Pilih Tipe Proposal</option>
                                            <option value="">Tipe 1</option>
                                            <option value="">Tipe 2</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Bidang Topik</h5>
                                        <select class="form-control form-information" name="" id="">
                                            <option value="">Pilih Bidang Topik Proposal</option>
                                            <option value="">Bidang 1</option>
                                            <option value="">Bidang 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Dosen Pembimbing</h5>
                                        <select class="form-control form-information" name="" id="">
                                            <option value="">Pilih Tahapan Proposal</option>
                                            <option value="">Tahapan 1</option>
                                            <option value="">Tahapan 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Judul Proposal</h5>
                                        <input class="form-control form-information" type="text"
                                            placeholder="Masukan Judul Proposal">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Abstrak/Deskripsi</h5>
                                        <textarea name="" id="" style="height: 137px;" class="form-control form-information"
                                            placeholder="Tuliskan deskripsi topik proposal anda disini"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Repo Dokumen</h5>
                                        <div class="input-container">
                                            <img src="{{ asset('../assets/img/link_alt.svg') }}" alt="Search"
                                                class="search-icon">
                                            <input type="text" class="form-control icon form-information"
                                                placeholder="Buat link repository untuk dokumen proposal. (contoh: Google Drive)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Repo Dokumen</h5>
                                        <div class="input-container">
                                            <img src="{{ asset('../assets/img/link_alt.svg') }}" alt="Search"
                                                class="search-icon">
                                            <input type="text" class="form-control icon form-information"
                                                placeholder="Buat link repository untuk aplikasi yang dikembangkan. (contoh: Github)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 style="font-size: 14px; color: black;">Status</h5>
                                        <p>Proposal yang statusnya submit akan masuk ke tahapan selanjutnya.</p>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input mb-1" type="radio" name="status"
                                                id="draft" value="draft">
                                            <label class="form-check-label ms-2" for="draft">
                                                DRAFT (Proposal belum diajukan ke calon Dosen Pembimbing)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input mb-1" type="radio" name="status"
                                                id="submit" value="submit">
                                            <label class="form-check-label ms-2" for="submit">
                                                SUBMIT (Proposal sudah diajukan ke Dosen Pembimbing)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="button" class="btn btn-primary px-5 mt-5"
                                    style="margin-left: auto; width:200px;" id="btnSimpanProposal">Simpan</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                        <div class="px-3 py-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Pendaftaran
                                Seminar Proposal
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Pahami syarat dan ketentuan, sebelum
                                mendaftar
                                seminar proposal</p>
                            <div class="rounded py-2" style="border: 1px solid #E7EDF4">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark"
                                        style="font-size: 14px; font-weight: 600 !important; border-bottom:1px solid #E7EDF4">
                                        Tanggal
                                        Penutupan:
                                    </div>
                                    <div class="col text-dark" style="border-bottom:1px solid #E7EDF4">26 November
                                        2023 -
                                        2
                                        Desember 2023</div>
                                </div>
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark"
                                        style="font-size: 14px; font-weight: 600 !important; border-bottom:1px solid #E7EDF4">
                                        Log Bimbingan:
                                    </div>
                                    <div class="col text-dark" style="border-bottom:1px solid #E7EDF4">Mahasiswa
                                        diharuskan telah
                                        melengkapi Log bimbingan yang sudah disetujui oleh dosen pembimbing minimal 3
                                        kali
                                        sebelum mendaftar seminar proposal</div>
                                </div>
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        Keterangan:
                                    </div>
                                    <div class="col">
                                        <p class="text-dark px-2 rounded"
                                            style="background-color: #EAF2FD; font-size: 14px; font-weight: 600 !important;">
                                            Anda memenuhi syarat untuk mendaftar pada tahap ini</p>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: #FCFDFD; box-shadow: 0px 4px 4px #00000012"
                                class="py-4 px-4 rounded mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('../assets/img/doc.svg') }}" class="mr-4" alt=""
                                        srcset="">
                                    <div>
                                        <h5 style="font-size: 14px; font-weight: 500 !important; margin-bottom: 0px;"
                                            class="text-dark">Detail
                                            Proposal Anda</h5>
                                        <p style="font-size: 14px; font-weight: 500 !important; margin-bottom: -6px;">
                                            Lihat
                                            kembali detail proposal yang telah didaftrakan pada tahap ini</p>
                                        <a href="javascript:void(0);" id="cekproposal"
                                            style="font-size: 12px; font-weight: 600 !important; margin-bottom: 0px; color: #11468F; margin-top: 1000px;">Cek
                                            Proposal <i class="fas fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Berkas
                                    Proposal
                                </h5>
                                <div class="file-upload-container d-flex align-items-center justify-content-between mt-2">
                                    <img src="{{ asset('../assets/img/Export.svg') }}" alt="Upload Icon"
                                        class="upload-icon">
                                    <span class="file-name">No file chosen</span>
                                    <input type="file" id="file-upload" class="file-input"
                                        onchange="updateFileName()">
                                    <label for="file-upload" class="upload-button">Upload</label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Detail
                                    Berkas
                                    Proposal
                                </h5>
                                <div class="rounded mt-2" style="border: 1px solid #E7EDF4">
                                    <div class="row px-3 py-3 text-left">
                                        <div class="col-4 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important;">
                                            Nama Berkas
                                        </div>
                                        <div class="col-4 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important;">Keterangan</div>
                                        <div class="col-4 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important;">Terakhir diperbarui
                                        </div>
                                    </div>
                                    <hr
                                        style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                    <div class="row px-3 py-2 text-left">
                                        <a href="{{ asset('assets/img/proposalskripsi.pdf') }}" target="_blank"
                                            class="col-4" style="color: #11468F">proposalskripsi2024.pdf</a>
                                        <div class="col-4 text-dark">File Proposal Skripsi</div>
                                        <div class="col-4 text-dark">2023 - 12 - 01 12:30:00</div>
                                    </div>
                                    <hr
                                        style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                    <div class="row px-3 py-2 text-left">
                                        <a href="{{ asset('assets/img/proposalskripsi.pdf') }}" target="_blank"
                                            class="col-4" style="color: #11468F">proposalskripsi2024.pdf</a>
                                        <div class="col-4 text-dark">File Proposal Skripsi</div>
                                        <div class="col-4 text-dark">2023 - 12 - 01 12:30:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="button" class="btn btn-primary px-5 mt-5"
                                    style="margin-left: auto; width:200px;" id="btnSimpanDaftar">Daftar
                                    Seminar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="laksana" role="tabpanel" aria-labelledby="laksana-tab">
                        <div class="px-3 py-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Jadwal
                                Seminar
                                Proposal Skripsi
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Pahami dengan detail jadwal seminar
                                proposal skripsi anda sebelum pelaksanaan</p>
                            <div class="rounded" style="border: 1px solid #E7EDF4">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important; ">
                                        Tanggal
                                        Pelaksanaan:
                                    </div>
                                    <div class="col text-dark" style="">15 Desember 2023
                                    </div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important; ">
                                        Waktu Pelaksanaan:
                                    </div>
                                    <div class="col text-dark" style="">10:00 - 10.45
                                        WIB</div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        Tempat:
                                    </div>
                                    <div class="col">
                                        <div class="d-flex">
                                            <p class="text-dark px-2 rounded"
                                                style="font-size: 14px; padding-left: 0px !important; margin-bottom: 0px;">
                                                <img src="{{ asset('../assets/img/meeting-room.svg') }}" alt=""
                                                    srcset=""> Ruang Ekosistem
                                            </p>
                                            <p class="text-dark px-2 rounded"
                                                style="font-size: 14px; margin-bottom: 0px;">
                                                <img src="{{ asset('../assets/img/ph_building.svg') }}" alt=""
                                                    srcset=""> Gedung Sipil & Informatika Lt.6 T
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        ID Proposal:
                                    </div>
                                    <div class="col text-dark">P20001
                                    </div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        Judul Proposal:
                                    </div>
                                    <div class="col text-dark">Analisis Design Website Sistem Jurusan Teknologi
                                        Informasi
                                    </div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        Bidang:
                                    </div>
                                    <div class="col text-dark">UI/UX Design
                                    </div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        Dosen Pemimbing:
                                    </div>
                                    <div class="col text-dark">Anugrah Nur Rahmanto, S.Sn., M.Ds.
                                    </div>
                                </div>
                                <hr
                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                <div class="row px-3 py-2">
                                    <div class="col-2 text-dark" style="font-size: 14px; font-weight: 600 !important;">
                                        Berkas Proposal:
                                    </div>
                                    <div class="col">
                                        <a href="{{ asset('assets/img/proposalskripsi.pdf') }}" target="_blank"
                                            class=" px-2 rounded"
                                            style="font-size: 14px; font-weight: 600 !important; padding-left: 0px !important; margin-bottom: 0px; color: #11468F">
                                            proposalskripsi2024.pdf
                                        </a>
                                        <br>
                                        <a href="{{ asset('assets/img/presentasiseminar.pptx') }}" target="_blank"
                                            class=" px-2 rounded"
                                            style="font-size: 14px; font-weight: 600 !important; padding-left: 0px !important; margin-bottom: 0px; color: #11468F">
                                            presentasiseminar.ppt
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-5">
                                    Pelaksanaan
                                    Seminar Proposal Skripsi
                                </h5>
                                <div class="rounded mt-3" style="border: 1px solid #E7EDF4">
                                    <div class="row px-3 py-2">
                                        <div class="col-2 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important; ">
                                            Keputusan:
                                        </div>
                                        <div class="col text-dark" style="">
                                            <div class="bg-success d-inline-block rounded-lg"
                                                style="color:white; font-size: 12px; padding-left: 12px; padding-right: 12px;">
                                                Telah
                                                Diseminarkan <i class="far fa-check-circle ml-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <hr
                                        style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                    <div class="row px-3 py-2">
                                        <div class="col-2 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important; ">
                                            Judul Proposal:
                                        </div>
                                        <div class="col text-dark" style="">
                                            <div class="d-flex align-items-center">
                                                Analisis Design Website Sistem Jurusan Teknologi Informasi
                                                <a href=""
                                                    style="text-decoration: none; color: #2360B2; font-size: 12px;"
                                                    class="ml-3">edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr
                                        style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                    <div class="row px-3 py-2">
                                        <div class="col-2 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important;">
                                            Revisi Penguji:
                                        </div>
                                        <div class="col">
                                            <a href="javascript:void(0);" id="lihatSelengkapnyaLink"
                                                style="font-size: 12px; font-weight: 600 !important; margin-bottom: 0px; color: #11468F; margin-top: 1000px;">Lihat
                                                Selengkapnya <i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <hr
                                        style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                    <div class="row px-3 py-2">
                                        <div class="col-2 text-dark"
                                            style="font-size: 14px; font-weight: 600 !important;">
                                            Berita Acara:
                                        </div>
                                        <div class="col text-dark"><a href="{{ asset('assets/img/beritaacara.pdf') }}"
                                                target="_blank"
                                                style="font-size: 14px; margin-bottom: 0px; color: #11468F; margin-top: 1000px;">beritaacara2024.pdf</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-5">Revisi
                                    Proposal Skripsi
                                </h5>
                                <p style="font-size: 12px;" class="my-2">Unggah hasil revisi proposal berdasarkan
                                    catatan pembahas dalam seminar.</p>
                                <div>
                                    <div class="">
                                        <div
                                            class="file-upload-container d-flex align-items-center justify-content-between mt-3">
                                            <img src="{{ asset('../assets/img/Export.svg') }}" alt="Upload Icon"
                                                class="upload-icon">
                                            <span class="file-name">No file chosen</span>
                                            <input type="file" id="file-upload" class="file-input"
                                                onchange="updateFileName()">
                                            <label for="file-upload" class="upload-button">Upload</label>
                                        </div>
                                        <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">
                                            Detail Berkas Revisi Proposal
                                        </h5>
                                        <div class="mt-4">
                                            <div class="rounded mt-2" style="border: 1px solid #E7EDF4">
                                                <div class="row px-3 py-3 text-left">
                                                    <div class="col-4 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">
                                                        Nama Berkas
                                                    </div>
                                                    <div class="col-4 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">
                                                        Keterangan
                                                    </div>
                                                    <div class="col-4 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">Terakhir
                                                        diperbarui</div>
                                                </div>
                                                <hr
                                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                                <div class="row px-3 py-2 text-left">
                                                    <a href="{{ asset('assets/img/proposalskripsi.pdf') }}"
                                                        target="_blank" class="col-4"
                                                        style="color: #11468F; text-decoration: none;">proposalskripsi2024.pdf
                                                    </a>
                                                    <div class="col-4 text-dark">File Proposal Skripsi</div>
                                                    <div class="col-4 text-dark">2023 - 12 - 01 12:30:00</div>
                                                </div>
                                                <hr
                                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                                <div class="row px-3 py-2 text-left">
                                                    <a href="{{ asset('assets/img/proposalskripsi.pdf') }}"
                                                        target="_blank" class="col-4"
                                                        style="color: #11468F; text-decoration: none;">proposalskripsi2024.pdf
                                                    </a>
                                                    <div class="col-4 text-dark">File Proposal Skripsi</div>
                                                    <div class="col-4 text-dark">2023 - 12 - 01 12:30:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-5">
                                            Final Revisi Proposal Skripsi
                                        </h5>
                                        <p style="font-size: 12px;" class="my-2">Unggah final revisi proposal
                                            beserta
                                            lembar pengesahan.</p>
                                        <div
                                            class="file-upload-container d-flex align-items-center justify-content-between mt-3">
                                            <img src="{{ asset('../assets/img/Export.svg') }}" alt="Upload Icon"
                                                class="upload-icon">
                                            <span class="file-name">No file chosen</span>
                                            <input type="file" id="file-upload" class="file-input"
                                                onchange="updateFileName()">
                                            <label for="file-upload" class="upload-button">Upload</label>
                                        </div>
                                        <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">
                                            Detail Berkas Final Revisi Proposal
                                        </h5>
                                        <div class="mt-4">
                                            <div class="rounded mt-2" style="border: 1px solid #E7EDF4">
                                                <div class="row px-3 py-3 text-left">
                                                    <div class="col-3 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">
                                                        Nama Berkas
                                                    </div>
                                                    <div class="col-3 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">
                                                        Keterangan
                                                    </div>
                                                    <div class="col-3 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">Terakhir
                                                        diperbarui</div>
                                                    <div class="col-3 text-dark"
                                                        style="font-size: 14px; font-weight: 600 !important;">Status
                                                    </div>
                                                </div>
                                                <hr
                                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                                <div class="row px-3 py-2 text-left">
                                                    <a href="{{ asset('assets/img/proposalskripsi.pdf') }}"
                                                        target="_blank" class="col-3"
                                                        style="color: #11468F; text-decoration: none;">proposalskripsi2024.pdf
                                                    </a>
                                                    <div class="col-3 text-dark">File Proposal Skripsi</div>
                                                    <div class="col-3 text-dark">2023 - 12 - 01 12:30:00</div>
                                                    <div class="col-3 text-dark">
                                                        <div class="bg-success d-inline-block rounded-lg"
                                                            style="color:white; font-size: 12px; font-weight: 600 !important; padding-left: 12px; padding-right: 12px;">
                                                            Diterima
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr
                                                    style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                                                <div class="row px-3 py-2 text-left">
                                                    <a href="{{ asset('assets/img/proposalskripsi.pdf') }}"
                                                        target="_blank" class="col-3"
                                                        style="color: #11468F; text-decoration: none;">proposalskripsi2024.pdf
                                                    </a>
                                                    <div class="col-3 text-dark">File Proposal Skripsi</div>
                                                    <div class="col-3 text-dark">2023 - 12 -01 12:30:00</div>
                                                    <div class="col-3 text-dark">
                                                        <div class="bg-success d-inline-block rounded-lg"
                                                            style="color:white; font-size: 12px; font-weight: 600 !important; padding-left: 12px; padding-right: 12px;">
                                                            Diterima</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        .nav-tabs {
            display: flex;
            justify-content: left;
            border-bottom: 1 px solid #B5B7BA;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            color: #B5B7BA;
            font-weight: 500 !important;
        }

        .nav-tabs .nav-link.active {
            border-color: #11468F;
            color: #000;
            font-weight: 600 !important;
        }

        .nav-tabs .nav-link.active #check-proposal,
        #check-daftar,
        #check-laksana {
            color: green;
        }

        .nav-tabs .nav-link:not(.active) {
            border-color: #B5B7BA;
            color: #B5B7BA !important;
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

        .input-container {
            position: relative;
        }

        #check-proposal,
        #check-daftar,
        #check-laksana {
            color: #B5B7BA;
        }

        .form-control.icon {
            padding-left: 40px !important;
        }

        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .form-check-label {
            font-size: 14px;
            color: #000;
            font-weight: 600 !important;
        }

        .file-upload-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 8px;
            width: 100%;
        }

        .upload-icon {
            margin-right: 10px;
        }

        .file-name {
            flex-grow: 1;
            margin-right: 10px;
            color: #11468F;
        }

        .file-input {
            display: none;
        }

        .upload-button {
            text-align: center;
            background-color: #11468F;
            color: #FFFFFF;
            padding: 4px 20px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 0px;
            width: 137px;
        }

        .upload-button:hover {
            background-color: #0d356b;
        }
    </style>
@endpush
@push('customScript')
    <script>
        $('#btnSimpanProposal').click(function() {
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

                // Automatically hide the alert after 5 seconds
                setTimeout(function() {
                    $('.alert').alert('close');
                }, 1000);
            }, 500);
        });
    </script>
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
        document.getElementById('btnSimpanProposal').addEventListener('click', function() {
            var checkIcon = document.getElementById('check-proposal');
            checkIcon.style.display = 'inline-block';
            checkIcon.classList.add('visible');

            var nextTab = new bootstrap.Tab(document.getElementById('daftar-tab'));
            nextTab.show();
        });

        document.querySelectorAll('.nav-link').forEach(function(tab) {
            tab.addEventListener('click', function() {
                var checkIcon = document.getElementById('check-proposal');
                if (checkIcon.classList.contains('visible')) {
                    checkIcon.style.display = 'inline-block';
                } else {
                    checkIcon.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        document.getElementById('sudahDisimpan').addEventListener('click', function() {
            var checkIcon = document.getElementById('check-daftar');
            checkIcon.style.display = 'inline-block';
            checkIcon.classList.add('visible');

            $('#konfirmasiSkripsiModal').modal('hide');

            var nextTab = new bootstrap.Tab(document.getElementById('laksana-tab'));
            nextTab.show();
        });

        document.querySelectorAll('.nav-link').forEach(function(tab) {
            tab.addEventListener('click', function() {
                var checkIcon = document.getElementById('check-daftar');
                if (checkIcon.classList.contains('visible')) {
                    checkIcon.style.display = 'inline-block';
                } else {
                    checkIcon.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        function updateFileName() {
            const fileInput = document.getElementById('file-upload');
            const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file chosen';
            document.querySelector('.file-name').textContent = fileName;
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#btnSimpanDaftar").click(function() {
                $("#konfirmasiSkripsiModal").modal('show');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#cekproposal").click(function() {
                $('#proposal-tab').tab('show');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#lihatSelengkapnyaLink').click(function() {
                $('#lihatRevisiPengujiModal').modal('show');
            });
        });
    </script>
@endpush
