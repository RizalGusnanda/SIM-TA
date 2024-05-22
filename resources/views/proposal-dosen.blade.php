<!-- Filter Modal -->
<div class="modal fade" id="filterProposalModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-right" role="document">
        <div class="modal-content" style="width: 360px;">
            <div class="modal-header" style="padding-bottom: 0px;">
                <h5 class="modal-title text-dark" id="filterModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-dark mb-2">Status</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="diterimaRadio" value="Diterima">
                    <label class="form-check-label text-dark" for="diterimaRadio">
                        Diterima
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="status" id="ditolakRadio" value="Ditolak">
                    <label class="form-check-label text-dark" for="ditolakRadio">
                        Ditolak
                    </label>
                </div>
                <hr>
                <h6 class="text-dark">Program Studi</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prodi" id="allProdiRadio" value="allProdi">
                    <label class="form-check-label text-dark" for="allProdiRadio">
                        Semua Program Studi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prodi" id="SIBRadio" value="SIB">
                    <label class="form-check-label text-dark" for="SIBRadio">
                        D-IV SIB
                    </label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="prodi" id="TIRadio" value="TI">
                    <label class="form-check-label text-dark" for="TIRadio">
                        D-IV TI
                    </label>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary btn-block">Terapkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Detail Daftar Bimbingan -->
<div class="modal fade" id="lihatDetailDaftarModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatDetailDaftarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatDetailDaftarModalLabel">Detail Mahasiswa Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #FCFDFD">
                <div class="form-group row with-underline">
                    <label for="detailDaftarMahasiswa" class="col-3 col-form-label text-dark">
                        Nama Mahasiswa:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarMahasiswa" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarNIM" class="col-3 col-form-label text-dark">
                        NIM:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarNIM" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarProdi" class="col-3 col-form-label text-dark">
                        Program Studi:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarProdi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarJenis" class="col-3 col-form-label text-dark">Jenis:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarJenis" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarJudul" class="col-3 col-form-label text-dark">Judul:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarJudul" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarDeskripsi" class="col-3 col-form-label text-dark">Deskripsi:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarDeskripsi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDeskripsiMahasiswa" class="col-3 col-form-label text-dark">Bidang Topik:</label>
                    <div class="col-sm-8">
                        <div class="d-flex">
                            <div class="py-1 px-2 rounded"
                                style="font-size: 12px; font-weight: 500; background-color: #E0ECFC; color: #102D53;">
                                Machine Learning
                            </div>
                            <div class="py-1 px-2 rounded ml-2"
                                style="font-size: 12px; font-weight: 500; background-color: #E0ECFC; color: #102D53;">
                                Keamanan Jaringan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarDosen" class="col-3 col-form-label text-dark">Dosen Pembimbing:</label>
                    <div class="col-sm-8">
                        <p id="detailDaftarDosen" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDaftarStatus" class="col-3 col-form-label text-dark">Status
                        Bimbingan:</label>
                    <div class="col-sm-8 d-flex align-items-center">
                        <div class="form-check mr-3">
                            <input type="radio" id="statusDiterima" name="statusBimbingan" value="diterima"
                                class="form-check-input">
                            <label for="statusDiterima" class="form-check-label text-success">Diterima</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="statusDitolak" name="statusBimbingan" value="ditolak"
                                class="form-check-input">
                            <label for="statusDitolak" class="form-check-label text-danger">Ditolak</label>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="button" class="btn px-5"
                        style="width:130px;  border: 1px solid #11468F; color:#11468F;"
                        data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ml-2" style="width:130px;"
                        id="">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Detail Seminar Bimbingan -->
