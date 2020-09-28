@extends('layouts.app')

@section('title-block') Home @endsection
@section('content')
@include('inc.header-cap')
@include('inc.header-mane')
@include('inc.header-bottom')
@include('inc.components.block-cards')
@include('inc.footer')
@endsection

