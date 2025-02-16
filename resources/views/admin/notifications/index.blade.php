@extends('layout.admin')
@section('title','الإشعارات والتنبيهات')

@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
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
                 
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> 
                        <small></small>
                    </h3>
                    <div class="page-bar">
                           <ul class="page-breadcrumb">
                                <li>
                                    <a href="{{ route('admin.notifications') }}">الإشعار
ات و التنبيهات  </a>
                                </li>
                                <li>
                                    <i class="fa fa-angle-left"></i>
                                 
                                    <a href="{{ route('admin.dashboard') }}">الصفحة الرئيسية </a>
                                    <i class="icon-home"></i>
                                   
                                </li>
                                
                               
                            </ul>
                    
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">الإشعار
ات و التنبيهات</span>
                                    </div>
                                
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button id="" class="btn green dt-buttons " data-toggle="modal" data-target="#new_doctor"> 
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
                                                <th> نوع الإشعار
</th>
                                                <th> الوصف </th>
                                                <th> التاريخ / الوقت  </th>
                                                <th> الحالة  </th>
                                                <th> تعديل  </th>
                                                <th> حذف </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> تنبيه أمني </td>
                                                <td> محاولة تسجيل دخول فاشلة </td>
                                                <td> 2024-12-07 10:00 </td>
                                                <td class="center"> غير مقروء </td>
                                        
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> طلب عميل </td>
                                                <td> استفسار جديد من العميل </td>
                                                <td> 2024-12-07 09:45 </td>
                                                <td class="center"> مقروء </td>
                                                
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> تحديث النظام </td>
                                                <td> ترقية إلى الإصدار 2.1 </td>
                                                <td> 2024-12-06 18:30 </td>
                                                <td class="center"> مكتمل </td>
                                           
                                              
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> تذكير بمهمة </td>
                                                <td> تذكير بإكمال التقرير الشهري </td>
                                                <td> 2024-12-05 08:00 </td>
                                                <td class="center"> غير مقروء </td>
                                             
                                        
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> تنبيه حساب </td>
                                                <td> تغيير كلمة المرور المطلوبة </td>
                                                <td> 2024-12-07 11:30 </td>
                                                <td class="center"> غير مقروء </td>
                                              
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> استفسار فني </td>
                                                <td> مشكلة في الاتصال بالشبكة </td>
                                                <td> 2024-12-07 12:00 </td>
                                                <td class="center"> مقروء </td>
                                                
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> تحديث أمني </td>
                                                <td> تطبيق تحديثات الأمان الأخيرة </td>
                                                <td> 2024-12-06 17:15 </td>
                                                <td class="center"> مكتمل </td>
                                        
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                            <tr>
                                                <td> إشعار جديد </td>
                                                <td> إشعار حول سياسة الخصوصية الجديدة </td>
                                                <td> 2024-12-05 16:00 </td>
                                                <td class="center"> غير مقروء </td>
                                               
                                                <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                <td> <a class="delete" href="javascript:;"> حذف </a> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
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
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL SCRIPTS')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
@endsection