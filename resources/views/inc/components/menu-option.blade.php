@php
$links = [
    ['href'=>'#', 'imgClass'=>'img--car', 'title'=>'Ссылка 1'],
    ['href'=>'#', 'imgClass'=>'img--track', 'title'=>'Ссылка 2'],
    ['href'=>'#', 'imgClass'=>'img--tyre', 'title'=>'Ссылка 3'],
    ['href'=>'#', 'imgClass'=>'img--flask', 'title'=>'Ссылка 4'],
    ['href'=>'#', 'imgClass'=>'img--battery', 'title'=>'Ссылка 5']
]
@endphp
<div class="menu-option Bg-grey Mb-m Mb-s">
    <div class="menu-option__header Bg-grey-bl">
    @foreach($links as $link)
        <a href="{{ $link['href'] }}" class="menu-option__header-link R18-b C-3">
            <span class="menu-option__header-img {{ $link['imgClass'] }}"></span>
            <span class="menu-option__header-text">{{ $link['title'] }}</span>
        </a>
    @endforeach
    </div>
    <div class="menu-option__body Py-m Px Py">
        @include('inc.components.forms.form-option')
    </div>
</div>
