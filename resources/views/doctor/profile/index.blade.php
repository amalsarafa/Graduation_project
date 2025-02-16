@extends('layout.doctor')
@section('title','الملف الشخصي')

@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('PAGE LEVEL STYLES ')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
<!-- BEGIN PAGE HEADER-->
<!-- BEGIN THEME PANEL -->
<div class="theme-panel">

</div>
<!-- END THEME PANEL -->
<h3 class="page-title"> الملف الشخصي
<small>الملف الشخصي الخاص بالطبيب </small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="#">الملف الشخصي</a>
        </li>
        <li>
            <i class="fa fa-angle-left"></i>
         
            <a href="Doctor dashboard.html">الصفحة الرئيسية </a>
            <i class="icon-home"></i>
           
        </li>
        
       
    </ul>


</div>
<!-- END PAGE HEADER-->
<div class="profile">
<div class="tabbable-line tabbable-full-width">
<ul class="nav nav-tabs">
<li class="active">
<a href="#tab_1_1" data-toggle="tab"> الملخص  </a>
</li>
<li>
<a href="#tab_1_3" data-toggle="tab"> الملف الشخصي  </a>
</li>

</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1_1">
<div class="row">
<div class="col-md-3">
<ul class="list-unstyled profile-nav">
<!-- صورة الطبيب -->
<li>
<img src="{{asset('assets/pages/media/profile/people19.png')}}" class="img-responsive pic-bordered" alt="Profile Picture" />
<a href="javascript:;" class="profile-edit"> تعديل الصورة </a>
</li>
<!-- قائمة الخيارات -->

<li>
<a href="Appointments.d.html">  مواعيدي 

</a>
</li>
<li>
<a href="Patients.html"> السجلات الطبية </a>
</li>
</ul>
</div>

<div class="col-md-9">
<div class="row">
<div class="col-md-8 profile-info">
<h1 class="font-green sbold uppercase">د. محمد الفهد</h1>
<p> طبيب متخصص في الرعاية الصحية المنزلية، يعمل على تقديم الاستشارات الطبية للمرضى في منازلهم ومتابعة حالتهم الصحية عن كثب، وتوفير العلاج المناسب في راحة منازلهم. </p>

<p>
<a href="javascript:;"> www.mywebsite.com </a>
</p>
<ul class="list-inline">
<li>
<i class="fa fa-map-marker"></i> الرياض </li>
<li>
<i class="fa fa-calendar"></i> 12 مايو 1980 </li>
<li>
<i class="fa fa-briefcase"></i> طبيب الرعاية المنزلية </li>
<li>
<i class="fa fa-star"></i> متخصص في الطب الباطني والرعاية المنزلية </li>
<li>
<i class="fa fa-heart"></i> توفير الرعاية الصحية المتكاملة للمرضى في منازلهم </li>
</ul>
</div>
<!--end col-md-8-->
<div class="col-md-4">
    <div class="portlet sale-summary">
        <div class="portlet-title">
            <div class="caption font-red sbold"> ملخص الأنشطة الطبية </div>
            <div class="tools">
                <a class="reload" href="javascript:;"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <ul class="list-unstyled">
                <!-- عدد الاستشارات اليومية -->
                <li>
                    <span class="sale-info"> الاستشارات اليوم
                        <i class="fa fa-medkit"></i>
                    </span>
                    <span class="sale-num"> 5 </span>
                </li>
                <!-- عدد الاستشارات الأسبوعية -->
                <li>
                    <span class="sale-info"> الاستشارات الأسبوعية
                        <i class="fa fa-stethoscope"></i>
                    </span>
                    <span class="sale-num"> 20 </span>
                </li>
                <!-- عدد المرضى الذين تم علاجهم -->
                <li>
                    <span class="sale-info"> المرضى الذين تم معالجتهم </span>
                    <span class="sale-num"> 150 </span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--end col-md-4-->
