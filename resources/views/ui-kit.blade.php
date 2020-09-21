@extends('layouts.app')

@section('title-block') uiKit @endsection
@section('content')
    <div class="wrapper">
        <h1>Basic elements</h1>
{{----------------- Паллитра-----------------------------------}}
        <div class="demo-block">
            <h3 class="demo-block__title">Color Swatches of background</h3>
            <div class="demo-block__row">
               <div class="palette Bg-orange">
                   <div>#ff8900</div>
                   <div>orange</div>
               </div>
                <div class="palette Bg-dark-orange">
                    <div>#db7200</div>
                    <div>dark-orange</div>
                </div>
                <div class="palette Bg-grey-lt">
                    <div>#f5f5f5</div>
                    <div>grey-lt</div>
                </div>
                <div class="palette Bg-grey">
                    <div>#696969</div>
                    <div>grey</div>
                </div>
                <div class="palette Bg-grey-bl">
                    <div>#606a76</div>
                    <div>grey-bl</div>
                </div>
                <div class="palette Bg-yellow">
                    <div>#ffc925</div>
                    <div>yellow</div>
                </div>
                <div class="palette Bg-yellow-lt">
                    <div>#fffedb</div>
                    <div>yellow-lt</div>
                </div>
            </div>
        </div>
        <div class="demo-block">
            <h3 class="demo-block__title">Color Swatches of text</h3>
            <div class="demo-block__row">
                <div class="palette Bg-orange">
                    <div>#ff8900</div>
                    <div>orange</div>
                </div>
                <div class="palette Bg-dark-orange">
                    <div>#db7200</div>
                    <div>dark-orange</div>
                </div>
                <div class="palette Bg-grey-lt">
                    <div>#f5f5f5</div>
                    <div>grey-lt</div>
                </div>
                <div class="palette Bg-grey">
                    <div>#696969</div>
                    <div>grey</div>
                </div>
                <div class="palette Bg-grey-bl">
                    <div>#606a76</div>
                    <div>grey-bl</div>
                </div>
                <div class="palette Bg-yellow">
                    <div>#ffc925</div>
                    <div>yellow</div>
                </div>
                <div class="palette Bg-yellow-lt">
                    <div>#fffedb</div>
                    <div>yellow-lt</div>
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
                @include('inc.components.button', ['classBtn'=>'feedback', 'path'=>'#', 'nameBtn'=>'Отправить сообщение'])
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
                @include('inc.components.nav-menu', ['ulClass'=>'nav-header ss-grid Lh-m Bg-grey',
                                                     'liClass'=>'Mr-m',
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
                        ['opMenuClass'   => 'option-menu Lh-xl Bg-grey-bl',
                         'linkClass'     => 'option-menu__link Mr',
                         'spanClass_1'   => 'option-menu__img Mx-s',
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
{{--------------Form elements---------------------------------------}}
        <div class="demo-block">
            <h2 class="demo-block__title">Form elements</h2>
            <h3>Selects</h3>
            <div class="demo-block__row Bg-grey">
                @include('inc.components.forms.form-component.select', [ 'classDecor' => 'form-search__decor',
                                                          'name' => '',
                                                          'class' => 'form-search__select R-14',
                                                          'optValue' => '',
                                                          'optText' => 'Все категории',
                                                          'options' => [
                                                              ['value' => '', 'text' => 'Категория']
                                                            ]
                                                          ])
                @include('inc.components.forms.form-component.select', [ 'classDecor'  => 'form-filter__decor',
                                                          'name'        => 'name',
                                                          'class'       => 'form-filter__select R-14',
                                                          'optValue'    => '',
                                                          'optText'     => 'Select 1',
                                                          'options'     => [
                                                                   ['value' => '', 'text' => 'Select 2'],
                                                                   ['value' => '', 'text' => 'Select 3'],
                                                                   ['value' => '', 'text' => 'Select 4']
                                                                 ]
                                                           ])
                @include('inc.components.forms.form-component.select', [ 'classDecor'  => 'form-filter__decor-price',
                                                          'name'        => 'name',
                                                          'class'       => 'form-filter__select select--price R-14',
                                                          'optValue'    => '',
                                                          'optText'     => '50',
                                                          'options'     => [
                                                                   ['value' => '', 'text' => '100']
                                                                 ]
                                                           ])

            </div>
            <h3>Input</h3>
            <div class="demo-block__row Bg-grey">
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-search__input R-14 Bg-grey-lt',
                                                         'type' => 'search',
                                                         'name' => '',
                                                         'placeholder' => 'Поиск по сайту'
                                                         ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-mailing__input R-14 Bg-grey-lt',
                                                         'type' => 'email',
                                                         'name' => '',
                                                         'placeholder' => 'Укажите свой email для подписки'
                                                         ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P-14 Bg-grey-lt',
                                                         'type' => 'text',
                                                         'name' => '',
                                                         'placeholder' => 'Михаил'
                                                        ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P-14 Bg-grey-lt error',
                                                       'type' => 'text',
                                                       'name' => '',
                                                       'placeholder' => 'Михаил'
                                                      ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P-14 Bg-grey-lt',
                                                         'type' => 'email',
                                                         'name' => '',
                                                         'placeholder' => 'mikel87@gmail.com'
                                                        ])
                @include('inc.components.forms.form-component.input', [ 'class' => 'form-feedback__input P-14 Bg-grey-lt error',
                                                        'type' => 'email',
                                                        'name' => '',
                                                        'placeholder' => 'mikel87@gmail.com'
                                                       ])

                @include('inc.components.forms.form-component.textarea', [ 'class' => 'form-feedback__area P-14 Bg-grey-lt',
                                                         'name' => 'text',
                                                         'placeholder' => 'Оставьте свой отзыв'
                                                        ])
                @include('inc.components.forms.form-component.textarea', [ 'class' => 'form-feedback__area P-14 Bg-grey-lt error',
                                                            'name' => 'text',
                                                            'placeholder' => 'Оставьте свой отзыв'
                                                ])
            </div>

            <h3>Checkbox</h3>
            <div class="demo-block__row">
                @include('inc.components.forms.form-component.checkbox', [
    'classLabel' => '',
    'type' => 'checkbox',
    'classInp' => 'checkbox__inp',
    'attribute' => '',
    'classSpan' => 'checkbox__text P-14',
    'text' => 'Text name'
    ])
                @include('inc.components.forms.form-component.range')
            </div>
        </div>
{{----------------- Ссылки-----------------------------------}}
    {{--    <div class="demo-block">
            <h3 class="demo-block__title">Links</h3>
            <div class="demo-block__row">
                @include('inc.components.links', [
    'path' => '#',
    'class' => '',
    'text' => 'Ссылка',
])
            </div>
        </div>--}}
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
            <div class="demo-block__row Bg-grey-lt">
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
                @include("inc.components.image", ['img' => '/images/service-img/cross-red.png'])
                @include("inc.components.image", ['img' => '/images/service-img/plus.png'])
                @include("inc.components.image", ['img' => '/images/service-img/arrow-bottom.png'])
                @include("inc.components.image", ['img' => '/images/service-img/arrow-bottom-grey.png'])
                @include("inc.components.image", ['img' => '/images/service-img/arrow-right.png'])
                @include("inc.components.image", ['img' => '/images/service-img/arrow-right-orange.png'])
                <div class="demo-block__row Bg-orange">
                    @include("inc.components.image", ['img' => '/images/service-img/burger.png'])
                    @include("inc.components.image", ['img' => '/images/service-img/carriage.png'])
                    @include("inc.components.image", ['img' => '/images/service-img/phone.png'])
                    @include("inc.components.image", ['img' => '/images/service-img/user.png'])
                    @include("inc.components.image", ['img' => '/images/service-img/cross-small.png'])
                </div>
                @include("inc.components.image", ['img' => '/images/card-image/badge-1.png'])
                @include("inc.components.image", ['img' => '/images/card-image/badge-2.png'])
                @include("inc.components.image", ['img' => '/images/card-image/badge-3.png'])
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
        <div class="demo-block">
            <h3 class="demo-block__title">Socials</h3>
            <div class="demo-block__row Bg-grey">
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
            <h3 class="Bg-grey-lt Lh-l">Roboto</h3>
            <div class="demo-block__row typography-block">
                <div><b>R-36</b> --- (Roboto Regular 36px)</div>
                <div class="R-36">Карточки товаров</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-26-up</b> --- (Roboto Black 26px)</div>
                <div class="R-26-up">Подписывайтесь на рассылку</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-26-i</b> --- (Roboto Black 26px)</div>
                <div class="R-26-i">Card price</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>title-lg</b> --- (Roboto Bold 24px)</div>
                <div class="title-lg">Form title</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-20-b</b> --- (Roboto Bold 20px)</div>
                <div class="R-26-b">Card price</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-18-b</b> --- (Roboto Bold 18px)</div>
                <div class="R-18-b">Ссылка 1 Ссылка 2</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-17</b> --- (Roboto Regular 17px)</div>
                <div class="R-17">Card description</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-16-b-up</b> --- (Roboto Bold 16px)</div>
                <div class="R-16-b-up">ссылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-16-b-i</b> --- (Roboto Bold Italic 16px)</div>
                <div class="R-16-b-i">+380 98 170 00 740  +380 98 170 00 740</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-16-bl-i</b> --- (Roboto Black Italic 16px)</div>
                <div class="R-16-bl-i">1 250 грн.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-14</b> --- (Roboto Regular 14px)</div>
                <div class="R-14">Tab Select</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-14-b-up</b> --- (Roboto Bold 14px)</div>
                <div class="R-14-b-up">ссылка</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-13</b> --- (Roboto Regular 13px)</div>
                <div class="R-13">Отзывы (10) Без отзывов</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-12</b> --- (Roboto Regular 12px)</div>
                <div class="R-12">© Copyrith 2017. В наличии: 24 шт.</div>
            </div>
            <div class="demo-block__row typography-block">
                <div><b>R-12-up</b> --- (Roboto Regular 12px)</div>
                <div class="R-12-up">главная</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>R-10-b-up</b> --- (Roboto Bold 10px)</div>
                <div class="R-10-b-up">сравнение избранное корзина</div>
            </div>
            <hr>
{{--------------ProximaNova-----------------------------------------------------}}
            <h3 class="Bg-grey-lt Lh-l">ProximaNova</h3>
            <div class="demo-block__row typography-block">
                <div><b>P-36-b</b> --- (Roboto bold 36px)</div>
                <div class="P-36-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P-30-b</b> --- (Roboto bold 30px)</div>
                <div class="P-30-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P-30-b</b> --- (Roboto bold 30px)</div>
                <div class="P-30-b">Автомобильные шины</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P-17</b> --- (ProximaNova Regular 17px)</div>
                <div class="P-17">Антифриз Fosser Antifreeze</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>P-14</b> --- (ProximaNova Regular 14px)</div>
                <div class="P-14">04655 Украина,  г. Киев</div>
            </div>
            <hr>
{{-----------------Europe-----------------------------------------------------}}
            <h3 class="Bg-grey-lt Lh-l">Europe</h3>
            <div class="demo-block__row typography-block">
                <div><b>E-26-b-i</b> --- (Europe bold 26px)</div>
                <div class="E-26-b-i">9 570 грн.</div>
            </div>
            <hr>
            <div class="demo-block__row typography-block">
                <div><b>E-20-b-i</b> --- (Europe bold 20px)</div>
                <div class="E-20-b-i">+380 98 170 00 740</div>
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

    </div>
@endsection
