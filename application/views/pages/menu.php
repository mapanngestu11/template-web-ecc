<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
        <a href="<?php echo base_url('Dashboard/') ?>" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Data Akun</span>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Account Settings">Data User</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo base_url('User/') ?>" class="menu-link">
                    <div data-i18n="Connections">Lihat Data</div>
                </a>
            </li>
        </ul>
    </li>
    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Siswa</span></li>
    <!-- Cards -->
    <!-- User interface -->
    <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div data-i18n="User interface">Data Siswa</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo base_url('Siswa/Tambah') ?>" class="menu-link">
                    <div data-i18n="Accordion">Tambah Data Siswa</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url('Siswa/') ?>" class="menu-link">
                    <div data-i18n="Alerts">Lihat Data</div>
                </a>
            </li>
        </ul>
    </li>
    <!-- Extended components -->
    <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-copy"></i>
            <div data-i18n="Extended UI">Jadwal Siswa</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Lihat Data</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item">
        <a href="icons-boxicons.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-calendar"></i>
            <div data-i18n="Boxicons">Absensi</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="icons-boxicons.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-calendar"></i>
            <div data-i18n="Boxicons">Siswa Non Aktif</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="icons-boxicons.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-check"></i>
            <div data-i18n="Boxicons">Progres Belajar</div>
        </a>
    </li>
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Sertifikat</span></li>
    <!-- Forms & Tables -->
    <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-envelope"></i>
            <div data-i18n="Extended UI">Sertifikat Kelulusan</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Lihat Data</div>
                </a>
            </li>
        </ul>
    </li>
    <!--  -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Testimoni Alumni</li>
        <!-- Tables -->
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Tables">Lihat data</div>
            </a>
        </li>
    </ul>