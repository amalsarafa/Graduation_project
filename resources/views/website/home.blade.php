@extends('layout.website')
@section('title','الصفحة الرئيسية ')
@section('Navbar')
<!-- Navbar & Carousel Start -->
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
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">نهتم بصحتك وعافيتك – خدمات طبية وتمريضية متكاملة تصل إليك أينما كنت
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">احتياجاتك أولويتنا</h1>
                            <a href="{{route('website.home')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">احجز خدمتك </a>
                            <a href="{{route('website.contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">اتصل بنا </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">نهتم بصحتك وعافيتك – خدمات طبية وتمريضية متكاملة تصل إليك أينما كنت
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">احتياجاتك أولويتنا</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">احجز خدمتك </a>
                            <a href="{{route('website.contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">اتصل بنا </a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->
    @endsection
@section('content')
<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <!-- المرضى الذين تم خدمتهم -->
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-md text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">المرضى الذين تم خدمتهم</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">1500</h1>
                    </div>
                </div>
            </div>

            <!-- الإستشارات عن بُعد -->
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-laptop-medical text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">الإستشارات عن بُعد</h5>
                        <h1 class="mb-0" data-toggle="counter-up">850</h1>
                    </div>
                </div>
            </div>

            <!-- الجوائز والشهادات -->
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-trophy text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">الجوائز والشهادات</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">25</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title-1 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">من نحن</h5>
                        <h1 class="mb-0">أفضل حلول الرعاية الصحية بخبرة تفوق 10 سنوات</h1>
                    </div>
                    <p class="mb-4">
                        نحن في <strong>MHW Care</strong> نقدم خدمات رعاية صحية منزلية متكاملة تهدف إلى تلبية احتياجات المرضى وعائلاتهم. فريقنا يضم نخبة من الأطباء والممرضين المختصين لضمان تقديم أعلى مستويات الجودة.
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>حائزون على جوائز</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>فريق عمل محترف</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>دعم متوفر 24/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>أسعار تنافسية</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">اتصل بنا لأي استفسار</h5>
                            <h4 class="text-primary mb-0">+966 123 456 789</h4>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">احجز خدمتك الآن</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about (1).jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">لماذا اخترتنا</h5>
                <h1 class="mb-0">نحن هنا لتقديم أفضل رعاية صحية منزلية لك</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>أفضل الخدمات</h4>
                            <p class="mb-0">نقدم خدمات رعاية صحية منزلية بجودة عالية تناسب احتياجاتك.</p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>معايير عالمية</h4>
                            <p class="mb-0">حائزون على شهادات وجوائز تثبت جودة خدماتنا.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>طاقم متخصص</h4>
                            <p class="mb-0">فريقنا يتكون من محترفين في مجال الرعاية الصحية المنزلية.</p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>دعم متواصل</h4>
                            <p class="mb-0">نوفر خدمات دعم ومتابعة على مدار الساعة لضمان راحتك.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">خدماتنا</h5>
                <h1 class="mb-0">حلول مخصصة للرعاية الصحية لتلبية احتياجاتك</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3">التمريض المنزلي</h4>
                        <p class="m-0">نقدم خدمات تمريضية متكاملة لضمان راحتك في منزلك.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('website.services.service1')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-video text-white"></i>
                        </div>
                        <h4 class="mb-3">الإستشارات الطبية عن بُعد</h4>
                        <p class="m-0">احصل على استشارات طبية مع أطباء مختصين من منزلك.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('website.services.service5')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-heartbeat text-white"></i>
                        </div>
                        <h4 class="mb-3">العلاج الطبيعي</h4>
                        <p class="m-0">خدمات علاج طبيعي مهنية لتحسين صحتك العامة.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('website.services.service3')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3">زيارات الطبيب المنزلية</h4>
                        <p class="m-0">تمتع بزيارات طبية منزلية لتلبية احتياجاتك الصحية.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('website.services.service2')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-pills text-white"></i>
                        </div>
                        <h4 class="mb-3">إدارة الأدوية</h4>
                        <p class="m-0">نساعدك في تنظيم الأدوية وضمان تناولها بشكل صحيح.</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{route('website.services.service6')}}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">اتصل بنا لأي استفسار</h3>
                        <p class="text-white mb-3">نحن هنا لخدمتك والاجابة على جميع استفساراتك الصحية.</p>
                        <h2 class="text-white mb-0">+966 123 456 789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Service End -->
    
     <!-- Vendor Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">احجز خدمتك الآن</h5>
                <h1 class="mb-0">سهولة في الحجز  </h1>
            </div>
            <form id="reservationForm" method="POST" action="{{ route('website.store') }}" class="bg-light p-5 rounded shadow">
                @csrf
                <div class="row g-3">
                    <!-- اختيار الطبيب -->
                    <div class="col-md-6">
                        <label for="doctor_id" class="form-label">اختيار الطبيب</label>
                        <select class="form-select" name="doctor_user_id" required>
                            <option value="">-- اختر الطبيب --</option>
                            @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <!-- اختيار الخدمة -->
                    <div class="col-md-6">
                        <label for="service_id" class="form-label">الخدمة</label>
                        <select class="form-select" id="service_id" name="service_id" required>
                            <option selected disabled>اختر الخدمة</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <!-- اختيار التاريخ -->
                    <div class="col-md-6">
                        <label for="date" class="form-label">تاريخ الخدمة</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
            
                    <!-- اختيار الوقت -->
                    <div class="col-md-6">
                        <label for="time" class="form-label">وقت الخدمة</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
            
                    <!-- زر الحجز -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary py-2 px-4">احجز الآن</button>
                    </div>
                </div>
            </form>
            
            <meta name="csrf-token" content="{{ csrf_token() }}">
            
            <script>
                document.getElementById('reservationForm').addEventListener('submit', function(event) {
                    event.preventDefault();
            
                    let isAuthenticated = {!! json_encode(auth()->check()) !!};
            
                    if (!isAuthenticated) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'يجب تسجيل الدخول',
                            text: 'يرجى تسجيل الدخول لإجراء الحجز.',
                            confirmButtonText: 'تسجيل الدخول'
                        }).then(() => {
                            window.location.href = "{{ route('login') }}";
                        });
                        return;
                    }
            
                    let formData = new FormData(this);
            
                    fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json()) 
                    .then(data => {
                        if (data.error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'خطأ!',
                                text: data.error,
                                confirmButtonText: 'إغلاق'
                            });
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'تم الحجز!',
                                text: data.success,
                                confirmButtonText: 'حسناً',
                                timer: 3000
                            });
                            document.getElementById('reservationForm').reset();
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطأ!',
                            text: 'حدث خطأ أثناء إرسال الحجز، حاول مرة أخرى.',
                            confirmButtonText: 'إغلاق'
                        });
                        console.error('Error:', error);
                    });
                });
            </script>
            
            
        </div>
    </div>
    
    <!-- Vendor End -->
    
   <!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">الفريق الطبي</h5>
            <h1 class="mb-0">أطباء متخصصون يقدمون الرعاية باحترافية وثقة</h1>
        </div>
        <div class="row g-5">
            @foreach($doctors as $doctor)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $doctor->profile_image) }}" 
                              onerror="this.src='{{ asset('default-doctor.png') }}';" alt="صورة الطبيب" loading="lazy">

                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{  $doctor->name }}</h4>
                            <p class="text-uppercase m-0">{{ $doctor->doctor->specialization ?? 'غير محدد' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


   
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">المدونة</h5>
                <h1 class="mb-0">مدونة MHW Care: مصدر موثوق للمعلومات الصحية، حيث تجد نصائح طبية موثوقة، مقالات متخصصة، وإرشادات لتعزيز صحتك وعافيتك </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s"
                    style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">الصحة النفسية </a>
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
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s"
                    style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">التغذية الصحية </a>
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
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s"
                    style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">الرعاية التمريضية</a>
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
            </div>
        </div>
    </div>
    <!-- Blog Start -->


@endsection
@section('JavaScript Libraries')

 @endsection