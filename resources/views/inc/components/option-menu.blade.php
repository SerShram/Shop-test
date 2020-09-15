{{--<div class="option-menu ss-line-h-l ss-bg-grey-bl">
    <a href="#" class="option-menu__link ss-marg-r">
        <span class="option-menu__img img--car ss-marg-small-r ss-marg-small-l"></span>
        <span class="option-menu__text">Ссылка 1</span>
    </a>
    <a href="#" class="option-menu__link ss-marg-r">
        <span class="option-menu__img img--track ss-marg-small-r ss-marg-small-l"></span>
        <span class="option-menu__text">Ссылка 2</span>
    </a>
    <a href="#" class="option-menu__link ss-marg-r">
        <span class="option-menu__img img--tyre ss-marg-small-r ss-marg-small-l"></span>
        <span class="option-menu__text">Ссылка 3</span>
    </a>
    <a href="#" class="option-menu__link ss-marg-r">
        <span class="option-menu__img img--flask ss-marg-small-r ss-marg-small-l"></span>
        <span class="option-menu__text">Ссылка 4</span>
    </a>
    <a href="#" class="option-menu__link ss-marg-r">
        <span class="option-menu__img img--battery ss-marg-small-r ss-marg-small-l"></span>
        <span class="option-menu__text">Ссылка 5</span>
    </a>
</div>--}}

<div class="{{ $opMenuClass }}">
    @foreach($data as $key)
        <a href="{{ $key['link'] }}" class="option-menu__link ss-marg-r">
            <span class="{{ $spanClass_1.' '. $key['imgClass'] }}"></span>
            <span class="{{ $spanClass_2 }}">{{ $key['text'] }}</span>
        </a>
    @endforeach
</div>
