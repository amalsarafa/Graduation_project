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
                                <a href="{{route('doctor.patients')}}">المرضى</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="{{route('doctor.dashboard')}}">الصفحة الرئيسية </a>
                                <i class="icon-home"></i>
                               
                            </li>
                            
                           
                        </ul>
                       
                            </div>
                            @if(session('success'))
                    <div class="alert alert-success">
                       
                        <span>{{ session('success') }}</span>
                        <button onclick="this.parentElement.style.display='none';">x</button>
                       
                    </div>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                                                                        
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    
                                                                <thead>
                                                                    <tr>
                                                                        <th># </th>
                                                                        <th>اسم المريض</th>
                                                                        <th>نوع الخدمة</th>
                                                                        <th>التاريخ</th>
                                                                        <th>ملاحظات</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                               
                                                                     <tr>
                                                                        <td>  </td>
                                                                        <td>سامي الخطيب</td>
                                                                        <td>استشارة نفسية</td>
                                                                        <td>20 ديسمبر 2024</td>
                                                                        <td>يعاني من اضطرابات القلق، يحتاج متابعة نفسية.</td>
                                                                        
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