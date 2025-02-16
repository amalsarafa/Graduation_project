@extends('layout.doctor')
@section('title', 'المواعيد')
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
                       
                       
                    </div>
                    <!-- END THEME PANEL -->
                    <h3 class="page-title">  
                        <small> </small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="#">المواعيد  </a>
                                
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                                
                                <a href="index.html">الصفحة الئيسية </a>
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
                                    
                                    
                                </div>
                                <div class="portlet-body">
                          
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th> التاريخ </th>
                                                <th> الوقت  </th>
                                                <th> الخدمة </th>
                                                <th> الحالة  </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 10 ديسمبر 2024 </td>
                                                <td> 2:00 م </td>
                                                <td> استشارة طبية </td>
                                               
                                                <td>
                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 15 ديسمبر 2024 </td>
                                                <td> 4:30 م </td>
                                                <td> علاج طبيعي </td>
                                                
                                                <td>
                                                    <span class="label label-sm label-warning"> قيد الانتظار </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 20 ديسمبر 2024 </td>
                                                <td> 10:00 ص </td>
                                                <td> استشارة نفسية </td>
                                               
                                                <td>
                                                    <span class="label label-sm label-danger"> ملغي </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 25 ديسمبر 2024 </td>
                                                <td> 5:00 م </td>
                                                <td> فحص طبي شامل </td>
                                               
                                                <td>
                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 30 ديسمبر 2024 </td>
                                                <td> 11:00 ص </td>
                                                <td> فحص طبي </td>
                                                
                                                <td>
                                                    <span class="label label-sm label-warning"> قيد الانتظار </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 30 يناير 2025 </td>
                                                <td> 4:00 م </td>
                                                <td> استشارة طبية </td>
                                               
                                                <td>
                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 2 فبراير 2025 </td>
                                                <td> 11:00 ص </td>
                                                <td> علاج طبيعي </td>
                                                
                                                <td>
                                                    <span class="label label-sm label-danger"> ملغي </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 7 فبراير 2025 </td>
                                                <td> 2:30 م </td>
                                                <td> استشارة نفسية </td>
                                                
                                                <td>
                                                    <span class="label label-sm label-warning"> قيد الانتظار </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 12 فبراير 2025 </td>
                                                <td> 5:00 م </td>
                                                <td> فحص طبي شامل </td>
                                               
                                                <td>
                                                    <span class="label label-sm label-success"> مؤكد </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 18 فبراير 2025 </td>
                                                <td> 9:00 ص </td>
                                                <td> فحص طبي </td>
                                                
                                                <td>
                                                    <span class="label label-sm label-success"> مؤكد </span>
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
<script src="{{asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
@endsection