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
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="d-flex justify-content-between mb-4">
                <h2 class="" style="font-weight: 600; font-size: 16px; margin-top: 10px; color:#000000;">
                    Bimbingan
                    Proposal</h2>
                <div class="my-auto items-center btn btn-primary rounded-lg py-1.5" style="letter-spacing: 0px !important;">
                    <i class="fas fa-plus"></i>
                    <a class="text-button-sim active px-4" id="">
                        Tambah</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="bg-white rounded-lg">
                            <div class="show-import" style="display: none">
                                <div class="custom-file">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label class="custom-file-label" for="file-upload">Choose File</label>
                                        <input type="file" id="file-upload" class="custom-file-input" name="import_file">
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
                            <div class="table-responsive rounded-lg">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Tanggal</th>
                                            <th>Topik</th>
                                            <th>Dosen Pembimbing</th>
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
                                            <td>2018-01-20</td>
                                            <td>Laporan Progress BAB 1</td>
                                            <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                            <td>
                                                <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                    style="color:white;">Diterima</div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-warning" id=""><i class="fas fa-pencil-alt"
                                                            style="color: white"></i></a>
                                                    <a class="btn btn-danger" id=""><i class="fas fa-trash"
                                                            style="color: white"></i></a>
                                                    <a class="btn btn-info" id=""><i class="fas fa-bars"
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
                                            <td>2018-01-20</td>
                                            <td>Laporan Progress BAB 1</td>
                                            <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
                                            <td>
                                                <div class="bg-success d-inline-block text-status-sim px-2 py-1 rounded-lg"
                                                    style="color:white;">Diterima</div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-warning" id=""><i class="fas fa-pencil-alt"
                                                            style="color: white"></i></a>
                                                    <a class="btn btn-danger" id=""><i class="fas fa-trash"
                                                            style="color: white"></i></a>
                                                    <a class="btn btn-info" id=""><i class="fas fa-bars"
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
                                            <td>2018-01-20</td>
                                            <td>Laporan Progress BAB 1</td>
                                            <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
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
                                                    <a class="btn btn-info" id=""><i class="fas fa-bars"
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
                                            <td>2018-01-20</td>
                                            <td>Laporan Progress BAB 1</td>
                                            <td>Anugrah Nur Rahmanto, S.Sn., M.Ds.</td>
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
                                                    <a class="btn btn-info" id=""><i class="fas fa-bars"
                                                            style="color: white"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
        });
    </script>
@endpush

@push('customStyle')
@endpush
