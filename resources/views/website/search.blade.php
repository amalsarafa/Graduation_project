@extends('layout.website')
@section('title','نتائج البحث  ')
@section('content')
<div class="container mt-5">
    <h2>نتائج البحث عن: "{{ $query }}"</h2>

    @if(count($results) > 0)
        <ul>
            @foreach($results as $result)
                <li>
                    <a href="{{ route('website.services', ['slug' => $result]) }}">{{ $result }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>لم يتم العثور على نتائج.</p>
    @endif
</div>
@endsection
