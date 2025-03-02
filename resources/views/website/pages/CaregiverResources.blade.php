@extends('layout.website')
@section('title','أدب مقدمي الرعاية')
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


    <!-- Navbar End -->

@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 bg-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">المخيم الصحي والندوات عبر الإنترنت</h5>
                <a href="{{route('website.home')}}" class="text-white">الرئيسية</a>
                <i class="fa fa-angle-double-right text-white px-2"></i>
                <a href="{{route('website.page.caregiverResources')}}" class="text-white">المخيم الصحي</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">فيديوهات توعوية لمقدمي الرعاية</h2>
            <p>شاهد مقاطع الفيديو التوعوية لتحسين مهاراتك ومعرفتك في تقديم الرعاية الصحية المختلفة.</p>
        </div>
    
        <!-- الصف العلوي: 3 فيديوهات -->
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <video class="card-img-top" width="100%" height="315" controls>
                        <source src="video/high_blood_pressure.mp4" type="video/mp4">
                        متصفحك لا يدعم تشغيل الفيديو.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">رعاية مرضى ضغط الدم</h5>
                        <p>تعرف على النصائح الأساسية لمساعدة مرضى ضغط الدم على إدارة صحتهم بشكل أفضل.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <video class="card-img-top" width="100%" height="315" controls>
                        <source src="video/medication_management.mp4" type="video/mp4">
                        متصفحك لا يدعم تشغيل الفيديو.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">إدارة الأدوية</h5>
                        <p>نصائح فعالة تساعد المرضى على الالتزام بتناول أدويتهم في المواعيد المحددة لضمان أفضل النتائج.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <video class="card-img-top" width="100%" height="315" controls>
                        <source src="video/pregnancy_tips.mp4" type="video/mp4">
                        متصفحك لا يدعم تشغيل الفيديو.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">نصائح للحوامل</h5>
                        <p>تعرفي على أهم النصائح للحفاظ على صحتك وصحة جنينك خلال فترة الحمل مع التركيز على التغذية السليمة</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- الصف السفلي: 2 فيديو -->
        <div class="row g-4 mt-4 justify-content-center">
            <div class="col-lg-5">
                <div class="card border-0 shadow">
                    <video class="card-img-top" width="100%" height="315" controls>
                        <source src="video/diabetes_tips.mp4" type="video/mp4">
                        متصفحك لا يدعم تشغيل الفيديو.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">نصيحة لمرضى السكري</h5>
                        <p> لمراقبة مستوى السكر وإدارة نمط الحياة الصحي لمرضى السكري.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="card border-0 shadow">
                    <video class="card-img-top" width="100%" height="315" controls>
                        <source src="video/wound_care.mp4" type="video/mp4">
                        متصفحك لا يدعم تشغيل الفيديو.
                    </video>
                    <div class="card-body text-center">
                        <h5 class="card-title">العناية بالجروح</h5>
                        <p>تعرف على كيفية تنظيف الجروح والعناية بها لمنع العدوى.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    




@endsection