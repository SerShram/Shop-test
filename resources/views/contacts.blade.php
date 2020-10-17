@php
    $links = config('mock.links');
    $cards = config('mock.catalog');
    $filter = config('mock.product-filter')
@endphp

@extends('layouts.app')

@section('title-block') Contacts @endsection
@section('content')
    <h1>Contacts</h1>
@endsection
