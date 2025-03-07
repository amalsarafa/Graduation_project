
@extends('layout.website')
@section('title',' الأسعار والحزم')
@section('Navbar')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('website.home')}}" class="navbar-brand p-0"> 
                 <h1 class="m-0">MHW Care<i class="fa fa-user-tie me-2"></i></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('website.home')}}" class="nav-item nav-link active"> الرئيسية </a>
                    <a href="{{route('website.about')}}" class="nav-item nav-link ">من نحن </a>
                    <a href="{{route('website.services')}}" class="nav-item nav-link">الخدمات </a>
                    <a href="{{route('website.blog')}}" class="nav-item nav-link">المدونة </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">صفحات</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('website.page.price')}}" class="dropdown-item">الأسعار و الحزم</a>
                            <a href="{{route('website.page.feature')}}" class="dropdown-item">الإستشارات الطبية عن بعد  </a>
                            <a href="{{route('website.page.team')}}" class="dropdown-item">الفريق الطبي </a>
                            <a href="{{route('website.page.testimonial')}}" class="dropdown-item">اراء العملاء </a>
                            <a href="{{route('website.page.healthEvents')}}" class="dropdown-item"> المخيم الصحي </a>
                            <a href="{{route('website.page.faq')}}" class="dropdown-item">الأسئلة و الأجوبة  </a>
                            <a href="{{route('website.page.caregiverResources')}}" class="dropdown-item "> أدب مقدمي الرعاية </a>
                        </div>
                    </div>
                    <a href="{{route('website.contact')}}" class="nav-item nav-link">اتصل بنا </a>
                </div>
                @if(Auth::check())
                <a href="{{ route('logout') }}" 
                  class="btn btn-danger py-2 px-4 ms-3"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         تسجيل الخروج
                       </a>
       
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
               </form>
                  @else
          <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">تسجيل الدخول</a>
          <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">تسجيل جديد</a>
            @endif
               </div>
           </nav>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">اختر الخطة التي تناسبك لتحصل على أفضل رعاية صحية</h5>

                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                   
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.page.price')}}" class="h5 text-white">الأسعار</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

@endsection
@section('content')
 <!-- Template Stylesheet -->
 <link href="css/style.css" rel="stylesheet">
 <!-- Pricing Plan Start -->
  <!-- Pricing Plan Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">أسعار الخدمات</h5>
            <h1 class="mb-0">تعرف على أسعار خدماتنا الفردية</h1>
        </div>
        <div class="row g-4">
            <!-- خدمة التمريض المنزلي -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded p-4">
                    <h4 class="text-primary mb-3">جلسة تمريض منزلي</h4>
                    <p>خدمة رعاية صحية شاملة في المنزل تشمل العناية الطبية الأولية ومتابعة الحالات المزمنة.</p>
                    <h5 class="text-primary">100 شيكل / الجلسة</h5>
                    <a href="{{route('website.home')}}" class="btn btn-primary py-2 px-4 mt-3">احجز الآن</a>
                </div>
            </div>
            <!-- خدمة العلاج الطبيعي -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded p-4">
                    <h4 class="text-primary mb-3">جلسة علاج طبيعي</h4>
                    <p>جلسات علاج طبيعي مخصصة لتحسين الحركة والتخفيف من الألم.</p>
                    <h5 class="text-primary">150 شيكل / الجلسة</h5>
                    <a href="{{route('website.home')}}" class="btn btn-primary py-2 px-4 mt-3">احجز الآن</a>
                </div>
            </div>
            <!-- خدمة استشارة طبية عن بعد -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded p-4">
                    <h4 class="text-primary mb-3">استشارة طبية عن بعد</h4>
                    <p>تواصل مع أطباء مختصين بسهولة من خلال الاستشارات الطبية عن بعد.</p>
                    <h5 class="text-primary">50 شيكل / الاستشارة</h5>
                    <a href="{{route('website.home')}}" class="btn btn-primary py-2 px-4 mt-3">احجز الآن</a>
                </div>
            </div>
            <!-- خدمة إدارة الأدوية -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="1.2s">
                <div class="bg-light rounded p-4">
                    <h4 class="text-primary mb-3">إدارة الأدوية</h4>
                    <p>تنظيم وتقديم الأدوية اليومية لضمان الالتزام بالخطة العلاجية.</p>
                    <h5 class="text-primary">80 شيكل / الجلسة</h5>
                    <a href="{{route('website.home')}}" class="btn btn-primary py-2 px-4 mt-3">احجز الآن</a>
                </div>
            </div>
            <!-- خدمة فحص طبي منزلي -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="1.5s">
                <div class="bg-light rounded p-4">
                    <h4 class="text-primary mb-3">فحص طبي منزلي</h4>
                    <p>فحص شامل ومتابعة صحية من قبل فريق طبي مختص في منزلك.</p>
                    <h5 class="text-primary">200 شيكل / الفحص</h5>
                    <a href="{{route('website.home')}}" class="btn btn-primary py-2 px-4 mt-3">احجز الآن</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

@endsection