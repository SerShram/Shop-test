@php
$balance = 0;
$quality = 0;
$basket  = 5;
@endphp
<div class="counter">
    <a class="counter__item Px-l Px" href="#">
        <img src="/images/service-img/balance.png" alt="">
        <span class="counter__title R10-up C-6">сравнение</span>
        @if($balance)
            <span class="counter__quantity R11 C-0 Bg-orange">{{ $balance }}</span>
        @endif
    </a>
    <a class="counter__item Px-l Px" href="#">
        <img src="/images/service-img/quality.png" alt="">
        <span class="counter__title R10-up C-6">избранное</span>
        @if($quality)
            <span class="counter__quantity R11 C-0 Bg-orange">{{ $quality }}</span>
        @endif
    </a>
    <a class="counter__item Px-l Px" href="#">
        <img src="/images/service-img/basket.png" alt="">
        <span class="counter__title R10-up C-6">корзина</span>
        @if($basket)
            <span class="counter__quantity R11 C-0 Bg-orange">{{ $basket }}</span>
        @endif
    </a>
</div>
