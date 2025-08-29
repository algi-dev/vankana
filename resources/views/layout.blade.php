<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vankana</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .luxury-font {
            font-family: 'Georgia', serif;
            font-weight: bold;
            font-size: 24px;
        }
        header {
            background-color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .book-btn {
            background-color: #20c997; /* hijau toska */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        nav {
            background-color: #f8f9fa;
            padding: 10px 30px;
        }
        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        footer {
            background-color: #222;
            color: white;
            padding: 20px 30px;
            text-align: center;
        }
        footer a {
            color: #20c997;
            margin: 0 10px;
        }
        .background-image {
            background: url('/images/hotel.jpg') no-repeat center center;
            background-size: cover;
            min-height: 400px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero-img {
    width: 100%;
    height: 450px;
    object-fit: cover;
}
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
}
.hero-title {
    font-size: 3rem;
    font-weight: bold;
    text-transform: uppercase;
}
.hero-subtitle {
    font-size: 1.3rem;
    margin: 10px 0 20px 0;
}
.btn-book {
    background-color: #20c997;
    color: white;
    padding: 12px 30px;
    font-size: 18px;
    border-radius: 8px;
    transition: 0.3s;
    text-decoration: none;
}
.btn-book:hover {
    background-color: #17a589;
}
.facility-item {
    transition: transform 0.3s ease-in-out;
}
.facility-item:hover {
    transform: translateY(-10px);
}
.icon-animate {
    color: #20c997;
    animation: bounce 1.5s infinite;
}
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}
.promo-title {
    font-size: 2rem;
    font-weight: bold;
    color: #20c997; /* hijau toska biar senada */
}
.promo-text {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 20px;
}
.btn-promo {
    background-color: #d4af37; /* warna emas untuk kesan mewah */
    color: white;
    padding: 12px 25px;
    font-size: 16px;
    border-radius: 8px;
    text-decoration: none;
    transition: 0.3s;
}
.btn-promo:hover {
    background-color: #b8860b;
}
.hero-overlay-about {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    color: white;
}
.icon-animate {
    animation: bounce 1.5s infinite;
}
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
.hero-about {
    position: relative;
    height: 400px;
}
.hero-img-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.hero-overlay-about {
    position: absolute;
    top:0; left:0; width:100%; height:100%;
    background: rgba(0,0,0,0.4);
    color:white;
    display:flex; flex-direction:column; justify-content:center; align-items:center;
    text-align:center;
}
.hero-title { font-family: 'Playfair Display', serif; font-weight:700; }
.section-title { font-family: 'Playfair Display', serif; font-weight:700; color:#20c997; }
.btn-book {
    background-color: #d4af37; color:white; padding:12px 25px; border-radius:8px;
    text-decoration:none; transition:0.3s;
}
.btn-book:hover { background-color:#b8860b; }
h2, .section-title {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
}
h3, .sub-title {
    font-family: 'Lora', serif;
    font-weight: 600;
    color: #6c757d; /* abu-abu elegan */
}
.rooms-section {
        text-align: center;
        padding: 40px 0;
    }

    .rooms-title {
        font-family: 'Playfair Display', serif;
        font-size: 36px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .rooms-subtitle {
        font-size: 18px;
        color: #7f8c8d;
        margin-bottom: 40px;
    }

    .rooms-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .room-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .room-card:hover {
        transform: translateY(-8px);
    }

    .room-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .room-info {
        padding: 20px;
        text-align: left;
    }

    .room-info h3 {
        font-family: 'Merriweather', serif;
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .room-info p {
        font-size: 14px;
        color: #7f8c8d;
        margin-bottom: 15px;
    }

    .room-price {
        font-size: 16px;
        font-weight: bold;
        color: #e67e22;
        margin-bottom: 15px;
    }

    .btn-book {
        display: inline-block;
        padding: 10px 20px;
        background: #1a1a1a;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .btn-book:hover {
        background: #e67e22;
    }

</style>
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="luxury-font">Hotel Vankana</div>
        <a href="https://www.reddoorz.com/id-id/hotel/indonesia/kuningan/kuningan/purwawinangun/reddoorz-syariah-near-taman-kota-kuningan/?check_in_date=20-08-2025&check_out_date=21-08-2025&rooms=1&sort_by=popular&order_by=desc&guest=2&new_user_promo=true&clevertap_source=listing"
   target="_blank" class="book-btn">
    Book Now
</a>

    </header>

    <!-- Navigation -->
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/rooms') }}">Room</a>
        <a href="{{ url('/about') }}">About Us</a>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div>
            <p>Contact Us:</p>
            <p><i class="fas fa-phone"></i> +62 812-3456-7890 | <i class="fas fa-map-marker-alt"></i> Jl. Otista, No. 106 - 108, Kuningan, Kecamatan Kuningan, Kuningan, Indonesia, 45511 | <i class="fas fa-envelope"></i> info@hotelvankana.com</p>
        </div>
        <div>
            <p>Connect with us:</p>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/6281234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>
</html>
