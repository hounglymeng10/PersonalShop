<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        <style>
            /* Import Google Font */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

body {
    margin: 0;
    font-family: 'Roboto', -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.5;
    color: #e4e3dd;
    text-align: left;
    background-color: #fff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 10px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
h1 {
    font-size: 3rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

p {
    font-size: 1.2rem;
    font-weight: 400;
    color: #323330;
    margin-bottom: 20px;
    
}

        </style>
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
            <a href="/home" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Logo Image -->
            <img src="{{ asset('images/Mexxtenn4.png') }}" alt="Mexxtenn Logo" class="logo-img">
        </a>


                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#menu">Product</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <div class="cart-container">
                            <a href="/home/cart"><i class="fa-solid fa-cart-shopping fs-4"></i></a>
                            @if ($totalCount > 0)
                                <span class="badge">{{ $totalCount }}</span>
                            @endif
                        </div>

                        <li class="dropdown"><a href=""><span>{{ Auth::user()->name }}</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                <li>
                                    @auth
                                        @if (auth()->user()->isUser())
                                            <x-dropdown-link :href="route('order.history')" :active="request()->routeIs('order.history')">
                                                {{ __('Order History') }}
                                            </x-dropdown-link>
                                        @endif
                                    @endauth
                                </li>
                                <li>
                                    @auth
                                        @if (auth()->user()->isAdmin())
                                            <x-dropdown-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-dropdown-link>
                                        @endif
                                    @endauth
                                </li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                        </li>
                    </ul>
                    </li>
                    </ul>

                </nav><!-- .navbar -->
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div
                        class="col-lg-5 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h1 data-aos="fade-up" style="font-size: 3rem;">Find your style life<br>On Mexxtenn</h1>
                        <p data-aos="fade-up" data-aos-delay="100" style="font-size: 1.2rem;">Together! let's make Cambodia glow.</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#menu" class="btn-book-a-table" style="font-size: 1rem;">View Products</a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                    <div id="carouselExampleIndicators" class="carousel slide" data-aos="zoom-out" data-aos-delay="300">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main">

            <!-- ======= Menu Section ======= -->
            <section id="menu" class="menu">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                    <h1 data-aos="fade-up" style="font-size: 3rem;">OUR PRODUCTS</h1>
                    </div>
                    {{-- Search --}}
                    {{-- <div class="search mb-5">
                        <form action="{{ route('food.products.search') }}" method="GET">
                            <i class="fa fa-search"></i>
                            <input type="text" name="search" class="form-control" placeholder="Search by title, price, or category">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div> --}}
                    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#menu-all">
                                <h4 style="color: gray; cursor: pointer; font-size: large;">Products</h4>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-{{ $category->id }}">
                                    <h4 style="color: gray; font-size: large; cursor: pointer;">
                                        {{ $category->name }}</h4>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade active show" id="menu-all">
                            <!-- Display all products -->
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-6">
                                        <section id="menu" class="menu">
                                            <div data-aos="fade-up">
                                                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="row gy-5 justify-content-center">
                                                        <div class="col-lg-12 menu-item">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#productModal{{ $product->id }}"
                                                                class="glightbox">
                                                                <img src="{{ asset('images/' . $product->image) }}"
                                                                    alt="{{ $product->title }}" class="menu-img">
                                                            </a>
                                                            <div class="menu-details">
                                                                <h4 class="menu-title p-3 price">{{ $product->title }}
                                                                </h4>
                                                                <h5 class="menu-category ms-3 mb-3"
                                                                    style="color: gray;">
                                                                    {{ $product->category->name ?? 'No Category' }}
                                                                </h5>
                                                            </div>
                                                            <div
                                                                class="menu-footer d-flex justify-content-between align-items-center">
                                                                <p class="price">
                                                                    ${{ $product->price }}
                                                                </p>
                                                                <form action="{{ route('cart.add') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id"
                                                                        value="{{ $product->id }}">
                                                                    <button type="submit" class="btn btn-secondary">Add
                                                                        to cart</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <!-- Product Modal -->
                                    <div class="modal fade product-modal" id="productModal{{ $product->id }}"
                                        tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title price" id="productModalLabel">
                                                        {{ $product->title }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="{{ asset('images/' . $product->image) }}"
                                                                    alt="{{ $product->title }}" class="img-fluid">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="price">
                                                                    ${{ $product->price }}
                                                                </p>
                                                                <div class="fs-5 my-1 text-black">Description</div>
                                                                <p>{!! $product->description !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <button type="submit" class="btn btn-secondary">Add
                                                            to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @foreach ($categories as $category)
                            <div class="tab-pane fade" id="menu-{{ $category->id }}">
                                <!-- Display products for this category -->
                                <div class="row">
                                    @if ($category->products->isEmpty())
                                        <div class="col-md-12 pt-5 d-flex justify-content-center">
                                            <img class="img-fluid" style="max-width: 500px; height: 300px;"
                                                src="https://cdn.iconscout.com/icon/premium/png-256-thumb/no-item-found-4372183-3626865.png?f=webp"
                                                alt="NoFound">
                                        </div>
                                    @else
                                        @foreach ($category->products as $product)
                                        <div class="col-lg-3 col-md-6 mb-4">
    <section id="menu" class="menu">
        <div data-aos="fade-up">
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-12 menu-item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#productModal{{ $category->id }}{{ $product->id }}" class="glightbox">
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" class="menu-img">
                        </a>
                        <div class="menu-details">
                            <h4 class="menu-title p-3 price" style="color: #323330;"> <!-- Added inline style for color -->
                                {{ $product->title }}
                            </h4>
                            <h5 class="menu-category ms-3 mb-3" style="color: #323330;"> <!-- Added inline style for color -->
                                {{ $product->category->name ?? 'No Category' }}
                            </h5>
                        </div>
                        <div class="menu-footer d-flex justify-content-between align-items-center">
                            <p class="price" style="color: #323330;"> <!-- Added inline style for color -->
                                ${{ $product->price }}
                            </p>
                            <div>
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="btn btn-primary" style="background-color: #748957;"> <!-- Added inline style for background color -->
                                        Add to cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


                                            <!-- Food Modal -->
                                            <div class="modal fade product-modal"
                                                id="productModal{{ $category->id }}{{ $product->id }}"
                                                tabindex="-1" aria-labelledby="productModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title price" id="productModalLabel">
                                                                {{ $product->title }}</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <img src="{{ asset('images/' . $product->image) }}"
                                                                            alt="{{ $product->title }}"
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="price">
                                                                            ${{ $product->price }}
                                                                        </p>
                                                                        <div class="fs-5 my-1 text-warning">
                                                                            Description</div>
                                                                        <p>{!! $product->description !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('cart.add') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $product->id }}">
                                                                <button type="submit" class="btn btn-secondary">Add
                                                                    to cart</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="clearfix">
                        <ul class="paginations">
                            {{ $products->appends(['search' => request('search')])->links() }}
                        </ul>
                    </div>
                </div>
            </section><!-- End Menu Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h1>Contact Us</h1>
        </div>
        <div class="row gy-4">
            <!-- Address -->
            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <i class="icon fa-solid fa-location-dot flex-shrink-0"></i>
                    <div>
                        <h3>Our Address</h3>
                        <p><a href="https://maps.app.goo.gl/aeZsTBwcVw6cwCto8" target="_blank">Mexxtenn HealthyFoods</a></p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <!-- Email -->
            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <i class="icon fa-solid fa-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p><a href="mailto:houng.lymeng.2821@rupp.edu.kh">houng.lymeng.2821@rupp.edu.kh</a></p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <!-- Phone -->
            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <i class="icon fa-solid fa-phone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p><a href="tel:+85568500601">+855 68 500 601</a></p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <!-- Opening Hours -->
            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <i class="icon fa-solid fa-clock flex-shrink-0"></i>
                    <div>
                        <h3>Opening Hours</h3>
                        <p>Mon-Sat: 9AM - 10PM<br>Sun: Closed</p>
                    </div>
                </div>
            </div><!-- End Info Item -->
        </div>
    </div>
</section><!-- End Contact Section -->

<!-- Add some styling to the contact section -->
<style>
    .contact {
        background-color: #f5f5f5;
        padding: 40px 0;
    }

    .contact .section-header h1 {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .contact .section-header p {
        font-size: 1.1rem;
        color: #555;
    }

    .info-item {
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .info-item .icon {
        font-size: 1.5rem;
        color: #FF2D20;
        margin-right: 15px;
    }

    .info-item h3 {
        font-size: 1.2rem;
        margin-bottom: 5px;
    }

    .info-item p {
        font-size: 1rem;
    }

    .info-item a {
        color: #FF2D20;
        text-decoration: none;
    }

    .info-item a:hover {
        text-decoration: underline;
    }
    
</style>


        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container">
                <div class="row gy-3 d-flex justify-content-center">
                    <div class="col-lg-3 col-md-6 footer-links">

                        <div class="social-links d-flex">
                            <a href="https://www.facebook.com/houng.lymeng.168/" class="twitter"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.facebook.com/houng.lymeng.168/" class="facebook"><i class="fa-brands fa-x"></i></a>
                            <a href="https://www.facebook.com/houng.lymeng.168/" class="instagram"><i class="fa-brands fa-telegram"></i></a>
                            <a href="https://www.facebook.com/houng.lymeng.168/" class="linkedin"><i class="fa-brands fa-youtube"></i></a>
                            <a href="https://www.facebook.com/houng.lymeng.168/" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy;All Rights Reserved by <strong><span>mexxtennsite</span></strong>
                </div>
            </div>

        </footer>

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

    </html>
</x-app-layout>
