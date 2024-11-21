@extends('master.layout')

@section('tittle')
    SIGN UP
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">SIGN IN</h2>

            <!-- Menampilkan pesan sukses jika ada -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Menampilkan pesan error jika ada -->
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{ $err }}
                    </div>
                @endforeach
            @endif

            <!-- Form Sign Up -->
            <form action="{{ route('storeSignin') }}" method="POST">
                @csrf
                <!-- Input Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Input Kata Sandi -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Tombol Daftar -->
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
        </div>
    </div>
</div>
@endsection
