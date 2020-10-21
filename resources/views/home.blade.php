@php
$links = config('mock.links');
$cards = config('mock.cards');
@endphp

@extends('layouts.app')

@section('title-block') Home @endsection
@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-xxl-3">
                <ul class="submenu submenu--home">
                    @foreach($links as $link)
                        <li class="submenu__item">
                            <a href="{{ $link['href'] }}" class="submenu__link R16-bup C-6">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xxl-9 col-12">
                @include('inc.components.menu-option')
            </div>
        </div>
        @include('inc.components.block-cards')
    </div>
@endsection
