@extends('layout.website')
@section('title','المدونة-التغذية الصحية')
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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">مرحبًا بكم في مدونتنا، اكتشفوا أسرار التغذية الصحية لحياة أفضل</h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية</a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.blog')}}" class="h5 text-white">المدونة</a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.blog.nutrition')}}" class="h5 text-white">التغذية الصحية</a>
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
                        <img class="img-fluid w-100 rounded mb-5" src="img/health1.jpg" alt="صورة المقال">
                        <h1 class="mb-4">التغذية الصحية: مفتاح لحياة أفضل</h1>
                        <p>التغذية الصحية تلعب دورًا أساسيًا في تعزيز الصحة العامة وتقوية المناعة. من خلال اختيار الأطعمة المناسبة، يمكنك تحسين جودة حياتك وحماية جسمك من العديد من الأمراض.</p>
                        <p>تناول الأطعمة الغنية بالألياف مثل الفواكه والخضروات، وتجنب الدهون المشبعة والسكريات الزائدة. شرب كميات كافية من الماء وممارسة الرياضة بانتظام يساعدان على تحسين عملية الهضم والحفاظ على الوزن المثالي.</p>
                        <p>ابدأ اليوم باتباع خطة غذائية متوازنة تضمن حصول جسمك على جميع العناصر الغذائية التي يحتاجها لتحقيق صحة أفضل وحياة أكثر نشاطًا.</p>
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
                                <h6><a href="">سارة يوسف</a> <small><i>14 يناير 2025</i></small></h6>
                                <p>مقال رائع! سأبدأ بتطبيق هذه النصائح لتحسين نظامي الغذائي.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">علي محمد</a> <small><i>13 يناير 2025</i></small></h6>
                                <p>التغذية الصحية هي أساس الحياة. شكرًا على هذه النصائح القيمة.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">أمل خالد</a> <small><i>12 يناير 2025</i></small></h6>
                                <p>مقال ملهم، سأحاول تضمين المزيد من الخضروات في نظامي الغذائي اليومي.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                    </div>
           

    
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


    <!-- Vendor Start -->
   
    <!-- Vendor End -->
    @endsection