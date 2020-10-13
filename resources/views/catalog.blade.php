@extends('layouts.app')

@section('title-block') catalog @endsection
@section('content')
    @include('inc.header-cap')
    @include('inc.header-mane')
    @include('inc.header-bottom')
    @include('inc.main-catalog', config('mock.catalog'))
    @include('inc.footer')
@endsection

