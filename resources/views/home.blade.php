@extends('layouts.app')

@section('title-block') Home @endsection
@section('content')
@include('inc.header-cap')
@include('inc.header-mane')
@include('inc.header-bottom')
@include('inc.mane-home')
@include('inc.footer')
@endsection
@push('my-scripts')
    <script src="/js/home-script.js"></script>
@endpush
