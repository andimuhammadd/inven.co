<div class="container-md">
    <a class="navbar-brand" href="#">INVEN.CO</a>
    <div class="d-flex justify-content-between align-items-center">
        <div>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            @else
            <a href="{{ route('loginpage') }}" class="btn btn-success">Login/SignUp</a>
            @endauth
        </div>
    </div>
</div>