<div class="modal fade" id="lihatDetailSeminarModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatDetailSeminarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatDetailSeminarModalLabel">Detail Mahasiswa Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #FCFDFD">
                <div class="row with-underline">
                    <label for="detailSeminarWaktu" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Waktu dan Tanggal:</label>
                    <div class="col-sm-8">
                        <div class="d-flex">
                            <p class="text-dark px-2 rounded"
                                style="font-size: 14px; padding-left: 0px !important; margin-bottom: 0px;">
                                <img src="{{ asset('../assets/img/Date_range.svg') }}" alt="" srcset="">
                                Selasa, 15 Desember 2023
                            </p>
                            <p class="text-dark px-2 rounded" style="font-size: 14px; margin-bottom: 0px;">
                                <img src="{{ asset('../assets/img/Timer.svg') }}" alt="" srcset="">
                                10.00 - 10.45 WIB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailTempatSeminar" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Tempat:</label>
                    <div class="col-sm-8">
                        <div class="d-flex">
                            <p class="text-dark px-2 rounded"
                                style="font-size: 14px; padding-left: 0px !important; margin-bottom: 0px;">
                                <img src="{{ asset('../assets/img/meeting-room.svg') }}" alt=""
                                    srcset="">
                                Ruang Ekosistem
                            </p>
                            <p class="text-dark px-2 rounded" style="font-size: 14px; margin-bottom: 0px;">
                                <img src="{{ asset('../assets/img/ph_building.svg') }}" alt=""
                                    srcset="">
                                Gedung Sipil & Informatika Lt.6 T
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailNamaSeminar" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Nama:</label>
                    <div class="col-sm-8">
                        <p id="detailNamaSeminar" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarNIM" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        NIM:</label>
                    <div class="col-sm-8">
                        <p id="detailSeminarNIM" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarProdi" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Program Studi:</label>
                    <div class="col-sm-8">
                        <p id="detailSeminarProdi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarJenis" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Jenis:</label>
                    <div class="col-sm-8">
                        <p id="detailSeminarJenis" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarJudul" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Judul:</label>
                    <div class="col-sm-8">
                        <p id="detailSeminarJudul" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarMahasiswa" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Bidang Topik:</label>
                    <div class="col-sm-8 col-form-label">
                        <div class="d-flex">
                            <div class="py-1 px-2 rounded"
                                style="font-size: 12px; font-weight: 500; background-color: #E0ECFC; color: #102D53;">
                                Machine Learning
                            </div>
                            <div class="py-1 px-2 rounded ml-2"
                                style="font-size: 12px; font-weight: 500; background-color: #E0ECFC; color: #102D53;">
                                Keamanan Jaringan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarDosen" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Dosen Pembimbing:</label>
                    <div class="col-sm-8">
                        <p id="detailSeminarDosen" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarDosen" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Berkas Proposal:</label>
                    <div class="col-sm-8 col-form-label">
                        <a href="{{ asset('assets/img/proposalskripsi.pdf') }}" target="_blank" class=" px-2 rounded"
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
                <div class="row with-underline">
                    <label for="detailSeminarDosen" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Dosen Pembahas:</label>
                    <div class="col-sm-8 col-form-label text-dark">
                        <div>1. Yoppy Yunhasnawa, S.ST., M.Sc.</div>
                        <div>2. Habibie Ed Dien, S.Kom., M.T.</div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarMahasiswa" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Keputusan Sidang:</label>
                    <div class="col-sm-8 col-form-label">
                        <div class="py-1 px-2 rounded bg-success"
                            style="font-size: 12px; font-weight: 500; color: #FFFFFF; width: fit-content;">
                            Telah Diseminarkan
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailSeminarMahasiswa" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Revisi Penguji:</label>
                    <div class="col-sm-8 col-form-label">
                        <a href="javascript:void(0);" id="lihat-revisi-proposal"
                            style="text-decoration: none; font-size: 12px; color: #11468F;">Lihat Revisi Proposal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Revisi Bimbingan -->
