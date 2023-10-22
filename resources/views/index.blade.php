<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>E-Karobar | Pakistan's #1 Dropshipping Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="E-Karobar's Website" name="Zubair Ansari" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

<!-- Begin page -->
<div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="40">
                <img src="{{ asset('assets/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light" height="40">
            </a>
            <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                    <li class="nav-item">
                        <a class="nav-link fs-15 active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-15 active" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-15 active" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-15 active" href="#progress">Progress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-15" href="#top-sellers">Top Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-15 active" href="#contact">Contact</a>
                    </li>
                </ul>

                <div class="m-2">
                    <a class="btn btn-success btn-label waves-effect waves-light rounded-pill" href="https://clients.e-karobar.com/login">
                        <i class="ri-login-circle-line label-icon align-middle fs-16"></i>
                        Client's Login
                    </a>
                </div>
                <div class="">
                    <a class=" btn btn-secondary btn-label waves-effect waves-light rounded-pill" href="{{ route('signup.index') }}">
                        <i class="ri-add-circle-line label-icon align-middle fs-16"></i>
                        Create Account
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <div class="bg-overlay bg-overlay-pattern"></div>
    <!-- end navbar -->

    <!-- start hero section -->
    <section class="section nft-hero" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="text-center">
                        <h1 class="display-4 fw-medium mb-4 lh-base text-white">Pakistan #1 high profitable <span class="text-success">Dropshipping Marketplace</span></h1>
                        <div class="hstack gap-2 justify-content-center">
                            <a class="btn btn-danger btn-label waves-effect waves-light rounded-pill" href="https://www.youtube.com/@E_KAROBAR">
                                <i class="ri-youtube-line label-icon align-middle fs-16"></i>
                                Training Sessions
                            </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end hero section -->

    <!-- start client section -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center mt-5">
                        <h5 class="fs-20">Our Payment Partners</h5>

                        <!-- Swiper -->
                        <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img src="{{ asset('assets/images/payouts_methods/nayapay.png') }}" alt="bank-img" class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img src="{{ asset('assets/images/payouts_methods/sadapay.png') }}" alt="bank-img" class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img src="{{ asset('assets/images/payouts_methods/easypaisa.png') }}" alt="bank-img" class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img src="{{ asset('assets/images/payouts_methods/jazzcash.png') }}" alt="bank-img" class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img src="{{ asset('assets/images/payouts_methods/hbl.png') }}" alt="bank-img" class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-images">
                                        <img src="{{ asset('assets/images/payouts_methods/meezan.png') }}" alt="bank-img" class="mx-auto img-fluid d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end client section -->

    <!-- start marketplace -->
    <section class="section bg-light" id="products">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Our Products</h2>
                            <p class="text-muted mb-4">500+ Top nech winning products with hight profit ratio.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                

                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                @foreach($products as $product)
                    <div class="col">
                        <div class="card explore-box card-animate">
                            <div class="explore-place-bid-img">
                                <img src="#" alt="" class="card-img-top explore-img" />
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="https://clients.e-karobar.com/login" class="btn btn-success"><i class="ri-shopping-cart-fill align-bottom me-1"></i> Place Order</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-1">{{ $product->name}}</h5>
                            </div>
                            <div class="card-footer border-top border-top-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 fs-14">
                                        <i class="ri-price-tag-3-fill text-warning align-bottom me-1"></i><span class="fw-medium">Price</span>
                                    </div>
                                    <h5 class="flex-shrink-0 fs-14 text-primary mb-0">tet PKR</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- end container -->
            <div class="row g-0 text-center text-sm-start align-items-center mb-4">
                {!! $products->links() !!}
            </div><!-- end row -->
        </section>
        <!-- end marketplace -->

    <!-- start services -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold lh-base">Why E-Karobar?</h1>
                        <p class="text-muted">Core values we are giving to our clients.</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="row g-3 mb-4">
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-survey-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">In-depth Order Report</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-focus-3-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Real Time Courier Tracking</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-todo-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Organized Complaint Centre</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="row g-3 mb-4">
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-medal-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Niche Winning Products</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-user-follow-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Dedicated Account Managers</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-truck-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Courier Selection Choice</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="row g-3 mb-4">
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-file-text-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Payment/Invoices logs</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-file-excel-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">CSV Files to Export</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-rocket-2-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Same Day Dispatch</h5>
                            <a href="#" class="fs-13 fw-medium">Learn More <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


    <!-- start counter -->
    <section class="section position-relative bg-dark" id="progress">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-semibold lh-base text-white">Our Progress</h1>
                        <p class="text-muted">In past 3 years, we did overwhelming perfomance to provide a successful business to our clients.</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <div class="row text-center gy-4">
                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2 text-white"><span class="counter-value" data-target="250">0+</span>+</h2>
                        <div class="text-muted text-white">Active Clients</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2 text-white"><span class="counter-value" data-target="500">0+</span></h2>
                        <div class="text-muted text-white">Wining Products</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2 text-white"><span class="counter-value" data-target="680">0K+</span>k</h2>
                        <div class="text-muted text-white">Parcel Delivered</div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-6">
                    <div>
                        <h2 class="mb-2 text-white"><span class="counter-value" data-target="17">0</span></h2>
                        <div class="text-muted text-white">Employees</div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end counter -->

    <!-- start contact -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                        <p class="text-muted mb-4 ff-secondary">We are 24/7 available to assist you, just feel free to leave us a message so that we can respond to you.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                            <div class="ff-secondary fw-semibold">Office #2 Dua Manzil Khardar Punjabi Club Near Madina Masjid</BR>Karachi</div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                            <div class="ff-secondary fw-semibold">10:00 am – 10:00 pm </BR>Local Time Mon-Sat</div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-8">
                    <div>
                    <form action="https://formsubmit.co/e-karobar.com@hotmail.com" method="POST" />
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label fs-13">Name</label>
                                        <input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label fs-13">Email</label>
                                        <input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="subject" class="form-label fs-13">Subject</label>
                                        <input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label fs-13">Message</label>
                                        <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->

    <!-- start Work Process -->
    <section class="section bg-light" id="top-sellers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-semibold lh-base">Sellers of the month.</h2>
                        <p class="text-muted">We always encourage our sellers to think beyond the box.</p>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-cover rounded" />
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="mb-1">Wow Kart</h5>
                                    <p class="text-muted mb-0">360,000 PKR (Profit)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-cover rounded" />
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="mb-1">Alpha Shop</h5>
                                    <p class="text-muted mb-0">250,000 PKR (Profit)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-cover rounded" />
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="mb-1">The Beauties</h5>
                                    <p class="text-muted mb-0">170,000 PKR (Profit)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-cover rounded" />
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="mb-1">Lejao</h5>
                                    <p class="text-muted mb-0">130,000 PKR (Profit)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shink-0">
                                    <img src="assets/images/nft/img-01.jpg" alt="" class="avatar-sm object-cover rounded" />
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="mb-1">Apni Dukan</h5>
                                    <p class="text-muted mb-0">110,000 PKR (Profit)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

            </div>
        </div><!-- end container -->
    </section><!-- end Work Process -->



    <!-- start cta -->
    <section class="py-5 bg-primary position-relative">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h4 class="text-white mb-0 fw-semibold">Get FREE training sessions (worth of 30K PKR)</h4>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a class="btn btn-danger btn-label waves-effect waves-light rounded-pill" href="https://www.youtube.com/@E_KAROBAR">
                            <i class="ri-youtube-line label-icon align-middle fs-16"></i>
                            Training Sessions
                        </a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta -->

    <!-- Start footer -->
    <footer class="custom-footer bg-dark py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div>
                        <div>
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo light" height="40">
                        </div>
                        <div class="mt-4">
                            <p>Pakistan #1 high profitable dropshipping marketplace.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 ms-lg-auto">
                    <div class="row">
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Company</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Apps Pages</h5>
                            <div class="text-muted mt-3">
                                <ul class="list-unstyled ff-secondary footer-list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <h5 class="text-white mb-0">Address & Hours</h5>
                            <div class="text-muted mt-3">
                                <div class="mt-4">
                                    <p>Office #2 Dua Manzil Khardar Punjabi Club Near Madina Masjid, Karachi</p>
                                    <p>10:00 am – 10:00pm Local Time Mon-Sat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row text-center text-sm-start align-items-center mt-5">
                <div class="col-sm-6">

                    <div>
                        <p class="copy-rights mb-0">
                            <script> document.write(new Date().getFullYear()) </script> © E-Karobar
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end mt-3 mt-sm-0">
                        <ul class="list-inline mb-0 footer-social-link">
                            <li class="list-inline-item">
                                <a href="https://facebook.com/e_karobar" target="_blank" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-facebook-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/officialzubairansari/e-karobar-website" target="_blank" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-github-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://instagram.com/e_karobar" target="_blank" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-instagram-line"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

</div>
<!-- end layout wrapper -->


<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/nft-landing.init.js') }}"></script>
<script src="{{ asset('assets/js/pages/landing.init.js') }}"></script>

</body>

</html>
