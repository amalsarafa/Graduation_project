@extends('layout.website')
@section('title','المدونة')
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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">مرحبًا بكم في مدونة MHW Care، حيث تجدون أحدث المقالات والنصائح حول الصحة والعافية، لنكون معكم دائمًا في رحلة الاهتمام بصحتكم</h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.blog')}}" class="h5 text-white">المدونة </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

@endsection
@section('content')
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
 <!-- Blog Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <!-- Blog Post 1 -->
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/BLog (1).jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" >الرعاية التمريضية</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>د. أحمد العلي</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>15 يناير, 2025</small>
                                    </div>
                                    <h4 class="mb-3">دليل شامل لتحسين خدمات الرعاية الصحية المنزلية</h4>
                                    <p>تعرف على أهم النصائح لتحسين الرعاية المنزلية للمرضى في بيئة مريحة وآمنة.</p>
                                    <a class="text-uppercase" href="{{route('website.blog.nursingcare')}}">اقرأ المزيد <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Post 2 -->
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/health1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" >التغذية الصحية</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>د. مريم الحربي</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>12 يناير, 2025</small>
                                    </div>
                                    <h4 class="mb-3">الأطعمة المثلى لدعم المناعة وصحة الجسم</h4>
                                    <p>اكتشف الأطعمة التي تساعد في تعزيز المناعة وتحسين الصحة العامة.</p>
                                    <a class="text-uppercase" href="{{route('website.blog.nutrition')}}">اقرأ المزيد <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Post 3 -->
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.3s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/mental health1.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">الصحة النفسية</a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>د. خالد السبيعي</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>10 يناير, 2025</small>
                                    </div>
                                    <h4 class="mb-3">استراتيجيات فعالة لدعم الصحة النفسية والتعامل مع القلق</h4>
                                    <p>تعلم استراتيجيات فعالة للتعامل مع القلق وضغوط الحياة.</p>
                                    <a class="text-uppercase" href="{{route('website.blog.mentalhealth')}}">اقرأ المزيد <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <!-- Blog Post 4 -->
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/Chronic diseases.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" >الأمراض المزمنة</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>د. أحمد العتيبي</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>15 يناير, 2025</small>
                                </div>
                                <h4 class="mb-3">كيفية التعامل مع الأمراض المزمنة وتحسين جودة الحياة</h4>
                                <p>تعرف على الأساليب الحديثة لإدارة الأمراض المزمنة والعيش بأسلوب صحي.</p>
                                <a class="text-uppercase" href="{{route('website.blog.diseases')}}">اقرأ المزيد <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">الفئات</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('website.blog.diseases')}}"><i class="bi bi-arrow-right me-2"></i>الصحة العامة</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('website.blog.nutrition')}}"><i class="bi bi-arrow-right me-2"></i>التغذية</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('website.blog.nursingcare')}}"><i class="bi bi-arrow-right me-2"></i>العناية بالمرضى</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('website.blog.mentalhealth')}}"><i class="bi bi-arrow-right me-2"></i>الصحة النفسية</a>
                        </div>
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">أحدث المقالات</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">كيفية تحسين نمط حياتك اليومي</a>
                        </div>
                    </div>
                    <!-- Recent Post End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    
    <!-- Blog End -->


    <!-- Vendor Start -->

    <!-- Vendor End -->
@endsection