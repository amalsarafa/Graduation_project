@extends('layout.app')
@section('title', 'تسجيل دخول')
@section('content')
<form class="login-form" action="{{ route('login') }}" method="POST">
    @csrf
    <h3 class="form-title font-green">تسجيل الدخول </h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> ادخل الاسم و كلمة المرور  </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9" > البريد الالكتروني </label>
        <input class="form-control form-control-solid placeholder-no-fix"  autocomplete="off" placeholder="البريد الالكتروني" name="email" required  /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">كلمة المرور </label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="password" required /> </div>
    <div class="form-actions">
        <button type="submit" class="btn green uppercase">تسجيل الدخول  </button>
       <label class="rememberme check">
            <input type="checkbox" name="remember" value="1" />تذكرني  </label>
            <a href="{{ route('password.request') }}" class="forget-password">هل نسيت كلمة المرور؟</a>
    </div>
    <div class="login-options">
        <h4>او تسجيل الدخول باستخدام</h4>
        <ul class="social-icons">
            <li>
                <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
            </li>
            <li>
                <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
            </li>
            <li>
                <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
            </li>
            <li>
                <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
            </li>
        </ul>
    </div>
    <div class="create-account">
        <a href="javascript:;" id="register-btn2" class="uppercase ">انضم الان</a>
        <span>ليس لديك حساب على عافيتي وصحتي  ؟ </span> 

         
            <br>
           <a href="javascript:;" id="register-btn" class="uppercase "> تسجيل طبيب جديد  </a>
           <span>هل انت طبيب ؟ </span>  
    </div>
</form>
<!-- END LOGIN FORM -->

@endsection