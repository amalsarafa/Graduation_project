<!DOCTYPE html>
<html lang="Arabia">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> تسجيل دخول </title>
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
                <img src="{{asset('assets/pages/img/login/MHW CARE (2).png')}}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ route('login') }}" method="POST">
                @csrf
                <h3 class="form-title font-green">تسجيل الدخول</h3>
        
            
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                    <input class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                           type="email" name="email" placeholder="البريد الإلكتروني"
                           value="{{ old('email') }}" required />
            
                    @error('email')
                        <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                    <input class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                           type="password" name="password" placeholder="كلمة المرور" required />
            
                    @error('password')
                        <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">تسجيل الدخول</button>
                    <label class="rememberme check">
                        <input type="checkbox" name="remember" value="1" /> تذكرني
                    </label>
                    <a href="{{ route('password.request') }}" class="forget-password">هل نسيت كلمة المرور؟</a>
                </div>
            
                <div class="login-options">
                    <h4>أو تسجيل الدخول باستخدام</h4>
                    <ul class="social-icons">
                        <li><a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a></li>
                        <li><a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a></li>
                        <li><a class="social-icon-color googleplus" data-original-title="Google Plus" href="javascript:;"></a></li>
                        <li><a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a></li>
                    </ul>
                </div>
            
                <div class="create-account">
                    <a href="{{ route('register') }}" class="uppercase">انضم الآن</a>
                    <span>ليس لديك حساب على عافيتي وصحتي؟</span>

                </div>
            </form>
            
            

        </div>
    
        <div class="copyright"> </div>
        <!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min..js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min..js')}}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap/.js')}}/bootstrap.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/.js')}}.cookie.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.blockui.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-switch/.js')}}/bootstrap-switch.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/rtl/bootstrap.min..js')}}"></script> 
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery-validation/.js')}}/jquery.validate.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-validation/.js')}}/additional-methods.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/select2/.js')}}/select2.full.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/select2/.js')}}/select2.full.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datepicker/.js')}}/bootstrap-datepicker.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/ckeditor/ckeditor..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-markdown/.js')}}/bootstrap-markdown..js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('assets/global/scripts/app.min..js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         
       <script src="{{asset('assets/pages/scripts/form-validation.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-datepicker/.js')}}/bootstrap-datepicker.min..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown..js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/pages/scripts/login.min..js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->






   </body>

</html>