<div class="modal fade" id="lihatRevisiBimbinganModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatRevisiBimbinganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg custom-modal-dialog" role="document">
        <div class="modal-content custom-modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between" style="padding-bottom: 10px;">
                <h6 class="modal-title text-dark" id="lihatRevisiBimbinganModalLabel">Detail Log Bimbingan</h6>
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
                    <div class="tab-pane fade show active" id="dosen1" role="tabpanel"
                        aria-labelledby="dosen1-tab">
                        <div class="row" style="margin-bottom: 0px !important;">
                            <label for="detailDosenPembimbing" class="col-3 col-form-label text-dark"
                                style="font-weight: 600 !important;">Dosen
                                Pembimbing</label>
                            <div class="col">
                                <p id="detailDosenPembimbing" class="form-control-plaintext">Ade Ismail S.Kom., M.TI
                                </p>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                        <div class="row" style="margin-bottom: 0px !important;">
                            <label for="detailNilaiPembimbing" class="col-3 col-form-label text-dark"
                                style="font-weight: 600 !important;">Nilai:</label>
                            <div class="col col-form-label">
                                <div class="table-responsive">
                                    <table class="table rounded" style="color: #000; padding-right: 100px;">
                                        <thead>
                                            <tr>
                                                <td style="border:1px solid #000;">
                                                    Kesiapan
                                                </td>
                                                <td style="border:1px solid #000;">Kemampuan</td>
                                                <td style="border:1px solid #000;">Metodologi</td>
                                                <td style="border:1px solid #000;">Laporan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                        <div class="row">
                            <label for="detailWaktuTanggal" class="col-3 col-form-label text-dark"
                                style="font-weight: 600 !important;">Revisi
                                Penguji:</label>
                            <div class="col">
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
                        <div class="row" style="margin-bottom: 0px !important;">
                            <label for="detailDosenPembimbing" class="col-3 col-form-label text-dark"
                                style="font-weight: 600 !important;">Dosen
                                Pembimbing</label>
                            <div class="col">
                                <p id="detailDosenPembimbing" class="form-control-plaintext">Ade Ismail S.Kom., M.TI
                                </p>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                        <div class="row" style="margin-bottom: 0px !important;">
                            <label for="detailNilaiPembimbing" class="col-3 col-form-label text-dark"
                                style="font-weight: 600 !important;">Nilai:</label>
                            <div class="col col-form-label">
                                <div class="table-responsive">
                                    <table class="table rounded" style="color: #000; padding-right: 100px;">
                                        <thead>
                                            <tr>
                                                <td style="border:1px solid #000;">
                                                    Kesiapan
                                                </td>
                                                <td style="border:1px solid #000;">Kemampuan</td>
                                                <td style="border:1px solid #000;">Metodologi</td>
                                                <td style="border:1px solid #000;">Laporan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                                <td style="border:1px solid #000; text-align: center;">85</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr
                            style="border: 1px solid#E7EDF4; margin-top: 0px !important; margin-bottom: 0px !important;">
                        <div class="row">
                            <label for="detailWaktuTanggal" class="col-3 col-form-label text-dark"
                                style="font-weight: 600 !important;">Revisi
                                Penguji:</label>
                            <div class="col">
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

<!-- Modal Lihat Revisi Proposal Bimbingan -->
<div class="modal fade" id="lihatRevisiProposalModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatRevisiProposalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatRevisiProposalModalLabel">Detail Pelaksanaan Seminar
                    Proposal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #FCFDFD">
                <div class="row with-underline">
                    <label for="detailNamaRevisi" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Nama:</label>
                    <div class="col-sm-8">
                        <p id="detailNamaRevisi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailNIMRevisi" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        NIM:</label>
                    <div class="col-sm-8">
                        <p id="detailNIMRevisi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailProdiRevisi" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Program Studi:</label>
                    <div class="col-sm-8">
                        <p id="detailProdiRevisi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailJudulRevisi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Judul:</label>
                    <div class="col-sm-8">
                        <p id="detailJudulRevisi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailTopikRevisi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Bidang Topik:</label>
                    <div class="col-sm-8 col-form-label">
                        <div class="d-flex">
                            <div class="py-1 px-2 rounded"
                                style="font-size: 12px; font-weight: 500; background-color: #E0ECFC; color: #102D53;">
                                Machine Learning
                            </div>
                            <div class="py-1 px-2 rounded ml-2"
                                style="font-size: 12px; font-weight: 500; background-color: #E0ECFC; color: #102D53;">
                                Keamanan Jaringan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailCatatanRevisi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Catatan Revisi:</label>
                    <div class="col-sm-8">
                        <p id="detailCatatanRevisi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailBerkasRevisi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Berkas Proposal:</label>
                    <div class="col-sm-8 col-form-label">
                        <a href="{{ asset('assets/img/proposalskripsi.pdf') }}" target="_blank" class=" px-2 rounded"
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
                <div class="row with-underline">
                    <label for="detailRevisiStatus" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Status
                        Bimbingan:</label>
                    <div class="col-sm-8 d-flex align-items-center">
                        <div class="form-check mr-3">
                            <input type="radio" id="statusRevisiDiterima" name="statusBimbinganRevisi"
                                value="diterima" class="form-check-input">
                            <label for="statusRevisiDiterima" class="form-check-label text-success">Diterima</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="statusRevisiDitolak" name="statusBimbinganRevisi"
                                value="ditolak" class="form-check-input">
                            <label for="statusRevisiDitolak" class="form-check-label text-danger">Ditolak</label>
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailRevisiCatatan" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Catatan:</label>
                    <div class="col-sm-8 col-form-label text-dark">
                        <input type="text" class="form-control" placeholder="Berikan Catatan"
                            style="background-color: #F2F4F7; color:#858585; border-radius: 8px; ">
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="button" class="btn px-5"
                        style="width:130px;  border: 1px solid #11468F; color:#11468F;"
                        data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ml-2" style="width:130px;"
                        id="">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Revisi Proposal Bimbingan -->
