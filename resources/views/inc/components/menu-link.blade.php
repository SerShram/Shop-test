@php
$links = [
    ['href' => '#', 'title' => 'ссылка 1'],
    ['href' => '#', 'title' => 'ссылка 2'],
    ['href' => '#', 'title' => 'ссылка 3'],
    ['href' => '#', 'title' => 'ссылка 4'],
    ['href' => '#', 'title' => 'ссылка 5'],
    ['href' => '#', 'title' => 'ссылка 6'],
    ['href' => '#', 'title' => 'ссылка 7']
];
@endphp
<ul class="menu">
    <li class="menu__item">
        @include('inc.components.button', ['classBtn'=>'menu R20-b js-btn-menu', 'path'=>'#', 'nameBtn'=>'Меню'])
        <ul class="submenu Bg-white">
            @foreach($links as $link)
                <li class="submenu__item">
                    <a href="{{ $link['href'] }}" class="submenu__link R16-bup C-6">{{ $link['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
