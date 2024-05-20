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
            <div class="d-flex justify-content-between mb-4">
                <h2 class="" style="font-weight: 600; font-size: 16px; margin-top: 10px; color:#000000;">
                    Bimbingan
                    Proposal</h2>
                <div class="my-auto items-center btn btn-primary rounded-lg py-1.5"
                    style="letter-spacing: 0px !important;">
                    <i class="fas fa-plus"></i>
                    <a class="text-button-sim active px-4" data-toggle="modal" data-target="#tambahLogBimbinganModal">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customStyle')
@endpush
