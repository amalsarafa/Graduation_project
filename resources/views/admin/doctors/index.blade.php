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
                                <a href="{{ route('admin.doctors') }}">قسم الاطباء </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-left"></i>
                             
                                <a href="{{ route('admin.dashboard') }}">الصفحة الرئيسية </a>
                                <i class="icon-home"></i>
                               
                            </li>
                            
                           
                        </ul>
                        
                    </div>
                    <!-- END PAGE HEADER-->
                
                   
                    <div class="row">
                        <div class="col-md-6"style= "width: 100%;">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-user-md"></i>ادارة الاطباء </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="all">اسم الطبيب </th>
                                                <th class="min-phone-l">رقم الهاتف </th>
                                                <th class="min-tablet">البريد الالكتروني </th>
                                                <th class="none">التخصص الطبي </th>
                                                <th class="none">العنوان</th>
                                                <th class="none">تاريخ الانضمام</th>
                                                <th class="desktop">الحالة </th>
                                                <th class="none">عدد المرضى الذين يتعامل معهم الطبيب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>د. خالد جبر</td>
                                                <td>0592345678</td>
                                                <td>khaled.jabir@example.com</td>
                                                <td>علاج طبيعي</td>
                                                <td>خان يونس</td>
                                                <td>2020/03/12</td>
                                                <td>نشط</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>د. سمية العطار</td>
                                                <td>0593456789</td>
                                                <td>sumaya.attar@example.com</td>
                                                <td>علاج طبيعي</td>
                                                <td>رفح</td>
                                                <td>2022/08/08</td>
                                                <td>غير نشط</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>د. أحمد قاسم</td>
                                                <td>0594567890</td>
                                                <td>ahmed.qasem@example.com</td>
                                                <td>تمريض</td>
                                                <td>غزة</td>
                                                <td>2021/01/10</td>
                                                <td>نشط</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>د. رولا صيام</td>
                                                <td>0595678901</td>
                                                <td>rula.sayam@example.com</td>
                                                <td>تمريض</td>
                                                <td>خان يونس</td>
                                                <td>2019/06/30</td>
                                                <td>نشط</td>
                                                <td>60</td>
                                            </tr>
                                            <tr>
                                                <td>د. فهد النجار</td>
                                                <td>0596789012</td>
                                                <td>fahd.najjar@example.com</td>
                                                <td>تمريض</td>
                                                <td>رفح</td>
                                                <td>2022/02/19</td>
                                                <td>غير نشط</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>د. هالة جابر</td>
                                                <td>0597890123</td>
                                                <td>hala.jaber@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>غزة</td>
                                                <td>2021/04/05</td>
                                                <td>نشط</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>د. ياسر العواد</td>
                                                <td>0598901234</td>
                                                <td>yasser.alawad@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>خان يونس</td>
                                                <td>2020/11/18</td>
                                                <td>نشط</td>
                                                <td>80</td>
                                            </tr>
                                            <tr>
                                                <td>د. إيمان مصطفى</td>
                                                <td>0599012345</td>
                                                <td>iman.mustafa@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>رفح</td>
                                                <td>2019/09/10</td>
                                                <td>نشط</td>
                                                <td>75</td>
                                            </tr>
                                            <tr>
                                                <td>د. نادر المصري</td>
                                                <td>0590123456</td>
                                                <td>nader.masri@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>غزة</td>
                                                <td>2022/07/25</td>
                                                <td>غير نشط</td>
                                                <td>60</td>
                                            </tr>
                                            <tr>
                                                <td>د. مريم الشوا</td>
                                                <td>0591234567</td>
                                                <td>maryam.alshawa@example.com</td>
                                                <td>علاج طبيعي</td>
                                                <td>غزة</td>
                                                <td>2021/05/15</td>
                                                <td>نشط</td>
                                                <td>40</td>
                                            </tr>
                                            <tr>
                                                <td>د. خالد جبر</td>
                                                <td>0592345678</td>
                                                <td>khaled.jabir@example.com</td>
                                                <td>علاج طبيعي</td>
                                                <td>خان يونس</td>
                                                <td>2020/03/12</td>
                                                <td>نشط</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>د. سمية العطار</td>
                                                <td>0593456789</td>
                                                <td>sumaya.attar@example.com</td>
                                                <td>علاج طبيعي</td>
                                                <td>رفح</td>
                                                <td>2022/08/08</td>
                                                <td>غير نشط</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>د. أحمد قاسم</td>
                                                <td>0594567890</td>
                                                <td>ahmed.qasem@example.com</td>
                                                <td>تمريض</td>
                                                <td>غزة</td>
                                                <td>2021/01/10</td>
                                                <td>نشط</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>د. رولا صيام</td>
                                                <td>0595678901</td>
                                                <td>rula.sayam@example.com</td>
                                                <td>تمريض</td>
                                                <td>خان يونس</td>
                                                <td>2019/06/30</td>
                                                <td>نشط</td>
                                                <td>60</td>
                                            </tr>
                                            <tr>
                                                <td>د. فهد النجار</td>
                                                <td>0596789012</td>
                                                <td>fahd.najjar@example.com</td>
                                                <td>تمريض</td>
                                                <td>رفح</td>
                                                <td>2022/02/19</td>
                                                <td>غير نشط</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>د. هالة جابر</td>
                                                <td>0597890123</td>
                                                <td>hala.jaber@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>غزة</td>
                                                <td>2021/04/05</td>
                                                <td>نشط</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>د. ياسر العواد</td>
                                                <td>0598901234</td>
                                                <td>yasser.alawad@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>خان يونس</td>
                                                <td>2020/11/18</td>
                                                <td>نشط</td>
                                                <td>80</td>
                                            </tr>
                                            <tr>
                                                <td>د. إيمان مصطفى</td>
                                                <td>0599012345</td>
                                                <td>iman.mustafa@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>رفح</td>
                                                <td>2019/09/10</td>
                                                <td>نشط</td>
                                                <td>75</td>
                                            </tr>
                                            <tr>
                                                <td>د. نادر المصري</td>
                                                <td>0590123456</td>
                                                <td>nader.masri@example.com</td>
                                                <td>تحاليل طبية</td>
                                                <td>غزة</td>
                                                <td>2022/07/25</td>
                                                <td>غير نشط</td>
                                                <td>60</td>
                                            </tr>
                                                                                        
                                           
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
<script src="{{asset('assets/pages/scripts/table-datatables-responsive.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection