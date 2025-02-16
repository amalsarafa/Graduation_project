@extends('layout.doctor')
@section('title', 'المرضى')
@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
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
                                <a href="#">المرضى</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="Doctor dashboard.html">الصفحة الرئيسية </a>
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
                                            <i class="fa fa-wheelchair"></i>المرضى </div>
                                       
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable-bordered">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_reports" data-toggle="tab">
                                                        إدارة المرضى  
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_patient_management" data-toggle="tab">
                                                      
                                                        السجل الطبي  
                                                    </a>
                                                </li>
                                            
                                            </ul>
                                            
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_reports">
                                                    <div class="portlet-body">
                                                       
                                                        <div class="table-toolbar">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="btn-group">
                                                                        <button id="" class="btn green " data-toggle="modal" data-target="#new_doctor"> 
                                                                            <i class="fa fa-plus"></i>
                                                                            اضافة جديد 
                                                                         
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    
                                                                <thead>
                                                                    <tr>
                                                                        <th>اسم المريض</th>
                                                                        <th>نوع الخدمة</th>
                                                                        <th>التاريخ</th>
                                                                        <th>ملاحظات</th>
                                                                        <th>تعديل</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>أحمد محمد</td>
                                                                        <td>استشارة طبية</td>
                                                                        <td>10 ديسمبر 2024</td>
                                                                        <td>يعاني من ارتفاع ضغط الدم ويحتاج إلى فحص دوري.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>فاطمة علي</td>
                                                                        <td>علاج طبيعي</td>
                                                                        <td>15 ديسمبر 2024</td>
                                                                        <td>تتابع جلسات علاج طبيعي بعد عملية في العمود الفقري.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>سامي الخطيب</td>
                                                                        <td>استشارة نفسية</td>
                                                                        <td>20 ديسمبر 2024</td>
                                                                        <td>يعاني من اضطرابات القلق، يحتاج متابعة نفسية.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>نورا عادل</td>
                                                                        <td>فحص طبي شامل</td>
                                                                        <td>25 ديسمبر 2024</td>
                                                                        <td>فحص شامل للمريض، مع مراجعة تاريخ الأمراض المزمنة.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>محمد جابر</td>
                                                                        <td>فحص طبي</td>
                                                                        <td>30 ديسمبر 2024</td>
                                                                        <td>شكوى من آلام في الصدر، تم إجراء فحص للقلب.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>سارة خالد</td>
                                                                        <td>استشارة طبية</td>
                                                                        <td>30 يناير 2025</td>
                                                                        <td>تقييم جديد لحالة السكري ونتائج الفحوصات السابقة.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ريم جاسم</td>
                                                                        <td>علاج طبيعي</td>
                                                                        <td>2 فبراير 2025</td>
                                                                        <td>تعاني من آلام في الركبة وتتابع جلسات العلاج الطبيعي.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>أحمد سعيد</td>
                                                                        <td>استشارة نفسية</td>
                                                                        <td>7 فبراير 2025</td>
                                                                        <td>يتم متابعة تحسن الحالة النفسية بعد جلسات العلاج السابقة.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>مريم حسن</td>
                                                                        <td>فحص طبي شامل</td>
                                                                        <td>12 فبراير 2025</td>
                                                                        <td>فحص عام للحالة الصحية مع متابعة نسبة الحديد في الدم.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>سعاد علي</td>
                                                                        <td>فحص طبي</td>
                                                                        <td>18 فبراير 2025</td>
                                                                        <td>تم فحص الضغط والسكر بسبب شكوى من الدوخة المستمرة.</td>
                                                                        <td><a class="edit" href="javascript:;">تعديل</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_patient_management">
                                                    <div class="row">
                                                      
                                                                <div class="portlet-body">
                                                                    <table class="table table-striped table-bordered table-hover dt-responsive"  id="sample_3" cellspacing="0" >
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="all">تفاصيل الزيارات السابقة</th>
                                                                                <th class="min-phone-l">رقم المريض</th>
                                                                                <th class="min-phone-l">اسم المريض</th>
                                                                                <th class="min-tablet">التشخيص الحالي    </th>
                                                                                <th class="none">التاريخ   </th>
                                                                                <th class="none">التشخيص  </th>
                                                                                <th class="none">الملاحظات  </th>
                                                    
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>001	</td>
                                                                                <td>أحمد محمد	</td>
                                                                                <td >ارتفاع ضغط الدم</td>
                                                                                <td>2024-12-01</td>
                                                                                <td>فحص السكري</td>
                                                                                <td>يحتاج متابعة دورية لضغط الدم وقياس السكر.
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>002</td>
                                                                                <td>فاطمة علي</td>
                                                                                <td>رعاية منزلية </td>
                                                                                <td>2024-11-15</td>
                                                                                <td>علاج طبيعي</td>
                                                                                <td>استمرار جلسات العلاج الطبيعي ومتابعة الحركة.
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
        <script src="{{asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/plupload/js/plupload.full.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL SCRIPTS')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/ecommerce-products-edit.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection