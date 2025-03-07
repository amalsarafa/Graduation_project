@extends('layout.patient')
@section('title', ' الحجوزات  ')

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
                               
                                <i class="icon-home"></i>

                                <a href="{{route('patient.dashboard')}}">الصفحة الرئيسية </a>
                                <i class="fa fa-angle-left"></i>
                               
                            </li>
                            <li>
                                <a href="{{route('patient.reserve')}}">الحجوزات </a>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE HEADER-->
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
                
                   
                    <div class="row">
                        <div class="col-md-6"style= "width: 100%;">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        جدول الحجوزات  </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th>تاريخ الحجز</th>
                                                <th>وقت الحجز</th>
                                                <th>الخدمة</th>
                                                <th>الطبيب</th>
                                                <th> الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($reservations as $reservation)
                                            <tr>
                                                <td>{{ $reservation->date }}</td>
                                                <td>{{ $reservation->time }}</td>
                                                <td>{{ $reservation->service }}</td> 
                                                <td>{{ $reservation->doctor->user->name }}</td> 
                                                <td>
                                                    <!-- زر التعديل -->
                                              <a href="{{ route('patient.reserve.edit', $reservation->id) }}" class="btn btn-primary">تعديل</a>
                                               <!-- زر الحذف -->
                                                   <form action="{{ route('patient.reserve.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">حذف</button>
                                                    </form>                                                                                    
                                                    
                                                </td> 
                                                
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
<script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-colreorder.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection