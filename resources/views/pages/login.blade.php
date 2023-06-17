<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container-fluid" style="background-image: url('https://images.pexels.com/photos/7135016/pexels-photo-7135016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center; height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <div class="container-md">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            <div class="text-center mt-3">
                                <p>Lupa password? <a href="{{ route('resetpassword') }}">Reset</a></p>
                                <p>Belum punya akun? <a href="{{ route('signup') }}">Daftar disini</a></p>
                            </div>
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
    @endif
</body>

</html>