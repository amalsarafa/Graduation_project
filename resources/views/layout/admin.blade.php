<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')   </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('head_page level plugins')
        <!-- END PAGE LEVEL PLUGINS -->
         
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

         <!-- BEGIN PAGE LEVEL STYLES -->
         @yield('PAGE LEVEL STYLES ')
        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/layouts/layout2/css/custom.css')}}">
        <!-- END THEME LAYOUT STYLES -->
        <link href="{{asset('assets/pages/img/favicon_new.ico')}}" rel="icon"> </head>
    <!-- END HEAD -->

    @yield('button')
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-reversed page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{route('admin.dashboard')}}">
                        <img src="{{asset('assets/pages/img/login/logo project1.jpeg')}}" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
          
                
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default"> 7 </span>
                        </a>
                        <ul class="dropdown-menu">
                        <li class="external">
                        <h3>
                        <span class="bold">12 إشعاراً معلقاً</span>
                        </h3>
                        <a href="page_user_profile_1.html">عرض الكل</a>
                        </li>
                        <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                        <li>
                        <a href="javascript:;">
                        <span class="time">الآن</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-success">
                            <i class="fa fa-plus"></i>
                        </span> مريض جديد تم إضافته.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">3 دقائق</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                        </span> حالة طبية طارئة لمرضى قسم الطوارئ.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">10 دقائق</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-warning">
                            <i class="fa fa-bell-o"></i>
                        </span> موعد مريض #2 في انتظار التأكيد.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">14 ساعة</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-info">
                            <i class="fa fa-bullhorn"></i>
                        </span> نتيجة تحليل المريض #102 جاهزة.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">يومين</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                        </span> تجاوز الحد المسموح لعدد ساعات العمل.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">3 أيام</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                        </span> مريض مرفوض بسبب عدم التزامه بالمتابعة.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">4 أيام</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-warning">
                            <i class="fa fa-bell-o"></i>
                        </span> تأجيل جلسة العلاج الطبيعي للمريض #55.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">5 أيام</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-info">
                            <i class="fa fa-bullhorn"></i>
                        </span> تنبيه بموعد جراحة المريض #31.
                        </span>
                        </a>
                        </li>
                        <li>
                        <a href="javascript:;">
                        <span class="time">9 أيام</span>
                        <span class="details">
                        <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                        </span> حالة مريض في العناية المركزة بحاجة لمتابعة.
                        </span>
                        </a>
                        </li>
                        </ul>
                        </li>
                        </ul>
                        </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default"> 4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                <li class="external">
                                <h3>
                                لديك
                                <span class="bold">7 رسائل جديدة</span>
                                </h3>
                                <a href="app_inbox.html">عرض الكل</a>
                                </li>
                                <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                <a href="#">
                                <span class="photo">
                                <img src="{{asset('assets/layouts/layout3/img/avatar2.jpg')}}" class="img-circle" alt=""> 
                                </span>
                                <span class="subject">
                                <span class="from"> د. أحمد علي </span>
                                <span class="time">الآن</span>
                                </span>
                                <span class="message"> طلب موعد جديد من مريض لمراجعة الدكتور أحمد علي. </span>
                                </a>
                                </li>
                                <li>
                                <a href="#">
                                <span class="photo">
                                <img src="{{asset('assets/layouts/layout3/img/avatar3.jpg')}}" class="img-circle" alt=""> 
                                </span>
                                <span class="subject">
                                <span class="from"> د. سارة خان </span>
                                <span class="time">منذ 16 دقيقة</span>
                                </span>
                                <span class="message"> المريض رقم 124 بحاجة إلى متابعة لفحص السكري. </span>
                                </a>
                                </li>
                                <li>
                                <a href="#">
                                <span class="photo">
                                <img src="{{asset('assets/layouts/layout3/img/avatar1.jpg')}}" class="img-circle" alt=""> 
                                </span>
                                <span class="subject">
                                <span class="from"> الممرضة أمينة </span>
                                <span class="time">منذ ساعتين</span>
                                </span>
                                <span class="message"> طلب المريض رقم 67 تجديد وصفة طبية. </span>
                                </a>
                                </li>
                                <li>
                                <a href="#">
                                <span class="photo">
                                <img src="{{asset('assets/layouts/layout3/img/avatar2.jpg')}}" class="img-circle" alt=""> 
                                </span>
                                <span class="subject">
                                <span class="from"> د. جون سميث </span>
                                <span class="time">منذ 40 دقيقة</span>
                                </span>
                                <span class="message"> متابعة المريض رقم 202 بعد العملية الجراحية. </span>
                                </a>
                                </li>
                                <li>
                                <a href="#">
                                <span class="photo">
                                <img src="{{asset('assets/layouts/layout3/img/avatar3.jpg')}}" class="img-circle" alt=""> 
                                </span>
                                <span class="subject">
                                <span class="from"> المريض رقم 320 </span>
                                <span class="time">منذ 46 دقيقة</span>
                                </span>
                                <span class="message"> استفسار حول الدواء والجرعة. </span>
                                </a>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default"> 3 </span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                <li class="external">
                                <h3>
                                لديك
                                <span class="bold">12 مهمة معلقة</span>
                                </h3>
                                <a href="app_todo.html">عرض الكل</a>
                                </li>
                                <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">مراجعة مواعيد المرضى لهذا الأسبوع</span>
                                <span class="percent">30%</span>
                                </span>
                                <span class="progress">
                                <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">40% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">إجراء الفحوصات اللازمة للمريض رقم 200</span>
                                <span class="percent">65%</span>
                                </span>
                                <span class="progress">
                                <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">65% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">تحديث تقارير المرضى الشهرية</span>
                                <span class="percent">98%</span>
                                </span>
                                <span class="progress">
                                <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">98% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">إعداد تقارير متابعة العلاجات</span>
                                <span class="percent">10%</span>
                                </span>
                                <span class="progress">
                                <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">10% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">التواصل مع المرضى للمراجعات الدورية</span>
                                <span class="percent">58%</span>
                                </span>
                                <span class="progress">
                                <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">58% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">متابعة حالة المريض رقم 50 بعد الجراحة</span>
                                <span class="percent">85%</span>
                                </span>
                                <span class="progress">
                                <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">85% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                <li>
                                <a href="javascript:;">
                                <span class="task">
                                <span class="desc">إعداد تقارير الفحوصات الطبية</span>
                                <span class="percent">38%</span>
                                </span>
                                <span class="progress progress-striped">
                                <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">38% مكتمل</span>
                                </span>
                                </span>
                                </a>
                                </li>
                                </ul>
                                </li>
                                </ul>
                                </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
  

                            @yield('imge')
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">لوحة المعلومات العامة  </span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                           
                        </li>
                        <li class="nav-item  ">
                           <a href="{{route('admin.profile')}}" class="nav-link nav-toggle">
                               <i class="icon-user"></i>
                               <span class="title">ملفي الشخصي </span>
                               <span class="arrow"></span>
                           </a>
                           
                               </li>
                              
                       <li class="nav-item  ">
                            <a href="{{route('admin.patients')}}"  class="nav-link nav-toggle">
                               <i class="fa fa-wheelchair"></i>
                                <span class="title">قسم المرضى </span>
                                <span class="arrow"></span>
                            </a>
                                <li class="nav-item  ">
                                    <a href="{{route('admin.doctors')}}"  class="nav-link ">
                                       <i class="fa fa-user-md"></i>
                                        <span class="title"> قسم الاطباء    </span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                   <a href="{{route('admin.services')}}"  class="nav-link ">
                                       <i class="icon-folder"></i>
                                       <span class="title"> ادارة الخدمات    </span>
                                   </a>
                               </li>
                               <li class="nav-item  ">
                                   <a href="{{route('admin.contact-messages')}}"  class="nav-link ">
                                       <i class="icon-bell"></i>
                                       <span class="title"> رسائل اتصل بنا   </span>
                                   </a>
                               </li>
                       </li>
                    </ul>
         
                
                    <!-- END SIDEBAR MENU -->
                </div>
                
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
       
            @yield('content')
            
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                <div class="page-quick-sidebar">
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2025 &copy;  MHW Care My Health & Wellness.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="" target="_blank"></a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield('PAGE LEVEL PLUGINS')
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
         @yield('PAGE LEVEL SCRIPTS')
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{asset('assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
