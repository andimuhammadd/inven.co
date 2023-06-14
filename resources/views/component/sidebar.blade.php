<nav class="navbar navbar-expand-lg bg-light rounded mt-3" id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body py-3">
                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                    <div class="text-center">
                        <img src="{{ asset('images/profil.jpg') }}" alt="Profile Picture" class="rounded-circle mt-3" width="100" height="100">
                    </div>
                    <div class="text-center">
                        <span class="navbar-text">Nama Pengguna</span>
                        <button type="button" class="btn btn-link position-absolute end-0"><i class="bi bi-gear-fill"></i></button>
                    </div>
                    <hr style="background-color: black;">
                    <li class="nav-item">
                        <a class="nav-link ps-2 {{ $pageTitle == 'Dashboard' ? 'active link-light' : 'link-dark' }}" aria-current="page" href="dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 {{ $pageTitle == 'Data User' ? 'active link-light' : 'link-dark' }}" href="datauser"><i class="bi bi-people-fill"></i> Data User</a>
                    </li>
                    <hr style="background-color: black;">
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle {{ Request::is('databarang', 'jenisbarang', 'satuanbarang', 'datasupplier') ? 'active' : '' }}" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-file-earmark-text-fill"></i> Inventaris
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="databarang">Data Barang</a>
                                <a class="dropdown-item" href="jenisbarang">Jenis Barang</a>
                                <a class="dropdown-item" href="satuanbarang">Satuan Barang</a>
                                <a class="dropdown-item" href="datasupplier">Data Supplier</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-kanban-fill"></i> Transaksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="barangmasuk">Barang Masuk</a>
                                <a class="dropdown-item" href="barangkeluar">Barang Keluar</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-flag-fill"></i> Laporan
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Opsi 1</a>
                                <a class="dropdown-item" href="#">Opsi 2</a>
                                <a class="dropdown-item" href="#">Opsi 3</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>