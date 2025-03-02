@extends('layout.website')
@section('title','  المخيم الصحي')
@section('model')
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <!-- modal Health camp -->
    <div class="modal fade" id="generalHealthCampModal" tabindex="-1" aria-labelledby="generalHealthCampModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="generalHealthCampModalLabel">مخيم الصحة العامة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="img/Public health camp.jpg" class="img-fluid rounded" alt="مخيم الصحة العامة">
                    </div>
                    <p>مخيم الصحة العامة يهدف إلى تعزيز الوعي الصحي وتقديم خدمات طبية شاملة لجميع الأعمار. يوفر المخيم فحوصات طبية مجانية، استشارات مع أطباء متخصصين، وورش عمل توعوية حول الوقاية من الأمراض.</p>
                    <h6>الخدمات المقدمة:</h6>
                    <ul>
                        <li>فحوصات طبية دورية (الضغط، السكر، الوزن).</li>
                        <li>استشارات طبية مع أطباء متخصصين.</li>
                        <li>ورش عمل حول الوقاية من الأمراض المزمنة.</li>
                    </ul>
                    <h6>تفاصيل التسجيل:</h6>
                    <p>يمكنك التسجيل مجانًا للمشاركة في مخيم الصحة العامة من خلال التواصل معنا عبر البريد الإلكتروني: <strong>info@mhwcare.com</strong> أو الاتصال على الرقم: <strong>+970 59 123 4567</strong>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="nutritionCampModal" tabindex="-1" aria-labelledby="nutritionCampModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nutritionCampModalLabel">مخيم التغذية السليمة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="img/Healthy nutrition (1).jpg" class="img-fluid rounded" alt="مخيم التغذية السليمة">
                    </div>
                    <p>مخيم التغذية السليمة يقدم استشارات تغذوية مخصصة مع خبراء تغذية محترفين. يهدف المخيم إلى تعزيز الوعي الغذائي وتحسين الأنماط الغذائية للأفراد.</p>
                    <h6>النشاطات:</h6>
                    <ul>
                        <li>جلسات فردية مع أخصائي تغذية.</li>
                        <li>ورش عمل حول التخطيط لوجبات صحية.</li>
                        <li>اختبارات لقياس معدل الحرق ومستوى الفيتامينات في الجسم.</li>
                    </ul>
                    <h6>كيفية المشاركة:</h6>
                    <p>للحجز المسبق، يرجى تعبئة النموذج على موقعنا الإلكتروني أو التواصل عبر البريد: <strong>nutrition@mhwcare.com</strong>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="fitnessCampModal" tabindex="-1" aria-labelledby="fitnessCampModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fitnessCampModalLabel">مخيم اللياقة البدنية</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="img/Fitness camp.jpg" class="img-fluid rounded" alt="مخيم اللياقة البدنية">
                    </div>
                    <p>يهدف مخيم اللياقة البدنية إلى تعزيز النشاط البدني وتحسين صحة الأفراد من خلال جلسات تدريبية متخصصة مع مدربين محترفين.</p>
                    <h6>الأنشطة المقدمة:</h6>
                    <ul>
                        <li>جلسات تدريبية يومية.</li>
                        <li>محاضرات حول أهمية النشاط البدني.</li>
                        <li>تحديات جماعية لتعزيز روح الفريق.</li>
                    </ul>
                    <h6>تفاصيل التسجيل:</h6>
                    <p>يُرجى زيارة مقر المخيم أو الاتصال على الرقم <strong>+970 59 987 6543</strong> لحجز مكانك.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- modal Online seminars -->
    <div class="modal fade" id="heartHealthWebinarModal" tabindex="-1" aria-labelledby="heartHealthWebinarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="heartHealthWebinarModalLabel">ندوة صحة القلب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="img/Heart Health Symposium.jpg" class="img-fluid rounded" alt="ندوة صحة القلب">
                    </div>
                    <p>تعلم في هذه الندوة كيفية الحفاظ على صحة قلبك من خلال نمط حياة متوازن. يقدمها فريق من أطباء القلب المتخصصين.</p>
                    <h6>أبرز المواضيع التي سيتم مناقشتها:</h6>
                    <ul>
                        <li>أفضل الأغذية لصحة القلب.</li>
                        <li>كيفية تقليل خطر الإصابة بأمراض القلب.</li>
                        <li>تمارين رياضية مفيدة للقلب.</li>
                    </ul>
                    <h6>تفاصيل الندوة:</h6>
                    <p><strong>التاريخ:</strong> 25 فبراير 2025<br>
                        <strong>الوقت:</strong> 6:00 مساءً بتوقيت فلسطين<br>
                        <strong>المكان:</strong> عبر تطبيق Zoom (سيتم إرسال رابط التسجيل عند التسجيل).</p>
                    <h6>كيفية التسجيل:</h6>
                    <p>يرجى التسجيل عبر النموذج المتاح على موقعنا أو التواصل معنا عبر البريد الإلكتروني: <strong>heart@mhwcare.com</strong>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nutritionWebinarModal" tabindex="-1" aria-labelledby="nutritionWebinarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nutritionWebinarModalLabel">ندوة التغذية السليمة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="img/Healthy nutrition (2).jpg" class="img-fluid rounded" alt="ندوة التغذية السليمة">
                    </div>
                    <p>ندوة تفاعلية تهدف إلى تعزيز الوعي بأهمية التغذية السليمة وتحسين نمط الحياة الغذائي. يقدمها خبراء تغذية معتمدون.</p>
                    <h6>المواضيع الرئيسية:</h6>
                    <ul>
                        <li>كيفية بناء خطة غذائية متوازنة.</li>
                        <li>أهمية الفيتامينات والمعادن في حياتنا اليومية.</li>
                        <li>أضرار الأنظمة الغذائية غير الصحية وكيفية تجنبها.</li>
                    </ul>
                    <h6>تفاصيل الندوة:</h6>
                    <p><strong>التاريخ:</strong> 1 مارس 2025<br>
                        <strong>الوقت:</strong> 7:00 مساءً بتوقيت فلسطين<br>
                        <strong>المكان:</strong> عبر تطبيق Zoom (سيتم إرسال رابط التسجيل عند التسجيل).</p>
                    <h6>كيفية التسجيل:</h6>
                    <p>للتسجيل، يرجى إرسال بريد إلكتروني إلى: <strong>nutrition@mhwcare.com</strong>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mentalHealthWebinarModal" tabindex="-1" aria-labelledby="mentalHealthWebinarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mentalHealthWebinarModalLabel">ندوة الصحة النفسية</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="img/mental health1.jpg" class="img-fluid rounded" alt="ندوة الصحة النفسية">
                    </div>
                    <p>ندوة تهدف إلى تحسين الوعي بالصحة النفسية وتقديم استراتيجيات للتعامل مع التوتر والضغوط اليومية. يقدمها أخصائيون نفسيون.</p>
                    <h6>المواضيع التي سيتم تناولها:</h6>
                    <ul>
                        <li>كيفية التعرف على علامات التوتر والقلق.</li>
                        <li>استراتيجيات لتحسين الصحة النفسية اليومية.</li>
                        <li>أهمية الاسترخاء والنوم الصحي.</li>
                    </ul>
                    <h6>تفاصيل الندوة:</h6>
                    <p><strong>التاريخ:</strong> 10 مارس 2025<br>
                        <strong>الوقت:</strong> 5:00 مساءً بتوقيت فلسطين<br>
                        <strong>المكان:</strong> عبر تطبيق Zoom.</p>
                    <h6>كيفية التسجيل:</h6>
                    <p>يرجى التسجيل عبر الرابط المرفق أو إرسال بريد إلكتروني إلى: <strong>mentalhealth@mhwcare.com</strong>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
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
                <a href="{{route('website.page.healthEvents')}}" class="text-white">المخيم الصحي</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Health Camp Section Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">المخيم الصحي</h2>
            <p>فعاليات صحية مميزة تقدم خدمات طبية وفحوصات شاملة لتعزيز صحتك وصحة أسرتك.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <img src="img/Public health camp.jpg" class="card-img-top" alt="مخيم الصحة العامة">
                    <div class="card-body text-center">
                        <h5 class="card-title">مخيم الصحة العامة</h5>
                        <p>جلسات استشارية وفحوصات طبية لجميع الأعمار.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generalHealthCampModal">اقرأ المزيد</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <img src="img/Healthy nutrition (1).jpg" class="card-img-top" alt="مخيم التغذية">
                    <div class="card-body text-center">
                        <h5 class="card-title">مخيم التغذية السليمة</h5>
                        <p>تعرف على أنماط غذائية صحية بمساعدة خبراء التغذية.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nutritionCampModal">اقرأ المزيد</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <img src="img/Fitness camp.jpg" class="card-img-top" alt="مخيم اللياقة">
                    <div class="card-body text-center">
                        <h5 class="card-title">مخيم اللياقة البدنية</h5>
                        <p>جلسات تدريبية لتحسين النشاط البدني واللياقة.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fitnessCampModal">اقرأ المزيد</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Health Camp Section End -->

    <!-- Webinar Section Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-4">الندوات عبر الإنترنت</h2>
            <p>اشترك في ندواتنا الطبية لتكتسب المعرفة من الخبراء بسهولة من منزلك.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <img src="img/Heart Health Symposium.jpg" class="card-img-top" alt="ندوة صحة القلب">
                    <div class="card-body text-center">
                        <h5 class="card-title">ندوة صحة القلب</h5>
                        <p>تعلم كيفية الحفاظ على قلب صحي مع نمط حياة متوازن.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#heartHealthWebinarModal">اقرأ المزيد</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <img src="img/Healthy nutrition (2).jpg" class="card-img-top" alt="ندوة التغذية">
                    <div class="card-body text-center">
                        <h5 class="card-title">ندوة التغذية السليمة</h5>
                        <p>تعرف على الأسس السليمة للتغذية الصحية.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nutritionWebinarModal">اقرأ المزيد</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <img src="img/mental health1.jpg" class="card-img-top" alt="ندوة الصحة النفسية">
                    <div class="card-body text-center">
                        <h5 class="card-title">ندوة الصحة النفسية</h5>
                        <p>تعرف على طرق تقليل التوتر وتحسين صحتك النفسية.</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mentalHealthWebinarModal">اقرأ المزيد</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Webinar Section End -->
@endsection