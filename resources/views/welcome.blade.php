<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mexxtennsite</title>
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            overflow-y: scroll;
        }

        .navbar {
            width: 100%;
            padding: 15px 20px;
            background-color: #333;
            color: white;
            justify-content: flex-end;
            align-items: center;
            position: fixed;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .auth-links {
            gap: 10px; /* Space between the login and register buttons */
        }

        .navbar a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 5px;
        }

        .navbar a:hover {
            background-color: #FF2D20;
            transform: scale(1.1);
        }
        .slideshow {
            position: relative;
            width: 100%;
            height: 400px;
            margin-top: 70px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .slide {
            width: 100%;
            height: 100%;
            position: absolute;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .container {
            max-width: 800px;
            padding: 40px;
            margin: 50px auto;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #666;
        }

        .btn-secondary {
            display: inline-block;
            padding: 12px 24px;
            background-color: #FF2D20;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #333;
            transform: scale(1.05);
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .social-links a {
            color: #666;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s, transform 0.3s;
        }

        .social-links a:hover {
            color: #FF2D20;
            transform: scale(1.2);
        }

        .small-slideshows {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .small-slideshow {
            width: 23%;
            height: 300px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: zoomIn 1s ease;
        }

        .small-slide {
            width: 100%;
            height: 100%;
            position: absolute;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .small-slide.active {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            h1 {
                font-size: 2rem;
            }
            p {
                font-size: 1rem;
            }
            .navbar a {
                padding: 8px 12px;
            }
            .small-slideshows {
                flex-direction: column;
                align-items: center;
            }
            .small-slideshow {
                width: 90%;
                margin-bottom: 20px;
            }
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes zoomIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
    </div>

    <div>
        ..
    </div>
    <div>
        ..
    </div>
    <div>
        ..
    </div>
    <div>
        <p>Best Clothes, Best Quality</p>
    </div>
    <!-- Small Slideshows -->
    <div class="small-slideshows">
        <!-- Example small slideshows with images -->
        <div class="small-slideshow">
            <div class="small-slide active" style="background-image: url('/images/1.jpg');"></div>
            <div class="small-slide" style="background-image: url('/images/5.jpg');"></div>
        </div>
        <div class="small-slideshow">
            <div class="small-slide active" style="background-image: url('/images/3.jpg');"></div>
            <div class="small-slide" style="background-image: url('/images/4.jpg');"></div>
        </div>
        <div class="small-slideshow">
            <div class="small-slide active" style="background-image: url('/images/6.jpg');"></div>
            <div class="small-slide" style="background-image: url('/images/5.jpg');"></div>
        </div>
        <div class="small-slideshow">
            <div class="small-slide active" style="background-image: url('/images/3.jpg');"></div>
            <div class="small-slide" style="background-image: url('/images/4.jpg');"></div>
        </div>
    </div>
    <div class="container">
        <h1>Welcome to Mexxtenn Order</h1>
        <p>At Mexxtenn, we make shopping easy and enjoyable. Find the latest products, great deals, and everything you need, all in one place.</p>

        <!-- Main Slideshow -->
        <div class="slideshow">
            <div class="slide active" style="background-image: url('/images/1.jpg');"></div>
            <div class="slide" style="background-image: url('/images/2.jpg');"></div>
            <div class="slide" style="background-image: url('/images/5.jpg');"></div>
        </div>
        <p>
        Find your style life on our shop.
        </p>
        <!-- Add a link to view products on the dashboard -->
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">View Products</a>

        <!-- Social Media Links -->
        <div class="social-links">
            <a href="https://www.facebook.com/houng.lymeng.168/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://t.me/yourprofile" target="_blank"><i class="fab fa-telegram"></i></a>
            <a href="https://youtube.com/yourchannel" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <!-- JavaScript for Slideshow Functionality -->
    <script>
        let slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showNextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(showNextSlide, 5000);

        let smallSlideshows = document.querySelectorAll('.small-slideshow');
        smallSlideshows.forEach(slideshow => {
            let smallSlides = slideshow.querySelectorAll('.small-slide');
            let smallCurrentSlide = 0;

            function showNextSmallSlide() {
                smallSlides[smallCurrentSlide].classList.remove('active');
                smallCurrentSlide = (smallCurrentSlide + 1) % smallSlides.length;
                smallSlides[smallCurrentSlide].classList.add('active');
            }

            setInterval(showNextSmallSlide, 3000);
        });
    </script>
</body>
</html>
