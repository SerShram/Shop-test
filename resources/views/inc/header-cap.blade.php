<div class="header-cap Bg-grey Mb-l Mb-m Mb">
    <div class="wrapper">
        <div class="header-cap__container">
            @include('inc.components.nav-menu', [
'ulClass'=>'nav-header',
'liClass'=>'nav-header__item Mr-l Mr-m R12-up',
'linkClass'=>'nav-header__link',
'data' => [
  ['link' => '/', 'title' => 'главная'],
  ['link' => route('categories'), 'title' => 'о компании'],
  ['link' => route('catalog'), 'title' => 'каталог'],
  ['link' => '#', 'title' => 'ссылка 2'],
  ['link' => '#', 'title' => 'ссылка 3']
]
])
            @include('inc.components.button', [
        'classBtn'=>'login R12-up form-enter-popup-modal',
        'path'=>'#enter-popup',
        'nameBtn'=>'вход'
    ])
        </div>
    </div>
</div>
@include('inc.components.forms.form-enter')

