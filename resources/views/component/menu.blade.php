<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #007bff;">
    <a class="navbar-brand ms-5" href="#">STOCK FROZEN FOOD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-3 ">
            <li class="nav-item active">
                <a class="nav-link text-light" href="{{route('home')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('about')}}">KATEGORI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('stock')}}">STOCK</a>
            </li>
        </ul>
        <div class="d-flex me-5">
            @if(!Auth::check())
            <a href="{{route('signup')}}" class="btn btn-light mx-2">SIGN UP</a>
            <a href="{{route('signin')}}" class="btn btn-light">SIGN IN</a>
            @else
            <a href="{{route('logout')}}" class="btn btn-light">LOG OUT</a>
            @endif
        </div>
    </div>
</nav>

