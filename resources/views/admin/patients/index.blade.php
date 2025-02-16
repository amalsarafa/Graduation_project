@extends('layout.admin')
@section('title','قسم المرضى')

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
                       
                    </div>
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> 
                        <small></small>
                    </h3>
                 
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="{{ route('admin.patients') }}">قسم المرضى</a>
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
                        <div class="col-md-6"style= "width: 100%;">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-wheelchair"></i>ادارة المرضى </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="all">اسم المريض</th>
                                                <th class="min-phone-l">رقم الهاتف </th>
                                                <th class="min-tablet">البريد الالكتروني </th>
                                                <th class="none">السجل الطبي </th>
                                                <th class="none">الامراض السابفة</th>
                                                <th class="none">موعد الخدمة المستقبلية </th>
                                                <th class="desktop"> تاريخ الميلاد</th>
                                                <th class="none">الخدمة المقدمة</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                            <tr>
                                                <td>فاطمة علي</td>
                                                <td>0592345678</td>
                                                <td>fatima.ali@example.com</td>
                                                <td>الربو، قصور القلب</td>
                                                <td>الربو، قصور القلب</td>
                                                <td>2024/12/20 - فحص قلب</td>
                                                <td>1975/05/10</td>
                                                <td>استشارة طبية، فحص قلب</td>
                                            </tr>
                                 
                                                <td>سامي عادل</td>
                                                <td>0597890123</td>
                                                <td>sami.adel@example.com</td>
                                                <td>حساسية، التهاب المفاصل</td>
                                                <td>حساسية، التهاب المفاصل</td>
                                                <td>2024/12/23 - استشارة طبية</td>
                                                <td>1982/01/15</td>
                                                <td>استشارة طبية</td>
                                            </tr>
                                            <tr>
                                                <td>ريم صالح</td>
                                                <td>0598901234</td>
                                                <td>reem.saleh@example.com</td>
                                                <td>الربو، مشاكل هضمية</td>
                                                <td>الربو، مشاكل هضمية</td>
                                                <td>2024/12/17 - فحص صدر</td>
                                                <td>1995/04/05</td>
                                                <td>فحص صدر</td>
                                            </tr>
                                            <tr>
                                                <td>طارق سليمان</td>
                                                <td>0599012345</td>
                                                <td>tareq.suleiman@example.com</td>
                                                <td>ارتفاع ضغط الدم، آلام الظهر</td>
                                                <td>ضغط الدم، آلام الظهر</td>
                                                <td>2024/12/28 - علاج طبيعي</td>
                                                <td>1988/08/20</td>
                                                <td>علاج طبيعي</td>
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
<script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
@endsection