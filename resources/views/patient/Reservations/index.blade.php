@extends('layout.patient')
@section('title', 'تقييم طبيب ')
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
                    <i class="icon-home"></i>
                    <a href="{{route('patient.dashboard')}}">الصفحة الرئيسية </a>
                    <i class="fa fa-angle-left"></i>
                 
                   
                </li>
                
                <li>
                    <a href="{{route('patient.reservations')}}">تقييم طبيب  </a>
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
        <div class="container">
            <h2 class="text-center">أضف تقييمك</h2>
            <hr>
            
            <div class="panel panel-default">
                <div class="panel-heading">إرسال تقييم جديد</div>
                <div class="panel-body">
                    <form action="{{ route('patient.reservations.store') }}" method="POST">
                        @csrf
                    
                        <!-- اختيار الطبيب -->
                        <div class="form-group">
                            <label class="control-label">اختر الطبيب</label>
                            <select class="form-control" name="doctor_user_id" required>
                                <option value="">-- اختر الطبيب --</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <!-- إدخال التقييم -->
                        <div class="form-group">
                            <label class="control-label">تعليقك </label>
                            <textarea class="form-control" name="comment" rows="3" placeholder="أدخل تعليقك"></textarea>
                        </div>
                    
                        <!-- زر الإرسال -->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> إرسال التقييم
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">إلغاء</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>

        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        
        <!-- END QUICK SIDEBAR -->
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