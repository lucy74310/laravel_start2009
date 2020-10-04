@extends('layouts.master')

@section('content')
    <p>저는 자식 뷰의 'content' 섹션 입니다.</p>
    @include('partials.footer')
@endsection


@section('style')
    p { color : blue; }
@endsection

@section('script')
    alert('저는 자식 뷰의 \'script\' 섹션 입니다.');
@endsection
