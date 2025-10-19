@extends('layout')

@section('content')


{{-- Banner --}}
<div class="gambar-container" data-aos="fade-in">
    <img src="{{ asset('images/toko.jpg') }}" alt="Roti Enak">
    <div class="teks-di-atas" data-aos="fade-right" data-aos-delay="200">
        <h1>Selamat Datang di Global Bakery</h1>
        <p>Rasakan kehangatan setiap gigitan.  
        Roti segar, aroma yang menggoda, dan cita rasa penuh cinta dari dapur kami. 🥐</p>
    </div>
</div>

{{-- Section Menu --}}
<section class="section-dua-kolom" data-aos="fade-up">
    <div class="gambar" data-aos="zoom-in">
        <img src="{{ asset('images/Bolu Gulung Mini.jpeg') }}" alt="Bolu Enak">
    </div>
    <div class="teks" data-aos="fade-left">
        <h2>MENU PERTAMA SWEET BITE CAKE & COOKIES </h2>
        <p>
            Bolu gulung adalah kue bolu yang dipanggang menggunakan loyang dangkal,
            diisi dengan selai atau krim mentega kemudian digulung. 
            Bolu gulung sering dikenal sebagai jam roll, atau jelly roll di Amerika Serikat.
            Sebutan Pianono adalah bolu gulung yang populer di Spanyol, Amerika Selatan, dan Filipina.
        </p>
    </div>
</section>

{{-- Section Founder --}}
<section class="section-founder" data-aos="fade-up">
    <div class="teks" data-aos="fade-right">
        <h2>Meet Our Founder</h2>
        <p>
            Global Bakery was founded by <strong>Shopia Salmine</strong>, a visionary young entrepreneur
            who believes that every piece of bread should tell a story of warmth and passion.
            With her dedication and love for baking, Shopia has transformed simple ingredients
            into delightful creations enjoyed by everyone.
        </p>
    </div>

    <div class="gambar" data-aos="zoom-in">
        <img src="{{ asset('images/sincan.jpeg') }}" alt="Founder Global Bakery">
    </div>
</section>

{{-- Best Seller --}}
<section class="container my-5 d-flex align-items-center justify-content-between flex-wrap" data-aos="fade-up">
    <div class="col-md-5 mb-4 mb-md-0" data-aos="zoom-in">
        <img src="{{ asset('images/cakies.jpeg') }}" alt="Best Seller" class="img-fluid rounded-4 shadow">
    </div>

    <div class="col-md-6" data-aos="fade-left">
        <h2 class="fw-bold best-seller-title">Best Seller Product</h2>
        <p class="text-secondary">
            🎂 Best Seller Alert!
            Kue ulang tahun spesial kami selalu jadi pilihan utama pelanggan!
            Lembut, manis, dan penuh warna — cocok untuk semua momen bahagia.
            Yuk, rayakan harimu dengan kue terbaik dari kami, karena setiap hari pantas dirayakan! 🥳
        </p>

        <div class="d-flex gap-4 mt-4 flex-wrap">
            <div>
                <h3 class="counter" data-target="10" style="color:#f5c542">10</h3>
                <p>Years of Experience</p>
            </div>
            <div>
                <h3 class="counter" data-target="5000" style="color: #f0a500">0</h3>
                <p>Happy Customers</p>
            </div>
            <div>
                <h3 class="counter" data-target="20" style="color:#b8860b">0</h3>
                <p>Best Seller Products</p>
            </div>
        </div>
    </div>
</section>

<style>
    .gambar-container {
        position: relative;
        width: 100%;
        height: 100vh; 
        overflow: hidden;
    }

    .gambar-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(70%); 
    }

    .teks-di-atas {
        position: absolute;
        top: 50%;
        left: 8%; 
        transform: translateY(-50%);
        color: #fff;
        text-align: left;
        max-width: 500px; 
    }

    .teks-di-atas h1 {
        font-size: 50px;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
    }

    .teks-di-atas p {
        font-size: 20px;
        font-weight: 300;
        text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
        line-height: 1.6;
    }

    
    @media (max-width: 768px) {
        .teks-di-atas h1 {
            font-size: 32px;
        }
        .teks-di-atas p {
            font-size: 16px;
        }
    }

    .section-dua-kolom {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
        padding: 80px 100px;
        flex-wrap: wrap; 
        background-color: #fffaf5;
    }

    .section-dua-kolom .gambar {
        flex: 1;
        text-align: center;
        box-shadow: #f5c542;
    }

    .section-dua-kolom .gambar img {
        width: 100%;
        max-width: 500px;
        border-radius: 10px;
    }

    .section-dua-kolom .teks {
        flex: 1;
    }

    .section-dua-kolom .teks h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .section-dua-kolom .teks p {
        font-size: 18px;
        line-height: 1.6;
        color: #333;
    }

    /* Responsive biar tetap rapi di hp */
    @media (max-width: 768px) {
        .section-dua-kolom {
            flex-direction: column;
            padding: 40px 20px;
            text-align: center;
        }

        .section-dua-kolom .teks h2 {
            font-size: 22px;
        }

        .section-dua-kolom .teks p {
            font-size: 16px;
        }
    }

    .section-founder {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
        padding: 80px 100px;
        flex-wrap: wrap; 
        background-color: #fff3c4;
    }

    .section-founder .teks {
        flex: 1;
    }

    .section-founder .teks h2 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #222;
    }

    .section-founder .teks p {
        font-size: 18px;
        line-height: 1.7;
        color: #555;
    }

    .section-founder .gambar {
        flex: 1;
        text-align: center;
    }

    .section-founder .gambar img {
        width: 100%;
        max-width: 400px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .section-founder {
            flex-direction: column-reverse; /* biar di HP teksnya di atas, gambar di bawah */
            padding: 40px 20px;
            text-align: center;
        }

        .section-founder .teks h2 {
            font-size: 26px;
        }

        .section-founder .teks p {
            font-size: 16px;
        }
    }

    .counter {
    font-size: 2rem;
    font-weight: bold;
}

.best-seller-title {
  color: #f0a500; 
  font-size: 32px;
  font-weight: bold;
}

section {
    padding-top: 80px;
    padding-bottom: 80px;
}



</style>

<script>
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const speed = 80; 
            const increment = target / 100;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, speed);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
    
</script>



@endsection
