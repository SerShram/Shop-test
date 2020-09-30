<div class="header-cap Bg-grey Mb-l Mb-m Mb">
    <div class="wrapper">
        <div class="header-cap__container">
            @include('inc.components.nav-menu', [
'ulClass'=>'nav-header',
'liClass'=>'nav-header__item Mr-l Mr-m R12-up',
'linkClass'=>'nav-header__link',
'data' => [
  ['link' => '/', 'title' => 'главная'],
  ['link' => '/contacts', 'title' => 'о компании'],
  ['link' => '#', 'title' => 'ссылка 1'],
  ['link' => '#', 'title' => 'ссылка 2'],
  ['link' => '#', 'title' => 'ссылка 3']
]
])
            @include('inc.components.button', [
        'classBtn'=>'login R12-up',
        'path'=>'#',
        'nameBtn'=>'вход'
    ])
        </div>
    </div>
</div>
