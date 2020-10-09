@extends('layouts.app')

@section('title-block') Product @endsection
@section('content')
    @include('inc.header-cap')
    @include('inc.header-mane')
    @include('inc.header-bottom')
    @include('inc.main-product', config('mock.product'))
    @include('inc.footer')
@endsection
@push('my-scripts')
    <script src="/js/product-script.js"></script>
@endpush
