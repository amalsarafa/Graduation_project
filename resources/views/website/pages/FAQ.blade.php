@extends('layout.website')
@section('title',' الأسئلة والأجوبة')
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
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">إجابات على أسئلتكم الشائعة لتسهيل تجربتكم معنا </h5>
                    <a href="{{route('website.home')}}" class="h5 text-white">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-double-left text-white px-2"></i>
                    <a href="{{route('website.page.faq')}}" class="h5 text-white">الاسئلة و الاجوبة </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


@endsection
@section('content')
<!-- FAQ Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">الأسئلة و الأجوبة</h5>
                <h1 class="mb-0">
                    أهلاً بكم في صفحة الأسئلة الشائعة! هنا تجدون إجابات لأكثر الأسئلة شيوعًا حول خدماتنا وطرق الحجز. إذا لم تجدوا إجابتكم، تواصلوا معنا عبر صفحة اتصل بنا.
                </h1>
            </div>
        
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="accordion accordion-custom" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   ما هي الخدمات التي تقدمونها؟
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نقدم مجموعة متنوعة من الخدمات بما في ذلك التمريض المنزلي، الزيارات الطبية، العلاج الطبيعي، ورعاية الأطفال. يمكنك الاطلاع على تفاصيل كل خدمة في قسم الخدمات لدينا.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   كيف يمكنني إدارة حسابي؟
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    مكنك إدارة حسابك من خلال تسجيل الدخول إلى موقعنا واستخدام لوحة التحكم. يمكنك تحديث معلوماتك الشخصية، تغيير كلمة المرور، وإدارة الحجز.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    كيف يمكنني حجز خدمة؟
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    لحجز خدمة، يرجى زيارة صفحة الحجز وملء النموذج بالمعلومات المطلوبة، ثم اتباع التعليمات لإكمال عملية الحجز.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    ما هي خيارات الإلغاء أو التعديل؟
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    يمكنك إلغاء أو تعديل الحجز من خلال لوحة التحكم الخاصة بك. يرجى ملاحظة أنه يجب عليك القيام بذلك قبل 24 ساعة من موعد الخدمة.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                   هل تقدمون دعم فني؟
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نعم، نحن نقدم دعمًا فنيًا على مدار الساعة. يمكنك التواصل معنا عبر البريد الإلكتروني أو الهاتف، وسنكون سعداء بمساعدتك.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    ما هي طرق الدفع المتاحة؟
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نقبل عدة طرق للدفع،والدفع النقدي، والتحويل البنكي. يمكنك اختيار الطريقة المفضلة أثناء عملية الحجز.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    ما هي سياسة الخصوصية لديكم؟

                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نلتزم بحماية خصوصيتكم. جميع المعلومات التي تقدمونها تُعامل بسرية تامة وتُستخدم فقط لتقديم الخدمات المطلوبة. لمزيد من التفاصيل، يُرجى زيارة صفحة سياسة الخصوصية.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed fw-semi-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    هل يمكنني تخصيص الخدمات لتناسب احتياجاتي؟
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    نعم، يمكنك تخصيص الخدمات بناءً على احتياجاتك. يُرجى التواصل مع فريق الدعم لتنسيق التفاصيل.


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Popular FAQ Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                        <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">الأسئلة الأكثر شيوعاً</h3>
                        </div>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="h6 fw-bold bg-light rounded py-3 px-4 d-flex align-items-center justify-content-between mb-2" href="{{route('website.services')}}"><span>ما هي الخدمات التي تقدمونها ؟</span> <i class="bi bi-arrow-right ms-3"></i></a>
                            <a class="h6 fw-bold bg-light rounded py-3 px-4 d-flex align-items-center justify-content-between mb-2" href="{{route('website.home')}}"><span>كيف يمكنني حجز خدمة؟ </span> <i class="bi bi-arrow-right ms-3"></i></a>

                        </div>
                    </div>
                    <!-- Popular FAQ End -->
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->


@endsection