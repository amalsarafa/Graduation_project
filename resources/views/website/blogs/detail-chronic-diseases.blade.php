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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">مرحبًا بكم في مدونتنا، لنقدّم لكم نصائح ومعلومات صحية  </h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.blog')}}" class="h5 text-white">المدونة</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    @endsection
    @section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
   
                    <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/Chronic diseases.jpg" alt="صورة عن الأمراض المزمنة">
                    <h1 class="mb-4">كيفية التعامل مع الأمراض المزمنة وتحسين جودة الحياة</h1>
                    <p>الأمراض المزمنة هي حالات طويلة الأمد تتطلب إدارة مستمرة وتحكمًا دقيقًا لضمان جودة حياة أفضل. من أمثلة هذه الأمراض: السكري، أمراض القلب، وارتفاع ضغط الدم.</p>
                    <p>العناية الجيدة تشمل الالتزام بالعلاج، مراقبة الحالة الصحية بانتظام، واتباع أسلوب حياة صحي يشمل التغذية السليمة وممارسة الرياضة. يمكن أن يكون الدعم النفسي والاجتماعي عاملاً مهمًا لمساعدة المرضى في التكيف مع التحديات اليومية.</p>
                    <p>الوعي والتعليم حول الأمراض المزمنة يساعد في الوقاية من مضاعفاتها ويزيد من فاعلية العلاج. إذا كنت تعاني من مرض مزمن، ننصحك بالتواصل مع أطباء مختصين للحصول على الرعاية المناسبة.</p>
                    </div>


                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">3 تعليقات</h3>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">نورة أحمد</a> <small><i>14 يناير 2025</i></small></h6>
                                <p>موضوع مهم جدًا، النصائح مفيدة وسأحاول تطبيقها في حياتي اليومية.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">محمد خالد</a> <small><i>13 يناير 2025</i></small></h6>
                                <p>أحببت الفقرة التي تتحدث عن أهمية الراحة والاسترخاء. شكرًا على هذه المعلومات القيمة.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">أحمد علي</a> <small><i>12 يناير 2025</i></small></h6>
                                <p>الصحة النفسية أمر أساسي للحياة. شكراً لكم على هذا المقال المفيد.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->
    
    

    
                    <!-- Comment List End -->
    
                   
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                   
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">الفئات</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('website.blog.mentalhealth')}}"><i class="bi bi-arrow-right me-2"></i>الصحة النفسية</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('website.blog.nutrition')}}"><i class="bi bi-arrow-right me-2"></i>التغذية الصحية</a>
                       
                        </div>
                    </div>
                    <!-- Category End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    
    <!-- Blog End -->
   
    @endsection