@extends('layout')

@section('content')
<!-- Hero Section -->
<section class="hero-room position-relative text-center text-white" style="background: url('{{ asset('images/rooms.avif') }}') no-repeat center/cover; height: 50vh;">
    <div class="overlay" style="background: rgba(0,0,0,0.5); position:absolute; top:0; left:0; width:100%; height:100%;"></div>
    <div class="container position-relative" style="z-index: 2; padding-top: 150px;">
        <h1 class="display-4" style="font-family: 'Playfair Display', serif; font-weight:700;">Kamar Kami</h1>
        <p class="lead" style="font-family:'Lora', serif;">Pilihan kamar yang nyaman dan berkelas untuk Anda</p>
    </div>
</section>

<!-- Room List -->
<section class="rooms py-5" style="background:#f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-family:'Playfair Display', serif; font-size:36px;">Kamar Kami</h2>
        <div class="row g-4">
            @foreach($rooms as $room)
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $room->image) }}" class="card-img-top" alt="{{ $room->name }}" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5>{{ $room->name }}</h5>
                        <p>{{ $room->description }}</p>
                        <div class="fw-bold">Rp {{ number_format($room->price, 0, ',', '.') }} / malam</div>
                        <a href="https://www.reddoorz.com/id-id/hotel/indonesia/kuningan/kuningan/purwawinangun/reddoorz-syariah-near-taman-kota-kuningan/?check_in_date=20-08-2025&check_out_date=21-08-2025&rooms=1&sort_by=popular&order_by=desc&guest=2&new_user_promo=true&clevertap_source=listing"
   class="btn btn-primary mt-2"
   target="_blank"
   rel="noopener noreferrer">
   Book Now
</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
