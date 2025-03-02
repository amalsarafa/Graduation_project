@extends('layout.website')
@section('title','  استشارات طبية عن بعد')
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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">استشر طبيبك عن بُعد بكل سهولة وراحة، نحن هنا لرعاية صحتك</h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.page.feature')}}" class="h5 text-white">الاستشارات الطبية عن بعد</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    @endsection
    @section('content')
    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">الاستشارات الطبية عن بعد </h5>
                <h1 class="mb-0">احجز استشارتك الطبية عن بُعد بكل سهولة، وكن على تواصل مع نخبة من الأطباء والمختصين من راحة منزلك</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-user-md text-white"></i>
                            </div>                      
                             <h4>أفضل المتخصصين</h4>
                             <p class="mb-0">نخبة من الأطباء والمستشارين في مختلف التخصصات الطبية لتلبية احتياجاتكم.</p>

                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-lock text-white"></i>
                            </div>
                            <h4>استشارة آمنة</h4>
                            <p class="mb-0">حماية كاملة لبياناتك الشخصية ومعلوماتك الصحية باستخدام تقنيات متقدمة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/Telemedicine 4.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-calendar-alt text-white"></i>
                            </div>
                            <h4>مرونة في الحجز</h4>
                            <p class="mb-0">احجز استشارتك بسهولة وفي الوقت الذي يناسبك عبر منصتنا الإلكترونية</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-headset text-white"></i>
                            </div>
                            <h4>دعم متواصل</h4>
                            <p class="mb-0">فريق دعم فني متاح على مدار الساعة للإجابة عن جميع استفساراتك</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">احجز استشارتك الآن</h5>
                <h1 class="mb-0">سهولة في الحجز واستشارة آمنة</h1>
            </div>
            <form action="/book-appointment" method="POST" class="bg-light p-5 rounded shadow">
                <div class="row g-3">
                    <!-- اختيار التخصص -->
                    <div class="col-md-6">
                        <label for="specialization" class="form-label">التخصص الطبي</label>
                        <select class="form-select" id="specialization" name="specialization" required>
                            <option selected disabled>اختر التخصص</option>
                            <option value="general">الطب العام</option>
                            <option value="pediatrics">طب الأطفال</option>
                            <option value="psychiatry">الطب النفسي</option>
                            <option value="nutrition">التغذية</option>
                            <option value="physiotherapy">العلاج الطبيعي</option>
                        </select>
                    </div>
                    <!-- اختيار الطبيب -->
                    <div class="col-md-6">
                        <label for="doctor" class="form-label">اختيار الطبيب</label>
                        <select class="form-select" id="doctor" name="doctor" required>
                            <option selected disabled>اختر الطبيب</option>
                            <option value="doctor1">د. أحمد محمد</option>
                            <option value="doctor2">د. سارة علي</option>
                            <option value="doctor3">د. خالد يوسف</option>
                        </select>
                    </div>
                    <!-- اختيار التاريخ -->
                    <div class="col-md-6">
                        <label for="appointment-date" class="form-label">تاريخ الاستشارة</label>
                        <input type="date" class="form-control" id="appointment-date" name="appointment_date" required>
                    </div>
                    <!-- اختيار الوقت -->
                    <div class="col-md-6">
                        <label for="appointment-time" class="form-label">وقت الاستشارة</label>
                        <input type="time" class="form-control" id="appointment-time" name="appointment_time" required>
                    </div>
                    <!-- بيانات إضافية -->
                    <div class="col-12">
                        <label for="notes" class="form-label">ملاحظات (اختياري)</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="أضف أي ملاحظات إضافية..."></textarea>
                    </div>
                    <!-- زر الحجز -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary py-2 px-4">احجز الآن</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Vendor End -->
     @endsection