</div>
<!--end row-->
<div class="tabbable-line tabbable-custom-profile">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_1_11" data-toggle="tab"> آخر الأنشطة الطبية </a>
        </li>
        <li>
            <a href="#tab_1_22" data-toggle="tab"> إشعارات النظام الطبية </a>
        </li>
    </ul>
    <div class="tab-content">
        <!-- آخر الأنشطة الطبية الخاصة بالطبيب -->
        <div class="tab-pane active" id="tab_1_11">
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-user-md"></i> المريض </th>
                            <th class="hidden-xs">
                                <i class="fa fa-cogs"></i> الخدمة </th>
                            <th>
                                <i class="fa fa-calendar-check"></i> الحالة </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- النشاط الأول: استشارة طبية عن بُعد -->
                        <tr>
                            <td>
                                <a href="javascript:;"> أحمد السعدي </a>
                            </td>
                            <td class="hidden-xs"> استشارة طبية عن بُعد </td>
                            <td> <span class="label label-success label-sm"> تم تقديم الاستشارة بنجاح </span> </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                        <!-- النشاط الثاني: فحص طبي منزلي -->
                        <tr>
                            <td>
                                <a href="javascript:;"> سارة الزهراني </a>
                            </td>
                            <td class="hidden-xs"> فحص طبي منزلي </td>
                            <td> <span class="label label-warning label-sm"> قيد المعالجة </span> </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                        <!-- النشاط الثالث: متابعة صحية عن بُعد -->
                        <tr>
                            <td>
                                <a href="javascript:;"> نادر الفارس </a>
                            </td>
                            <td class="hidden-xs"> متابعة صحية عن بُعد </td>
                            <td> <span class="label label-info label-sm"> في انتظار التقييم </span> </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                        <!-- النشاط الرابع: رعاية تمريضية منزلية -->
                        <tr>
                            <td>
                                <a href="javascript:;"> فاطمة العنزي </a>
                            </td>
                            <td class="hidden-xs"> رعاية تمريضية منزلية </td>
                            <td> <span class="label label-success label-sm"> تم تقديم الخدمة </span> </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- إشعارات النظام الطبية الخاصة بالطبيب -->
        <div class="tab-pane" id="tab_1_22">
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-bell"></i> الإشعار </th>
                            <th>
                                <i class="fa fa-clock"></i> التاريخ </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- إشعار 1: تحديثات الأمان -->
                        <tr>
                            <td>
                                تم تحديث النظام لتوفير أمان إضافي في تسجيل الدخول للطبيب مع المصادقة الثنائية </td>
                            <td> 1 ديسمبر 2024 </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                        <!-- إشعار 2: إضافة خدمة جديدة -->
                        <tr>
                            <td>
                                تم إضافة خدمة الاستشارات الطبية عن بُعد للمرضى لتوسيع نطاق خدماتنا </td>
                            <td> 28 نوفمبر 2024 </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                        <!-- إشعار 3: تحديث أدوات التشخيص -->
                        <tr>
                            <td>
                                تم تحديث أدوات التشخيص الإلكترونية لتسهيل عملية فحص المرضى عن بُعد </td>
                            <td> 20 نوفمبر 2024 </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                        <!-- إشعار 4: تدريب على تقنيات جديدة -->
                        <tr>
                            <td>
                                تم تنظيم دورة تدريبية على التقنيات الطبية الحديثة للتواصل مع المرضى عن بُعد </td>
                            <td> 15 نوفمبر 2024 </td>
                            <td>
                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
 

<!--tab-pane-->

<!--tab-pane-->
</div>
</div>
</div>
</div>
</div>
<!--tab_1_2-->
<div class="tab-pane" id="tab_1_3">
<div class="row profile-account">
<div class="col-md-3">
<ul class="ver-inline-menu tabbable margin-bottom-10">
<li class="active">
<a data-toggle="tab" href="#tab_1-1">
<i class="fa fa-cog"></i> الملف الشخصي </a>
<span class="after"> </span>
</li>
<li>
<a data-toggle="tab" href="#tab_2-2">
<i class="fa fa-picture-o"></i> تغير الصورة  </a>
</li>
<li>
<a data-toggle="tab" href="#tab_3-3">
<i class="fa fa-lock"></i> تغير كلمة المرور  </a>
</li>
<li>
<a data-toggle="tab" href="#tab_4-4">
<i class="fa fa-eye"></i> اعدادات الخصوصية  </a>
</li>
</ul>
</div>
<div class="col-md-9">
<div class="tab-content">
<div id="tab_1-1" class="tab-pane active">
<form role="form" action="#">
<div class="form-group">
    <label class="control-label">الاسم الكامل </label>
    <input type="text" placeholder="John" class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">التخصص الطبي </label>
    <input type="text" placeholder="تمريض " class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">رقم الترخيص الطبي </label>
    <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">المؤهلات الاكاديمية </label>
    <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">سنوات الخبرة </label>
    <input type="number" placeholder="Web Developer" class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">الدورات التدريبية المعتمدة </label>
    <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
</div>
<div class="form-group">
    <label class="control-label">الشهادات المهنية </label>
    <span class="btn-dufult">
        <span></span>
        <input type="file" name="files[]" multiple=""> </span>
    </div>
