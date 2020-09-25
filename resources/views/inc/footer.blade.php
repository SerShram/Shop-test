<div class="footer Bg-grey Py-m">
    <div class="wrapper">
        <div class="row">
            <div class="col-xxl-6">
                <div class="footer__container">
                    <div class="footer__title R20-m C-1 Mb">
                        <span class="footer__title-decor">Блок 1</span>
                    </div>
                    @include('inc.components.forms.form-mailing', [
                        'title' => 'Будьте в курсе новостей и новинок!',
                        'subtitle' => 'Подписывайтесь на рассылку'
])
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="row">
                    <div class="col-xxl-4">
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
                    <div class="col-xxl-4">
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
                    <div class="col-xxl-4">
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

    </div>
</div>
