@extends('layout')

@section('content')
<div class="container d-flex" style="display: flex; align-items: flex-start; gap: 20px;">
    @if ($post->image)
        <div class="image-container">
            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="max-width: 300px;">
        </div>
    @else
        <div class="image-container">
            <p>No image available</p>
        </div>
    @endif

    <div class="details">
        <h1>{{ $post->title }}</h1>
        <p>Kategori: {{ $post->category->name }}</p>
        <p>Harga: Rp. {{ number_format($post->price, 2, ',', '.') }}</p> <!-- Menampilkan harga -->
        <p>{{ $post->body }}</p>
        <div class="buttons" style="margin-top: 20px;">
            <a href="https://shopee.co.id" target="_blank">
                <button style="padding: 10px 20px; background-color: #f53d2d; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Shopee
                </button>
            </a>
            <a href="https://www.lazada.co.id" target="_blank">
                <button style="padding: 10px 20px; background-color: #011aff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Lazada
                </button>
            </a>
            <a href="https://www.tokopedia.com" target="_blank">
                <button style="padding: 10px 20px; background-color: #03ac0e; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Tokopedia
                </button>
            </a>
            <a href="https://wa.me/83156673618?text={{ urlencode('Tertarik dengan produk: ' . $post->title) }}" target="_blank" >
                <button style="padding: 10px 20px; background-color: #03ac0e; color: white; border: none; border-radius: 5px; cursor: pointer;">
                    Hubungi via WhatsApp
                </button>       
            </a>
        </div>
    </div>
</div>
@endsection