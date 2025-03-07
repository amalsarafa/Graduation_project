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
     @endsection