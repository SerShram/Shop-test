@extends('layouts.app')

@section('title-block') catalog @endsection
@section('content')
    @include('inc.header-cap')
    @include('inc.header-mane')
    @include('inc.header-bottom')
    @include('inc.main-catalog', config('mock.catalog'), config('mock.product-filter'))
    @include('inc.footer')
@endsection

@push('scripts')
    <script src="/assets/nouislider/nouislider.js"></script>
@endpush
