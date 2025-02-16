@extends('layout.patient')
@section('title', 'حجوزاتي')
@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL STYLES ')
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
                    <h3 class="page-title"> 
                        <small></small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="#">حجوزاتي </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="pationt dashboard.html">الصفحة الرئيسية </a>
                                <i class="icon-home"></i>
                               
                            </li>
                            
                           
                        </ul>
                       
                            </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal form-row-seperated" action="#">
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                    
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable-bordered">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_reports" data-toggle="tab">
                                                        الحجوزات  
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_patient_management" data-toggle="tab">
                                                      احجز خدمتك 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_doctor_reviews" data-toggle="tab">
                                                      تقييم الطبيب  
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_medical_reports" data-toggle="tab">
                                                      التقارير الطبية  
                                                    </a>
                                                </li>
                                            
                                            </ul>
                                            
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_reports">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                            <div class="portlet light portlet-fit ">
                                                                <div class="portlet-title">
                                                                    
                                                                    
                                                                </div>
                                                                <div class="portlet-body">
                                                                 
                                                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                                        <thead>
                                                                            <tr>
                                                                                <th> التاريخ </th>
                                                                                <th> الوقت  </th>
                                                                                <th> الخدمة </th>
                                                                                <th> الطبيب  </th>
                                                                                <th> الحالة  </th>
                                                                                <th> تعديل / حذف  </th>
                                                                               
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> 10 ديسمبر 2024 </td>
                                                                                <td> 2:00 م </td>
                                                                                <td> استشارة طبية </td>
                                                                                <td> د. أحمد العلي </td>
                                                                            
                                                                                <td>
                                                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 15 ديسمبر 2024 </td>
                                                                                <td> 4:30 م </td>
                                                                                <td> علاج طبيعي </td>
                                                                                <td> د. فاطمة السالم </td>
                                                                             
                                                                                <td>
                                                                                    <span class="label label-sm label-warning"> قيد الانتظار </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 20 ديسمبر 2024 </td>
                                                                                <td> 10:00 ص </td>
                                                                                <td> استشارة نفسية </td>
                                                                                <td> د. سامي الخطيب </td>
                                                                              
                                                                                <td>
                                                                                    <span class="label label-sm label-danger"> ملغي </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 25 ديسمبر 2024 </td>
                                                                                <td> 5:00 م </td>
                                                                                <td> فحص طبي شامل </td>
                                                                                <td> د. نورا عادل </td>
                                                                              
                                                                                <td>
                                                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 30 ديسمبر 2024 </td>
                                                                                <td> 11:00 ص </td>
                                                                                <td> فحص طبي </td>
                                                                                <td> د. محمد جابر </td>
                                                                               
                                                                                <td>
                                                                                    <span class="label label-sm label-warning"> قيد الانتظار </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 30 يناير 2025 </td>
                                                                                <td> 4:00 م </td>
                                                                                <td> استشارة طبية </td>
                                                                                <td> د. سارة خالد </td>
                                                                              
                                                                                <td>
                                                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 2 فبراير 2025 </td>
                                                                                <td> 11:00 ص </td>
                                                                                <td> علاج طبيعي </td>
                                                                                <td> د. ريم جاسم </td>
                                                                                
                                                                                <td>
                                                                                    <span class="label label-sm label-danger"> ملغي </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 7 فبراير 2025 </td>
                                                                                <td> 2:30 م </td>
                                                                                <td> استشارة نفسية </td>
                                                                                <td> د. أحمد سعيد </td>
                                                                                
                                                                                <td>
                                                                                    <span class="label label-sm label-warning"> قيد الانتظار </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 12 فبراير 2025 </td>
                                                                                <td> 5:00 م </td>
                                                                                <td> فحص طبي شامل </td>
                                                                                <td> د. مريم حسن </td>
                                                                              
                                                                                <td>
                                                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 18 فبراير 2025 </td>
                                                                                <td> 9:00 ص </td>
                                                                                <td> فحص طبي </td>
                                                                                <td> د. سعاد علي </td>
                                                                              
                                                                                <td>
                                                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="edit" href="javascript:;"> تعديل </a>
                                                                                    /
                                                                                    <a class="delete" href="javascript:;"> حذف </a>
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- END EXAMPLE TABLE PORTLET-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_patient_management">
                                                    <div class="caption">
                                                        <span class="caption-subject font-dark sbold uppercase">احجز خدمتك </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">التاريخ </label>
                                                        <div>
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                                <input type="text" class="form-control" readonly="" name="datepicker">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                            <span class="help-block"> اختر التاريخ </span>
                                                        </div>
                                                     
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">الوقت</label>
                                                        <div>
                                                            <div class="input-group time time-picker" data-time-format="hh:mm A">
                                                                <input type="text" class="form-control" name="timepicker" placeholder="اختر الوقت">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-clock-o"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                            <span class="help-block"> اختر الوقت </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                                
                                                        <label class=" control-label">الخدمات  </label>
                                                        <div >
                                                            <select class="form-control">
                                                 
                                                                <option>تمريص منزلي </option>
                                                                <option>زيارات طبيب</option>
                                                                <option>العلاج الطبيعي </option>
                                                                <option>الفحوصات المخبرية </option>
                                                                <option>الاستشارة الصحية عن بعد </option>
                                                            </select>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">ملاحظات  </label>
                                                        <div >
                                                            <textarea class="form-control" rows="3" placeholder="تفاصيل و ملاحظات خاصة "></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div >
                                                                <button type="submit" class="btn green">
                                                                    <i class="fa fa-check"></i> احجز الان  </button>
                                                                <button type="button" class="btn btn-outline grey-salsa">الغاء </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                            <!-- END EXAMPLE TABLE PORTLET-->
                                                        </div>
                                                        
                                                     <div class="tab-pane" id="tab_doctor_reviews"> 

                                                        <div class="caption">
                                                            <span class="caption-subject font-dark sbold uppercase">أضف تقييمك</span>
                                                        </div>
                                                        <form class="tab_doctor_reviews-form">
                                                    
                                                            <div class="form-group">
                                                              
                                                                <label class="control-label">اسمك :</label>
                                                                <div >
                                                                    <input type="password" class="form-control" placeholder="ادخل اسمك " readonly=""> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <label class=" control-label">التقييم : </label>
                                                                <div >
                                                                    <select class="form-control">
                                                         
                                                                        <option>سيء جدًا</option>
                                                                        <option>سيء</option>
                                                                        <option>مقبول</option>
                                                                        <option>جيد</option>
                                                                        <option>ممتاز</option>
                                                                    </select>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">تعليقك : </label>
                                                                <div >
                                                                    <textarea class="form-control" rows="3" placeholder="أدخل تعليقك"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <div class="row">
                                                                    <div >
                                                                        <button type="submit" class="btn green">
                                                                            <i class="fa fa-check"></i> ارسال التقييم </button>
                                                                        <button type="button" class="btn btn-outline grey-salsa">الغاء </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                     <div class="tab-pane" id="tab_medical_reports"> 
                                                        <div class="form-group">
                                                              
                                                            <label class="control-label">اسم الطبيب او الممرض المسؤول </label>
                                                            <div >
                                                                <input type="password" class="form-control" placeholder="اسم الطبيب  " readonly=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <span class="btn green fileinput-button">
                                                            <i class="fa fa-plus"></i>
                                                            <span> ارفع تقاريرك  </span>
                                                            <input type="file" name="files[]" multiple=""> </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">ملاحظات  </label>
                                                            <div >
                                                                <textarea class="form-control" rows="3" placeholder="تفاصيل و ملاحظات خاصة "></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div >
                                                                    <button type="submit" class="btn green">
                                                                        <i class="fa fa-check"></i> ارسال </button>
                                                                    <button type="button" class="btn btn-outline grey-salsa">الغاء </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                    </div>
                                                </div>
                                              
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->    
@endsection
@section('PAGE LEVEL PLUGINS')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
 <script src="{{asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/plupload/js/plupload.full.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL SCRIPTS')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="{{asset('assets/pages/scripts/ecommerce-products-edit.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}"></script>
        <script src="{{asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/pages/scripts/table-datatables-scroller.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/pages/scripts/table-datatables-colreorder.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

@endsection