@extends ('master.layout')

@section('tittle')
    STOCK
@endsection

@section('content')

<section id="produk" class="products section bg-light">
        <div class="container text-center">
            <h2>Produk Makanan Kami</h2>
            <p class="lead">Kami menyediakan berbagai pilihan makanan yang lezat dan mudah disiapkan untuk Anda.</p>

            <div class="row g-4">
                <!-- Produk 1 -->
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="makanan1.jpg" class="card-img-top" alt="Makanan 1">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Goreng Spesial</h5>
                            <p class="card-text">Nasi goreng dengan bumbu spesial dan topping ayam suwir yang menggugah selera.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="makanan2.jpg" class="card-img-top" alt="Makanan 2">
                        <div class="card-body">
                            <h5 class="card-title">Mie Goreng Special</h5>
                            <p class="card-text">Mie goreng dengan rasa pedas dan gurih, cocok untuk pencinta makanan cepat saji.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="makanan3.jpg" class="card-img-top" alt="Makanan 3">
                        <div class="card-body">
                            <h5 class="card-title">Pizza Margherita</h5>
                            <p class="card-text">Pizza dengan topping mozzarella dan saus tomat segar, lezat dan memuaskan.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
