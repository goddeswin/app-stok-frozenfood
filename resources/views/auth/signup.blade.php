@extends('master.layout')

@section('tittle')
    SIGN UP
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">SIGN UP</h2>

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
            <form id="signupForm" action="{{ route('storeSignup') }}" method="POST">
                @csrf
                <!-- Input Nama Lengkap -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="fullname" name="name" required>
                </div>

                <!-- Input Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru" required>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Konfirmasi password baru" required>
                </div>

                <!-- Alert for mismatch -->
                <div id="errorAlert" class="alert alert-danger" style="display: none;">
                    Password tidak cocok. Silakan coba lagi.
                </div>

                <!-- Tombol Daftar -->
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Menangani form submit
    document.getElementById("signupForm").addEventListener('submit', function(event) {
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;
        const errorAlert = document.getElementById("errorAlert");

        // Cek apakah password dan confirm password cocok
        if (password !== confirmPassword) {
            event.preventDefault(); // Mencegah form dikirim
            errorAlert.style.display = 'block'; // Menampilkan pesan error
        } else {
            errorAlert.style.display = 'none'; // Menyembunyikan pesan error
        }
    });
</script>

@endsection
