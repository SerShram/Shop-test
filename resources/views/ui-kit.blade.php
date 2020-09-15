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
                @include("inc.components.option-menu",
                        ['opMenuClass'   => 'option-menu ss-line-h-xl ss-bg-grey-bl',
                         'linkClass'     => 'option-menu__link ss-marg-r',
                         'spanClass_1'   => 'option-menu__img ss-marg-small-r ss-marg-small-l',
                         'spanClass_2'   => 'option-menu__text',
                         'data' => [
                            ['link'=>'#', 'imgClass'=>'img--car', 'text'=>'Ссылка 1'],
                            ['link'=>'#', 'imgClass'=>'img--track', 'text'=>'Ссылка 2'],
                            ['link'=>'#', 'imgClass'=>'img--tyre', 'text'=>'Ссылка 3'],
                            ['link'=>'#', 'imgClass'=>'img--flask', 'text'=>'Ссылка 4'],
                            ['link'=>'#', 'imgClass'=>'img--battery', 'text'=>'Ссылка 5'],
                        ]])
            </div>
        </div>
{{--------------Select---------------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Select</h3>
            <div class="demo-block__row ss-bg-grey">
                @include('inc.components.select', ['name' => 'name',
                                                   'class' => 'option-select ss-roboto-14',
                                                   'optValue' => '',
                                                   'optText' => 'Select 1',
                                                   'options' => [
                                                       ['value' => '', 'text' => 'Select 2'],
                                                       ['value' => '', 'text' => 'Select 3'],
                                                       ['value' => '', 'text' => 'Select 4']
                                                    ]
                ])
            </div>
        </div>
{{----------------- Ссылки-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Links</h3>
            <div class="demo-block__row">

            </div>
        </div>
{{--------------------------Логотип---------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Logo</h3>
            <div class="demo-block__row">
                @include("inc.components.logo", ['img' => '/images/service-img/logo-yellow.png'])
                @include("inc.components.logo", ['img' => '/images/service-img/logo-grey.png'])
            </div>
        </div>
{{--------------------Image---------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Service Image </h3>
            <div class="demo-block__row">
                @include("inc.components.image", ['img' => '/images/service-img/balance.png'])
                @include("inc.components.image", ['img' => '/images/service-img/basket.png'])
                @include("inc.components.image", ['img' => '/images/service-img/card-balance.png'])
                @include("inc.components.image", ['img' => '/images/service-img/card-car.png'])
                @include("inc.components.image", ['img' => '/images/service-img/card-new.png'])
                @include("inc.components.image", ['img' => '/images/service-img/card-quality.png'])
                @include("inc.components.image", ['img' => '/images/service-img/cart-sun.png'])
                @include("inc.components.image", ['img' => '/images/service-img/quality.png'])
                @include("inc.components.image", ['img' => '/images/service-img/star.png'])
                @include("inc.components.image", ['img' => '/images/service-img/star-grey.png'])
            </div>
        </div>
{{-------------------Sprite----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Sprite</h3>
            <div class="demo-block__row">
                @include("inc.components.image",['img' => '/images/service-img/sprite/spritesheet.png'])
            </div>
        </div>
{{-----------------Socials------------------------------------}}
        <div class="demo-block ss-bg-grey">
            <h3 class="demo-block__title">Socials</h3>
            <div class="demo-block__row">
                @include("inc.components.socials",[
                        'class' => 'socials ss-grid',
                        'classItem' => 'socials__item ss-marg-small-r',
                        'modifiers' => [
                                    ['link' => '#', 'modifier' => 'item--vk'],
                                    ['link' => '#', 'modifier' => 'item--fb'],
                                    ['link' => '#', 'modifier' => 'item--twit'],
                                    ['link' => '#', 'modifier' => 'item--ytube']
                                 ]
                            ])
            </div>
        </div>
{{----------------------Typography-------------------------------------}}
        <div class="demo-block">
            <h2 class="demo-block__title">Typography</h2>
{{--------------Roboto-----------------------------------------------------}}
            <h3 class="ss-bg-grey-lt ss-line-h-l">Roboto</h3>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-36</b> --- (Roboto Regular 36px)</div>
                <div class="ss-roboto-36">Карточки товаров</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-26-up</b> --- (Roboto Black 26px)</div>
                <div class="ss-roboto-26-up">Подписывайтесь на рассылку</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-26-i</b> --- (Roboto Black 26px)</div>
                <div class="ss-roboto-26-i">Card price</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-20-b</b> --- (Roboto Bold 20px)</div>
                <div class="ss-roboto-26-b">Card price</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-18-b</b> --- (Roboto Bold 18px)</div>
                <div class="ss-roboto-18-b">Ссылка 1 Ссылка 2</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-17</b> --- (Roboto Regular 17px)</div>
                <div class="ss-roboto-17">Card description</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-16-b-up</b> --- (Roboto Bold 16px)</div>
                <div class="ss-roboto-16-b-up">ссылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-16-b-i</b> --- (Roboto Bold Italic 16px)</div>
                <div class="ss-roboto-16-b-i">+380 98 170 00 740  +380 98 170 00 740</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-16-bl-i</b> --- (Roboto Black Italic 16px)</div>
                <div class="ss-roboto-16-bl-i">1 250 грн.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-14</b> --- (Roboto Regular 14px)</div>
                <div class="ss-roboto-14">Tab Select</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-14-b-up</b> --- (Roboto Bold 14px)</div>
                <div class="ss-roboto-14-b-up">ссылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-13</b> --- (Roboto Regular 13px)</div>
                <div class="ss-roboto-13">Отзывы (10) Без отзывов</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-12</b> --- (Roboto Regular 12px)</div>
                <div class="ss-roboto-12">© Copyrith 2017. В наличии: 24 шт.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-roboto-10-b-up</b> --- (Roboto Bold 10px)</div>
                <div class="ss-roboto-10-b-up">сравнение избранное корзина</div>
            </div>
            <hr>
{{--------------ProximaNova-----------------------------------------------------}}
            <h3 class="ss-bg-grey-lt ss-line-h-l">ProximaNova</h3>
            <div class="demo-block__row typography-block">
                <div><b>ss-proxN-36-b</b> --- (Roboto bold 36px)</div>
                <div class="ss-proxN-36-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-proxN-30-b</b> --- (Roboto bold 30px)</div>
                <div class="ss-proxN-30-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-proxN-30-b</b> --- (Roboto bold 30px)</div>
                <div class="ss-proxN-30-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-proxN-17</b> --- (ProximaNova Regular 17px)</div>
                <div class="ss-proxN-17">Антифриз Fosser Antifreeze</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-proxN-14</b> --- (ProximaNova Regular 14px)</div>
                <div class="ss-proxN-14">04655 Украина,  г. Киев</div>
            </div>
            <hr>
{{-----------------Europe-----------------------------------------------------}}
            <h3 class="ss-bg-grey-lt ss-line-h-l">Europe</h3>
            <div class="demo-block__row typography-block">
                <div><b>ss-eur-26-b-i</b> --- (Europe bold 26px)</div>
                <div class="ss-eur-26-b-i">9 570 грн.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>ss-eur-20-b-i</b> --- (Europe bold 20px)</div>
                <div class="ss-eur-20-b-i">+380 98 170 00 740</div>
            </div>
            <hr>
        </div>
{{-----------------------------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Typography</h3>
            <div class="demo-block__row">

            </div>
        </div>
{{-----------------------------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Typography</h3>
            <div class="demo-block__row">

            </div>
        </div>
    </div>
@endsection
