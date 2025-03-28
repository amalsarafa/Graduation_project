@extends('layout.admin')
@section('title','قسم الأطباء')

@section('head_page level plugins')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
 <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('PAGE LEVEL STYLES ')
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
@section('button')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-reversed page-md">
        <div id="new_doctor" class="modal fade" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">إضافة طبيب جديد  </h4>
                    </div>
                    
                    <div class="modal-body">
                    <form action="{{ route('admin.doctors.store') }}" method="POST" class="form-horizontal sttu_form" enctype="multipart/form-data">
    @csrf

    <!-- المعلومات الشخصية -->
    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">اسم الطبيب</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="name" class="form-control" placeholder="اسم الطبيب" required>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">رقم الجوال</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="phone_number" class="form-control" placeholder="رقم الجوال" required>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">البريد الإلكتروني</label>
        </div>
        <div class="col-md-8">
            <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" required>
        </div>
    </div>
    <div class="row mb-2">
    <div class="col-md-3 pull-right">
        <label class="control-label">تاريخ الميلاد</label>
    </div>
    <div class="col-md-8">
        <input type="date" name="birth_date" class="form-control" required>
    </div>
</div>


   
    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">الجنس</label>
        </div>
        <div class="col-md-8">
            <select name="gender" class="form-control">
                <option value="" disabled selected>اختر الجنس</option>
                <option value="male">ذكر</option>
                <option value="female">أنثى</option>
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">الدولة</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="country" class="form-control" placeholder="الدولة">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">العنوان</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="address" class="form-control" placeholder="العنوان">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">صورة الملف الشخصي</label>
        </div>
        <div class="col-md-8">
            <input type="file" name="profile_image" class="form-control">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">كلمة المرور</label>
        </div>
        <div class="col-md-8">
            <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required>
        </div>
    </div>

    <!-- تفاصيل الطبيب -->
    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">التخصص الطبي</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="specialization" class="form-control" placeholder="التخصص الطبي">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">رقم الرخصة الطبية</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="license_number" class="form-control" placeholder="رقم الرخصة الطبية" required>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">المؤهلات الأكاديمية</label>
        </div>
        <div class="col-md-8">
            <textarea name="academic_qualifications" class="form-control" placeholder="المؤهلات الأكاديمية"></textarea>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">سنوات الخبرة</label>
        </div>
        <div class="col-md-8">
            <input type="number" name="years_experience" class="form-control" min="0" placeholder="سنوات الخبرة">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">الدورات التدريبية</label>
        </div>
        <div class="col-md-8">
            <textarea name="training_courses" class="form-control" placeholder="الدورات التدريبية"></textarea>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">الشهادات المهنية</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="professional_certificate" class="form-control" placeholder="الشهادات المهنية">
        </div>
    </div>

    <!-- أزرار التحكم -->
    <div class="modal-footer">
        <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء</button>
        <button class="btn green" type="submit">إضافة طبيب  </button>
    </div>
</form>

                    </div>
                    
                </div>
            </div>
        </div>
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
                                <a href="{{ route('admin.dashboard') }}">الصفحة الرئيسية </a>
                                <i class="fa fa-angle-left"></i>
                               
                            </li>
                            <li>
                                <a href="{{ route('admin.doctors') }}">قسم الاطباء </a>
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
                                        <i class="fa fa-user-md"></i>إدارة الاطباء </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button id="" class="btn green dt-buttons " data-toggle="modal" data-target="#new_doctor"> 
                                                        <i class="fa fa-plus"></i>
                                                        إضافة جديد 
                                                     
                                                    </button>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                               <th ># </th>
                                                <th class="all">اسم الطبيب </th>
                                                <th class="min-phone-l">رقم الهاتف </th>
                                                <th class="min-tablet">البريد الالكتروني </th>
                                                <th class="all">الإجراءات</th>
                                                <th class="none">العنوان</th>
                                                <th class="none">التخصص الطبي </th>
                                                <th class="none">عدد سنوات الخبرة</th>
                                                <th class="none">عدد المرضى الذين يتعامل معهم الطبيب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($doctors as $doctor)
                                            <tr>
                                                <td>{{$loop->iteration}} </td>
                                                <td>{{$doctor->user->name}} </td>
                                                <td>{{$doctor->user->phone_number}}</td>
                                                <td>{{$doctor->user->email}}</td>
                                                <td>
                                                  
                                <!-- زر الحذف -->
