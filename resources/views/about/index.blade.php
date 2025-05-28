<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMA-TI</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #3a86ff;
            --secondary-color: #8338ec;
            --accent-color: #ff006e;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            background-attachment: fixed;
            position: relative;
            min-height: 100vh;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%233a86ff' fill-opacity='0.05'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: -1;
        }
        
        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color);
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .navbar-toggler {
            border: none;
            outline: none;
        }
        
        /* Dropdown Styling */
        .dropdown-menu {
            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .dropdown-item {
            padding: 10px 20px;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background: rgba(58, 134, 255, 0.1);
            color: var(--primary-color);
            transform: translateX(5px);
        }
        
        /* Card Styling */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(50, 50, 93, 0.15), 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            font-weight: 600;
            padding: 15px 20px;
            border: none;
        }
        
        .card-body {
            padding: 30px;
        }
        
        /* Button Styling */
        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(58, 134, 255, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(58, 134, 255, 0.4);
        }
        
        /* List Styling */
        ul li, ol li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 5px;
        }
        
        ul {
            list-style-type: none;
            padding-left: 20px;
        }
        
        /* Modified: Exclude navbar list items from getting the dot */
        .card-body ul li:before {
            content: '.';
            color: var(--primary-color);
            font-weight: bold;
            position: absolute;
            left: -15px;
        }
        
        /* Ensure navbar items don't have dots */
        .navbar ul li:before {
            content: none;
        }
        
        /* Also ensure footer list items don't have dots */
        footer ul li:before {
            content: none;
        }
        
        /* Ensure dropdown menu items don't have dots */
        .dropdown-menu li:before {
            content: none;
        }
        

        /* Typography */
        h4 {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        
        p {
            color: #4a4a4a;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        
        /* Footer Styling */
        footer {
            background: rgba(26, 26, 46, 0.95);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        /* Animation classes */
        .fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar - Conditional based on login status -->
    @if(Auth::check())
    <!-- Navbar for Logged-in Users -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-comment-dots me-2"></i>SAMA-TI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="aspirasi"><i class="fas fa-bullhorn me-1"></i> Aspirasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about"><i class="fas fa-info-circle me-1"></i> Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data"><i class="fas fa-dollar-sign me-1"></i> Data</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i> <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="profile"><i class="fas fa-id-card me-2"></i>Profil Saya</a></li>
                            <li><a class="dropdown-item" href="settings"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" 
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @else
    <!-- Original Navbar for Non-logged-in Users -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-comment-dots me-2"></i>SAMA-TI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="aspirasi"><i class="fas fa-bullhorn me-1"></i> Aspirasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about"><i class="fas fa-info-circle me-1"></i> Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="data"><i class="fas fa-dollar-sign me-1"></i> Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register"><i class="fas fa-user-plus me-1"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login"><i class="fas fa-sign-in-alt me-1"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endif

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <i class="fas fa-info-circle me-2"></i>Tentang SAMA-TI
                    </div>
                    <div class="card-body">
                        <h4 class="text-center mb-4">Selamat datang di Sistem Online Suara Aspirasi Mahasiswa Teknologi Informasi</h4>
                        
                        <div class="text-center mb-4">
                            <img src="{{ asset('images/BG_ti.jpg') }}" alt="Foto Saya" style="max-width: 30%; height: auto;">
                        </div>
                        
                        <p>SAMA-TI adalah platform website yang dirancang untuk menampung berbagai aspirasi, saran, kritik, dan masukan dari Kategori Akademik maupun Non Akademik. Kami percaya bahwa setiap suara harus didengar dan setiap pendapat bernilai untuk pengembangan yang lebih baik.</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <i class="fas fa-question-circle fa-3x text-primary"></i>
                                        </div>
                                        <h5>Mengapa SAMA-TI?</h5>
                                        <p>Dalam era digital saat ini, penting bagi semua pihak untuk memiliki saluran komunikasi yang efektif dan transparan. SAMA-TI hadir sebagai jembatan untuk memfasilitasi hal tersebut.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <i class="fas fa-shield-alt fa-3x text-primary"></i>
                                        </div>
                                        <h5>Mengapa Anonim?</h5>
                                        <p>Kami menjamin kerahasiaan identitas pengirim aspirasi untuk memberikan kebebasan berpendapat tanpa adanya kekhawatiran akan dampak negatif.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h5 class="mt-5"><i class="fas fa-check-circle me-2"></i>Keunggulan Platform Kami:</h5>
                        <ul>
                            <li>Aman dan terjamin kerahasiaannya</li>
                            <li>Mudah diakses kapan saja dan dimana saja</li>
                            <li>Efisien dalam pengelolaan aspirasi</li>
                            <li>Transparan dalam proses penyampaian</li>
                        </ul>
                        
                        <h5><i class="fas fa-cogs me-2"></i>Bagaimana Cara Kerjanya?</h5>
                        <ol>
                            <li>Pengguna harus mendaftar/login terlebih dahulu</li>
                            <li>Tulis aspirasi Anda pada kolom yang tersedia</li>
                            <li>Aspirasi akan ditampilkan secara anonim</li>
                            <li>Anda dapat menghapus aspirasi yang telah Anda buat</li>
                        </ol>
                        
                        <div class="alert alert-info mt-4" role="alert">
                            <i class="fas fa-info-circle me-2"></i> Semua aspirasi yang masuk akan ditinjau dan ditindaklanjuti oleh pihak berwenang.
                        </div>
                        
                        <h5><i class="fas fa-address-book me-2"></i>Kontak</h5>
                        <p>Jika Anda memiliki pertanyaan lebih lanjut atau mengalami masalah dengan sistem kami, silakan hubungi tim dukungan kami melalui instagram <a href="https://www.instagram.com/hmti.unimus?igsh=MWJpNno1cHh1NzQxZw==" class="text-decoration-none">@hmti.unimus</a></p>
                        
                        <div class="text-center mt-5 mb-4">
                            <a href="/aspirasi" class="btn btn-primary me-2"><i class="fas fa-bullhorn me-2"></i>Sampaikan Aspirasi</a>
                            @if(!Auth::check())
                            <a href="/login" class="btn btn-outline-primary"><i class="fas fa-sign-in-alt me-2"></i>Login</a>
                            @endif
                        </div>

                        <img src="{{ asset('images/advo.jpg') }}" alt="Foto Saya" style="max-width: 100%; height: auto;">
                        <p class="text-center mt-4 fst-italic">Terima kasih telah melakukan aspirasi di SAMA-TI.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5 class="mb-3"><i class="fas fa-comment-dots me-2"></i>SAMA-TI</h5>
                    <p class="text-white text-decoration-none">Sistem Online Suara Aspirasi Mahasiswa Teknologi Informasi</p>
                    <div class="p-4 mb-lg-0 mb-3 bg-white rounded">
                        <iframe class="w-100" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8939079044085!2d110.459289573567!3d-7.0217554687841055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c507be50d83%3A0x8b3ed2ccbc3d79c0!2sUniversitas%20Muhammadiyah%20Semarang%20(UNIMUS)!5e0!3m2!1sid!2sid!4v1747204462960!5m2!1sid!2sid"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-1"></div> <!-- Kolom kosong untuk spacing -->
                <div class="col-md-3">
                    <h5 class="mb-3">Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="/aspirasi" class="text-white text-decoration-none">Aspirasi</a></li>
                        <li><a href="/about" class="text-white text-decoration-none">Tentang</a></li>
                        <li><a href="/data" class="text-white text-decoration-none">Data</a></li>
                        @if(Auth::check())
                        
                        @endif
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="fab fa-instagram me-2"></i><a href="https://www.instagram.com/hmti.unimus?igsh=MWJpNno1cHh1NzQxZw==" class="text-white text-decoration-none">@hmti.unimus</a></li>
                        <li><i class="fab fa-instagram me-2"></i><a href="https://www.instagram.com/teukuzyn?igsh=MTUwOGUzY3R0ejBpMg==" class="text-white text-decoration-none">@advokastrat.hmti</a></li>
                        <li><i class="fab fa-tiktok me-2"></i><a href="https://www.tiktok.com/@hmti_unimus?_t=ZS-8wExdr4KAi1&_r=1" class="text-white text-decoration-none">@hmti_unimus</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="text-white text-decoration-none mb-0">&copy; 2025 SAMA-TI</p>
                <p class="text-white text-decoration-none">Universitas Muhammdiyah Semarang</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Add scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-up');
            
            function checkPosition() {
                for (let i = 0; i < fadeElements.length; i++) {
                    const element = fadeElements[i];
                    const positionFromTop = element.getBoundingClientRect().top;
                    
                    if (positionFromTop - window.innerHeight <= 0) {
                        element.classList.add('active');
                    }
                }
            }
            
            window.addEventListener('scroll', checkPosition);
            checkPosition();
        });
    </script>
</body>
</html>