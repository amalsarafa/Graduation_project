@extends('layout.doctor')
@section('title','الملف الشخصي')

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
<h3 class="page-title"> الملف الشخصي
<small>الملف الشخصي الخاص بالطبيب </small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('doctor.profile')}}">الملف الشخصي</a>
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
<div class="profile">
<div class="tabbable-line tabbable-full-width">
<ul class="nav nav-tabs">
<li class="active">
<a href="#tab_1_1" data-toggle="tab"> الملخص  </a>
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
<!-- صورة الطبيب -->
<li>
    <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" 
         class="img-responsive pic-bordered" 
         alt="Profile Picture" 
         onerror="this.onerror=null;this.src='{{ asset('assets/pages/media/profile/people19.png') }}';" />
</li>

<!-- قائمة الخيارات -->

<li>
<a href="{{route('doctor.appointments')}}">  مواعيدي 

</a>
</li>
<li>
<a href="{{route('doctor.patients')}}"> السجلات الطبية </a>
</li>
</ul>
</div>

<div class="col-md-9">
<div class="row">
<div class="col-md-8 profile-info">
<h1 class="font-green sbold uppercase">{{$user->name}}</h1>
<p> طبيب متخصص في الرعاية الصحية المنزلية، يعمل على تقديم الاستشارات الطبية للمرضى في منازلهم ومتابعة حالتهم الصحية عن كثب، وتوفير العلاج المناسب في راحة منازلهم. </p>

<p>
<a href="{{route('website.home')}}">  www.mhwcare.com </a>
</p>
<ul class="list-inline">
<li>
<i class="fa fa-map-marker"></i> {{$user->country}} </li>
<li>
<i class="fa fa-calendar"></i> {{$user->birth_date}}</li>
<li>
<i class="fa fa-briefcase"></i> {{ $doctor->specialization }} </li>
<li>

<li>
<i class="fa fa-heart"></i> توفير الرعاية الصحية المتكاملة للمرضى في منازلهم </li>
</ul>
</div>
<!--end col-md-8-->
<div class="col-md-4">
    <div class="portlet sale-summary">
        <div class="portlet-title">
            <div class="caption font-red sbold"> ملخص الأنشطة الطبية </div>
            <div class="tools">
                <a class="reload" href="javascript:;"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <ul class="list-unstyled">
                <!-- عدد الاستشارات اليومية -->
                <li>
                    <span class="sale-info"> الاستشارات اليوم
                        <i class="fa fa-medkit"></i>
                    </span>
                    <span class="sale-num"> 5 </span>
                </li>
                <!-- عدد الاستشارات الأسبوعية -->
                <li>
                    <span class="sale-info"> الاستشارات الأسبوعية
                        <i class="fa fa-stethoscope"></i>
                    </span>
                    <span class="sale-num"> 20 </span>
                </li>
                <!-- عدد المرضى الذين تم علاجهم -->
                <li>
                    <span class="sale-info"> المرضى الذين تم معالجتهم </span>
                    <span class="sale-num"> 150 </span>
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
            <a href="#tab_1_11" data-toggle="tab"> آخر الأنشطة الطبية </a>
        </li>
       
    </ul>
    <div class="tab-content">
        <!-- آخر الأنشطة الطبية الخاصة بالطبيب -->
        <div class="tab-pane active" id="tab_1_11">
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa fa-user-md"></i> المريض </th>
                            <th class="hidden-xs">
                                <i class="fa fa-cogs"></i> الخدمة </th>
                            <th>
                                <i class="fa fa-calendar-check"></i> الحالة </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- النشاط الأول: استشارة طبية عن بُعد -->
                        <tr>
                            <td>
                                <a href="javascript:;"> أحمد السعدي </a>
                            </td>
                            <td class="hidden-xs"> استشارة طبية عن بُعد </td>
                            <td> <span class="label label-success label-sm"> تم تقديم الاستشارة بنجاح </span> </td>

                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>

       
 

<!--tab-pane-->

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

</ul>
</div>
<div class="col-md-9">
<div class="tab-content">
<div id="tab_1-1" class="tab-pane active">
    <form role="form" action="{{ route('doctor.profile.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <!-- اسم المستخدم -->
        <div class="form-group">
            <label class="control-label">الاسم الكامل</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" />
        </div>
        <!-- رقم الجوال -->
    <div class="form-group">
        <label class="control-label">رقم الجوال</label>
        <input type="text" name="phone_number"  class="form-control" value="{{ old('phone_number', $user->phone_number) }}" />
    </div>

    <!-- البريد الإلكتروني -->
    <div class="form-group">
        <label class="control-label">البريد الإلكتروني</label>
        <input type="email" name="email"  class="form-control" value="{{ old('email', $user->email) }}" />
    </div>

    <!-- الدولة -->
    <div class="form-group">
        <label class="control-label">الدولة</label>
        <input type="text" name="country" placeholder="مصر" class="form-control" value="{{ old('country', $user->country) }}" />
    </div>

    <!-- العنوان -->
    <div class="form-group">
        <label class="control-label">العنوان</label>
        <textarea class="form-control" rows="3" name="address" >{{ old('address', $user->address) }}</textarea>
    </div>

    
        <!-- التخصص الطبي -->
        <div class="form-group">
            <label class="control-label">التخصص الطبي</label>
            <input type="text" name="specialization" class="form-control" value="{{ old('specialization', $doctor->specialization) }}" />
        </div>
    
        <!-- رقم الترخيص الطبي -->
        <div class="form-group">
            <label class="control-label">رقم الترخيص الطبي</label>
            <input type="text" name="license_number"  class="form-control" value="{{ old('license_number', $doctor->license_number) }}" />
        </div>
    
        <!-- المؤهلات الأكاديمية -->
        <div class="form-group">
            <label class="control-label">المؤهلات الأكاديمية</label>
            <input type="text" name="academic_qualifications" class="form-control" value="{{ old('academic_qualifications', $doctor->academic_qualifications) }}" />
        </div>
    
        <!-- سنوات الخبرة -->
        <div class="form-group">
            <label class="control-label">سنوات الخبرة</label>
            <input type="number" name="years_experience"  class="form-control" value="{{ old('years_experience', $doctor->years_experience) }}" />
        </div>
    
        <!-- الدورات التدريبية المعتمدة -->
        <div class="form-group">
            <label class="control-label">الدورات التدريبية المعتمدة</label>
            <textarea class="form-control" rows="3" name="training_courses" placeholder="الدورات التدريبية">{{ old('training_courses', $doctor->training_courses) }}</textarea>
        </div>
    
        <!-- الشهادات المهنية -->
        <div class="form-group">
            <label class="control-label">الشهادات المهنية</label>
            <input type="file" name="professional_certificate" class="form-control" />
        </div>
    
        <div class="margiv-top-10">
            <button type="submit" class="btn green">حفظ التغيرات</button>
            <a href="javascript:;" class="btn default">إلغاء</a>
        </div>
    </form>
    
</div>



<div id="tab_2-2" class="tab-pane">
<p> 
(JPEG أو PNG) يمكنك تحديث صورتك الشخصية هنا. يُرجى تحميل صورة ذات جودة عالية وبتنسيق مناسب 
</p>
<form action="{{ route('doctor.profile.updateImage') }}" method="POST" enctype="multipart/form-data">
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
    <form action="{{ route('doctor.password.update') }}" method="POST">
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

<!--end profile-settings-->

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