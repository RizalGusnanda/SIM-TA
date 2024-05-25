<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SIM-TA</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />

    <!-- CSS Libraries -->
    @stack('customStyle')
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="/assets/css/components.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        .nav-tabs .nav-link:not(.active) {
            border-color: #B5B7BA;
            color: #B5B7BA !important;
        }
    </style>
</head>


<body class="sidebar-mini">
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"
                style="position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;"></div>
            <nav class="navbar navbar-expand-lg main-navbar"
                style="position: fixed;
            top: 0;
            z-index: 1000;">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"
                                style="margin-top: 20px;"><i class="fas fa-bars" style="color: #E7EDF4"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element" style="margin-top: 20px;">
                        <input class="form-control" type="search" placeholder="Cari disini..." aria-label="Search"
                            data-width="400"
                            style="background-color: #F2F4F7; font-size:11px; width: 450px; height: 41px;">
                        <button class="btn"
                            style="background-color: #F2F4F7; padding-top: 13px; padding-bottom: 13px;"
                            type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle">
                        <a href="#" id="messageTrigger" class="nav-link nav-link-lg message-toggle beep"><i
                                class="far fa-bell" style="color: #11468F"></i></a>
                    </li>

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            @role('user')
                                <div class="d-sm-none d-lg-inline-block" style="color: #727272;">Hi, Aisyah</div>
                            @endrole
                            @role('super-admin')
                                <div class="d-sm-none d-lg-inline-block" style="color: #727272;">Hi, Eng</div>
                            @endrole
                        </a>
                        <div class="dropdown-menu dropdown-menu-right px-3 py-3">
                            <div class="text-center">
                                <img alt="image" width="64px;" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                    class="rounded-circle">
                                @role('user')
                                    <p class="text-dark"
                                        style="margin-bottom: 0px; font-size: 14px; font-weight: 600; margin-top: 10px;">
                                        Aisyah Maulina</p>
                                    <p style="font-size: 14px; font-weight: 500; color: rgba(170, 170, 170, 1);">
                                        21417000008</p>
                                @endrole
                                @role('super-admin')
                                    <p class="text-dark"
                                        style="margin-bottom: 0px; font-size: 14px; font-weight: 600; margin-top: 10px; line-height: 18px;">
                                        DR. Eng. Rosa Andrie Asmara, ST, MT.</p>
                                    <p style="font-size: 14px; font-weight: 500; color: rgba(170, 170, 170, 1);">
                                        198010102005000000</p>
                                @endrole
                            </div>
                            <div class="dropdown-divider"></div>
                            <div>
                                <a class="text-dark" href="/profil" style="text-decoration: none;">Profil</a>
                                <br>
                                @role('user')
                                    <a class="text-dark" href="/faq-user" style="text-decoration: none;">FAQ</a>
                                @endrole
                                @role('super-admin')
                                    <a class="text-dark" href="/faq-dosen" style="text-decoration: none;">FAQ</a>
                                @endrole
                            </div>
                            <div class="dropdown-divider"></div>
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                href="{{ route('logout') }}" class="text-dark" style="text-decoration: none;">Keluar
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                {{-- <x-sidebar title="Test" /> --}}
                @include('layouts.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                @include('layouts.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/assets/js/stisla.js"></script>



    <!-- JS Libraies -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/assets/js/page/modules-sweetalert.js"></script>

    <script src="assets/js/page/components-table.js"></script>

    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>

    <!-- Modal -->
    <div class="modal fade" style="top: 30px; left: 220;" id="messageModal" tabindex="-1" role="dialog"
        aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding-bottom: 0px;">
                    <h5 class="modal-title" class="text-dark" style="color: #000;" id="messageModalLabel">Notifikasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-left: 25px !important;">
                    <li class="nav-item">
                        <a class="nav-link active" id="dosen1-tab" data-toggle="tab" href="#dosen1" role="tab"
                            aria-controls="dosen1" aria-selected="true">Semua</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dosen2-tab" data-toggle="tab" href="#dosen2" role="tab"
                            aria-controls="dosen2" aria-selected="false">Belum Terbaca</a>
                    </li>
                </ul>
                <div class="modal-body" style="padding: 0px;">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dosen1" role="tabpanel"
                            aria-labelledby="dosen1-tab" style="padding: 0px;">
                            <div style="background-color: rgba(240, 243, 246, 1); border-bottom: 1px solid #E7EDF4;">
                                <div class="d-flex align-items-start" style="padding: 20px 25px;">
                                    <img src="{{ asset('assets/img/Notif-icon-notif.svg') }}" alt="">
                                    <div class="ml-3">
                                        @role('user')
                                            <div class="text-dark"
                                                style="font-weight: 500; font-size: 12px; line-height: 18px;">
                                                <span style="font-weight: 700;">Notice.</span> Batas
                                                pengumpulan revisi proposal 2 hari lagi. Silahkan
                                                mengirimkan hasil revisi pada halaman ujian seminar proposal.
                                            </div>
                                        @endrole
                                        @role('super-admin')
                                            <div class="text-dark"
                                                style="font-weight: 500; font-size: 12px; line-height: 18px;">
                                                <span style="font-weight: 700;">Notice.</span> Validasi mahasiswa yang
                                                mengajukan anda sebagai pembimbing utama.
                                            </div>
                                        @endrole
                                        <a href=""
                                            style="text-decoration: none; font-size: 11px; font-weight: 600; color: rgba(38, 102, 190, 1);">Lihat
                                            Selengkapnya</a>
                                        <p style="font-size: 11px; font-weight: 400; margin-bottom: 0px;">2 menit yang
                                            lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: rgba(249, 250, 251, 1);border-bottom: 1px solid #E7EDF4;">
                                <div class="d-flex align-items-start" style="padding: 20px 25px;">
                                    <img src="{{ asset('assets/img/Reminder-icon.svg') }}" alt="">
                                    <div class="ml-3">
                                        @role('user')
                                            <div
                                                style="font-weight: 500; font-size: 12px; line-height: 18px; color: rgba(170, 170, 170, 1)">
                                                <span style="font-weight: 700;" class="text-dark">Reminder.</span> Batas
                                                pengumpulan revisi proposal 2 hari lagi. Silahkan
                                                mengirimkan hasil revisi pada halaman ujian seminar proposal.
                                            </div>
                                        @endrole
                                        @role('super-admin')
                                            <div
                                                style="font-weight: 500; font-size: 12px; line-height: 18px; color: rgba(170, 170, 170, 1)">
                                                <span style="font-weight: 700;" class="text-dark">Reminder.</span>Log
                                                Bimbingan telah disetujui oleh Dosen Pembimbing. Silahkan lihat pada halaman
                                                Log Bimbingan anda.
                                            </div>
                                        @endrole
                                        <a href=""
                                            style="text-decoration: none; font-size: 11px; font-weight: 600; color: rgba(38, 102, 190, 1);">Lihat
                                            Selengkapnya</a>
                                        <p style="font-size: 11px; font-weight: 400; margin-bottom: 0px;">2 menit yang
                                            lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dosen2" role="tabpanel" aria-labelledby="dosen2-tab"
                            style="padding: 0px;">
                            <div style="background-color: rgba(240, 243, 246, 1); border-bottom: 1px solid #E7EDF4;">
                                <div class="d-flex align-items-start" style="padding: 20px 25px;">
                                    <img src="{{ asset('assets/img/Notif-icon-notif.svg') }}" alt="">
                                    <div class="ml-3">
                                        @role('user')
                                            <div class="text-dark"
                                                style="font-weight: 500; font-size: 12px; line-height: 18px;">
                                                <span style="font-weight: 700;">Notice.</span> Batas
                                                pengumpulan revisi proposal 2 hari lagi. Silahkan
                                                mengirimkan hasil revisi pada halaman ujian seminar proposal.
                                            </div>
                                        @endrole
                                        @role('super-admin')
                                            <div class="text-dark"
                                                style="font-weight: 500; font-size: 12px; line-height: 18px;">
                                                <span style="font-weight: 700;">Notice.</span> Validasi mahasiswa yang
                                                mengajukan anda sebagai pembimbing utama.
                                            </div>
                                        @endrole
                                        <a href=""
                                            style="text-decoration: none; font-size: 11px; font-weight: 600; color: rgba(38, 102, 190, 1);">Lihat
                                            Selengkapnya</a>
                                        <p style="font-size: 11px; font-weight: 400; margin-bottom: 0px;">2 menit yang
                                            lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: rgba(240, 243, 246, 1); border-bottom: 1px solid #E7EDF4; q">
                                <div class="d-flex align-items-start" style="padding: 20px 25px;">
                                    <img src="{{ asset('assets/img/Reminder-icon.svg') }}" alt="">
                                    <div class="ml-3">
                                        @role('user')
                                            <div
                                                style="font-weight: 500; font-size: 12px; line-height: 18px; color: rgba(170, 170, 170, 1)">
                                                <span style="font-weight: 700;" class="text-dark">Reminder.</span> Batas
                                                pengumpulan revisi proposal 2 hari lagi. Silahkan
                                                mengirimkan hasil revisi pada halaman ujian seminar proposal.
                                            </div>
                                        @endrole
                                        @role('super-admin')
                                            <div class="text-dark"
                                                style="font-weight: 500; font-size: 12px; line-height: 18px;">
                                                <span style="font-weight: 700;">Reminder.</span>Log
                                                Bimbingan telah disetujui oleh Dosen Pembimbing. Silahkan lihat pada halaman
                                                Log Bimbingan anda.
                                            </div>
                                        @endrole
                                        <a href=""
                                            style="text-decoration: none; font-size: 11px; font-weight: 600; color: rgba(38, 102, 190, 1);">Lihat
                                            Selengkapnya</a>
                                        <p style="font-size: 11px; font-weight: 400; margin-bottom: 0px;">2 menit yang
                                            lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Specific JS File -->
    @stack('customScript')
    <script>
        $(document).ready(function() {
            $('#messageTrigger').click(function() {
                $('#messageModal').modal('show');
            });
        });
    </script>
</body>

</html>
