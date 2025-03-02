<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> تسجيل مستخدم جديد </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
      
        <link rel="stylesheet" href="{{asset('assets/global/rtl/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/global/rtl/bootstrap.min.css')}}">
        
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset('assets/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/pages/css/login.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('assets/pages/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('assets/layouts/layout2/css/custom.css')}}">
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link href="{{asset('assets/pages/img/favicon_new.ico')}}" rel="icon"> </head>
    <!-- END HEAD -->

    <body class=" login">
        <div class="menu-toggler sidebar-toggler"></div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="#.html">
                <img src="{{asset('assets/pages/img/login/MHW CARE (2).png')}}')}}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="#.html" method="post">
            
                <form class="register-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data" dir="rtl">
                    @csrf
                
                    <h3 class="font-green text-right">تسجيل مستخدم جديد</h3>
                    <p class="hint ">ادخل تفاصيلك الشخصية أدناه:</p>
                
                    <!-- الاسم الكامل -->
                    <div class="form-group">
                        <label class="control-label">الاسم الكامل</label>
                        <input class="form-control @error('name') is-invalid @enderror" 
                               type="text" name="name" placeholder="الاسم الكامل" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- البريد الإلكتروني -->
                    <div class="form-group">
                        <label class="control-label text-right">البريد الإلكتروني</label>
                        <input class="form-control @error('email') is-invalid @enderror" 
                               type="email" name="email" placeholder="البريد الإلكتروني" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- رقم الهوية -->
                    <div class="form-group">
                        <label class="control-label text-right">رقم الهوية</label>
                        <input class="form-control @error('id_number') is-invalid @enderror" 
                               type="text" name="id_number" placeholder="رقم الهوية" value="{{ old('id_number') }}">
                        @error('id_number')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- تاريخ الميلاد -->
                    <div class="form-group">
                        <label class="control-label text-right">تاريخ الميلاد</label>
                        <input class="form-control @error('birth_date') is-invalid @enderror" 
                               type="date" name="birth_date" value="{{ old('birth_date') }}">
                        @error('birth_date')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- الجنس -->
                    <div class="form-group">
                        <label class="control-label text-right">الجنس</label>
                        <select name="gender" class="form-control">
                            <option value="">اختر الجنس</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>ذكر</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>أنثى</option>
                        </select>
                        @error('gender')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- الدولة -->
                    <div class="form-group">
                        <label class="control-label text-right">الدولة</label>
                        <input class="form-control @error('country') is-invalid @enderror" 
                               type="text" name="country" placeholder="الدولة" value="{{ old('country') }}">
                        @error('country')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- العنوان -->
                    <div class="form-group">
                        <label class="control-label text-right">العنوان</label>
                        <input class="form-control @error('address') is-invalid @enderror" 
                               type="text" name="address" placeholder="العنوان" value="{{ old('address') }}">
                        @error('address')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- رقم الجوال -->
                    <div class="form-group">
                        <label class="control-label text-right">رقم الجوال</label>
                        <input class="form-control @error('phone_number') is-invalid @enderror" 
                               type="text" name="phone_number" placeholder="رقم الجوال" value="{{ old('phone_number') }}" required>
                        @error('phone_number')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- كلمة المرور -->
                    <div class="form-group">
                        <label class="control-label text-right">كلمة المرور</label>
                        <input class="form-control @error('password') is-invalid @enderror" 
                               type="password" name="password" placeholder="كلمة المرور" required>
                        @error('password')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- تأكيد كلمة المرور -->
                    <div class="form-group">
                        <label class="control-label text-right">تأكيد كلمة المرور</label>
                        <input class="form-control" type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
                    </div>
                
                    <!-- التاريخ المرضي -->
                    <div class="form-group">
                        <label class="control-label text-right">التاريخ المرضي</label>
                        <textarea class="form-control @error('chronic_diseases_history') is-invalid @enderror" 
                                  name="chronic_diseases_history" placeholder="أدخل تفاصيل الأمراض المزمنة">{{ old('chronic_diseases_history') }}</textarea>
                        @error('chronic_diseases_history')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- صورة شخصية -->
                    <div class="form-group">
                        <label class="control-label text-right">صورة شخصية</label>
                        <input class="form-control-file @error('profile_image') is-invalid @enderror" 
                               type="file" name="profile_image" accept="image/*">
                        @error('profile_image')
                            <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <!-- زر التسجيل -->
                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-success">إرسال</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('login') }}';">إلغاء</button>
                        </div>
                    </div>
                </form>
                
            </form>
            
        </div>
    
        <div class="copyright"> </div>
        <!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/rtl/bootstrap.min.js')}}"></script> 
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         
       <script src="{{asset('assets/pages/scripts/form-validation.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->






   </body>

</html>