<div class="modal fade" id="lihatValidasiProposalModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatValidasiProposalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatValidasiProposalModalLabel">Detail Validasi Seminar
                    Proposal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #FCFDFD">
                <div class="row with-underline">
                    <label for="detailNamaValidasi" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        Nama:</label>
                    <div class="col-sm-8">
                        <p id="detailNamaValidasi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailNIMValidasi" class="col-3 col-form-label text-dark" style="font-weight: 700">
                        NIM:</label>
                    <div class="col-sm-8">
                        <p id="detailNIMValidasi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailJudulValidasi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Judul:</label>
                    <div class="col-sm-8">
                        <p id="detailJudulValidasi" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailBerkasValidasi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Dokumen Revisi:</label>
                    <div class="col-sm-8 col-form-label">
                        <a href="{{ asset('assets/img/proposalskripsi.pdf') }}" target="_blank" class=" px-2 rounded"
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
                <div class="row with-underline">
                    <label for="detailValidasiStatus" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Status
                        Revisi:</label>
                    <div class="col-sm-8 d-flex align-items-center">
                        <div class="form-check mr-3">
                            <input type="radio" id="statusValidasiDiterima" name="statusBimbinganValidasi"
                                value="diterima" class="form-check-input">
                            <label for="statusValidasiDiterima" class="form-check-label text-success">Diterima</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="statusValidasiDitolak" name="statusBimbinganValidasi"
                                value="ditolak" class="form-check-input">
                            <label for="statusValidasiDitolak" class="form-check-label text-danger">Ditolak</label>
                        </div>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailValidasiCatatan" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Catatan:</label>
                    <div class="col-sm-8 col-form-label text-dark">
                        <input type="text" class="form-control" placeholder="Berikan Catatan"
                            style="background-color: #F2F4F7; color:#858585; border-radius: 8px; ">
                        <p style="font-size: 12px; color: #AAAAAA; margin-bottom: 0px;">Validasi laporan dan pastikan
                            lembar pengesahan sah
                        </p>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailValidasiUsulan" class="col-3 col-form-label text-dark"
                        style="font-weight: 700">Usulan Dosen Pendamping:</label>
                    <div class="col-sm-8 col-form-label text-dark">
                        <select class="form-control" style="background-color: #F2F4F7; color: #AAAAAA;"
                            name="" id="">
                            <option value="">Pilih Dosen Pendamping</option>
                            <option value="">Anugrah Nur Rahmanto, S.Sn., M.Ds.</option>
                            <option value="">Anugrah Nur Rahmanto, S.Sn., M.Ds. 2</option>
                        </select>
                    </div>
                </div>
                <div class="row with-underline">
                    <label for="detailJudulValidasi" class="col-3 col-form-label text-dark"
                        style="font-weight: 700;">Alasan:</label>
                    <div class="col-sm-8 col-form-label">
                        <input type="text" class="form-control" style="background-color: #FFFFFF; color: #AAAAAA;"
                            name="" id="" placeholder="Berikan alasan memilih dosen pendamping">
                        <p style="font-size: 12px; color: #AAAAAA; margin-bottom: 0px;">Usulan bersifat opsional dan
                            akan ditinjau oleh panitia skripsi.
                        </p>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="button" class="btn px-5"
                        style="width:130px;  border: 1px solid #11468F; color:#11468F;"
                        data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary ml-2" style="width:130px;"
                        id="">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.app')
