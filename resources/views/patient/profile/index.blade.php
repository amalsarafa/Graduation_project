@extends('layout.admin')
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
                     <h3 class="page-title"> ملف المريض
                         <small></small>
                     </h3>
                     <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="#">الملف الشخصي</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="pationt dashboard.html">الصفحة الرئيسية </a>
                                <i class="icon-home"></i>
                               
                            </li>
                            
                           
                        </ul>
                      
                         
                    </div>
                     <!-- END PAGE HEADER-->
                     <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab"> الملخص</a>
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
                                                <li>
                                                    <!-- صورة المريض -->
                                                    <img src="{{asset('assets/pages/media/profile/people19.png')}}" class="img-responsive pic-bordered" alt="Patient Image" />
                                                    <a href="#tab_2-2" class="profile-edit"> تعديل </a>
                                                </li>
                                                <li>
                                                    <a href="Reservations.p.html"> ارفع تقاريرك  </a>
                                                </li>
                                                <li>
                                                    <a href="Reservations.p.html"> احجز خدمتك  
                                                      
                                                    </a>
                                                </li>
                                           
                                                <li>
                                                    <a href="#tab_1_3"> الإعدادات </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <!-- اسم المريض والمعلومات الأساسية -->
                                                    <h1 class="font-green sbold uppercase">أحمد السعدي</h1>
                                                    <p> مريض يعاني من مشاكل صحية مزمنة ويحتاج إلى رعاية طبية منزلية بشكل مستمر. </p>
                                                    <p>
                                                        <a href="javascript:;"> www.patient-website.com </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                        <li>
                                                            <i class="fa fa-map-marker"></i> الرياض، المملكة العربية السعودية </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> 15 فبراير 1980 </li>
                                                        <li>
                                                            <i class="fa fa-heartbeat"></i> رعاية طبية منزلية </li>
                                                        <li>
                                                            <i class="fa fa-briefcase"></i> خدمات تمريض منزلية </li>
                                                        <li>
                                                            <i class="fa fa-calendar-check-o"></i> متابعة دورية </li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-8-->
                                                <div class="col-md-4">
                                                    <div class="portlet sale-summary">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> ملخص الخدمة </div>
                                                            <div class="tools">
                                                                <a class="reload" href="javascript:;"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> آخر زيارة
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
                                                                    <span class="sale-num"> 23 نوفمبر 2024 </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> عدد الزيارات الأسبوعية
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
                                                                    <span class="sale-num"> 5 </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> مجموع الزيارات </span>
                                                                    <span class="sale-num"> 50 </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> حالة الخدمة </span>
                                                                    <span class="sale-num"> مستمرة </span>
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
                                                        <a href="#tab_1_11" data-toggle="tab"> الزيارات الأخيرة </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_22" data-toggle="tab"> التقارير </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_11">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-calendar"></i> التاريخ </th>
                                                                        <th class="hidden-xs">
                                                                            <i class="fa fa-medkit"></i> نوع الخدمة </th>
                                                                        <th>
                                                                            <i class="fa fa-stethoscope"></i> الحالة الصحية </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> 23 نوفمبر 2024 </a>
                                                                        </td>
                                                                        <td class="hidden-xs"> فحص طبي شامل </td>
                                                                        <td> مستقر
                                                                            <span class="label label-success label-sm"> تم الرعاية </span>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> 18 نوفمبر 2024 </a>
                                                                        </td>
                                                                        <td class="hidden-xs"> فحص ضغط الدم </td>
                                                                        <td> مرتفع
                                                                            <span class="label label-warning label-sm"> تحت المراقبة </span>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> 12 نوفمبر 2024 </a>
                                                                        </td>
                                                                        <td class="hidden-xs"> علاج طبيعي </td>
                                                                        <td> تحسن ملحوظ
                                                                            <span class="label label-success label-sm"> تم الرعاية </span>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> 5 نوفمبر 2024 </a>
                                                                        </td>
                                                                        <td class="hidden-xs"> استشارة طبية </td>
                                                                        <td> مستقر
                                                                            <span class="label label-success label-sm"> تم الرعاية </span>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التفاصيل </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                
                                            
                                                    <!--tab-pane-->
                                                    <div class="tab-pane" id="tab_1_22">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-file"></i> التقرير </th>
                                                                        <th>
                                                                            <i class="fa fa-calendar"></i> تاريخ التقرير </th>
                                                                        <th>
                                                                            <i class="fa fa-medkit"></i> نوع التقرير </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> تقرير الفحص الطبي الشامل </a>
                                                                        </td>
                                                                        <td> 23 نوفمبر 2024 </td>
                                                                        <td> فحص شامل </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التقرير </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> تقرير نتائج تحليل الدم </a>
                                                                        </td>
                                                                        <td> 20 نوفمبر 2024 </td>
                                                                        <td> تحليل دم </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التقرير </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> تقرير الاستشارة الطبية </a>
                                                                        </td>
                                                                        <td> 12 نوفمبر 2024 </td>
                                                                        <td> استشارة طبية </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التقرير </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> تقرير الرعاية المنزلية </a>
                                                                        </td>
                                                                        <td> 5 نوفمبر 2024 </td>
                                                                        <td> علاج طبيعي </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التقرير </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> تقرير فحص ضغط الدم </a>
                                                                        </td>
                                                                        <td> 18 نوفمبر 2024 </td>
                                                                        <td> فحص ضغط الدم </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض التقرير </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
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
                                                            <label class="control-label">رقم الهوية</label>
                                                            <input type="text" placeholder="مثال: 1234567890" class="form-control" /></div>
                                                        <div class="form-group">
                                                            <label class="control-label">تاريخ الميلاد</label>
                                                            <input type="date" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">العنوان كامل  </label>
                                                            <input type="text" placeholder="العنوان بالتفصيل ." class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">تاريخ الامراض المزمنة  </label>
                                                            <input type="text" placeholder="مثل السكري و ارتفاع الضغط " class="form-control" /> </div>
                                                      
                                                        <div class="form-group">
                                                            <label class="control-label">التقارير السابقة  </label>
                                                            <span class="btn-dufult">
                                                                <span></span>
                                                                <input type="file" name="files[]" multiple=""> </span>
                                                           </div>
                                                           <div class="form-group">
                                                            <label class="control-label">اي ملاحظات اضافية حول احتياجات المريض</label>
                                                            <textarea class="form-control" rows="3" placeholder="ملاحظات و تفاصيل عن المريض  "></textarea>
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
                                                        <h4>إعدادات خصوصية المريض</h4>
                                                        <table class="table table-bordered table-striped">
                                                            <!-- السؤال الأول حول الموافقة على مشاركة البيانات الشخصية -->
                                                            <tr>
                                                                <td>هل ترغب في مشاركة بياناتك الطبية مع الفريق الطبي؟</td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="radio" name="dataSharing" value="yes" /> نعم
                                                                    </label>
                                                                    <label class="uniform-inline">
                                                                        <input type="radio" name="dataSharing" value="no" checked /> لا
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <!-- السؤال الثاني حول تلقي إشعارات عن حالتك الصحية -->
                                                            <tr>
                                                                <td>هل ترغب في تلقي إشعارات عن حالتك الصحية؟</td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="checkbox" name="notifications" value="yes" /> نعم
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <!-- السؤال الثالث حول إمكانية الوصول للملف الطبي بواسطة أفراد العائلة -->
                                                            <tr>
                                                                <td>هل يمكن لأفراد العائلة الوصول إلى ملفك الطبي؟</td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="checkbox" name="familyAccess" value="yes" /> نعم
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <!-- السؤال الرابع حول إرسال تقارير طبية عبر البريد الإلكتروني -->
                                                            <tr>
                                                                <td>هل ترغب في إرسال تقاريرك الطبية عبر البريد الإلكتروني؟</td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="checkbox" name="emailReports" value="yes" /> نعم
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <!-- زر الحفظ -->
                                                         
                                                        </table>
                                            
                                                
                                                        <!--end profile-settings-->
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> حفظ التغيرات  </a>
                                                            <a href="javascript:;" class="btn default"> الغاء  </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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