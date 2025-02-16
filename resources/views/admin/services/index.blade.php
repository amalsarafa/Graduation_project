@extends('layout.admin')
@section('title','قسم الخدمات')

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
                    <div class="theme-panel">
                    
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                           
                            
                           
                           
                            
                           
                           
                           
                            

                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> 
                        <small></small>
                    </h3>
           
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="{{ route('admin.services') }}">إدارة الخدمات </a>
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
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> ادارة خدمات</span>
                                    </div>
                                    <div class="actions">
                                      


                                        
                                    </div>
                                </div>
                                
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button id="" class="btn green " data-toggle="modal" data-target="#new_doctor"> 
                                                        <i class="fa fa-plus"></i>
                                                        اضافة جديد 
                                                    </button>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                                                <th> اسم الخدمة  </th>
                                                <th> التخصص الطبي  </th>
                                                <th> وصف الخدمة  </th>
                                                <th> السعر (ان وجد ) </th>
                                                <th> الحالة  </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> الرعاية المنزلية </td>
                                                <td> التمريض </td>
                                                <td> تقديم خدمات تمريضية شاملة داخل المنزل </td>
                                                <td> 150 شيكل/ساعة </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> تحاليل طبية منزلية </td>
                                                <td> المختبرات الطبية </td>
                                                <td> إجراء تحاليل طبية متنوعة في المنزل </td>
                                                <td> 120 شيكل </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> استشارات طبية عن بُعد </td>
                                                <td> الطب العام </td>
                                                <td> جلسات استشارية مع أطباء متخصصين عبر الفيديو </td>
                                                <td> 200 شيكل/جلسة </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> جلسات دعم نفسي </td>
                                                <td> الطب النفسي </td>
                                                <td> جلسات علاج نفسي لدعم الصحة النفسية </td>
                                                <td> 250 شيكل/جلسة </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> معلقة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> توصيل الأدوية </td>
                                                <td> الصيدلة </td>
                                                <td> خدمة توصيل الأدوية والمستلزمات الطبية إلى المنزل </td>
                                                <td> مجاني </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>   <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> الرعاية المنزلية </td>
                                                <td> التمريض </td>
                                                <td> تقديم خدمات تمريضية شاملة داخل المنزل </td>
                                                <td> 150 شيكل/ساعة </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> تحاليل طبية منزلية </td>
                                                <td> المختبرات الطبية </td>
                                                <td> إجراء تحاليل طبية متنوعة في المنزل </td>
                                                <td> 120 شيكل </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> استشارات طبية عن بُعد </td>
                                                <td> الطب العام </td>
                                                <td> جلسات استشارية مع أطباء متخصصين عبر الفيديو </td>
                                                <td> 200 شيكل/جلسة </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> جلسات دعم نفسي </td>
                                                <td> الطب النفسي </td>
                                                <td> جلسات علاج نفسي لدعم الصحة النفسية </td>
                                                <td> 250 شيكل/جلسة </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> معلقة </span>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" />
                                                </td>
                                                <td> توصيل الأدوية </td>
                                                <td> الصيدلة </td>
                                                <td> خدمة توصيل الأدوية والمستلزمات الطبية إلى المنزل </td>
                                                <td> مجاني </td>
                                                <td>
                                                    <span class="label label-sm label-success"> معتمدة </span>
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
<script src="{{asset('assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
@endsection