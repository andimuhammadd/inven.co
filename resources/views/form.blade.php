<!DOCTYPE html>
<html>

<head>
    <title>Form Bootstrap</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Form Bootstrap</h1>
        <form method="POST" action="{{ route('proses-form') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
            </div>
            <div class="form-group">
                <label for="namaPerusahaan">Nama Perusahaan</label>
                <input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" placeholder="Masukkan nama perusahaan">
            </div>
            <input type="hidden" name="role" value="admin">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Tambahkan skrip JavaScript Bootstrap di sini (opsional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>