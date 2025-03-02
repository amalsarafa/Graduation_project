@extends('layout.website')
@section('title','خدمة رعاية الأطفال في المنزل')
@section('Navbar')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('website.home')}}" class="navbar-brand p-0">
                <h1 class="m-0">MHW Care<i class="fa fa-user-tie me-2"></i></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('website.home')}}" class="nav-item nav-link">الرئيسية</a>
                    <a href="{{route('website.services')}}" class="nav-item nav-link active">الخدمات</a>
                    <a href="{{route('website.contact')}}" class="nav-item nav-link">اتصل بنا</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated slideInDown">  رعاية الأطفال في المنزل</h1>
                <a href="{{route('website.home')}}" class="h5 text-white">الرئيسية</a>
                <i class="fa fa-angle-double-left text-white px-2"></i>
                <a href="{{route('website.services')}}" class="h5 text-white">الخدمات</a>
            </div>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')

     <!-- Service Detail Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="mb-4">رعاية الأطفال في المنزل</h2>
                <p>في <strong>MHW Care</strong>، نقدم خدمات رعاية مخصصة للأطفال في منازلهم، تشمل تقديم الرعاية الصحية ومتابعة الحالات الطبية للأطفال المرضى وحديثي الولادة. تهدف هذه الخدمة إلى ضمان راحة الطفل والأسرة.</p>
                <h4 class="mt-4">الخدمات المقدمة:</h4>
                <ul>
                    <li>رعاية صحية للأطفال المرضى في المنزل</li>
                    <li>متابعة الحالات الطبية للأطفال حديثي الولادة</li>
                    <li>تقديم التطعيمات والمتابعة الروتينية</li>
                    <li>تقديم التثقيف الصحي للأهالي</li>
                </ul>
                <h4 class="mt-4">الفوائد:</h4>
                <p>تساعد هذه الخدمة في تقديم الرعاية الصحية للطفل في بيئته المنزلية المريحة، مما يقلل من التوتر ويساهم في تسريع الشفاء.</p>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded p-4">
                    <h4 class="mb-4">معلومات التواصل</h4>
                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>غزة، فلسطين</p>
                    <p><i class="fa fa-phone-alt text-primary me-2"></i>+970 59 123 4567</p>
                    <p><i class="fa fa-envelope text-primary me-2"></i>info@mhwcare.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Detail End -->
@endsection