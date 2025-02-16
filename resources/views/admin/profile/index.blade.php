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
                     <h3 class="page-title"> الملف الشخصي 
                         <small>الخاص ب مدير النظام </small>
                     </h3>
                
                     
                    <div class="page-bar">
                        
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="{{ route('admin.profile') }}">الملف الشخصي</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="{{ route('admin.dashboard') }}">الصفحة الرئيسية </a>
                                <i class="icon-home"></i>
                               
                            </li>
                            
                           
                        </ul>
                        
                    </div>
                        
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
                                                <li>
                                                    <img src="{{asset('assets/pages/media/profile/profile-img.png')}}" class="img-responsive pic-bordered" alt="" />
                                                    <a href="javascript:;" class="profile-edit"> تعديل </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('admin.profile')}}"> ملفي الشخصي </a>
                                                </li>
                                        
                                                <li>
                                                    <a href="{{route('admin.services')}}"> اضافة خدمات 
                                                     
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('admin.patients')}}"> المرضى </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <h1 class="font-green sbold uppercase">(مدير النظام){{$admin->name}}</h1>
                                                    <p> .المسؤول عن إدارة وصيانة النظام الإلكتروني في موقع خدمات التمريض، ضمان عمل الأنظمة التقنية بسلاسة، والحفاظ على أمن بيانات المرضى وتحسين أداء الخدمات الإلكترونية</p>
                                                    <p>
                                                        <a href="javascript:;"> www.mhwcare.com </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                        
                                                    
                                                        <li>
                                                            <i class="fa fa-star"></i> خبير أنظمة صحية </li>
                                                        <li>
                                                            
                                                            <i class="fa fa-briefcase"></i> {{$admin->specialization}}</li>
                                                            <li>
                                                            <i class="fa fa-map-marker"></i> {{$admin->country}} </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> {{$admin->birth_date}} </li>
                                                        <li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="portlet sale-summary "  >
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> ملخص المهام </div>
                                                            <div class="tools">
                                
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> المهام اليوم </span>
                                                                    <span class="sale-num " > 5 </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> المهام الأسبوعية </span>
                                                                    <span class="sale-num"> 15 </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> المهام الإجمالية </span>
                                                                    <span class="sale-num"> 180 </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_11" data-toggle="tab"> آخر الأنشطة </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_22" data-toggle="tab"> إشعارات النظام </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_11">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-briefcase"></i> المريض </th>
                                                                        <th class="hidden-xs">
                                                                            <i class="fa fa-question"></i> الخدمة </th>
                                                                        <th>
                                                                            <i class="fa fa-bookmark"></i> الحالة </th>
                                                                        <th> </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($patients as $patient)
                                                                    <tr>
                                                                        <td>
                                                                            {{$patient->name}}
                                                                        </td>
                                                                        <td class="hidden-xs"> رعاية تمريضية منزلية </td>
                                                                        <td> <span class="label label-success label-sm"> تم توفير الخدمة </span> </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        @endforeach
                                                                        <td>
                                                                             سارة الزهراني 
                                                                        </td>
                                                                        <td class="hidden-xs"> استشارات طبية عن بُعد </td>
                                                                        <td> <span class="label label-warning label-sm"> قيد الانتظار </span> </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> نادر الفارس </a>
                                                                        </td>
                                                                        <td class="hidden-xs"> فحص طبي منزلي </td>
                                                                        <td> <span class="label label-danger label-sm"> متأخر </span> </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:;"> فاطمة العنزي </a>
                                                                        </td>
                                                                        <td class="hidden-xs"> رعاية كبار السن </td>
                                                                        <td> <span class="label label-success label-sm"> تم تقديم الخدمة </span> </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
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
                                                                    <tr>
                                                                        <td>
                                                                            تم تحديث النظام لتوفير أمان إضافي في تسجيل الدخول </td>
                                                                        <td> 1 ديسمبر 2024 </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            تم إضافة خدمة الاستشارات الطبية عن بُعد </td>
                                                                        <td> 28 نوفمبر 2024 </td>
                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> عرض </a>
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
                                                        <i class="fa fa-eye"></i> إعدادات الخصوصية </a>
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
                                                            <label class="control-label">التخصص  </label>
                                                            <input type="text" placeholder="Doe" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">رقم الجوال  </label>
                                                            <input type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">العنوان  </label>
                                                            <input type="text" placeholder="Design, Web etc." class="form-control" /> </div>
                                                      
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
                                                                <td>اظهار الأنشطة الأخيرة الخاصة بك على ملفك الشخصي؟</td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="radio" name="optionsRadios1" value="option1" /> نعم </label>
                                                                    <label class="uniform-inline">
                                                                        <input type="radio" name="optionsRadios1" value="option2" checked/> لا </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>هل ترغب في مشاركة موقعك الجغرافي مع الآخرين؟</td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="checkbox" value="" /> نعم </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> تفعيل إشعارات تسجيل الدخول من أجهزة جديدة؟ </td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="checkbox" value="" /> نعم </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> هل ترغب في ظهور حسابك في نتائج البحث؟ </td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <input type="checkbox" value="" /> نعم </label>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!--end profile-settings-->
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> حفظ التغيرات </a>
                                                            <a href="javascript:;" class="btn default"> الغاء </a>
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