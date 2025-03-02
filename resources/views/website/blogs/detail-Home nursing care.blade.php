@extends('layout.website')
@section('title','المدونة-الرعاية الصحية المنزلية')
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
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
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
                    <a href="index.html" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="blog.html" class="h5 text-white">المدونة</a>
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
                        <img class="img-fluid w-100 rounded mb-5" src="img/BLog (1).jpg" alt="صورة المقال">
                        <h1 class="mb-4">الرعاية التمريضية المنزلية: مفتاح لتعزيز راحة المريض</h1>
                        <p>الرعاية التمريضية المنزلية تعد أحد أهم الجوانب في تقديم الدعم الصحي للمرضى داخل منازلهم. هذه الخدمة تساهم بشكل كبير في تحسين جودة حياة المرضى، خاصة كبار السن والمصابين بأمراض مزمنة.</p>
                        <p>من أبرز مزايا هذه الرعاية: مراقبة العلامات الحيوية بانتظام، تقديم الدعم العاطفي، وتوفير تعليمات صحية للأسر حول كيفية التعامل مع المرضى. بالإضافة إلى ذلك، يقلل التمريض المنزلي من الحاجة لزيارات المستشفيات المتكررة.</p>
                        <p>إذا كنت تفكر في طلب هذه الخدمة، تأكد من التواصل مع فريق مختص لضمان تقديم أفضل رعاية ممكنة تلبي احتياجاتك.</p>
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
                                <p>الرعاية التمريضية المنزلية ساعدتني كثيرًا في العناية بوالدتي. شكراً على هذا المقال المفيد.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">محمد خالد</a> <small><i>13 يناير 2025</i></small></h6>
                                <p>مقال رائع ومعلومات قيمة حول الرعاية التمريضية المنزلية.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">أحمد علي</a> <small><i>12 يناير 2025</i></small></h6>
                                <p>أحببت التركيز على أهمية مراقبة العلامات الحيوية للمرضى.</p>
                                <button class="btn btn-sm btn-light">رد</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->
      

    
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">اترك تعليقًا</h3>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="اسمك" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="بريدك الإلكتروني" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="تعليقك"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">إرسال التعليق</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="بحث في المقالات">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
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