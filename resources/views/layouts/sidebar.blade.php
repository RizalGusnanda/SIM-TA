<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="{{ asset('../assets/img/polinema.png') }}" alt="logo" width="30">
        <a href="index.html" class="ml-2"
            style="font-size: 16px; font-weight:700; margin-bottom:-10px; letter-spacing: 0px;">SIM-TA</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <img src="{{ asset('../assets/img/polinema.png') }}" alt="logo" width="40">
    </div>
    <ul class="sidebar-menu">
        <li>
            <a class="nav-link" href="/home"><img src="{{ asset('../assets/img/sidebar/darhboard.png') }}" width="25" style="margin-right: 10px;"> <span class="text-dark">Dashboard</span></a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><img src="{{ asset('../assets/img/sidebar/Folder_dublicate.png') }}" width="25" style="margin-right: 10px;">
                <span class="text-dark">Skripsi</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link text-dark" href="{{ route('user.index') }}">Proposal</a></li>
                <li><a class="nav-link text-dark" href="{{ route('user.index') }}">Laporan Skripsi</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><img src="{{ asset('../assets/img/sidebar/File_dock_search.png') }}" width="25" style="margin-right: 10px;">
                <span class="text-dark">Informasi Dosen</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link text-dark" href="{{ route('user.index') }}">Dosen Pembimbing</a></li>
                <li><a class="nav-link text-dark" href="{{ route('user.index') }}">Usulan Topik Dosen</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><img src="{{ asset('../assets/img/sidebar/Desk_alt.png') }}" width="25" style="margin-right: 10px;">
                <span class="text-dark">Log Bimbingan</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link text-dark" href="{{ route('pra-seminar-proposal') }}">Pra Seminar Proposal</a></li>
                <li><a class="nav-link text-dark" href="{{ route('user.index') }}">Sidang Skirpsi</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="/profile"><img src="{{ asset('../assets/img/sidebar/User_alt.png') }}" width="25" style="margin-right: 10px;"><span class="text-dark">Profile</span></a>
        </li>
        <li>
            <a class="nav-link" href="/faq"><img src="{{ asset('../assets/img/sidebar/Question.png') }}" width="25" style="margin-right: 10px;"> <span class="text-dark">FAQ</span></a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="{{ asset('../assets/img/sidebar/Sign_out_circle.png') }}" width="25" style="margin-right: 10px;">  <span class="text-dark">Keluar</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

</aside>