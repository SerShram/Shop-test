<div class="header-top Bg-grey">
    <div class="wrapper">
        <div class="header-top__container">
            @include('inc.components.nav-menu', [
'ulClass'=>'nav-header',
'liClass'=>'nav-header__item Mr-m R-12-up',
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
        'classBtn'=>'login R-12-up',
        'path'=>'#',
        'nameBtn'=>'вход'
    ])
        </div>
    </div>
</div>
