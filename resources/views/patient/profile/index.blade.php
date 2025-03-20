@extends('layout.patient')
@section('title', 'الملف الشخصي')
@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL STYLES ')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
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
                     <h3 class="page-title"> ملف المريض
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
                                <a href="{{route('patient.profile')}}">الملف الشخصي</a>
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
                     <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab"> الملخص</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab"> الملف الشخصي  </a>
                                </li>
                             
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled profile-nav">
                                                <li>
                                                    <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" 
                                                         class="img-responsive pic-bordered" 
                                                         alt="Profile Picture" 
                                                         onerror="this.onerror=null;this.src='{{ asset('assets/pages/media/profile/people19.png') }}';" />
                                                </li>
                                                
                                               
                                                <li>
                                                    <a href="{{route('patient.bookservice')}}"> حجز خدمة   
                                                      
                                                    </a>
                                                </li>
                                           
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <!-- اسم المريض والمعلومات الأساسية -->
                                                    <h1 class="font-green sbold uppercase">{{$user->name}}</h1>
                                                    <p> مريض يعاني من مشاكل صحية مزمنة ويحتاج إلى رعاية طبية منزلية بشكل مستمر. </p>
                                                    <p>
                                                        <a href="{{route('website.home')}}">  www.mhwcare.com </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                        <li>
                                                            <i class="fa fa-map-marker"></i> {{$user->country}}</li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i> {{$user->birth_date}}
                                                            </li>
                                                            <i class="fa fa-heartbeat"></i> رعاية طبية منزلية </li>
                                                        <li>
                                                            <i class="fa fa-briefcase"></i> {{$patient->chronic_diseases_history	}}</li>
                                                        <li>
                                                            <i class="fa fa-calendar-check-o"></i> متابعة دورية </li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-8-->
                                                <div class="col-md-4">
                                                    <div class="portlet sale-summary">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> ملخص الخدمة </div>
                                                            <div class="tools">
                                                                <a class="reload"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> آخر زيارة
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
                                                                    <span class="sale-num"> {{ $lastVisit ? \Carbon\Carbon::parse($lastVisit->date)->translatedFormat('d F Y') : 'لا توجد زيارات' }}</span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> عدد الزيارات الأسبوعية
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
                                                                    <span class="sale-num"> {{ $weeklyVisits }} </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> مجموع الزيارات </span>
                                                                    <span class="sale-num"> {{ $totalVisits }} </span>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-md-4-->
                                            </div>
                                            <!--end row-->
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_11" data-toggle="tab">  التقارير المرفقة </a>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="tab-content">
                                                    <!--tab-pane-->
                                                    <div class="tab-pane active" id="tab_1_11">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th><i class="fa fa-medkit"></i>    اسم التقرير     </th>
                                                                        <th>   <i class="fa fa-calendar"></i>  تاريخ التقرير   </th>
                                                                        <th> <i class="fa fa-medkit"></i>      نوع التقرير   </th>
                                                                        <th><i class="fa fa-stethoscope"></i>  الطبيب   </th>
                                                                        <th><i class="fa fa-file"></i>   الملف       </th>
                                                                    </tr>
                                                                </thead>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($reports as $report)
                                                                        <tr>
                                                                            <td>{{ $report->report_name }}</td>
                                                                            <td>{{ $report->report_date }}</td>
                                                                            <td> {{ $report->report_type }}</td>
                                                                            <td> {{ $report->doctor->user->name }}</td>

                                                                            <td>
                                                                                <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank">عرض الملف</a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab_1_2-->
                                <div class="tab-pane" id="tab_1_3">
                                    <div class="row profile-account">
                                        <div class="col-md-3">
                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab_1-1">
                                                        <i class="fa fa-cog"></i> الملف الشخصي </a>
                                                    <span class="after"> </span>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_2-2">
                                                        <i class="fa fa-picture-o"></i> تغير الصورة  </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_3-3">
                                                        <i class="fa fa-lock"></i> تغير كلمة المرور  </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#tab_4-4">
                                                        <i class="fa fa-file"></i>  رفع تقارير طبية  </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div id="tab_1-1" class="tab-pane active">
                                                    <form role="form" action="{{ route('patient.profile.update', $patient->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                    
                                                        <div class="form-group">
                                                            <label class="control-label">الاسم الكامل</label>
                                                            <input type="text" name="name" value="{{ $user->name }}"  class="form-control" required />
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label class="control-label">رقم الهوية</label>
                                                            <input type="text" name="id_number" value="{{ $patient->id_number }}"  class="form-control" required />
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label class="control-label">تاريخ الميلاد</label>
                                                            <input type="date" name="birth_date" value="{{ $user->birth_date }}" class="form-control" required />
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">رقم الجوال</label>
                                                            <input type="text" name="phone_number"  class="form-control" value="{{ old('phone_number', $user->phone_number) }}" />
                                                        </div>
                                                    
                                                        <!-- البريد الإلكتروني -->
                                                        <div class="form-group">
                                                            <label class="control-label">البريد الإلكتروني</label>
                                                            <input type="email" name="email"  class="form-control" value="{{ old('email', $user->email) }}" />
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">الدولة</label>
                                                            <input type="text" name="country" value="{{ old('country', $user->country) }}"  class="form-control" required />
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label">العنوان كامل</label>
                                                            <input type="text" name="address" value="{{ $user->address }}"  class="form-control" required />
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label class="control-label">تاريخ الامراض المزمنة</label>
                                                            <input type="text" name="chronic_diseases_history" value="{{ $patient->chronic_diseases_history }}" placeholder="مثل السكري و ارتفاع الضغط" class="form-control" />
                                                        </div>
                                                
                                                    
                                                        <div class="margiv-top-10">
                                                            <button type="submit" class="btn green">حفظ التغيرات</button>
                                                            <a href="javascript:;" class="btn default">الغاء</a>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                                <div id="tab_2-2" class="tab-pane">
                                                    <p> 
                                                        (JPEG أو PNG) يمكنك تحديث صورتك الشخصية هنا. يُرجى تحميل صورة ذات جودة عالية وبتنسيق مناسب 
                                                        </p>
                                                        <form action="{{ route('patient.profile.updateImage') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        
                                                                        <img src="{{ asset(auth()->user()->profile_image ? 'images/profiles/' . auth()->user()->profile_image : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image') }}" alt="Profile Image" /> 
                                                                    </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> 
                                                                    </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> تحديد صورة </span>
                                                                            <span class="fileinput-exists"> تغيير الصورة </span>
                                                                            <input type="file" name="profile_image" accept="image/*"> 
                                                                        </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> إزالة الصورة </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger"> NOTE! </span>
                                                                    <span>إذا واجهت أي مشكلة أثناء تحميل الصورة، يُرجى التأكد من أن حجم الملف وصيغته يتوافقان مع التعليمات أعلاه.</span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <button type="submit" class="btn green"> حفظ </button>
                                                                <a href="javascript:;" class="btn default"> إلغاء </a>
                                                            </div>
                                                        </form>
                                                        
                                                </div>
       <div id="tab_3-3" class="tab-pane">
      <form action="{{ route('patient.password.update') }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="form-group">
            <label>كلمة المرور الحالية</label>
            <input type="password" name="current_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>كلمة المرور الجديدة</label>
            <input type="password" name="new_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>تأكيد كلمة المرور الجديدة</label>
            <input type="password" name="new_password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">تغيير كلمة المرور</button>
    </form>
     </div>  

     <div id="tab_4-4" class="tab-pane">
        <form action="{{ route('patient.profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- اسم التقرير -->
            <div class="form-group">
                <label class="control-label">اسم التقرير</label>
                <input type="text" class="form-control" name="report_name" required>
            </div>
        
            <!-- تاريخ التقرير -->
            <div class="form-group">
                <label class="control-label">تاريخ التقرير</label>
                <input type="date" class="form-control" name="report_date" required>
            </div>
        
            <!-- نوع التقرير -->
            <div class="form-group">
                <label class="control-label">نوع التقرير</label>
                <input type="text" class="form-control" name="report_type" required>
            </div>
        
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
        
            <!-- زر رفع الملفات -->
            <div class="form-group">
                <label class="control-label">رفع التقرير</label>
                <input type="file" name="file" class="form-control" required>
            </div>
        
            <!-- الأزرار -->
            <div class="form-actions">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> إرسال التقرير
                </button>
                <button type="reset" class="btn btn-outline-secondary">إلغاء</button>
            </div>
        </form>
        
      
       </div>
                                                
                                                
                                                       
        
                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </div>
                                <!--end tab-pane-->
                             
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                    
                    
                     <div class="row">
                        
                         <div class="col-md-6 col-sm-6">
                             <!-- BEGIN PORTLET-->
                         
                         <div class="col-md-6 col-sm-6">
                            
                         </div>
                     </div>
                     <div class="row">
                         
                         <div class="col-md-6 col-sm-6">
                             <!-- BEGIN PORTLET-->
                             
                                 <div class="portlet-body">
                                 
                                     
                                 </div>
                             </div>
                             <!-- END PORTLET-->
                         </div>
                     </div>
                 </div>
                 <!-- END CONTENT BODY -->
                  
             </div>
             <!-- END CONTENT -->
@endsection
@section('PAGE LEVEL PLUGINS')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL SCRIPTS')
@endsection