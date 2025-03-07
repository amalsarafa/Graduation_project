<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- SweetAlert2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&amp;family=Rubik:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
    <link href="{{asset('css/style2.css.css')}}" rel="stylesheet">
</head>
 @yield('model')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
@yield('Navbar')

    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{route('website.home')}}" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-heartbeat me-2"></i>MHW Care</h1>
                        </a>
                        <p class="mt-3 mb-4">في <strong>MHW Care</strong>، نلتزم بتقديم أفضل خدمات الرعاية الصحية المنزلية لتحسين جودة حياتكم. رؤيتنا هي أن نكون الخيار الأول للرعاية الصحية المنزلية في منطقتنا.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="البريد الإلكتروني">
                                <button class="btn btn-dark">اشترك</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <!-- قسم الاتصال -->
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">تواصل معنا</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">غزة، فلسطين</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@mhwcare.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+970 59 123 4567</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">استكشف موقعنا</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{route('website.home')}}"><i class="bi bi-arrow-left text-primary me-2"></i>الرئيسية</a>
                                <a class="text-light mb-2" href="{{route('website.about')}}"><i class="bi bi-arrow-left text-primary me-2"></i>من نحن</a>
                                <a class="text-light mb-2" href="{{route('website.services')}}"><i class="bi bi-arrow-left text-primary me-2"></i>خدماتنا</a>
                                <a class="text-light mb-2" href="{{route('website.page.team')}}"><i class="bi bi-arrow-left text-primary me-2"></i>الفريق الطبي</a>
                                <a class="text-light mb-2" href="{{route('website.blog')}}"><i class="bi bi-arrow-left text-primary me-2"></i>النصائح الصحية</a>
                                <a class="text-light" href="{{route('website.contact')}}"><i class="bi bi-arrow-left text-primary me-2"></i>اتصل بنا</a>
                            </div>
                        </div>
                    </div>
                </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">MHW Care - My Health & Wellness </a>| Home Nursing Services </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top" style="display: none;"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        type="text/javascript"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}" type="text/javascript"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>


    <div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
    <div id="lightbox" class="lightbox" style="display: none;">
        <div class="lb-outerContainer">
            <div class="lb-container"><img class="lb-image"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                <div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div>
                <div class="lb-loader"><a class="lb-cancel"></a></div>
            </div>
        </div>
        <div class="lb-dataContainer">
            <div class="lb-data">
                <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
                <div class="lb-closeContainer"><a class="lb-close"></a></div>
            </div>
        </div>
    </div>
</body>

</html>