<div class="margiv-top-10">
    <a href="javascript:;" class="btn green"> حفظ التغيرات  </a>
    <a href="javascript:;" class="btn default"> الغاء  </a>
</div>
</form>
</div>
<div id="tab_2-2" class="tab-pane">
<p> 
(JPEG أو PNG) يمكنك تحديث صورتك الشخصية هنا. يُرجى تحميل صورة ذات جودة عالية وبتنسيق مناسب 
</p>
<form action="#" role="form">
<div class="form-group">
    <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
        <div>
            <span class="btn default btn-file">
                <span class="fileinput-new"> تحديد صورة  </span>
                <span class="fileinput-exists"> تغير الصورة  </span>
                <input type="file" name="..."> </span>
            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> ازالة الصورة  </a>
        </div>
    </div>
    <div class="clearfix margin-top-10">
        <span class="label label-danger"> NOTE! </span>
        <span>إذا واجهت أي مشكلة أثناء تحميل الصورة، يُرجى التأكد من أن حجم الملف وصيغته يتوافقان مع التعليمات أعلاه  </span>
    </div>
</div>
<div class="margin-top-10">
    <a href="javascript:;" class="btn green"> حفظ  </a>
    <a href="javascript:;" class="btn default"> الغاء  </a>
</div>
</form>
</div>
<div id="tab_3-3" class="tab-pane">
<form action="#">
<div class="form-group">
    <label class="control-label">كلمة المرور الحالية </label>
    <input type="password" class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">كلمة المرور الجديدة </label>
    <input type="password" class="form-control" /> </div>
<div class="form-group">
    <label class="control-label">تاكيد كلمة المرور الجديدة </label>
    <input type="password" class="form-control" /> </div>
<div class="margin-top-10">
    <a href="javascript:;" class="btn green"> تغير كلمة المرور  </a>
    <a href="javascript:;" class="btn default"> الغاء  </a>
</div>
</form>
</div>
<div id="tab_4-4" class="tab-pane">
<form action="#">
<table class="table table-bordered table-striped">
    <tr>
        <td> هل ترغب في تمكين وصول المرضى إلى ملفك الشخصي؟ </td>
        <td>
            <label class="uniform-inline">
                <input type="radio" name="patientAccess" value="yes" /> نعم </label>
            <label class="uniform-inline">
                <input type="radio" name="patientAccess" value="no" checked/> لا </label>
        </td>
    </tr>
    <tr>
        <td> هل ترغب في تلقي إشعارات عند إضافة مواعيد جديدة؟ </td>
        <td>
            <label class="uniform-inline">
                <input type="checkbox" name="appointmentNotifications" /> نعم </label>
        </td>
    </tr>
    <tr>
        <td> هل ترغب في مشاركة مقالات أو نصائح صحية مع مرضاك؟ </td>
        <td>
            <label class="uniform-inline">
                <input type="checkbox" name="shareHealthTips" /> نعم </label>
        </td>
    </tr>
    <tr>
        <td> هل ترغب في تمكين ميزة المراسلة المباشرة مع المرضى؟ </td>
        <td>
            <label class="uniform-inline">
                <input type="checkbox" name="enableMessaging" /> نعم </label>
        </td>
    </tr>
    <tr>
        <td> هل ترغب في إخفاء ساعات العمل الخاصة بك من صفحة الملف الشخصي؟ </td>
        <td>
            <label class="uniform-inline">
                <input type="checkbox" name="hideWorkingHours" /> نعم </label>
        </td>
    </tr>
</table>
<!--end profile-settings-->
<div class="margin-top-10">
    <a href="javascript:;" class="btn green"> حفظ التغييرات </a>
    <a href="javascript:;" class="btn default"> إلغاء </a>
</div>
</form>
</div>

<!--end col-md-9-->
</div>
</div>
<!--end tab-pane-->

<!--end tab-pane-->
</div>
</div>
</div>


<div class="row">

<div class="col-md-6 col-sm-6">
<!-- BEGIN PORTLET-->

<div class="col-md-6 col-sm-6">

</div>
</div>
<div class="row">

<div class="col-md-6 col-sm-6">
<!-- BEGIN PORTLET-->

<div class="portlet-body">


</div>
</div>
<!-- END PORTLET-->
</div>
</div>
</div>
<!-- END CONTENT BODY -->

</div>
<!-- END CONTENT -->
@endsection
@section('PAGE LEVEL PLUGINS')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL SCRIPTS')
@endsection