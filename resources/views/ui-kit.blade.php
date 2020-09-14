@extends('layouts.app')

@section('title-block') uiKit @endsection
@section('content')
    <div class="wrapper">
        <h1>Basic elements</h1>
{{----------------- Паллитра-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Color Swatches</h3>
            <div class="demo-block__row">
               <div class="palette ss-bg-orange">
                   <div>#ff8900</div>
                   <div>orange</div>
               </div>
                <div class="palette ss-bg-dark-orange">
                    <div>#db7200</div>
                    <div>dark-orange</div>
                </div>
                <div class="palette ss-bg-grey-lt">
                    <div>#f5f5f5</div>
                    <div>grey-lt</div>
                </div>
                <div class="palette ss-bg-grey">
                    <div>#696969</div>
                    <div>grey</div>
                </div>
                <div class="palette ss-bg-grey-bl">
                    <div>#606a76</div>
                    <div>grey-bl</div>
                </div>

            </div>
        </div>
{{----------------- Кнопки-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Buttons</h3>
            <div class="demo-block__row">
                @include('inc.components.button', ['classBtn'=>'default', 'path'=>'#', 'nameBtn'=>'default'])
                @include('inc.components.button', ['classBtn'=>'default btn--search', 'path'=>'#', 'nameBtn'=>'поиск'])
                @include('inc.components.button', ['classBtn'=>'default btn--log', 'path'=>'#', 'nameBtn'=>'вход'])
                @include('inc.components.button', ['classBtn'=>'default btn--call', 'path'=>'#', 'nameBtn'=>'перезвонить мне'])
                @include('inc.components.button', ['classBtn'=>'filter', 'path'=>'#', 'nameBtn'=>'Очистить фильтр'])
                @include('inc.components.button', ['classBtn'=>'filter filter--red', 'path'=>'#', 'nameBtn'=>'Очистить фильтр'])
                @include('inc.components.button', ['classBtn'=>'option', 'path'=>'#', 'nameBtn'=>'Применить фильтр'])
                @include('inc.components.button', ['classBtn'=>'option btn--cart', 'path'=>'#', 'nameBtn'=>'купить товар'])
                @include('inc.components.button', ['classBtn'=>'success', 'path'=>'#', 'nameBtn'=>'success'])
                @include('inc.components.button', ['classBtn'=>'error', 'path'=>'#', 'nameBtn'=>'error'])
                @include('inc.components.button', ['classBtn'=>'warning', 'path'=>'#', 'nameBtn'=>'warning'])
                @include('inc.components.button', ['classBtn'=>'info', 'path'=>'#', 'nameBtn'=>'info'])

            </div>
        </div>
{{----------------- Навигация-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Navigation menu</h3>
            <div class="demo-block__row">
                @include('inc.components.nav-menu', ['ulClass'=>'nav-header ss-grid ss-line-h-m ss-bg-grey',
                                                     'liClass'=>'ss-marg-med-r',
                                                     'linkClass'=>'',
                                                     'data' => [
                                                                    ['link' => '/', 'title' => 'главная'],
                                                                    ['link' => '/contacts', 'title' => 'о компании'],
                                                                    ['link' => '#', 'title' => 'ссылка 1'],
                                                                    ['link' => '#', 'title' => 'ссылка 2'],
                                                                    ['link' => '#', 'title' => 'ссылка 3']
                                                               ]
                                                     ])
                @include('inc.components.option-menu', [])

        </div>
{{--------------------------Логотип---------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Logo</h3>
            <div class="demo-block__row">
                @include("inc.components.logo", ['img' => '/images/service-img/logo-yellow.png'])
                @include("inc.components.logo", ['img' => '/images/service-img/logo-grey.png'])
            </div>
        </div>
{{-----------------------------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Buttons</h3>
            <div class="demo-block__row">

            </div>
        </div>
    </div>
@endsection
