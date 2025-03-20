@extends('layout.admin')
@section('title',' قسم الخدمات ')

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
                        <h4 class="modal-title">اضافة خدمة جديدة  </h4>
                    </div>
                    
                    <div class="modal-body">
   <form action="{{ route('admin.services.store') }}" method="POST" class="form-horizontal sttu_form">
    @csrf
    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">اسم الخدمة</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="name" class="form-control" placeholder="الخدمة" required>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">وصف الخدمة</label>
        </div>
        <div class="col-md-8">
            <textarea name="description" class="form-control" placeholder="وصف عن الخدمة"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3 pull-right">
            <label class="control-label">سعر الخدمة</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="price" class="form-control" placeholder=" السعر بالشيكل " step="0.01" min="0" required>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-3 pull-right">
            <label class="control-label">التخصص الطبي</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="medical_specialization" class="form-control" placeholder="أدخل التخصص الطبي" required>
        </div>
    </div>

    <div class="row mb-2">
    <div class="col-md-3 pull-right">
        <label class="control-label">اختر الطبيب</label>
    </div>
    <div class="col-md-8">
        <select name="doctor_id" class="form-control" required>
            <option value="" disabled selected>اختر الطبيب المسؤول</option>
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->user->name}}</option>
            @endforeach
        </select>
    </div>
</div>


    <div class="modal-footer">
        <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء</button>
        <button class="btn green" type="submit">إضافة خدمة</button>
    </div>
</form>

                    </div>
                    
                </div>
            </div>
        </div>
@endsection

@section('content')
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
                        
                        <li>
                                    
                            <i class="icon-home"></i>
                            <a href="{{ route('admin.dashboard') }}">الصفحة الرئيسية </a>
                            <i class="fa fa-angle-left"></i>
                           
                        </li>
                        <li>
                            <a href="{{ route('admin.services') }}">إدارة الخدمات </a>
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
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-wheelchair"></i>إدارة الخدمات </div>
                        <div class="tools"> </div>
                    </div>
                    
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button id="" class="btn green " data-toggle="modal" data-target="#new_doctor"> 
                                            <i class="fa fa-plus"></i>
                                            اضافة جديد 
                                        </button>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                                <th>#</th>
                                                <th> اسم الخدمة  </th>
                                                <th> التخصص الطبي  </th>
                                                <th> وصف الخدمة  </th>
                                                <th> السعر (شيكل/ساعة) </th>
                                                <th> الطبيب المسؤول</th>
                                                <th> الإجراءات  </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services  as  $service)
                                <tr >   
                                    <td>{{$loop->iteration}} </td>
                                    <td> {{$service->name}} </td>
                                    <td> {{$service->medical_specialization}} </td>
                                    <td>{{$service->description}} </td>
                                    <td>{{$service->price}}</td>
                                    <td>{{$service->doctor->user->name}}</td>
                               <td>

                                <!-- زر التعديل -->
  
                                
                                <button class="btn btn-icon btn-primary btn-circle mr-2" style="display: inline; width: 30px; height: 30px; padding: 0;" onclick='openEditServiceModal({{ json_encode($service) }})'>
                               <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" style="display: inline;">
                                  <path d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                                      </svg>
                                 </button>
                                <!-- مودال تعديل الخدمة -->
                                <div id="edit_service_modal" class="modal fade" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h4 class="modal-title">تعديل الخدمة</h4>
</div>

<div class="modal-body">
<form id="editServiceForm" action="" method="POST" class="form-horizontal sttu_form">
@csrf
@method('PUT')
<div class="row mb-2">
<div class="col-md-3 pull-right">
  <label class="control-label">اسم الخدمة</label>
</div>
<div class="col-md-8">
  <input type="text" name="name" id="editServiceName" class="form-control" placeholder="الخدمة" required>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 pull-right">
  <label class="control-label">وصف الخدمة</label>
</div>
<div class="col-md-8">
  <textarea name="description" id="editServiceDescription" class="form-control" placeholder="وصف عن الخدمة"></textarea>
</div>
</div>

<div class="row mb-3">
<div class="col-md-3 pull-right">
  <label class="control-label">سعر الخدمة</label>
</div>
<div class="col-md-8">
  <input type="text" name="price" id="editServicePrice" class="form-control" placeholder="السعر بالشيكل" step="0.01" min="0" required>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 pull-right">
  <label class="control-label">التخصص الطبي</label>
</div>
<div class="col-md-8">
  <input type="text" name="medical_specialization" id="editServiceMedicalSpecialization" class="form-control" placeholder="أدخل التخصص الطبي" required>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 pull-right">
  <label class="control-label">اختر الطبيب</label>
