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
<div class="modal fade" id="detailDosenModal" tabindex="-1" role="dialog" aria-labelledby="detailDosenModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="detailDosenModalLabel">Detail Dosen Pembimbing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="window.open('https://wa.me/6281234567890', '_blank')">Hubungi Dosen</button>
            </div>
        </div>
    </div>
</div>



@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header" style="border-radius: 0px 0px 10px 10px;">
            <h1 class="text-head-sim">Dosen Pembimbing</h1>
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
                        <h6 class="text-dark">Daftar Dosen Pembimbing</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <i class="fas fa-sliders-h text-primary" data-toggle="modal" data-target="#filterModal"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-danger no-border-radius">Kuota Penuh</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Ade Ismail, S.Kom., M.TI.</h6>
                            <p class="mb-2">Internet of Things (IoT) | Keamanan Jaringan</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Ade Ismail, S.Kom., M.TI." data-nip="199107042019023456"
                                        data-nidn="0004009101" data-kuota-bimbingan="5" data-jumlah-bimbingan="5"
                                        data-bidang-keahlian="Internet of Things (IoT), Keamanan Jaringan"
                                        data-usulan-topik="Usulan Topiknya">
                                        Lihat Detail
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-danger no-border-radius">Kuota Penuh</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Agung Nugroho Pramudhita, S.T., M.T.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Agung Nugroho Pramudhita, S.T., M.T." data-nip="198902102019031020"
                                        data-nidn="0010028903" data-kuota-bimbingan="3" data-jumlah-bimbingan="3"
                                        data-bidang-keahlian="UI/UX, Forecasting, SPK" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Ahmadi Yuli Ananta, ST., M.M.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Ahmadi Yuli Ananta, ST., M.M." data-nip="198107052005011002"
                                        data-nidn="0005078102" data-kuota-bimbingan="5" data-jumlah-bimbingan="3"
                                        data-bidang-keahlian="UI/UX, Forecasting, SPK" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Annisa Taufika Firdausi, ST., MT.</h6>
                            <p class="mb-2">Learning Engineering Technology (LET)</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Annisa Taufika Firdausi, ST., MT." data-nip="198712142019032012"
                                        data-nidn="0014128704" data-kuota-bimbingan="5" data-jumlah-bimbingan="1"
                                        data-bidang-keahlian="Learning Engineering Technology (LET)"
                                        data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Arie Rachmad Syulistyo, S.Kom., M.Kom</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Arie Rachmad Syulistyo, S.Kom., M.Kom" data-nip="198708242019031010"
                                        data-nidn="0024088701" data-kuota-bimbingan="5" data-jumlah-bimbingan="1"
                                        data-bidang-keahlian="UI/UX, Forecasting, SPK" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-danger no-border-radius">Kuota Penuh</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Anugrah Nur Rahmanto, S.Sn., M.Ds.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Anugrah Nur Rahmanto, S.Sn., M.Ds." data-nip="199112302019031016"
                                        data-nidn="0030129101" data-kuota-bimbingan="7" data-jumlah-bimbingan="7"
                                        data-bidang-keahlian="UI/UX, Forecasting, SPK" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-danger no-border-radius">Kuota Penuh</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Dian Hanifudin Subhi, S.Kom., M.Kom.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Dian Hanifudin Subhi, S.Kom., M.Kom." data-nip="198806102019031018"
                                        data-nidn="0010068807" data-kuota-bimbingan="7" data-jumlah-bimbingan="7"
                                        data-bidang-keahlian="UI/UX, Forecasting, SPK" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-danger no-border-radius">Kuota Penuh</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Annisa Puspa Kirana, S. Kom, M.Kom</h6>
                            <p class="mb-2">Big Data | Data Mining </p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Annisa Puspa Kirana, S. Kom, M.Kom" data-nip="198901232019032016"
                                        data-nidn="0023018906" data-kuota-bimbingan="7" data-jumlah-bimbingan="7"
                                        data-bidang-keahlian="Big Data, Data Mining" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Eka Larasati Amalia, S.ST., MT.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block lihat-detail"
                                        data-toggle="modal" data-target="#detailDosenModal"
                                        data-gambar="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        data-nama="Eka Larasati Amalia, S.ST., MT." data-nip="198807112015042005"
                                        data-nidn="0011078803" data-kuota-bimbingan="7" data-jumlah-bimbingan="3"
                                        data-bidang-keahlian="UI/UX, Forecasting, SPK" data-usulan-topik="-">
                                        Lihat Detail
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Dhebys Suryani, S.Kom., MT</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block">Lihat Detail</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Budi Harijanto, ST., M.MKom.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block">Lihat Detail</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card px-3 py-3">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img alt="image" width="70px;"
                                        src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="badge badge-info no-border-radius">Tersedia</span>
                                </div>
                            </div>
                            <h6 class="text-dark mb-0">Dimas Wahyu Wibowo, ST., MT.</h6>
                            <p class="mb-2">UI/UX | Forecasting |SPK</p>
                            <a href="#" class="badge badge-cv mb-4" style="width: 60%">
                                <i class="fas fa-file-alt"></i> curriculum-vitae.pdf
                            </a>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-outline-template btn-block">Lihat Detail</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-primary btn-block">Hubungi Dosen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4 align-items-center">
                    <button class="btn"
                        style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;" disabled><i
                            class="fas fa-chevron-left mr-3"></i>Sebelumnya</button>
                    <div style="color: #11468F; font-size:12px; font-weight:600;">
                        1 dari 1 halaman
                    </div>
                    <button class="btn"
                        style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;">Selanjutnya<i
                            class="fas fa-chevron-right pl-3"></i></button>
                </div>
            </div>

        </div>
    </section>
