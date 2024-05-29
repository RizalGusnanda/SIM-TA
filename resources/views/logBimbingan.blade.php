<!-- Modal Tambah Log Bimbingan -->
<div class="modal fade" id="tambahLogBimbinganModal" tabindex="-1" role="dialog"
    aria-labelledby="tambahLogBimbinganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-dark" id="tambahLogBimbinganModalLabel">Tambah Log Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-modal">
                <form id="logBimbinganForm" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="dosenPembimbing" class="text-dark">Dosen Pembimbing</label>
                        <select class="form-control" id="dosenPembimbing" name="dosen_pembimbing" required>
                            <option value="" disabled selected>Pilih Dosen Pembimbing</option>
                            <option value="1">Anugrah Nur Rahmanto, S.Sn., M.Ds.</option>
                            <option value="2">Kadek Suarjuna Batubulan, S.Kom, MT</option>
                            <option value="2">Endah Septa Sintiya. SPd., MKom.</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="waktuTanggal">Waktu dan Tanggal</label>
                            <input type="datetime-local" class="form-control" id="waktuTanggal" name="waktu_tanggal">
                        </div>
                        <div class="col-md-6">
                            <label for="metodeBimbingan">Metode Bimbingan</label>
                            <select class="form-control" id="metodeBimbingan" name="metode_bimbingan">
                                <option value="" disabled selected>Pilih Metode Bimbingan</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                                <option value="whatsapp">Whatsapp</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="topik">Topik</label>
                        <input type="text" class="form-control" id="topik" name="topik"
                            placeholder="Tuliskan topik pembahasan pada bimbingan">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsikan pembahasan pada bimbingan"
                            style="height: 137px;"></textarea>
                    </div>
                    <div class="modal-footer px-0">
                        <button type="submit" class="btn btn-primary px-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Detail Bimbingan -->
<div class="modal fade" id="lihatDetailBimbinganModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatDetailBimbinganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatDetailBimbinganModalLabel">Detail Log Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row with-underline">
                    <label for="detailDosenPembimbing" class="col-sm-4 col-form-label text-dark">Dosen
                        Pembimbing:</label>
                    <div class="col-sm-8">
                        <p id="detailDosenPembimbing" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailWaktuTanggal" class="col-sm-4 col-form-label text-dark">Waktu dan Tanggal:</label>
                    <div class="col-sm-8">
                        <p id="detailWaktuTanggal" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailMetodeBimbingan" class="col-sm-4 col-form-label text-dark">Metode
                        Bimbingan:</label>
                    <div class="col-sm-8">
                        <span id="detailMetodeBimbingan" class="badge"></span>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailTopik" class="col-sm-4 col-form-label text-dark">Topik:</label>
                    <div class="col-sm-8">
                        <p id="detailTopik" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDeskripsi" class="col-sm-4 col-form-label text-dark">Deskripsi:</label>
                    <div class="col-sm-8">
                        <p id="detailDeskripsi" class="form-control-plaintext"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lihat Detail LOG DOSEN Bimbingan -->
