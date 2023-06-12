<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Memuat stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



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
    <nav class="navbar sticky-top bg-success" data-bs-theme="dark" navbar-expand-lg bg-body-tertiary>
        @include('partials.header')
    </nav>
    <!-- end Header -->

    <div class="container-fluid bg-info-subtle d-inline-block" style="background-image: url('https://images.pexels.com/photos/7135016/pexels-photo-7135016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center; height: 100vh;">
        <div class="row">

            <!-- sidebar -->
            <div class="col-lg-3 col-md-12">
                @include('component.sidebar')
            </div>
            <!-- end sidebar -->

            <!-- content -->
            <div class="col-lg-9 col-md-12">
                <div class="d-flex flex-column" style="height: fit-content;">
                    <div class="card mt-3 me-1 mb-3 h-100">
                        <div class="card-header">
                            <h5> @yield('cardHeader') </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-title">@yield('cardTitle')</p>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>
    </div>

    <!-- footer -->
    <footer class="footer bg-dark text-white">
        @include('partials.footer')
    </footer>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <!-- Memuat library jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Memuat library JavaScript Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>