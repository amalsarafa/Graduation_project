@extends('layout.website')
@section('title','نتائج البحث  ')
@section('content')
<div class="container mt-5">
    <h2>نتائج البحث عن: "{{ $query }}"</h2>

    {{-- نتائج البحث في الخدمات --}}
    @if($services->count() > 0)
        <h3 class="mt-4">الخدمات:</h3>
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">
                    <strong>{{ $service->name }}</strong> - {{ $service->description }}
                </li>
            @endforeach
        </ul>
    @endif

    {{-- نتائج البحث في الأطباء --}}
    @if($doctors->count() > 0)
        <h3 class="mt-4">الأطباء:</h3>
        <ul class="list-group">
            @foreach ($doctors as $doctor)
                <li class="list-group-item">
                    <strong>{{ $doctor->name }}</strong> - {{ $doctor->specialization }}
                </li>
            @endforeach
        </ul>
    @endif

    {{-- نتائج البحث في المرضى --}}
    @if($patients->count() > 0)
        <h3 class="mt-4">المرضى:</h3>
        <ul class="list-group">
            @foreach ($patients as $patient)
                <li class="list-group-item">
                    <strong>{{ $patient->name }}</strong>
                </li>
            @endforeach
        </ul>
    @endif

    @if($services->count() == 0 && $doctors->count() == 0 && $patients->count() == 0)
        <p class="mt-3">لم يتم العثور على نتائج.</p>
    @endif
</div>
@endsection