<div class="modal fade" id="lihatDetailLogBimbinganModal" tabindex="-1" role="dialog"
    aria-labelledby="lihatDetailBimbinganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between border-bottom pb-4">
                <h6 class="modal-title text-dark" id="lihatDetailLogBimbinganModalLabel">Detail Log Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row with-underline">
                    <label for="detailLogMahasiswa" class="col-sm-4 col-form-label text-dark">
                        Nama Mahasiswa:</label>
                    <div class="col-sm-8">
                        <p id="detailLogMahasiswa" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailWaktuTanggalMahasiswa" class="col-sm-4 col-form-label text-dark">
                        Waktu dan Tanggal:</label>
                    <div class="col-sm-8">
                        <p id="detailWaktuTanggalMahasiswa" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailMetodeBimbinganMahasiswa" class="col-sm-4 col-form-label text-dark">
                        Metode Bimbingan:</label>
                    <div class="col-sm-8">
                        <span id="detailMetodeBimbinganMahasiswa" class="badge"></span>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailTopikMahasiswa" class="col-sm-4 col-form-label text-dark">Topik:</label>
                    <div class="col-sm-8">
                        <p id="detailTopikMahasiswa" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDeskripsiMahasiswa" class="col-sm-4 col-form-label text-dark">Deskripsi:</label>
                    <div class="col-sm-8">
                        <p id="detailDeskripsiMahasiswa" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailDeskripsi" class="col-sm-4 col-form-label text-dark">Status Bimgingan:</label>
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
                <div class="form-group row with-underline">
                    <label for="detailNilaiMahasiswa" class="col-sm-4 col-form-label text-dark">Nilai:</label>
                    <div class="col-sm-8">
                        <input class="form-control form-information" type="text"
                            placeholder="Beri Penilaian Pada Bimbingan Mahasiswa">
                    </div>
                </div>
                <div class="form-group row with-underline">
                    <label for="detailKomentar" class="col-sm-4 col-form-label text-dark">Komentar:</label>
                    <div class="col-sm-8">
                        <input class="form-control form-information" type="text"
                            placeholder="Beri Komentar Pada Bimbingan Mahasiswa">
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

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="konfirmasiHapusModal" tabindex="-1" role="dialog"
    aria-labelledby="konfirmasiHapusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="konfirmasiHapusModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="text-center w-100">
                <div style="background-color: #FBE7E7; padding: 10px; border-radius: 50%; display: inline-block;"
                    class="mb-2">
                    <i class="fas fa-trash-alt text-danger" style="font-size: 23px;"></i>
                </div>
                <h5 class="modal-title mt-2 text-dark" id="konfirmasiHapusModalLabel">Hapus Data Log Bimbingan</h5>
                <p class="px-5">Apakah Anda yakin ingin melanjutkan? Tindakan ini tidak dapat dibatalkan.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary rounded-lg" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary rounded-lg">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Log Bimbingan -->
<div class="modal fade" id="editLogBimbinganModal" tabindex="-1" role="dialog"
    aria-labelledby="editLogBimbinganModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-dark" id="editLogBimbinganModalLabel">Edit Log Bimbingan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-modal">
                <form id="editLogBimbinganForm" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="editDosenPembimbing" class="text-dark">Dosen Pembimbing</label>
                        <select class="form-control" id="editDosenPembimbing" name="dosen_pembimbing" required>
                            <option value="" disabled selected>Pilih Dosen Pembimbing</option>
                            <option value="1">Anugrah Nur Rahmanto, S.Sn., M.Ds.</option>
                            <option value="2">Kadek Suarjuna Batubulan, S.Kom, MT</option>
                            <option value="2">Endah Septa Sintiya. SPd., MKom.</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="editWaktuTanggal">Waktu dan Tanggal</label>
                            <input type="datetime-local" class="form-control" id="editWaktuTanggal"
                                name="waktu_tanggal">
                        </div>
                        <div class="col-md-6">
                            <label for="editMetodeBimbingan">Metode Bimbingan</label>
                            <select class="form-control" id="editMetodeBimbingan" name="metode_bimbingan">
                                <option value="" disabled selected>Pilih Metode Bimbingan</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                                <option value="whatsapp">Whatsapp</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editTopik">Topik</label>
                        <input type="text" class="form-control" id="editTopik" name="topik">
                    </div>
                    <div class="form-group">
                        <label for="editDeskripsi">Deskripsi</label>
                        <textarea class="form-control" id="editDeskripsi" name="deskripsi" style="height: 137px;"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer px-4">
                <button type="button" class="btn btn-primary px-5" id="btnEditSimpan">Simpan</button>
            </div>
        </div>
    </div>
</div>



