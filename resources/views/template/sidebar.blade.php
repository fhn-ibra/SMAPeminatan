<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">



            <div class="sidenav-menu-heading">Dashboard
            </div>

            <a class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}" href="/dashboard">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
            </a>

            <a class="nav-link {{ $title == 'Pendaftar' ? 'active' : '' }}" href="/pendaftar">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Pendaftar
            </a>

            <div class="sidenav-menu-heading">Kelas</div>

            <a class="nav-link {{ $title == 'Kelas IPA' ? 'active' : '' }}" href="/ipa">
                <div class="nav-link-icon"><i class="fas fa-flask"></i></div>
                IPA
            </a>
            <a class="nav-link {{ $title == 'Kelas IPS' ? 'active' : '' }}" href="/ips">
                <div class="nav-link-icon"><i data-feather="compass"></i></div>
                IPS
            </a>

        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Login Sebagai :</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>