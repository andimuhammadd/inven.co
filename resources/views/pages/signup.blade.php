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
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="namaPerusahaan" class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="namaPerusahaan" name="namaPerusahaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <input type="hidden" name="perusahaan_id" value="{{ mt_rand(1000, 9999) }}">
                            <input type="hidden" name="role" value="admin">
                            <input type="hidden" name="foto_profile" value="profile_default.jpg">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Sudah punya akun? <a href="{{ route('loginpage') }}">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
    @elseif(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif

</body>

</html>