@extends('layouts.app')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header" style="border-radius: 0px 0px 10px 10px;">
            <h1 class="text-head-sim">Log Bimbingan</h1>
            <div class="section-header-breadcrumb">
                {{-- <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div> --}}
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12" id="alertContainer">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="d-flex justify-content-between mb-4">
                <h2 class="" style="font-weight: 600; font-size: 16px; margin-top: 10px; color:#000000;">
                    {{ $title }}</h2>
                @role('user')
                    <div class="my-auto items-center btn btn-primary rounded-lg py-1.5"
                        style="letter-spacing: 0px !important;">
                        <i class="fas fa-plus"></i>
                        <a class="text-button-sim active px-4" data-toggle="modal" data-target="#tambahLogBimbinganModal">
                            Tambah</a>
                    </div>
                @endrole
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="bg-white rounded-lg">
                            <div class="show-import" style="display: none">
                                <div class="custom-file">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label class="custom-file-label" for="file-upload">Choose File</label>
                                        <input type="file" id="file-upload" class="custom-file-input"
                                            name="import_file">
                                        <br /> <br />
                                        <div class="footer text-right">
                                            <button class="btn btn-primary">Import File</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="show-search mb-3" style="display: none">
                                <form id="search" method="GET" action="">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">User</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <a class="btn btn-secondary" href="">Reset</a>
                                    </div>
                                </form>
                            </div>
                            @role('user')
                                <div class="table-responsive rounded-lg">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">NO</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Tanggal</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Topik</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Dosen Pembimbing</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Status</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th style="font-size: 14px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size: 14px;">
                                                <td >1</td>
                                                <td>2023-12-20</td>
                                                <td>Laporan Progress BAB 1</td>
                                                <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                                <td style="display: none;">Online</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-warning" id=""><i
                                                                class="fas fa-pencil-alt" style="color: white"></i></a>
                                                        <a class="btn btn-danger" id=""><i class="fas fa-trash"
                                                                style="color: white"></i></a>
                                                        <a class="btn btn-info mahasiswa" id=""><i
                                                                class="fas fa-bars" style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="font-size: 14px;">
                                                <td>2</td>
                                                <td>2024-01-01</td>
                                                <td>Progress BAB 2</td>
                                                <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                                <td style="display: none;">Online</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-warning" id=""><i
                                                                class="fas fa-pencil-alt" style="color: white"></i></a>
                                                        <a class="btn btn-danger" id=""><i class="fas fa-trash"
                                                                style="color: white"></i></a>
                                                        <a class="btn btn-info mahasiswa" id=""><i
                                                                class="fas fa-bars" style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="font-size: 14px;">
                                                <td>3</td>
                                                <td>2024-01-12</td>
                                                <td>Wawancara Responden</td>
                                                <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                                <td style="display: none;">Offline</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-warning" id=""><i
                                                                class="fas fa-pencil-alt" style="color: white"></i></a>
                                                        <a class="btn btn-danger" id=""><i class="fas fa-trash"
                                                                style="color: white"></i></a>
                                                        <a class="btn btn-info mahasiswa" id=""><i
                                                                class="fas fa-bars" style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="font-size: 14px;">
                                                <td>4</td>
                                                <td>2024-01-20</td>
                                                <td>Revisi BAB 2</td>
                                                <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                                <td style="display: none;">Whatsapp</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-warning" id=""><i
                                                                class="fas fa-pencil-alt" style="color: white"></i></a>
                                                        <a class="btn btn-danger" id=""><i class="fas fa-trash"
                                                                style="color: white"></i></a>
                                                        <a class="btn btn-info mahasiswa" id=""><i
                                                                class="fas fa-bars" style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endrole
                            @role('super-admin')
                                <div class="table-responsive rounded-lg">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">NO</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Tanggal</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Prodi</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Nama Mahasiswa</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Topik</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex justify-content-between">
                                                        <span style="font-size: 14px;">Status</span>
                                                        <span style="font-size: 14px;">
                                                            <i class="fas fa-long-arrow-alt-up"></i>
                                                            <i class="fas fa-long-arrow-alt-down"></i>
                                                        </span>
                                                    </div>
                                                </th>
                                                <th style="font-size: 14px;">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size: 14px;">
                                                <td>1</td>
                                                <td>2023-12-21</td>
                                                <td>D-IV SIB</td>
                                                <td>Aisyah</td>
                                                <td>Revisi Bab 1</td>
                                                <td style="display: none;">Online</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-info log"><i class="fas fa-bars"
                                                                style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="font-size: 14px;">
                                                <td>2</td>
                                                <td>2023-12-2</td>
                                                <td>D-IV SIB</td>
                                                <td>Sugeng</td>
                                                <td>Revisi Bab 2</td>
                                                <td style="display: none;">Offline</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-info log"><i class="fas fa-bars"
                                                                style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="font-size: 14px;">
                                                <td>3</td>
                                                <td>2023-12-13</td>
                                                <td>D-IV SIB</td>
                                                <td>Rudolf</td>
                                                <td>Revisi Bab 3</td>
                                                <td style="display: none;">Offline</td>
                                                <td>
                                                    <div class="bg-danger d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Ditolak</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-info log"><i class="fas fa-bars"
                                                                style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="font-size: 14px;">
                                                <td>4</td>
                                                <td>2023-12-15</td>
                                                <td>D-IV SIB</td>
                                                <td>Tegar</td>
                                                <td>Revisi Bab 4</td>
                                                <td style="display: none;">Offline</td>
                                                <td>
                                                    <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                        style="color:white;">Diterima</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-info log"><i class="fas fa-bars"
                                                                style="color: white"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            @endrole
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
@push('customScript')
    <script>
        $(document).ready(function() {
            $('a[data-target="#tambahLogBimbinganModal"]').click(function() {
                $('#tambahLogBimbinganModal').modal('show');
            });

            $('.import').click(function(event) {
                event.stopPropagation();
                $(".show-import").slideToggle("fast");
                $(".show-search").hide();
            });
            $('.search').click(function(event) {
                event.stopPropagation();
                $(".show-search").slideToggle("fast");
                $(".show-import").hide();
            });
            //ganti label berdasarkan nama file
            $('#file-upload').change(function() {
                var i = $(this).prev('label').clone();
                var file = $('#file-upload')[0].files[0].name;
                $(this).prev('label').text(file);
            });

            $('#logBimbinganForm').submit(function(event) {
                event.preventDefault();

                setTimeout(function() {
                    $('#tambahLogBimbinganModal').modal('hide');

                    $('#alertContainer').prepend(`
                    <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
                    <div>
                        <h6 class="text-dark">Sukses</h6>
                        <p class="text-secondary">Data Log berhasil ditambahkan.</p>
                    </div>
                    </div>
                    <button type="button" class="close text-secondary" data-dismiss="alert" aria-label="Close" style="position: absolute; top: 50%; transform: translateY(-50%); right: 1rem;">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    `);

                }, 1000);
            });

            $('.btn-info.mahasiswa').click(function() {
                // Get the data from the selected row
                var row = $(this).closest('tr');
                var dosenPembimbing = row.find('td:nth-child(4)').text();
                var waktuTanggal = row.find('td:nth-child(2)').text();
                var metodeBimbingan = row.find('td:nth-child(5)').text();
                var topik = row.find('td:nth-child(3)').text();
                var deskripsi = 'Deskripsi pembahasan pada bimbingan';

                $('#detailDosenPembimbing').text(dosenPembimbing);
                $('#detailWaktuTanggal').text(waktuTanggal);
                $('#detailTopik').text(topik);
                $('#detailDeskripsi').text(deskripsi);

                // mengatur badge metode bimbingan
                var metodeBadge = $('#detailMetodeBimbingan');
                metodeBadge.removeClass('badge-online badge-online badge-online');
                metodeBadge.empty();

                if (metodeBimbingan.toLowerCase() === 'online') {
                    metodeBadge.addClass('badge-online rounded-lg');
                    metodeBadge.html('<i class="fas fa-video"></i> Online');
                } else if (metodeBimbingan.toLowerCase() === 'offline') {
                    metodeBadge.addClass('badge-online rounded-lg');
                    metodeBadge.html('<i class="fas fa-video-slash"></i> Offline');
                } else if (metodeBimbingan.toLowerCase() === 'whatsapp') {
                    metodeBadge.addClass('badge-online rounded-lg');
                    metodeBadge.html('<i class="fab fa-whatsapp"></i> WhatsApp');
                }

                $('#lihatDetailBimbinganModal').modal('show');
            });

            $('.btn-danger').click(function() {
                var row = $(this).closest('tr');
                var topik = row.find('td:nth-child(3)').text();

                $('#konfirmasiHapusModal').modal('show');

                $('#konfirmasiHapusModal .btn-primary').click(function() {

                    setTimeout(function() {
                        $('#alertContainer').prepend(`
    <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
        <div class="d-flex align-items-center">
            <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
            <div>
                <h6 class="text-dark">Sukses</h6>
                <p class="text-secondary">Data Log berhasil dihapus.</p>
            </div>
        </div>
        <button type="button" class="close text-secondary" data-dismiss="alert" aria-label="Close"
            style="position: absolute; top: 50%; transform: translateY(-50%); right: 1rem;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    `);

                        row.hide();

                        $('#konfirmasiHapusModal').modal('hide');
                    }, 1000);
                });
            });
        });

        $('.btn-warning').click(function() {
            // Get the data from the selected row
            var row = $(this).closest('tr');
            var dosenPembimbing = row.find('td:nth-child(4)').text();
            var waktuTanggal = row.find('td:nth-child(2)').text();
            var metodeBimbingan = row.find('td:nth-child(5)').text();
            var topik = row.find('td:nth-child(3)').text();
            var deskripsi = 'Deskripsi pembahasan pada bimbingan'

            // Set data to the form in edit modal
            $('#editDosenPembimbing').val(dosenPembimbing);
            $('#editWaktuTanggal').val(waktuTanggal);
            $('#editMetodeBimbingan').val(metodeBimbingan);
            $('#editTopik').val(topik);
            $('#editDeskripsi').val(deskripsi);

            $('#editLogBimbinganModal').modal('show');
        });

        $('#btnEditSimpan').click(function() {
            // Menutup modal
            $('#editLogBimbinganModal').modal('hide');

            // Menambahkan alert setelah modal tertutup
            setTimeout(function() {
                $('#alertContainer').prepend(`
    <div class="alert alert-white alert-dismissible fade show" role="alert" style="border-left: 15px solid #2F80ED;">
        <div class="d-flex align-items-center">
            <i class="fas fa-check-circle" style="color: #2F80ED; font-size: 1.5rem; margin-right: 20px;"></i>
            <div>
                <h6 class="text-dark">Sukses</h6>
                <p class="text-secondary">Perubahan pada Log Bimbingan berhasil disimpan.</p>
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
    </script>
    <script>
        $(document).ready(function() {
            $('.btn-info.log').click(function() {
                // Get the closest <tr> element
                var row = $(this).closest('tr');

                // Extract data from the <tr>
                var namaMahasiswa = row.find('td').eq(3).text();
                var waktuTanggal = row.find('td').eq(1).text();
                var topik = row.find('td').eq(4).text();
                var metodeBimbingan = row.find('td').eq(5).text();
                var deskripsi = 'Deskripsi pembahasan pada bimbingan'; // Assuming this is static
                var statusBimbingan = row.find('td').eq(6).text(); // Assuming this is the status
                var nilai = 'Nilai Mengenai bimbingan' // Assuming this is the value for 'Nilai'
                var komentar = 'Komentar mengenai bimbingan'; // Assuming this is static or to be fetched

                // Debugging lines to check extracted data
                console.log('Extracted data:', {
                    namaMahasiswa: namaMahasiswa,
                    waktuTanggal: waktuTanggal,
                    topik: topik,
                    metodeBimbingan: metodeBimbingan,
                    deskripsi: deskripsi,
                    statusBimbingan: statusBimbingan,
                    nilai: nilai,
                    komentar: komentar
                });

                // Populate the modal with the extracted data
                $('#detailLogMahasiswa').text(namaMahasiswa);
                $('#detailWaktuTanggalMahasiswa').text(waktuTanggal);
                $('#detailTopikMahasiswa').text(topik);
                $('#detailDeskripsiMahasiswa').text(deskripsi);

                // Update the badge for metode bimbingan
                var metodeBadge = $('#detailMetodeBimbinganMahasiswa');
                metodeBadge.removeClass('badge-online badge-warning badge-success');
                metodeBadge.empty();

                if (metodeBimbingan.toLowerCase() === 'online') {
                    metodeBadge.addClass('badge-online rounded-lg');
                    metodeBadge.html('<i class="fas fa-video"></i> Online');
                } else if (metodeBimbingan.toLowerCase() === 'offline') {
                    metodeBadge.addClass('badge-online rounded-lg');
                    metodeBadge.html('<i class="fas fa-video-slash"></i> Offline');
                } else if (metodeBimbingan.toLowerCase() === 'whatsapp') {
                    metodeBadge.addClass('badge-success rounded-lg');
                    metodeBadge.html('<i class="fab fa-whatsapp"></i> WhatsApp');
                }

                // Set the status radio buttons
                if (statusBimbingan.trim().toLowerCase() === 'diterima') {
                    $('#statusDiterima').prop('checked', true);
                } else if (statusBimbingan.trim().toLowerCase() === 'ditolak') {
                    $('#statusDitolak').prop('checked', true);
                }

                // Populate additional fields
                $('#detailNilaiMahasiswa').text(nilai);
                $('#detailKomentar').text(komentar);

                // Show the modal
                $('#lihatDetailLogBimbinganModal').modal('show');
            });
        });
    </script>
@endpush

@push('customStyle')
    <style>
        .form-information {
            background-color: #F2F4F7 !important;
            border-radius: 8px !important;
        }

        .modal-body {
            background-color: #FCFDFD;
            padding: 30px 40px !important;
        }
    </style>
@endpush
