@extends('layout.admin')
@section('title', 'لوحة التحكم - الأدمن')

@section('head_page level plugins')
     <!-- BEGIN PAGE LEVEL PLUGINS -->
     <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('imge')
<li class="dropdown dropdown-user">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="Profile Image" class="img-circle" 
             src="{{ $admin->profile_image ? asset('storage/' . $admin->profile_image) : asset('assets/layouts/layout2/img/avatar3_small.jpg') }}" />
        <span class="username username-hide-on-mobile">{{ $admin->name }}</span>
        <i class="fa fa-angle-down"></i>
    </a>
    
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="{{route('admin.profile')}}">
                <i class="icon-user"></i>  ملفي  </a>
        </li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icon-logout"></i> تسجيل خروج  
            </a>
        </li>
    </ul>
</li>
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
                             
                                <a href="{{route('admin.dashboard')}}">الصفحة الرئيسية </a>
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
                                <h4 class="widget-thumb-heading">عدد المراجعين النشطين</h4>
                                <div class="widget-thumb-wrap">
                                     <i class=" widget-thumb-icon bg-blue icon-user"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد المراجعين</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" >{{$activeReviewersCount}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        
                        
                        
                        
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">إجمالي عدد الخدمات   </h4>
                                <div class="widget-thumb-wrap">
                                    <i class=" widget-thumb-icon bg-purple fa fa-calendar-check-o"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد الخدمات</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" >{{$serviceCount}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        

                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">  إجمالي عدد الاطباء</h4>
                                <div class="widget-thumb-wrap">
                                    <i class=" widget-thumb-icon bg-blue icon-user"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد الأطباء</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" >{{$doctorsCount}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-3">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading"> إجمالي عدد المرضى </h4>
                                <div class="widget-thumb-wrap">   
                                    <i class=" widget-thumb-icon bg-green fa fa-wheelchair"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">عدد المرضى</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" >{{$patientsCount}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                        
                        <div class="portlet light ">
                            <div class="portlet-title">
                               
                            </div>
                            <div class="portlet-body">
                               
                                <a href="{{route('website.home')}}" class="icon-btn">
                                    <i class="fa fa"></i>
                                    <div>  الموقع الرئيسي </div>
                                </a>
                                <a href="{{route('admin.profile')}}" class="icon-btn">
                                    <i class="icon-user"></i>
                                    <div> ملفي الشخصي  </div>
                                </a>

                            <a href="{{route('admin.doctors')}}" class="icon-btn">
                                    <i class="fa fa-user-md"></i>
                                    <div> قسم الاطباء </div>
                                </a>
                               
                                <a href="{{route('admin.patients')}}" class="icon-btn">
                                    <i class="fa fa-wheelchair"></i>
                                    <div> قسم المرضى </div>
                                </a>
                                
                                <a href="{{route('admin.services')}}" class="icon-btn">
                                    <i class="icon-folder"></i>
                                    <div> ادارة الخدمات  </div>
                                </a>
                                <a href="{{route('admin.contact-messages')}}" class="icon-btn">
                                    <i class="icon-bell"></i>
                                    <div>  اتصل بنا  </div>
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