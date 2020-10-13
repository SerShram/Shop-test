@extends('layouts.app')

@section('title-block') Categories @endsection
@section('content')
    @include('inc.header-cap')
    @include('inc.header-mane')
    @include('inc.header-bottom')
    @include('inc.main-categories', config('mock.categories'))
    @include('inc.footer')
@endsection
@push('my-scripts')
{{--    <script src="/js/home-script.js"></script>--}}
@endpush
