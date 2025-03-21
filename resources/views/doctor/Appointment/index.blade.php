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
                                <i class="icon-home"></i>
                                <a href="{{route('doctor.dashboard')}}">الصفحة الرئسية </a>
                                <i class="fa fa-angle-left"></i>

                                
                            </li>
                             <li>
                                <a href="{{route('doctor.appointments')}}">المواعيد  </a>
                                
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
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    
                                    
                                </div>
                                <div class="portlet-body">
                          
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الخدمة</th>
                                                    <th>اسم المريض</th>
                                                    <th>التاريخ</th>
                                                    <th>الوقت</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($appointments as $index => $appointment)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $appointment->service }}</td>
                                                        <td>{{ $appointment->patient->user->name ?? 'غير متوفر' }}</td>
                                                        <td>{{ $appointment->date }}</td>
                                                        <td>{{ \Carbon\Carbon::parse( $appointment->time )->format('h:i A') }}</td>
                                                       
                                                        
                                                    </tr>
                                                @endforeach
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