@endsection
@push('customStyle')
    <style>
        .no-border-radius {
            border-radius: 3px !important;
        }

        .badge-cv {
            color: #2360B2 !important;
            background-color: #ffffff !important;
            border: 1px solid #2360B2 !important;
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
            $('.lihat-detail').on('click', function() {
                var modal = $('#detailDosenModal');
                var gambar = $(this).data('gambar');
                var nama = $(this).data('nama');
                var nip = $(this).data('nip');
                var nidn = $(this).data('nidn');
                var kuotaBimbingan = $(this).data('kuota-bimbingan');
                var jumlahBimbingan = $(this).data('jumlah-bimbingan');
                var bidangKeahlian = $(this).data('bidang-keahlian');
                var usulanTopik = $(this).data('usulan-topik');

                var keahlianBadges = bidangKeahlian.split(',').map(function(keahlian) {
                    return `<span class="badge badge-cv me-1 mr-1">${keahlian.trim()}</span>`;
                }).join('');

                modal.find('.modal-body').html(`
            <div class="container-fluid">
                <div class="row text-dark">
                    <div class="col-md-2">
                        <img src="${gambar}" class="rounded-circle" width="80px" alt="Gambar Dosen">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Nama:</strong></p>
                                    <p class="my-auto">${nama}</p>
                                </div>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>NIP:</strong></p>
                                    <p class="my-auto">${nip}</p>
                                </div>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>NIDN:</strong></p>
                                    <p class="my-auto">${nidn}</p>
                                </div>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Kuota Bimbingan:</strong></p>
                                    <p class="my-auto">${kuotaBimbingan}</p>
                                </div>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Jumlah Bimbingan:</strong></p>
                                    <p class="my-auto">${jumlahBimbingan}</p>
                                </div>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Bidang Keahlian:</strong></p>
                                    <p class="my-auto">${keahlianBadges}</p>
                                </div>
                                <hr class="mt-0">
                                <div class="d-flex">
                                    <p class="flex-shrink-0 my-auto" style="width: 150px;"><strong>Usulan Topik:</strong></p>
                                    <p class="my-auto">${usulanTopik}</p>
                                </div>
                                <hr class="mt-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `);
            });
        });
    </script>
@endpush