<button type="button" class="btn btn-icon btn-danger btn-circle mr-2" onclick="openDeleteModal({{ $doctor->id }})">

    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
        <path d="M 21 0 C 19.354545 0 18 1.3545455 18 3 L 18 5 L 10.15625 5 A 1.0001 1.0001 0 0 0 9.8378906 5 L 8 5 A 1.0001 1.0001 0 1 0 8 7 L 9.0859375 7 L 12.705078 47.5 L 12.707031 47.509766 C 12.857262 48.862232 13.981872 50 15.400391 50 L 34.599609 50 C 36.018128 50 37.142691 48.862266 37.292969 47.509766 L 37.294922 47.5 L 40.914062 7 L 42 7 A 1.0001 1.0001 0 1 0 42 5 L 40.173828 5 A 1.0001 1.0001 0 0 0 39.841797 5 L 32 5 L 32 3 C 32 1.3545455 30.645455 0 29 0 L 21 0 z M 21 2 L 29 2 C 29.554545 2 30 2.4454545 30 3 L 30 5 L 20 5 L 20 3 C 20 2.4454545 20.445455 2 21 2 z M 11.09375 7 L 18.832031 7 A 1.0001 1.0001 0 0 0 19.158203 7 L 30.832031 7 A 1.0001 1.0001 0 0 0 31.158203 7 L 38.90625 7 L 35.306641 47.289062 C 35.256918 47.736563 34.981091 48 34.599609 48 L 15.400391 48 C 15.018909 48 14.743082 47.736563 14.693359 47.289062 L 11.09375 7 z M 18.984375 9.9863281 A 1.0001 1.0001 0 0 0 18 11 L 18 44 A 1.0001 1.0001 0 1 0 20 44 L 20 11 A 1.0001 1.0001 0 0 0 18.984375 9.9863281 z M 24.984375 9.9863281 A 1.0001 1.0001 0 0 0 24 11 L 24 44 A 1.0001 1.0001 0 1 0 26 44 L 26 11 A 1.0001 1.0001 0 0 0 24.984375 9.9863281 z M 30.984375 9.9863281 A 1.0001 1.0001 0 0 0 30 11 L 30 44 A 1.0001 1.0001 0 1 0 32 44 L 32 11 A 1.0001 1.0001 0 0 0 30.984375 9.9863281 z"></path>
    </svg>
</button>
<!-- نافذة تأكيد الحذف -->
<div id="customDeleteModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 9999; justify-content: center; align-items: center;">
    <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; width: 300px;">
        <h4>تأكيد الحذف</h4>
        <p>هل أنت متأكد من حذف هذا الطبيب؟</p>
        <button onclick="closeDeleteModal()" style="background: gray; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-right: 10px;">إلغاء</button>
        <form id="deleteDoctorForm" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="background: red; color: white; padding: 10px 20px; border: none; border-radius: 5px;">حذف</button>
        </form>
    </div>
</div>

<script>
    function openDeleteModal(doctorId) {
        document.getElementById('customDeleteModal').style.display = 'flex';
        let form = document.getElementById('deleteDoctorForm');
        form.action = `/admin/doctors/${doctorId}`; 
    }

    function closeDeleteModal() {
        document.getElementById('customDeleteModal').style.display = 'none';
    }
  </script>

                                   </td>
                                                <td>{{$doctor->user->address}}</td>
                                                <td>{{$doctor->specialization}} </td>
                                                <td>{{$doctor->years_experience}}</td>
                                                <td>{{ $doctor->uniquePatients() }}</td>
                                            </tr>
                                            @endforeach          
                                        </tbody>
                                    </table>
                                    {{ $doctors->links() }}
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