</div>
<div class="col-md-8">
  <select name="doctor_id" id="editServiceDoctorId" class="form-control" required>
    <option value="" disabled selected>اختر الطبيب المسؤول</option>
    @foreach($doctors as $doctor)
      <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
    @endforeach
  </select>
</div>
</div>

<div class="row mb-2">
<div class="col-md-3 pull-right">
  <label class="control-label">حالة الخدمة</label>
</div>
<div class="col-md-8">
  <select name="status" id="editServiceStatus" class="form-control" required>
    <option value="pending">قيد الانتظار</option>
    <option value="approved">معتمدة</option>
    <option value="rejected">مرفوضة</option>
  </select>
</div>
</div>

<div class="modal-footer">
<button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء</button>
<button class="btn green" type="submit">حفظ التعديلات</button>
</div>
</form>
</div>

</div>
</div>
</div>
<script>
function openEditServiceModal(service) {

document.getElementById('editServiceName').value = service.name;
document.getElementById('editServiceDescription').value = service.description;
document.getElementById('editServicePrice').value = service.price;
document.getElementById('editServiceMedicalSpecialization').value = service.medical_specialization;
document.getElementById('editServiceDoctorId').value = service.doctor_id;
document.getElementById('editServiceStatus').value = service.status;


document.getElementById('editServiceForm').action = '/admin/services/' + service.id;

$('#edit_service_modal').modal('show');
}
</script>



                                           <!-- زر الحذف -->
                                           <button type="button" class="btn btn-icon btn-danger btn-circle mr-2" style="display: inline; width: 30px; height: 30px; padding: 0;"onclick="openDeleteModal({{ $service->id }})">
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50">
                 <path d="M 21 0 C 19.354545 0 18 1.3545455 18 3 L 18 5 L 10.15625 5 A 1.0001 1.0001 0 0 0 9.8378906 5 L 8 5 A 1.0001 1.0001 0 1 0 8 7 L 9.0859375 7 L 12.705078 47.5 L 12.707031 47.509766 C 12.857262 48.862232 13.981872 50 15.400391 50 L 34.599609 50 C 36.018128 50 37.142691 48.862266 37.292969 47.509766 L 37.294922 47.5 L 40.914062 7 L 42 7 A 1.0001 1.0001 0 1 0 42 5 L 40.173828 5 A 1.0001 1.0001 0 0 0 39.841797 5 L 32 5 L 32 3 C 32 1.3545455 30.645455 0 29 0 L 21 0 z M 21 2 L 29 2 C 29.554545 2 30 2.4454545 30 3 L 30 5 L 20 5 L 20 3 C 20 2.4454545 20.445455 2 21 2 z M 11.09375 7 L 18.832031 7 A 1.0001 1.0001 0 0 0 19.158203 7 L 30.832031 7 A 1.0001 1.0001 0 0 0 31.158203 7 L 38.90625 7 L 35.306641 47.289062 C 35.256918 47.736563 34.981091 48 34.599609 48 L 15.400391 48 C 15.018909 48 14.743082 47.736563 14.693359 47.289062 L 11.09375 7 z M 18.984375 9.9863281 A 1.0001 1.0001 0 0 0 18 11 L 18 44 A 1.0001 1.0001 0 1 0 20 44 L 20 11 A 1.0001 1.0001 0 0 0 18.984375 9.9863281 z M 24.984375 9.9863281 A 1.0001 1.0001 0 0 0 24 11 L 24 44 A 1.0001 1.0001 0 1 0 26 44 L 26 11 A 1.0001 1.0001 0 0 0 24.984375 9.9863281 z M 30.984375 9.9863281 A 1.0001 1.0001 0 0 0 30 11 L 30 44 A 1.0001 1.0001 0 1 0 32 44 L 32 11 A 1.0001 1.0001 0 0 0 30.984375 9.9863281 z"></path>
                         </svg>
                      </button>


                  <!-- نافذة تأكيد الحذف -->
              <div id="customDeleteModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 9999; justify-content: center; align-items: center;">
              <div style="background: white; padding: 20px; border-radius: 10px; text-align: center; width: 300px;">
              <h4>تأكيد الحذف</h4>
              <p>هل أنت متأكد من حذف هذه الخدمة؟ </p>
               <button onclick="closeDeleteModal()" style="background: gray; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-right: 10px;">إلغاء</button>
                 <form id="deleteDoctorForm" method="POST" style="display:inline;">
               @csrf
              @method('DELETE')
         <button type="submit" style="background: red; color: white; padding: 10px 20px; border: none; border-radius: 5px;">حذف</button>
          </form>
      </div>
          </div>

<script>
function openDeleteModal(serviceId) {
document.getElementById('customDeleteModal').style.display = 'flex';
let form = document.getElementById('deleteDoctorForm');
form.action = `/admin/services/${serviceId}`; //   
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
                                 </div>
                                 {{ $services->links() }}
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