<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        @media (max-width: 992px) {
            #sidebar {
                background-color: transparent !important;
                border: none;
            }
        }
    </style>



</head>

<body>
    <!-- Header -->
    @include('partials.header')
    <div class="container-fluid bg-secondary d-inline-block">
        <div class="row">
            <div class="col-lg-3 col-md-12 sidebar">
                <nav class="navbar navbar-expand-lg bg-light rounded mt-3" id="sidebar">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Decafe</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'menu') ? 'active link-light' : 'link-dark'; ?>" href="menu"><i class="bi bi-menu-button-wide-fill"></i> Daftar Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ? 'active link-light' : 'link-dark'; ?>" href="order"><i class="bi bi-shop"></i> Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'customer') ? 'active link-light' : 'link-dark'; ?>" href="customer"><i class="bi bi-people-fill"></i> Customer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="d-flex flex-column" style="height: fit-content;">
                    <!-- Konten Anda di sini -->
                    <div class="card mt-3 me-1 mb-3 h-100">
                        <div class="card-header">
                            Dashboard
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="col">
                                <div class="row mt-5">
                                    <div class="col-4">
                                        <a href="#" class="btn btn-danger h-100 w-100 d-flex justify-content-center align-items-center">
                                            DATA <br>USER
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn btn-danger h-100 w-100 d-flex justify-content-center align-items-center">DATA <br>BARANG</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn btn-danger h-100 w-100 d-flex justify-content-center align-items-center">BARANG <br>MASUK</a>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-4">
                                        <a href="#" class="btn btn-danger h-100 w-100 d-flex justify-content-center align-items-center">DATA <br>SUPPLIER</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn btn-danger h-100 w-100 d-flex justify-content-center align-items-center">BARANG <br>KELUAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-2">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                </div>
                <div class="col-lg-6 mt-2">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Address: 123 Street, City</li>
                        <li>Email: info@example.com</li>
                        <li>Phone: 123-456-7890</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center py-5">
            &copy; {{ date('Y') }} INVEN.CO. All rights reserved.
        </div>
    </footer>


    <!-- Pemuatan skrip JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>