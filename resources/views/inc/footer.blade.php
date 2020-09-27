<div class="footer Bg-grey Py-m">
    <div class="wrapper">
        <div class="row">
            <div class="Pr-xl col-lg-6 col-12 ">
                <div class="footer__title R20-m C-1 Mb">
                    <span class="footer__title-decor">Блок 1</span>
                </div>
@include('inc.components.forms.form-mailing', [
'title' => 'Будьте в курсе новостей и новинок!',
'subtitle' => 'Подписывайтесь на рассылку'])
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer__title R20-m C-1 Mb">
                            <span class="footer__title-decor">Блок ссылок 1</span>
                        </div>
                        @include('inc.components.links', [
    'class' => 'footer__link R13 C-0',
    'data' => [
        ['href' => '#', 'text' => 'Ссылка 1'],
        ['href' => '#', 'text' => 'Ссылка 2'],
        ['href' => '#', 'text' => 'Ссылка 3'],
        ['href' => '#', 'text' => 'Ссылка 4']
    ]
])
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__title R20-m C-1 Mb">
                            <span class="footer__title-decor">Блок 2</span>
                        </div>
                        @include('inc.components.links', [
'class' => 'footer__link R13 C-0',
'data' => [
['href' => '#', 'text' => 'Ссылка 1'],
['href' => '#', 'text' => 'Ссылка 2'],
['href' => '#', 'text' => 'Ссылка 3'],
['href' => '#', 'text' => 'Ссылка 4']
]
])
                    </div>
                    <div class="col-sm-4">
                        <div class="footer__title R20-m C-1 Mb">
                            <span class="footer__title-decor">Блок ссылок 3</span>
                        </div>
                        @include('inc.components.links', [
'class' => 'footer__link R13 C-0',
'data' => [
['href' => '#', 'text' => 'Ссылка 1'],
['href' => '#', 'text' => 'Ссылка 2'],
['href' => '#', 'text' => 'Ссылка 3'],
['href' => '#', 'text' => 'Ссылка 4']
]
])
                    </div>
                </div>
            </div>
        </div>
        <hr class="My">
        <div class="row">
            <div class="col-lg-6">
@include("inc.components.image-link", [
    'class' => 'logo-grey',
    'href' => '#',
    'classImage' => 'logo-grey__image',
    'src' => '/images/service-img/logo-grey.png',
    'classSpan' => 'logo-grey__text R-12 C-8',
    'text' => '&copy Copyrith 2017. Тестовое задание Wezom'
])
            </div>
            <div class="col-lg-6 col-12">
                <div class="footer__socials">
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
@include('inc.components.wezom')
                </div>
            </div>
        </div>
    </div>
</div>
