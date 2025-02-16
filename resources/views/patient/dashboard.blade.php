@extends('layout.patient')
@section('title', 'لوحة تحكم-المرضى')
@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
 <link href="{{asset('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
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
                                <a href="#"> </a>
                            </li>
                            <li>
                             
                                <a href="pationt dashboard.html">الصفحة الرئيسية </a>
                                <i class="icon-home"></i>
                               
                            </li>
                            
                           
                        </ul>
                        <div class="page-toolbar">
                          
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row widget-row">
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">عدد المرضى الجدد</h4>
                                <div class="widget-thumb-wrap">   
                                    <i class=" widget-thumb-icon bg-green fa fa-wheelchair"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد المرضى</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">عدد الطلبات المكتملة</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red fa fa-check-circle-o"></i></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد الطلبات</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">عدد الزيارات الطبية اليومية</h4>
                                <div class="widget-thumb-wrap">
                                    <i class=" widget-thumb-icon bg-purple fa fa-calendar-check-o"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد الزيارات</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">عدد المراجعين النشطين</h4>
                                <div class="widget-thumb-wrap">
                                     <i class=" widget-thumb-icon bg-blue icon-user"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد المراجعين</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="portlet light ">
                            <div class="portlet-title">
                               
                            </div>
                            <div class="portlet-body">
                            <a href="Reservations.p.html" class="icon-btn btn-dr">
                                    <i class="icon-calendar"></i>
                                    <div>  حجوزاتي  </div>
                                </a>
                                <a href="pageuser_a.html" class="icon-btn btn-dr">
                                    <i class="icon-user"></i>
                                    <div> ملفي الشخصي  </div>
                                </a>
                                     
                            </div>
                        </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->    
@endsection
@section('PAGE LEVEL PLUGINS')
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
       
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL SCRIPTS')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
 <!-- END PAGE LEVEL SCRIPTS -->
@endsection