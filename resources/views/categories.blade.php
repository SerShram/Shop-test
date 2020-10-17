@php
    $links = config('mock.links');
    $categories = config('mock.categories');
@endphp

@extends('layouts.app')

@section('title-block') Categories @endsection
@section('content')
    <div class="wrapper">
        {{ Breadcrumbs::render('categories') }}
        @include('inc.components.categories')
    </div>
@endsection
@push('my-scripts')
{{--    <script src="/js/home-script.js"></script>--}}
@endpush
