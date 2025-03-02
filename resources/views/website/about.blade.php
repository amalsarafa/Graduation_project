@extends('layout.website')
@section('title','من نحن  ')
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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">الرعاية الصحية المنزلية بأعلى المعايير  </h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.about')}}" class="h5 text-white">من نحن  </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    @endsection
@section('content')
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                    <div class="bg-light rounded border-top border-5 border-primary d-flex flex-column align-items-center text-center p-5">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-award fa-2x text-white"></i>
                        </div>
                        <h3 class="text-primary">حائزون على جوائز</h3>
                        <p class="mb-0">نحن ملتزمون بتقديم أفضل خدمات الرعاية الصحية المنزلية مع التركيز على التميز والجودة.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: slideInUp;">
                    <div class="bg-light rounded border-top border-5 border-primary d-flex flex-column align-items-center text-center p-5">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-users fa-2x text-white"></i>
                        </div>
                        <h3 class="text-primary">فريق محترف</h3>
                        <p class="mb-0">فريقنا الطبي مكون من خبراء محترفين يقدمون خدمات متميزة وفق أعلى المعايير.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: slideInUp;">
                    <div class="bg-light rounded border-top border-5 border-primary d-flex flex-column align-items-center text-center p-5">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-phone-alt fa-2x text-white"></i>
                        </div>
                        <h3 class="text-primary">دعم على مدار الساعة</h3>
                        <p class="mb-0">نوفر دعمًا مخصصًا لعملائنا على مدار 24 ساعة لضمان راحتهم ورضاهم الكامل.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title-2 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">من نحن</h5>
                        <h1 class="mb-0">أفضل خدمات الرعاية الصحية المنزلية بخبرة تفوق 10 سنوات</h1>
                    </div>
                    <p class="mb-4">في <strong>MHW Care</strong>، نحن ملتزمون بتوفير خدمات رعاية صحية منزلية متكاملة ومتميزة تلبي احتياجاتك وتضمن راحتك ورفاهيتك. فريقنا الطبي المتخصص يعمل بتفانٍ لتقديم أعلى مستويات الجودة والرعاية.</p>
                    <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link text-uppercase active" id="nav-story-tab" data-bs-toggle="tab" data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story" aria-selected="true">قصتنا</button>
                                <button class="nav-link text-uppercase" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="false">مهمتنا</button>
                                <button class="nav-link text-uppercase" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision" aria-selected="false">رؤيتنا</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- قصة -->
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel" aria-labelledby="nav-story-tab">
                                <p>بدأت رحلتنا بتقديم خدمات رعاية صحية متميزة تلبي احتياجات الأفراد في منازلهم، مع التركيز على الراحة والجودة العالية.</p>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>رعاية متخصصة</h5>
                                        <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>فريق محترف</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>دعم دائم</h5>
                                        <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>خدمات متكاملة</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- المهمة -->
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <p>تقديم خدمات رعاية صحية منزلية عالية الجودة تحترم احتياجات الأفراد وتعزز من صحتهم وراحتهم.</p>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>التركيز على الجودة</h5>
                                        <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>تعزيز الثقة</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>أمان المرضى</h5>
                                        <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>احترافية الفريق</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- الرؤية -->
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>أن نكون الخيار الأول للرعاية الصحية المنزلية في المنطقة، مع تعزيز راحة ورفاهية كل من نخدمهم.</p>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>خدمات متميزة</h5>
                                        <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>ثقة العملاء</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>راحة العملاء</h5>
                                        <h5 class="mb-0"><i class="fa fa-check text-primary me-3"></i>دعم المجتمع</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- صورة القسم -->
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about (2).jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- About End -->


    <!-- Story Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ماذا نقدم </h5>
                <h1 class="mb-0">خدمات صحية منزلية مبتكرة لمساعدتكم </h1>
            </div>
            <div class="container story position-relative">
                <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="col-12 text-md-center">
                        <div class="d-inline-block bg-primary text-white rounded py-2 px-4">رعاية صحية عالية الجودة
                        </div>
                    </div>
                </div>
                <div class="row gx-5 story-right position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="col-md-6 text-md-end">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"> </h6>
                    </div>
                    <div class="col-md-6">
                        <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                            <h4>تمريض منزلي</h4>
                            <p class="m-0">نوفر خدمات تمريض منزلي مخصصة لتلبية احتياجاتكم الصحية في راحة منازلكم</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 story-left position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="col-md-6 d-block d-md-none">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"></h6>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                            <h4>استشارات طبية عن بعد</h4>
                            <p class="m-0">نقدم استشارات طبية من خلال أحدث التقنيات لضمان راحة عملائنا </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"></h6>
                    </div>
                </div>
                <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="col-12 text-md-center">
                        <div class="d-inline-block bg-primary text-white rounded py-2 px-4">تلبية احتياجات متنوعة </div>
                    </div>
                </div>
                <div class="row gx-5 story-right position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="col-md-6 text-md-end">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"></h6>
                    </div>
                    <div class="col-md-6">
                        <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                            <h4>خدمات دعم ورعاية</h4>
                            <p class="m-0">نضمن تقديم الدعم والرعاية التي تحتاجونها على مدار الساعة</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 story-left position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="col-md-6 d-block d-md-none">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"></h6>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                            <h4>الرعاية الصحية المستمرة</h4>
                            <p class="m-0">نوفر رعاية طويلة الأجل لمرضى الحالات المزمنة وكبار السن لضمان راحتهم                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"></h6>
                    </div>
                </div>
                <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <div class="col-12 text-md-center">
                        <div class="d-inline-block bg-primary text-white rounded py-2 px-4">اختبارات طبية منزلية
                        </div>
                    </div>
                </div>
                <div class="row gx-5 story-right position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <div class="col-md-6 text-md-end">
                        <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">اختبارات طبية منزلية</h6> -->
                    </div>
                    <div class="col-md-6">
                        <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                            <h4>فحوصات طبية في المنزل </h4>
                            <p class="m-0">نجري اختبارات طبية دقيقة من راحة منزلك باستخدام تقنيات حديثة.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 story-left position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <div class="col-md-6 d-block d-md-none">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0">فريق الأطباء المختصين </h6>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                            <h4>الخبرة الطبية المتميزة
                            </h4>
                            <p class="m-0">فريقنا الطبي يضم أطباء متخصصين في مختلف المجالات لتلبية كافة احتياجاتكم الصحية.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <h6 class="fw-bold mb-3 ms-3 ms-md-0"></h6>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <div class="col-12 text-md-center">
                        <!-- <div class="d-inline-block bg-primary text-white rounded py-2 px-4">Launched</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">الفريق الطبي </h5>
                <h1 class="mb-0">أطباء متخصصون يقدمون الرعاية باحترافية وثقة</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/TEAM (1).jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                       
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">د. هيثم الاسمر</h4>
                            <p class="text-uppercase m-0">بكالوريوس طب
                                جامعة القاهر ـ القصر العيني</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/TEAM (2).jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">محمد نسمان</h4>
                            <p class="text-uppercase m-0">بكالوريوس تمريض عام- الجامعة الاسلامية</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s"
                    style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/TEAM (6).jpeg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4"> <h4 class="text-primary">انتصار شتات </h4>
                            <p class="text-uppercase m-0">بكالوريوس التمريض الجامعة الاسلامية غزة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection