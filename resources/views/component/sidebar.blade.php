@php
use App\Models\User;
$user = auth()->user();
@endphp
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
            <div class="col">
                <h5 class="navbar-text">{{ auth()->user()->perusahaan->nama_perusahaan }}</h5>
            </div>
            <div class="offcanvas-body py-3">
                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                    <div class="text-center">
                        <img src="{{ asset('images/' . Auth::user()->foto_profile) }}" alt="Profile Picture" class="rounded-circle mt-3" width="100" height="100">
                    </div>
                    <div class="text-center">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="navbar-text">{{ auth()->user()->role }}</span>
                                    @include('component.modal_edit_user')
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">
                                        <i class="bi bi-sm bi-pencil-square"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="navbar-text">{{ auth()->user()->nama }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                </div>
                            </div>
                        </div>
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
            @include('component.modal_edit_password')
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#password{{ $user->id }}">
                Change Password
            </button>
        </div>
    </div>
</nav>