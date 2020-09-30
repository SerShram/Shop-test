@extends('layouts.app')

@section('title-block') catalog @endsection
@section('content')
    @include('inc.header-cap')
    @include('inc.header-mane')
    @include('inc.header-bottom')
    <h1>Catalog</h1>
    @include('inc.footer')
@endsection
