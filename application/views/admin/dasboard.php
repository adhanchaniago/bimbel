<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="<?= site_url('c_admin') ?>">
                <h3>Admin<br>Bimbel</h3>
            </a>
            <strong>AB</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="<?= site_url('c_admin') ?>" data-toggle="collapse" aria-expanded="false">
                    <i class=" fas fa-home"></i>
                    Dasboard
                </a>
            </li>
            <hr>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Bimbel
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="<?= site_url('C_admin/tambah') ?>">Tambah Bimbel</a>
                    </li>
                    <li>
                        <a href="<?= site_url('C_admin/foto') ?>">Foto Bimbel</a>
                    </li>
                    <li>
                        <a href="<?= site_url('C_admin/sekolah') ?>">Sekolah</a>
                    </li>
                    <li>
                        <a href="<?= site_url('C_admin/fasilitas') ?>">Fasilitas Bimbel</a>
                    </li>
                    <li>
                        <a href="<?= site_url('C_admin/deskripsi') ?>">Deskripsi bimbel</a>
                    </li>
                    <li>
                        <a href="<?= site_url('C_admin/paket') ?>">Paket Bimbel</a>
                    </li>
                </ul>
            </li>
            <hr>
            <li>
                <a href="<?= site_url('c_admin/notif') ?>">
                    Notification <span class="badge badge-light">2</span>
                </a>
            </li>
        </ul>
        <ul class="list-unstyled CTAs">
            <li>
                <a href="<?= base_url() ?>" class="article text-center">Review</a>
            </li>
        </ul>
    </nav>


    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars"></i>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="" class="nav-link">
                                logout
                            </a>
                    </ul>
                </div>
            </div>
        </nav>