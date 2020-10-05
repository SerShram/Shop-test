@extends('layouts.app')

@section('title-block') uiKit @endsection
@section('content')
    <div class="wrapper">
        <h1>Basic elements</h1>
{{----------------- Паллитра-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Color Swatches of background</h3>
            <div class="demo-block__row">
                <div class="palette Bg-white">
                    <div>#ffffff</div>
                    <div>Bg-white</div>
                </div>
               <div class="palette Bg-orange">
                   <div>#ff8900</div>
                   <div>Bg-orange</div>
               </div>
                <div class="palette Bg-dark-orange">
                    <div>#db7200</div>
                    <div>Bg-dark-orange</div>
                </div>
                <div class="palette Bg-grey-lt">
                    <div>#f5f5f5</div>
                    <div>Bg-grey-lt</div>
                </div>
                <div class="palette Bg-grey-ul">
                    <div>#efefef</div>
                    <div>Bg-grey-ul</div>
                </div>
                <div class="palette Bg-grey">
                    <div>#696969</div>
                    <div>Bg-grey</div>
                </div>
                <div class="palette Bg-grey-bl">
                    <div>#606a76</div>
                    <div>Bg-grey-bl</div>
                </div>
                <div class="palette Bg-yellow">
                    <div>#ffc925</div>
                    <div>Bg-yellow</div>
                </div>
                <div class="palette Bg-yellow-lt">
                    <div>#fffedb</div>
                    <div>Bg-yellow-lt</div>
                </div>
            </div>
        </div>
        <div class="demo-block">
            <h3 class="demo-block__title">Color Swatches of text</h3>
            <div class="demo-block__row">
                <div class="palette palette-text ss-C-0">
                    <div>#ffffff</div>
                    <div>$white</div>
                    <div>C-0</div>
                </div>
                <div class="palette palette-text ss-C-1">
                    <div>#cbcbcb</div>
                    <div>$block-linc</div>
                    <div>C-1</div>
                </div>
                <div class="palette palette-text ss-C-2">
                    <div>#c3c3c3</div>
                    <div>$linc-nav</div>
                    <div>C-2</div>
                </div>
                <div class="palette palette-text ss-C-3">
                    <div>#abafb5</div>
                    <div>$linc-option-nav</div>
                    <div>C-3</div>
                </div>
                <div class="palette palette-text ss-C-4">
                    <div>#929292</div>
                    <div>$text-input-search</div>
                    <div>C-4</div>
                </div>
                <div class="palette palette-text ss-C-5">
                    <div>#616161</div>
                    <div>$text-select-search</div>
                    <div>C-5</div>
                </div>
                <div class="palette palette-text ss-C-6">
                    <div>#3b3b3b</div>
                    <div>$text-color</div>
                    <div>C-6</div>
                </div>
                <div class="palette palette-text ss-C-7">
                    <div>#151515</div>
                    <div>$phone-color</div>
                    <div>C-7</div>
                </div>
                <div class="palette palette-text ss-C-8">
                    <div>#a0a9b2</div>
                    <div>$copyrith</div>
                    <div>C-8</div>
                </div>
                <div class="palette palette-text ss-C-9">
                    <div>#848484</div>
                    <div>$text-label</div>
                    <div>C-9</div>
                </div>
                <div class="palette palette-text ss-C-10">
                    <div>#9b9b9b</div>
                    <div>$text-comment</div>
                    <div>C-10</div>
                </div>
                <div class="palette palette-text ss-C-11">
                    <div>#757575</div>
                    <div>$text-in-stock</div>
                    <div>C-11</div>
                </div>
                <div class="palette palette-text ss-C-12">
                    <div>#9c9c9c</div>
                    <div>$text-placholder</div>
                    <div>C-12</div>
                </div>
            </div>
        </div>
{{----------------- Кнопки-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Buttons</h3>
            <div class="demo-block__row">
                @include('inc.components.button', ['classBtn'=>'default R16-bup', 'path'=>'#', 'nameBtn'=>'default'])
                @include('inc.components.button', ['classBtn'=>'search R16-bup', 'path'=>'#', 'nameBtn'=>'поиск'])
                @include('inc.components.button', ['classBtn'=>'login R12-up', 'path'=>'#', 'nameBtn'=>'вход'])
                @include('inc.components.button', ['classBtn'=>'call R14', 'path'=>'#', 'nameBtn'=>'Перезвоните мне'])
                @include('inc.components.button', ['classBtn'=>'call call--me R12-up', 'path'=>'#', 'nameBtn'=>'перезвонить мне'])
                @include('inc.components.button', ['classBtn'=>'filter', 'path'=>'#', 'nameBtn'=>'Очистить фильтр'])
                @include('inc.components.button', ['classBtn'=>'filter filter--red', 'path'=>'#', 'nameBtn'=>'Очистить фильтр'])
                @include('inc.components.button', ['classBtn'=>'option R14-bup', 'path'=>'#', 'nameBtn'=>'Применить фильтр'])
                @include('inc.components.button', ['classBtn'=>'buy R14-bup', 'path'=>'#', 'nameBtn'=>'купить товар'])
                @include('inc.components.button', ['classBtn'=>'message', 'path'=>'#', 'nameBtn'=>'Отправить сообщение'])
                @include('inc.components.button', ['classBtn'=>'success', 'path'=>'#', 'nameBtn'=>'success'])
                @include('inc.components.button', ['classBtn'=>'error', 'path'=>'#', 'nameBtn'=>'error'])
                @include('inc.components.button', ['classBtn'=>'warning', 'path'=>'#', 'nameBtn'=>'warning'])
                @include('inc.components.button', ['classBtn'=>'info', 'path'=>'#', 'nameBtn'=>'info'])
                @include('inc.components.button', ['classBtn'=>'menu R20-b', 'path'=>'#', 'nameBtn'=>'Меню'])
                @include('inc.components.button', ['classBtn'=>'tab R14', 'path'=>'#', 'nameBtn'=>'Tab 1'])
                @include('inc.components.button', ['classBtn'=>'tab R14 is-active', 'path'=>'#', 'nameBtn'=>'Tab 2'])
            </div>
        </div>
{{----------------- Навигация-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Navigation menu</h3>
            <div class="demo-block__row">
                @include('inc.components.nav-menu', ['ulClass'=>'nav-header Grid Lh-m Bg-grey',
'liClass' => 'nav-header__item Mr-m R12-up',
'linkClass' => 'nav-header__link',
'data' => [
    ['link' => '/', 'title' => 'главная'],
    ['link' => '/contacts', 'title' => 'о компании'],
    ['link' => '#', 'title' => 'ссылка 1'],
    ['link' => '#', 'title' => 'ссылка 2'],
    ['link' => '#', 'title' => 'ссылка 3']
    ]
    ])
            </div>
        </div>
{{--------------Form elements---------------------------------------}}
        <div class="demo-block">
            <h2 class="demo-block__title">Form elements</h2>
            <h3>Selects</h3>
            <div class="demo-block__row Bg-grey">
                @include('inc.components.forms.form-component.select', [
    'classDecor' => 'form-search__decor',
    'name' => '',
    'class' => 'form-search__select R14',
    'optValue' => '',
    'optText' => 'Все категории',
    'options' => [
        ['value' => '', 'text' => 'Категория']
    ]
])
                @include('inc.components.forms.form-component.select', [
    'classDecor'  => '',
    'class'       => '',
    'name'        => 'name',
    'optValue'    => '',
    'optText'     => 'Select 1',
    'options'     => [
        ['value' => '', 'text' => 'Select 2'],
        ['value' => '', 'text' => 'Select 3'],
        ['value' => '', 'text' => 'Select 4']
    ]
])
                @include('inc.components.forms.form-component.select', [
    'classDecor'  => 'form-option__decor-price',
    'class'       => 'form-option__select select--price R14 C-10',
    'name'        => 'name',
    'optValue'    => '',
    'optText'     => '50',
    'options'     => [
           ['value' => '', 'text' => '100']
     ]
])
            </div>
            <h3>Input</h3>
            <div class="demo-block__row Bg-grey">
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-search__input R14 Bg-grey-lt',
                                                         'type' => 'search',
                                                         'name' => '',
                                                         'placeholder' => 'Поиск по сайту'
                                                         ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-mailing__input R14 Bg-grey-lt',
                                                         'type' => 'email',
                                                         'name' => '',
                                                         'placeholder' => 'Укажите свой email для подписки'
                                                         ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P14 Bg-grey-lt',
                                                         'type' => 'text',
                                                         'name' => '',
                                                         'placeholder' => 'Михаил'
                                                        ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P14 Bg-grey-lt error',
                                                       'type' => 'text',
                                                       'name' => '',
                                                       'placeholder' => 'Михаил'
                                                      ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P14 Bg-grey-lt',
                                                         'type' => 'email',
                                                         'name' => '',
                                                         'placeholder' => 'mikel87@gmail.com'
                                                        ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P14 Bg-grey-lt error',
                                                        'type' => 'email',
                                                        'name' => '',
                                                        'placeholder' => 'mikel87@gmail.com'
                                                       ])

                @include('inc.components.forms.form-component.textarea', [ 'class' => 'form-feedback__area P14 Bg-grey-lt',
                                                         'name' => 'text',
                                                         'placeholder' => 'Оставьте свой отзыв'
                                                        ])
                @include('inc.components.forms.form-component.textarea', [ 'class' => 'form-feedback__area P14 Bg-grey-lt error',
                                                            'name' => 'text',
                                                            'placeholder' => 'Оставьте свой отзыв'
                                                ])
            </div>

            <h3>Checkbox</h3>
            <div class="demo-block__row">
                @include('inc.components.forms.form-component.checkbox',
[
'type' => 'checkbox',
'classInp' => 'checkbox__inp',
'attribute' => '',
'classSpan' => 'checkbox__text P-14',
'text' => 'Text name'
])
                @include('inc.components.forms.form-component.range')
            </div>
        </div>
{{--------------------Image---------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Service Image </h3>
            <div class="demo-block__row Bg-grey-lt">
                @include("inc.components.image-decor", ['img' => '/images/service-img/balance.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/basket.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/card-balance.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/card-car.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/card-new.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/card-quality.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/card-sun.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/quality.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/star.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/star-grey.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/cross-red.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/plus.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/arrow-bottom.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/arrow-bottom-grey.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/arrow-right.png'])
                @include("inc.components.image-decor", ['img' => '/images/service-img/arrow-right-orange.png'])
                <div class="demo-block__row Bg-orange">
                    @include("inc.components.image-decor", ['img' => '/images/service-img/burger.png'])
                    @include("inc.components.image-decor", ['img' => '/images/service-img/carriage.png'])
                    @include("inc.components.image-decor", ['img' => '/images/service-img/phone.png'])
                    @include("inc.components.image-decor", ['img' => '/images/service-img/user.png'])
                    @include("inc.components.image-decor", ['img' => '/images/service-img/cross-small.png'])
                </div>
                @include("inc.components.image-decor", ['img' => '/images/card-image/badge-1.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/badge-2.png'])
                @include("inc.components.image-decor", ['img' => '/images/card-image/badge-3.png'])
            </div>
        </div>
{{-------------------Sprite----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Sprite</h3>
            <div class="demo-block__row">
                @include("inc.components.image-decor",['img' => '/images/sprites/spritesheet.png'])
            </div>
        </div>
{{-----------------Socials------------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Socials</h3>
            <div class="demo-block__row Bg-grey">
                @include("inc.components.socials",[
                        'class' => 'socials',
                        'classItem' => 'socials__item',
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
            <h3 class="Bg-grey-lt Lh-l">Roboto</h3>
            <div class="demo-block__row typography-block">
                <div><b>R36</b> --- (Roboto Regular 36px)</div>
                <div class="R36">Карточки товаров</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R26-up</b> --- (Roboto Black 26px)</div>
                <div class="R26-up">Подписывайтесь на рассылку</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R26-bl-up</b> --- (Roboto Black 26px)</div>
                <div class="R26-bl-up">Подписывайтесь на рассылку</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R26-i</b> --- (Roboto Black 26px)</div>
                <div class="R26-i">Card price</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R24-b</b> --- (Roboto Bold 24px)</div>
                <div class="R24-b">Form title</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R20-b</b> --- (Roboto Bold 20px)</div>
                <div class="R20-b">Card price</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R20-bup</b> --- (Roboto Bold 20px)</div>
                <div class="R20-bup">Будьте в курсе новостей и новинок!</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R20-m</b> --- (Roboto Medium 20px)</div>
                <div class="R20-m">Блок 1 Блок 2 Блок 3</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R18-b</b> --- (Roboto Bold 18px)</div>
                <div class="R18-b">Ссылка 1 Ссылка 2</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R17</b> --- (Roboto Regular 17px)</div>
                <div class="R17">Card description</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R16-bup</b> --- (Roboto Bold 16px)</div>
                <div class="R16-bup">ссылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R16-b</b> --- (Roboto Bold 16px)</div>
                <div class="R16-b">Cсылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R16-bi</b> --- (Roboto Bold Italic 16px)</div>
                <div class="R16-bi">+380 98 170 00 740  +380 98 170 00 740</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R16-bli</b> --- (Roboto Black Italic 16px)</div>
                <div class="R16-bli">1 250 грн.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R14</b> --- (Roboto Regular 14px)</div>
                <div class="R14">Tab Select</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R14-bup</b> --- (Roboto Bold 14px)</div>
                <div class="R14-bup">ссылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R14-l</b> --- (Roboto Light 14px)</div>
                <div class="R14-l">Mark Fosser</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R13</b> --- (Roboto Regular 13px)</div>
                <div class="R13">Отзывы (10) Без отзывов</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R12</b> --- (Roboto Regular 12px)</div>
                <div class="R12">&copy Copyrith 2017. В наличии: 24 шт.</div>
            </div>
            <div class="demo-block__row typography-block">
                <div><b>R12-up</b> --- (Roboto Regular 12px)</div>
                <div class="R12-up">главная</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R10-up</b> --- (Roboto Regular 10px)</div>
                <div class="R10-up">сравнение избранное корзина</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R10-bup</b> --- (Roboto Bold 10px)</div>
                <div class="R10-bup">сравнение избранное корзина</div>
            </div>
            <hr>
{{--------------ProximaNova-----------------------------------------------------}}
            <h3 class="Bg-grey-lt Lh-l">ProximaNova</h3>
            <div class="demo-block__row typography-block">
                <div><b>P36-b</b> --- (Roboto bold 36px)</div>
                <div class="P36-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P30-b</b> --- (Roboto bold 30px)</div>
                <div class="P30-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P30-b</b> --- (Roboto bold 30px)</div>
                <div class="P30-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P17</b> --- (ProximaNova Regular 17px)</div>
                <div class="P17">Антифриз Fosser Antifreeze</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P14</b> --- (ProximaNova Regular 14px)</div>
                <div class="P14">04655 Украина,  г. Киев</div>
            </div>
            <hr>
{{-----------------Europe-----------------------------------------------------}}
            <h3 class="Bg-grey-lt Lh-l">Europe</h3>
            <div class="demo-block__row typography-block">
                <div><b>E26-bi</b> --- (Europe bold 26px)</div>
                <div class="E26-bi">9 570 грн.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>E20-bi</b> --- (Europe bold 20px)</div>
                <div class="E20-bi">+380 98 170 00 740</div>
            </div>
            <hr>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="/assets/nouislider/nouislider.js"></script>
@endpush
