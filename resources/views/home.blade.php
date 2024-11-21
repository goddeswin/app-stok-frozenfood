@extends('master.layout')


@section('title')
Home
@endsection


@section('content')
<div class="container-flex"">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <header class="hero bg-primary text-white text-center py-5" style="background-image: url('hero-image.jpg'); background-size: cover;">
            <div class="container">
                <h2 class="display-3 fw-bold">Solusi Makanan Frozen Food Berkualitas, Siap Santap!</h2>
                <p class="lead">Nikmati kemudahan dalam menyajikan hidangan lezat dengan stok makanan beku terbaik.</p>
                <a href="#produk" class="btn btn-light btn-lg">Lihat Produk</a>
        </div>
    </header>

    <!-- Tentang Kami -->
    <section class="about py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p class="lead">Kami menyediakan makanan beku berkualitas tinggi, mulai dari sayuran beku hingga hidangan siap saji, untuk memenuhi kebutuhan keluarga dan bisnis Anda.</p>
        </div>
    </section>

    <!-- Produk Unggulan -->
    <section id="produk" class="products py-5 bg-light">
        <div class="container text-center">
            <h2>Produk</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://cdn.idntimes.com/content-images/community/2023/06/beef-ball-fried-wooden-surfaces-5f33a6106b7b2abdfec00ff311918826-545a147f2004363ee2ddcbade418558d.jpg" class="card-img-top" alt="Nugget Ayam Premium">
                        <div class="card-body">
                            <h5 class="card-title">Nugget Ayam Premium</h5>
                            <p class="card-text">Lezat dan gurih, cocok untuk segala usia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://evermos.com/home/wp-content/uploads/2023/05/sosis_11zon.jpg" class="card-img-top" alt="Sayuran Bebek Mix">
                        <div class="card-body">
                            <h5 class="card-title">Sayuran Bebek Mix</h5>
                            <p class="card-text">Segar dan penuh gizi, langsung dari petani.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0SMyZWNr0oxKUGr6sK7hrmo_qkbgsv19TPnELWSF_wWrGlfJCoj_Z4__42WcGqCIj2kM&usqp=CAU" class="card-img-top" alt="Makanan Siap Saji">
                        <div class="card-body">
                            <h5 class="card-title">Makanan Siap Saji</h5>
                            <p class="card-text">Mudah disiapkan, cocok untuk kehidupan yang sibuk.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary mt-4">Lihat Semua Produk</a>
        </div>
    </section>

    <!-- Keunggulan Kami -->
    <section class="advantages py-5">
        <div class="container text-center">
            <h2>Keunggulan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Kualitas Terjamin</h3>
                    <p>Produk diseleksi secara ketat untuk memastikan kualitas terbaik.</p>
                </div>
                <div class="col-md-4">
                    <h3>Pengiriman Cepat</h3>
                    <p>Kirim langsung ke depan pintu Anda dengan pengiriman yang cepat.</p>
                </div>
                <div class="col-md-4">
                    <h3>Pilihan Variatif</h3>
                    <p>Berbagai jenis makanan beku untuk segala kebutuhan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Pelanggan -->
    <section class="testimonials bg-light py-5">
        <div class="container text-center">
            <h2>Apa Kata Pelanggan Kami?</h2>
            <div class="row">
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p>"Makanan beku dari Stock Frozen Food selalu segar dan mudah disiapkan!"</p>
                        <footer class="blockquote-footer">Jane Doe</footer>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote class="blockquote">
                        <p>"Pilihan produk sangat banyak dan kualitasnya selalu terjaga!"</p>
                        <footer class="blockquote-footer">John Smith</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Penawaran Spesial -->
    <section class="promo bg-primary text-white py-5">
        <div class="container text-center">
            <h2>Diskon 20% untuk Pembelian Pertama!</h2>
            <a href="#" class="btn btn-light btn-lg">Ambil Penawaran</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>Alamat: Jl. Makanan No. 123, Jakarta, Indonesia</p>
            <p>Email: info@stockfrozenfood.com | Telepon: (021) 123-4567</p>
            <div>
                <a href="#" class="text-white">Instagram</a> |
                <a href="#" class="text-white">Facebook</a> |
                <a href="#" class="text-white">Twitter</a>
            </div>
        </div>
    </footer>
@endsection
