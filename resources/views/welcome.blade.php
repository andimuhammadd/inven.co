<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar sticky-top bg-success" data-bs-theme="dark" navbar-expand-lg bg-body-tertiary>
        @include('partials.header')
    </nav>
    <div class="container-fluid" style="background-image: url('https://images.pexels.com/photos/7135016/pexels-photo-7135016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center; height: 100vh;">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col text-center text-dark">
                <h1 class="text">Selamat Datang di Website Manajemen INVENTARIS</h1>
                <p class="text">Selamat mengoptimalkan Inventaris Anda dan Meraih Keberhasilan yang gemilang</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    LEARN MORE!
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body m\">
                                <p>
                                    Selamat datang di halaman Manajemen Inventaris!

                                    Pahami dan kelola inventaris perusahaan Anda dengan lebih efisien menggunakan fitur-fitur kami yang inovatif. Dengan sistem Manajemen Inventaris kami, Anda dapat melacak, mengelola, dan memantau semua aset dan barang yang ada di kantor Anda.

                                    Tentukan informasi detail seperti deskripsi barang, jumlah, lokasi, kondisi, nilai, dan informasi relevan lainnya dalam satu tempat yang terorganisir. Pergunakan fitur kami untuk mengelola perubahan status barang, pemindahan, dan penghapusan barang dari inventaris dengan mudah dan cepat.

                                    Dapatkan laporan terkini yang memberikan gambaran yang detail tentang stok barang, penggunaan barang, perubahan status barang, dan informasi lain yang dibutuhkan oleh manajemen untuk pengambilan keputusan yang tepat. Analisis data inventaris kami membantu Anda memahami tren, mengoptimalkan penggunaan aset, dan menghindari kerugian atau kekurangan barang.

                                    Fasilitasi proses pengadaan barang baru dengan manajemen daftar pemasok dan pembuatan pesanan pembelian yang efisien. Sistem kami juga mendukung proses penerimaan barang dengan mencatat informasi yang relevan untuk memastikan kelancaran dan keakuratan penerimaan barang.

                                    Keamanan data inventaris perkantoran adalah prioritas utama kami. Dengan mekanisme keamanan yang terintegrasi, seperti autentikasi pengguna, enkripsi data, dan kontrol akses berdasarkan peran dan tanggung jawab, kami menjaga keamanan dan kerahasiaan informasi Anda.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>