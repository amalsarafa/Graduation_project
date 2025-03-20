@extends('layout.admin')
@section('title','قسم المرضى')

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
                        <h4 class="modal-title"> إضافة مريض جديد  </h4>
                    </div>
                    
                    <div class="modal-body">
                        <form action="{{ route('admin.patients.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal sttu_form">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-3 pull-right">
                                    <label for="name" class="control-label">اسم المريض</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" required placeholder="اسم المريض">
                                </div>
                            </div>
                        
                            <div class="row mb-2">
                                <div class="col-md-3 pull-right">
                                    <label for="id_number" class="control-label">رقم الهوية</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="id_number" required placeholder="رقم الهوية">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-3 pull-right">
                                    <label for="phone_number" class="control-label">رقم الجوال</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="phone_number" required placeholder="رقم الجوال">
                                </div>
                            </div>
                        
                            <div class="row mb-2">
                                <div class="col-md-3 pull-right">
                                    <label for="email" class="control-label">البريد الإلكتروني</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" required placeholder="البريد الإلكتروني">
                                </div>
                            </div>
                        
                            
                        
                            <div class="row mb-2">
                                <div class="col-md-3 pull-right">
                                    <label for="birth_date" class="control-label">تاريخ الميلاد</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" name="birth_date" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3 pull-right">
                                    <label for="gender" class="control-label">الجنس</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="gender" required>
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
                                    <label for="password" class="control-label">كلمة المرور</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" required placeholder="كلمة المرور">
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-md-3 pull-right">
                                    <label for="profile_image" class="control-label">الصورة الشخصية</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="profile_image">
                                </div>
                            </div>
                    
                            <div class="modal-footer">
                                <button type="reset" class="btn dark btn-outline" data-dismiss="modal">إلغاء</button>
                                <button class="btn green" type="submit">إرسال الآن</button>
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
                                <a href="{{ route('admin.patients') }}">قسم المرضى</a>
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
                        <div class="col-md-6"style= "width: 100%;">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-wheelchair"></i>إدارة المرضى </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button id="" class="btn green dt-buttons " data-toggle="modal" data-target="#new_doctor"> 
                                                        <i class="fa fa-plus"></i>
                                                        إضافة مريض جديد 
                                                     
                                                    </button>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                 
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="all">اسم المريض</th>
                                                <th class="min-phone-l">رقم الهاتف </th>
                                                <th class="min-tablet">البريد الالكتروني </th>
                                                <th class="none"> رقم الهوية</th>
                                                <th class="none">السجل الطبي </th>
                                                <th class="desktop"> رقم الجوال</th>
                                                <th class="all">الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($patients as $patient)
                                       <tr>
                                       <td>{{ $patient->user->name }}</td>
                                      <td>{{ $patient->user->phone_number }}</td>
                                      <td>{{ $patient->user->email }}</td>
                                      <td> {{ $patient->id_number }}</td>
                                      <td>{{ $patient->chronic_diseases_history ?? 'لا يوجد' }}</td>
                                      
                                        
                                            <td>{{ $patient->user->phone_number }}</td>
                                      <td>
                                                  
                                        <!-- زر الحذف -->
        <button type="button" class="btn btn-icon btn-danger btn-circle mr-2" onclick="openDeleteModal({{ $patient->id }})">
        
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                <path d="M 21 0 C 19.354545 0 18 1.3545455 18 3 L 18 5 L 10.15625 5 A 1.0001 1.0001 0 0 0 9.8378906 5 L 8 5 A 1.0001 1.0001 0 1 0 8 7 L 9.0859375 7 L 12.705078 47.5 L 12.707031 47.509766 C 12.857262 48.862232 13.981872 50 15.400391 50 L 34.599609 50 C 36.018128 50 37.142691 48.862266 37.292969 47.509766 L 37.294922 47.5 L 40.914062 7 L 42 7 A 1.0001 1.0001 0 1 0 42 5 L 40.173828 5 A 1.0001 1.0001 0 0 0 39.841797 5 L 32 5 L 32 3 C 32 1.3545455 30.645455 0 29 0 L 21 0 z M 21 2 L 29 2 C 29.554545 2 30 2.4454545 30 3 L 30 5 L 20 5 L 20 3 C 20 2.4454545 20.445455 2 21 2 z M 11.09375 7 L 18.832031 7 A 1.0001 1.0001 0 0 0 19.158203 7 L 30.832031 7 A 1.0001 1.0001 0 0 0 31.158203 7 L 38.90625 7 L 35.306641 47.289062 C 35.256918 47.736563 34.981091 48 34.599609 48 L 15.400391 48 C 15.018909 48 14.743082 47.736563 14.693359 47.289062 L 11.09375 7 z M 18.984375 9.9863281 A 1.0001 1.0001 0 0 0 18 11 L 18 44 A 1.0001 1.0001 0 1 0 20 44 L 20 11 A 1.0001 1.0001 0 0 0 18.984375 9.9863281 z M 24.984375 9.9863281 A 1.0001 1.0001 0 0 0 24 11 L 24 44 A 1.0001 1.0001 0 1 0 26 44 L 26 11 A 1.0001 1.0001 0 0 0 24.984375 9.9863281 z M 30.984375 9.9863281 A 1.0001 1.0001 0 0 0 30 11 L 30 44 A 1.0001 1.0001 0 1 0 32 44 L 32 11 A 1.0001 1.0001 0 0 0 30.984375 9.9863281 z"></path>
            </svg>
        </button>
        <!-- نافذة تأكيد الحذف -->
        <div id="customDeleteModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 9999; justify-content: center; align-items: center;">
            <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; width: 300px;">
                <h4>تأكيد الحذف</h4>
                <p>هل أنت متأكد من حذف هذا المريض؟</p>
                <button onclick="closeDeleteModal()" style="background: gray; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-right: 10px;">إلغاء</button>
                <form id="deleteDoctorForm" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: red; color: white; padding: 10px 20px; border: none; border-radius: 5px;">حذف</button>
                </form>
            </div>
        </div>
        
        <script>
            function openDeleteModal(patientId) {
                document.getElementById('customDeleteModal').style.display = 'flex';
                let form = document.getElementById('deleteDoctorForm');
                form.action = `/admin/patients/${patientId}`; 
            }
        
            function closeDeleteModal() {
                document.getElementById('customDeleteModal').style.display = 'none';
            }
          </script>
        
                                           </td>
                                      
                                      
                                      
                                     
                             </tr>
                                @endforeach          
                                        </tbody>
                                    </table>
                                    {{ $patients->links() }}
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