@section('content')
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
                        <a class="nav-link active" id="bimbingan-tab" data-toggle="tab" href="#bimbingan"
                            role="tab" aria-controls="bimbingan" aria-selected="true">Bimbingan Mahasiswa <i
                                class="fas fa-check-circle" id="check-bimbingan" style="display: none;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="seminar-tab" data-toggle="tab" href="#seminar" role="tab"
                            aria-controls="seminar" aria-selected="false">Seminar Proposal<i class="fas fa-check-circle"
                                style="display: none;" id="check-seminar"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="revisi-tab" data-toggle="tab" href="#revisi" role="tab"
                            aria-controls="revisi" aria-selected="false">Revisi Proposal<i class="fas fa-check-circle"
                                style="display: none;" id="check-revisi"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="validasi-tab" data-toggle="tab" href="#validasi" role="tab"
                            aria-controls="validasi" aria-selected="false">Validasi Proposal<i
                                class="fas fa-check-circle" style="display: none;" id="check-revisi"></i></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="bimbingan" role="tabpanel"
                        aria-labelledby="bimbingan-tab">
                        <div class="mb-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Daftar Bimbingan
                                Mahasiswa
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Silakan validasi mahasiswa yang mengajukan Anda
                                sebagai pembimbing utama</p>
                        </div>
                        <div class="text-right">
                            <i class="fas fa-sliders-h text-primary rounded mb-3"
                                style="background-color: #E7EDF4; padding: 6px;" data-toggle="modal"
                                data-target="#filterProposalModal"></i>
                        </div>
                        <div class="table-responsive rounded-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Prodi</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Judul</th>
                                        <th>Pembimbing</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>D-IV SIB</td>
                                        <td>Aisyah</td>
                                        <td>Sistem Manajemen Server JTI</td>
                                        <td style="display: none;">20471998128</td>
                                        <td style="display: none;">Penelitian</td>
                                        <td style="display: none;">Sistem yang dapat melakukan tracking terhadap aset serta
                                            dapat menghandle aset atau layanan yang berhubungan dengan server.</td>
                                        <td style="display: none;">Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                        <td>
                                            <div class="d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="background-color: #EAF2FD; color:#11468F;">Utama</div>
                                        </td>
                                        <td>
                                            <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="color:white;">Diterima</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-info daftar"><i class="fas fa-bars"
                                                        style="color: white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>D-IV TI</td>
                                        <td>Putri Maulida</td>
                                        <td>Pengembangan Sistem E-Learning</td>
                                        <td style="display: none;">20938490129</td>
                                        <td style="display: none;">Pengembangan</td>
                                        <td style="display: none;">Sistem yang dapat melakukan tracking terhadap aset serta
                                            dapat menghandle aset atau layanan yang berhubungan dengan server.</td>
                                        <td style="display: none;">Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                        <td>
                                            <div class="d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="background-color: #EAF2FD; color:#11468F;">Utama</div>
                                        </td>
                                        <td>
                                            <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="color:white;">Diterima</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-info daftar"><i class="fas fa-bars"
                                                        style="color: white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between mt-4 align-items-center">
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;"
                                disabled><i class="fas fa-chevron-left mr-3"></i>Sebelumnya</button>
                            <div style="color: #11468F; font-size:12px; font-weight:600;">
                                1 dari 1 halaman
                            </div>
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;">Selanjutnya<i
                                    class="fas fa-chevron-right pl-3"></i></button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="seminar" role="tabpanel" aria-labelledby="seminar-tab">
                        <div class="mb-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Seminar Proposal
                                Mahasiswa
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Silakan validasi mahasiswa yang mengajukan Anda
                                sebagai pembimbing utama</p>
                        </div>
                        <div class="text-right">
                            <i class="fas fa-sliders-h text-primary rounded mb-3"
                                style="background-color: #E7EDF4; padding: 6px;" data-toggle="modal"
                                data-target="#filterProposalModal"></i>
                        </div>
                        <div class="table-responsive rounded-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Prodi</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Judul</th>
                                        <th>Status Penilaian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>D-IV SIB</td>
                                        <td>Aisyah</td>
                                        <td>Sistem Manajemen Server JTI</td>
                                        <td style="display: none;">20417203910</td>
                                        <td style="display: none;">Penelitian</td>
                                        <td style="display: none;">Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                        <td>
                                            <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="color:white;">Telah Diseminarkan</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-info seminar"><i class="fas fa-bars"
                                                        style="color: white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>D-IV SIB</td>
                                        <td>Putri Maulida</td>
                                        <td>Pengembangan Sistem E-Learning</td>
                                        <td style="display: none;">2040100391</td>
                                        <td style="display: none;">Pengembangan</td>
                                        <td style="display: none;">Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                        <td>
                                            <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="color:white;">Telah Diseminarkan</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-info seminar"><i class="fas fa-bars"
                                                        style="color: white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between mt-4 align-items-center">
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;"
                                disabled><i class="fas fa-chevron-left mr-3"></i>Sebelumnya</button>
                            <div style="color: #11468F; font-size:12px; font-weight:600;">
                                1 dari 1 halaman
                            </div>
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;">Selanjutnya<i
                                    class="fas fa-chevron-right pl-3"></i></button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="revisi" role="tabpanel" aria-labelledby="revisi-tab">
                        <div class="mb-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Revisi Proposal
                                Mahasiswa
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Silakan validasi hasil revisi proposal mahasiswa
                            </p>
                        </div>
                        <div class="text-right">
                            <i class="fas fa-sliders-h text-primary rounded mb-3"
                                style="background-color: #E7EDF4; padding: 6px;" data-toggle="modal"
                                data-target="#filterProposalModal"></i>
                        </div>
                        <div class="table-responsive rounded-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Tanggal Submit</th>
                                        <th>Prodi</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Judul</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>2023 - 12 - 20</td>
                                        <td>D-IV SIB</td>
                                        <td>Aisyah</td>
                                        <td>Sistem Informasi Manajemen Server JTI</td>
                                        <td style="display: none;">2931890128</td>
                                        <td style="display: none;">lengkapi laporan tambahkan data yang sudah ada</td>
                                        <td>
                                            <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="color:white;">Diterima</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-info revisi"><i class="fas fa-bars"
                                                        style="color: white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between mt-4 align-items-center">
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;"
                                disabled><i class="fas fa-chevron-left mr-3"></i>Sebelumnya</button>
                            <div style="color: #11468F; font-size:12px; font-weight:600;">
                                1 dari 1 halaman
                            </div>
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;">Selanjutnya<i
                                    class="fas fa-chevron-right pl-3"></i></button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="validasi" role="tabpanel" aria-labelledby="validasi-tab">
                        <div class="mb-2">
                            <h5 style="font-size: 16px; color: #000; margin-bottom: 0px;" class="mt-2">Validasi Proposal
                                Mahasiswa
                            </h5>
                            <p style="font-size: 12px;" class="my-2">Silakan validasi revisi proposal final mahasiswa
                            </p>
                        </div>
                        <div class="text-right">
                            <i class="fas fa-sliders-h text-primary rounded mb-3"
                                style="background-color: #E7EDF4; padding: 6px;" data-toggle="modal"
                                data-target="#filterProposalModal"></i>
                        </div>
                        <div class="table-responsive rounded-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Tanggal Submit</th>
                                        <th>Prodi</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Judul</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>2023 - 12 - 20</td>
                                        <td>D-IV SIB</td>
                                        <td>Aisyah</td>
                                        <td>Sistem Informasi Manajemen Server JTI</td>
                                        <td style="display: none;">2081909390</td>
                                        <td>
                                            <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                style="color:white;">Diterima</div>
                                        </td>
                                        <td>
                                            <div>
                                                <a class="btn btn-info validasi"><i class="fas fa-bars"
                                                        style="color: white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between mt-4 align-items-center">
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;"
                                disabled><i class="fas fa-chevron-left mr-3"></i>Sebelumnya</button>
                            <div style="color: #11468F; font-size:12px; font-weight:600;">
                                1 dari 1 halaman
                            </div>
                            <button class="btn"
                                style="border: 1px solid #11468F; color:#11468F; font-size:12px; font-weight:600;">Selanjutnya<i
                                    class="fas fa-chevron-right pl-3"></i></button>
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

        .modal-dialog-right {
            position: fixed;
            top: 10;
            right: 90;
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
            $('.btn-info.daftar').click(function() {
                var row = $(this).closest('tr');
                var prodi = row.find('td:nth-child(2)').text();
                var namaMahasiswa = row.find('td:nth-child(3)').text();
                var judul = row.find('td:nth-child(4)').text();
                var nim = row.find('td:nth-child(5)').text();
                var jenis = row.find('td:nth-child(6)').text();
                var deskripsi = row.find('td:nth-child(7)').text();
                var dosenPembimbing = row.find('td:nth-child(8)').text();
                var status = row.find('td:nth-child(10)').text();

                if (prodi === "D-IV SIB") {
                    prodi = "D IV - Sistem Informasi Bisnis";
                } else if (prodi === "D-IV TI") {
                    prodi = "D IV Teknik Informatika";
                }

                $('#detailDaftarProdi').text(prodi);
                $('#detailDaftarMahasiswa').text(namaMahasiswa);
                $('#detailDaftarNIM').text(nim);
                $('#detailDaftarJudul').text(judul);
                $('#detailDaftarJenis').text(jenis);
                $('#detailDaftarDeskripsi').text(deskripsi);
                $('#detailDaftarDosen').text(dosenPembimbing);

                if (status.trim() === "Diterima") {
                    $('#statusDiterima').prop('checked', true);
                } else if (status.trim() === "Ditolak") {
                    $('#statusDitolak').prop('checked', true);
                }

                $('#lihatDetailDaftarModal').modal('show');
            });
        });
    </script>
    <script>
        $('.btn-info.seminar').click(function() {
            var row = $(this).closest('tr');
            var prodi = row.find('td:nth-child(2)').text();
            var namaMahasiswa = row.find('td:nth-child(3)').text();
            var judul = row.find('td:nth-child(4)').text();
            var nim = row.find('td:nth-child(5)').text();
            var jenis = row.find('td:nth-child(6)').text();
            var dosenPembimbing = row.find('td:nth-child(7)').text();
            var status = row.find('td:nth-child(8)').text();

            $('#detailSeminarProdi').text(prodi);
            $('#detailNamaSeminar').text(namaMahasiswa);
            $('#detailSeminarJudul').text(judul);
            $('#detailSeminarNIM').text(nim);
            $('#detailSeminarJenis').text(jenis);
            $('#detailSeminarDosen').text(dosenPembimbing);
            $('#detailSeminarStatus').text(status);

            $('#lihatDetailSeminarModal').modal('show');
        });
        $('.btn-info.revisi').click(function() {
            var row = $(this).closest('tr');
            var tanggal = row.find('td:nth-child(2)').text();
            var prodi = row.find('td:nth-child(3)').text();
            var namaMahasiswa = row.find('td:nth-child(4)').text();
            var judul = row.find('td:nth-child(5)').text();
            var nim = row.find('td:nth-child(6)').text();
            var catatanRevisi = row.find('td:nth-child(7)').text();
            var status = row.find('td:nth-child(8) div').text();

            $('#detailNamaRevisi').text(namaMahasiswa);
            $('#detailNIMRevisi').text(nim);
            $('#detailProdiRevisi').text(prodi);
            $('#detailJudulRevisi').text(judul);
            $('#detailCatatanRevisi').text(catatanRevisi);

            if (status.trim() === "Diterima") {
                $('#statusRevisiDiterima').prop('checked', true);
            } else if (status.trim() === "Ditolak") {
                $('#statusRevisiDitolak').prop('checked', true);
            }

            $('#lihatRevisiProposalModal').modal('show');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#lihat-revisi-proposal').click(function(event) {
                event.preventDefault(); // Prevent default behavior of the link

                $('#lihatDetailSeminarModal').on('hidden.bs.modal', function(e) {
                    // When the previous modal is completely hidden, show the next modal
                    $('#lihatRevisiBimbinganModal').modal('show');
                    // Unbind the event to prevent it from firing multiple times
                    $(this).off('hidden.bs.modal');
                }).modal('hide');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.btn-info.validasi').click(function() {
                var row = $(this).closest('tr');
                var tanggal = row.find('td:nth-child(2)').text().trim();
                var prodi = row.find('td:nth-child(3)').text().trim();
                var namaMahasiswa = row.find('td:nth-child(4)').text().trim();
                var judul = row.find('td:nth-child(5)').text().trim();
                var nim = row.find('td:nth-child(6)').text().trim();
                var catatanRevisi = row.find('td:nth-child(7)').text().trim();
                var status = row.find('td:nth-child(8) div').text().trim();

                $('#detailNamaValidasi').text(namaMahasiswa);
                $('#detailNIMValidasi').text(nim);
                $('#detailJudulValidasi').text(judul);

                $('#detailValidasiCatatan input').val(catatanRevisi);

                $('#lihatValidasiProposalModal').modal('show');
            });
        });
    </script>
@endpush
