@extends('layout.website')
@section('title','الخدمات')
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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">نقدم رعاية شاملة بخدمات صحية موثوقة ومتميزة  </h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.services')}}" class="h5 text-white">الخدمات  </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
@endsection
@section('content')
<!-- Template Stylesheet -->
     <link href="css/style2.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">خدماتنا</h5>
            <h1 class="mb-0">في MHW Care، نقدم مجموعة شاملة من الخدمات المصممة لتلبية احتياجاتك الصحية في راحة منزلك. نهدف إلى توفير رعاية صحية متكاملة تلبي توقعاتك وتضمن راحتك.</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-stethoscope text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">الرعاية التمريضية المنزلية</h4>
                            <p>تقديم خدمات تمريضية متخصصة تشمل تغيير الضمادات، إعطاء الحقن، مراقبة العلامات الحيوية، وإدارة حالات الطوارئ.</p>
                            <a class="text-uppercase" href="{{route('website.services.service1')}}">اقرأ المزيد <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-ambulance text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">الخدمة الطبية المنزلية</h4>
                            <p>ترتيب زيارات منزلية لأطباء عامين أو متخصصين لتقديم الاستشارات الطبية، الفحوصات، ووضع خطط علاجية.</p>
                            <a class="text-uppercase" href="{{route('website.services.service2')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-dumbbell text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">العلاج الطبيعي والتأهيلي</h4>
                            <p>تقديم جلسات علاج طبيعي وإعادة تأهيل بعد الجراحة أو الإصابات، بما يشمل دعم المرضى ذوي الاحتياجات الخاصة.</p>
                            <a class="text-uppercase" href="{{route('website.services.service3')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-baby text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">رعاية الأطفال في المنزل</h4>
                            <p>تقديم خدمات تمريضية مخصصة لرعاية الأطفال المرضى أو ذوي الحالات الصحية الخاصة.</p>
                            <a class="text-uppercase" href="{{route('website.services.service4')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-video text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">الإستشارات الطبية عن بُعد</h4>
                            <p>تمكين العملاء من التواصل مع أطباء ومتخصصين عبر الإنترنت أو الهاتف لتقديم نصائح واستشارات طبية.</p>
                            <a class="text-uppercase" href="{{route('website.services.service5')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-pills text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">إدارة الأدوية وتوصيلها</h4>
                            <p>تقديم خدمات توصيل الأدوية إلى المنازل مع تذكير المرضى بجرعاتهم وتنظيمها.</p>
                            <a class="text-uppercase" href="{{route('website.services.service6')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-vials text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">الفحوصات الطبية المنزلية</h4>
                            <p>إرسال فرق طبية لإجراء تحاليل مخبرية مثل سحب الدم أو قياس السكر مباشرة في المنزل.</p>
                            <a class="text-uppercase" href="{{route('website.services.service7')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="service3-item bg-light rounded">
                    <div class="position-relative d-flex p-5">
                        <div class="service-icon flex-shrink-0">
                            <i class="fas fa-user-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="mb-3">الرعاية التلطيفية</h4>
                            <p>توفير رعاية خاصة للمرضى في المراحل الأخيرة من المرض بهدف تخفيف الألم وتقديم الدعم النفسي والاجتماعي لهم ولعائلاتهم.</p>
                            <a class="text-uppercase" href="{{route('website.services.service8')}}">اقرأ المزيد<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Service End -->
@endsection