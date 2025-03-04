@extends('layout.admin')
@section('title','الملف الشخصي')

@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
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
                         <small>الخاص ب مدير النظام </small>
                     </h3>
                
                     
                    <div class="page-bar">
                        
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="{{ route('admin.profile') }}">الملف الشخصي</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="{{ route('admin.dashboard') }}">الصفحة الرئيسية </a>
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
                                                <li>
                                                    <img src="{{ asset('storage/' . $admin->profile_image) }}" 
                                                       class="img-responsive pic-bordered" 
                                                        alt="Profile Image" 
                                                        style="width: 100%; border-radius: 10px;" />
                                                   
                                                </li>
                                                <li>
                                                    <a href="{{route('admin.profile')}}"> ملفي الشخصي </a>
                                                </li>
                                        
                                                <li>
                                                    <a href="{{route('admin.services')}}"> اضافة خدمات 
                                                     
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('admin.patients')}}"> المرضى </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <h1 class="font-green sbold uppercase">(مدير النظام){{$admin->name}}</h1>
                                                    <p> .المسؤول عن إدارة وصيانة النظام الإلكتروني في موقع خدمات التمريض، ضمان عمل الأنظمة التقنية بسلاسة، والحفاظ على أمن بيانات المرضى وتحسين أداء الخدمات الإلكترونية</p>
                                                    <p>
                                                        <a href="{{route('website.home')}}"> www.mhwcare.com </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                        
                                                    
                                                        <li>
                                                            <i class="fa fa-star"></i> خبير أنظمة صحية </li>
                                                        <li>
                                                            
                                                            <i class="fa fa-briefcase"></i> {{$admin->specialization}}</li>
                                                            <li>
                                                            <i class="fa fa-map-marker"></i> {{$admin->country}} </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> {{$admin->birth_date}} </li>
                                                        <li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="portlet sale-summary "  >
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> ملخص المهام </div>
                                                            <div class="tools">
                                
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body ">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> المهام اليومية</span>
                                                                    <span class="sale-num " > {{ $todayTasks }} </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> المهام الأسبوعية </span>
                                                                    <span class="sale-num  "> {{ $weeklyTasks }} </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> المهام الإجمالية </span>
                                                                    <span class="sale-num "> {{ $totalTasks }} </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_11" data-toggle="tab"> آخر الأنشطة </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_22" data-toggle="tab">جدول المهام</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_11">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                <thead>
                                                                    <tr>
                                                                    <th> #</th>
                                                                        <th>
                                                                            <i class="fa fa-briefcase"></i> المريض </th>
                                                                        <th class="hidden-xs">
                                                                            <i class="fa fa-question"></i> الخدمة </th>
                                                                        <th>
                                                                            <i class="fa fa-bookmark"></i> الحالة </th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($patients as $patient)
                                                                    <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                        <td> {{$patient->user->name}}</td>
                                                                        <td class="hidden-xs">
                                                                        @if($patient->services->isNotEmpty())
                                                                           {{ $patient->services->first()->name }}
                                                                             @else
                                                                       غير محدد
                                                                       @endif
                                                                       </td>
                                                                        <td>  
                                                                        @if($patient->services->isNotEmpty())
                                                        
                                                                           @if($patient->services->first()->status == 'approved')
                                                                            <span class="label label-sm label-success">مقبول</span>
                                                                          @elseif($patient->services->first()->status == 'pending')
                                                                            <span class="label label-sm label-warning">قيد الانتظار</span>
                                                                                @elseif($patient->services->first()->status == 'rejected')
                                                                                 <span class="label label-sm label-danger">مرفوض</span>
                                                                                 @endif
                                                                             @else
                                                                       غير محدد
                                                                       @endif
                                                                    </td>   
                                                                    </tr>
                                                                    @endforeach
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_22">
                                                        <div class="portlet-body">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>رقم المهمة</th>
                                                                        <th>العنوان</th>
                                                                        <th>الوصف</th>
                                                                        <th>تاريخ الانتهاء</th>
                                                                        <th>التاريخ / الوقت</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                    
                                                                    @foreach($tasks as $task)
                                                                        <tr>
                                                                            <td>{{ $task->id }}</td>
                                                                            <td>{{ $task->title }}</td>
                                                                            <td>{{ $task->description }}</td>
                                                                            <td>{{ $task->due_date }}</td>
                                                                            <td>{{ $task->created_at }}</td>
                                                                        </tr>
                                                                        @endforeach
                                                                        
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
                                                <li>
                                                    <a data-toggle="tab" href="#tab_4-4">
                                                        <i class="fa fa-eye"></i>   إضافة مهمة جديدة   </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div id="tab_1-1" class="tab-pane active">
                                                    <form role="form" action="{{ route('admin.profile.update', $admin->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT') 
                                                        <div class="form-group">
                                                            <label class="control-label">الاسم الكامل</label>
                                                            <input type="text" name="name" value="{{ $admin->name }}" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">البريد الإلكتروني</label>
                                                            <input type="email" name="email" value="{{ $admin->email }}" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">التخصص</label>
                                                            <input type="text" name="specialization" value="{{ $admin->specialization }}" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">رقم الجوال</label>
                                                            <input type="text" name="phone_number" value="{{ $admin->phone_number }}" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">الدولة</label>
                                                            <input type="text" name="country" value="{{ $admin->country }}" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">العنوان</label>
                                                            <input type="text" name="address" value="{{ $admin->address }}" class="form-control" />
                                                        </div>
                                                      
                                                        <div class="margin-top-10">
                                                           
                                                            <button type="submit" class="btn green">حفظ التغيرات</button>
                                                            <a  class="btn default">إلغاء</a>
                                                        </div>
                                                    </form>
                                                    
                                                    
                                                </div>
                                                <div id="tab_2-2" class="tab-pane">
                                                    <p> 
                                                        (JPEG أو PNG) يمكنك تحديث صورتك الشخصية هنا. يُرجى تحميل صورة ذات جودة عالية وبتنسيق مناسب 
                                                        </p>
                                                <form action="{{ route('admin.profile.updateImage', $admin->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="{{ $admin->profile_image ? asset('storage/' . $admin->profile_image) : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image' }}" alt="" />
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> تحديد صورة </span>
                                                                    <span class="fileinput-exists"> تغير الصورة </span>
                                                                    <input type="file" name="profile_image"> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> ازالة الصورة </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger"> NOTE! </span>
                                                            <span>إذا واجهت أي مشكلة أثناء تحميل الصورة، يُرجى التأكد من أن حجم الملف وصيغته يتوافقان مع التعليمات أعلاه </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <button type="submit" class="btn green">حفظ</button>
                                                        <a href="javascript:;" class="btn default">إلغاء</a>
                                                    </div>
                                                </form>
                                            </div>
                                                
                                            <div id="tab_3-3" class="tab-pane">
                                                
                                                    <form action="{{ route('admin.password.update') }}" method="POST">
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
                                                    <form action="{{ route('admin.tasks.store') }}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>عنوان المهمة</label>
                                                            <input type="text" name="title" class="form-control" required>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label>وصف المهمة</label>
                                                            <textarea name="description" class="form-control"></textarea>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label>تاريخ الانتهاء</label>
                                                            <input type="date" name="due_date" class="form-control">
                                                        </div>
                                                    
                                                        <button type="submit" class="btn btn-primary">إضافة المهمة</button>
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