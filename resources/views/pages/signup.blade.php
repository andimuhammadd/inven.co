<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Signup Page</title>
</head>

<body>
    <div class="container-fluid" style="background-image: url('https://images.pexels.com/photos/7135016/pexels-photo-7135016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center; height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Signup
                    </div>
                    <div class="card-body">
                        <form action="{{ route('createuser') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="company" class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" id="company" name="nama_pengguna" required>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Nama Instansi/Perusahaan</label>
                                <input type="text" class="form-control" id="company" name="nama_perusahaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Pengguna</label>
                                <input type="email" class="form-control" id="email" name="email_pengguna" required>
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat Perusahaan</label>
                                <input type="text" class="form-control" id="company" name="alamat_perusahaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Nomor Telepon perusahaan</label>
                                <input type="text" class="form-control" id="company" name="telepon_perusahaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password_pengguna" required>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="role_pengguna" value="admin">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>