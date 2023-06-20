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
                            <form action="/password/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- User fields to be edited -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Password Sekarang</label>
                                    <input type="password" class="form-control" id="password" name="password_sekarang" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="password" name="password_baru" value="" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
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